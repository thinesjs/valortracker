<?php
namespace Weedeej\AuthSpace;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;

use Weedeej\AuthSpace\Utils;

class Authentication {
    private $client;
    private $username;
    private $password;
    public $shard;
    public $remember;
    public $accessToken;
    public $idToken;
    private $ssid;
    private $clid;
    private $csid;
    private $headers;
    private $address;
    private $cp;

    public function __construct(Array $credentials = null){
        $this->client = new Client(array('curl' => [CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_3],'cookies' => true,'http_errors' => false, 'verify'=>false));
        $this->headers = [
            "Accept-Encoding" => "gzip, deflate, br",
            'Content-Type' => 'application/json',
            'User-Agent' => 'RiotClient/62.0.1.4852117.4789131 rso-auth (Windows;10;;Professional, x64)',
            'Host' => 'auth.riotgames.com',
            'Accept-Language' => 'en-US,en;q=0.9',
        ];
        $this->cp = "ew0KCSJwbGF0Zm9ybVR5cGUiOiAiUEMiLA0KCSJwbGF0Zm9ybU9TIjogIldpbmRvd3MiLA0KCSJwbGF0Zm9ybU9TVmVyc2lvbiI6ICIxMC4wLjE5MDQyLjEuMjU2LjY0Yml0IiwNCgkicGxhdGZvcm1DaGlwc2V0IjogIlVua25vd24iDQp9";
        $this->address = $this->getAddr();
        if($credentials != null){
            if(!isset($credentials["password"])){
                $this->accessToken = $credentials["username"];
                $this->shard = $credentials["shard"];
            }else{
                $this->username = $credentials["username"];
                $this->password = $credentials["password"];
                $this->shard = $credentials["shard"];
                $this->remember = true;

            }
        }
    }

    private function getAddr()
    {
//        $addrInfo = socket_addrinfo_lookup("auth.riotgames.com", 443);
//        if (!$addrInfo) throw new Exception('Failed to get Address.');
//        return socket_addrinfo_explain($addrInfo[0])["ai_addr"]["sin_addr"];
        return "auth.riotgames.com";
    }
    public function reAuth(){
        if (!isset($_COOKIE["ssid"]) ) return;
        $utils = new Utils();
        $reauth = CookieJar::fromArray([
            'ssid' => $_COOKIE["ssid"]
        ], 'auth.riotgames.com');

        $authResponse = $this->client->request("GET","https://auth.riotgames.com/authorize?redirect_uri=https%3A%2F%2Fplayvalorant.com%2Fopt_in&client_id=play-valorant-web-prod&response_type=token%20id_token&nonce=1&scope=account%20openid", ["cookies"=>$reauth, "allow_redirects"=>false]);
        $location = $authResponse->getHeader("location")[0];
        $this->accessToken = $utils->getBetween("access_token=","&scope",$location);
        $this->idToken = $utils->getBetween("id_token=","&token_type",$location);
        $this->shard = $this->getRegion($this->accessToken);
        $entitlement = $this->getEntitlements($this->accessToken);

        session(['accessToken' => $this->accessToken]);
        session(['entitlements_token' => $entitlement]);
        session(['shard' => $this->shard]);

        return array("accessToken"=>$this->accessToken,
                    "entitlements_token"=>$entitlement,);
    }

    public function collectCookies(){
        $jar = new CookieJar();
        $addr = $this->address;
        $postData = json_decode('{"client_id": "play-valorant-web-prod","nonce": "1","redirect_uri": "https://playvalorant.com/opt_in","response_type": "token id_token","scope": "account openid"}');
        $this->client->request("POST", "https://$addr/api/v1/authorization", ["json"=>$postData, "cookies"=>$jar, "headers"=>$this->headers]);
        return $jar;
    }

    public function authUser(){
        $session = $this->collectCookies();
        $utils = new Utils();
        $addr = $this->address;

        $postData = json_decode('{"type":"auth", "username":"'.$this->username.'", "password":"'.$this->password.'", "remember":'.json_encode($this->remember).'}');
        $response = $this->client->request("PUT","https://$addr/api/v1/authorization",["json"=>$postData, "cookies"=>$session, "headers"=>$this->headers]);
        if(isset(json_decode((string) $response->getBody(),true)["error"])) return json_decode((string) $response->getBody());
        if (json_decode((string)$response->getBody())->type == "multifactor")
        {
            setcookie("asid",$session->getCookieByName("asid")->getValue(),$session->getCookieByName("asid")->getExpires(), "/");

            return "2FA";
        }
        //2FA
        if($this->remember){
            setcookie("csid",$session->getCookieByName("csid")->getValue(),$session->getCookieByName("csid")->getExpires(), "/");
            setcookie("clid",$session->getCookieByName("clid")->getValue(),$session->getCookieByName("clid")->getExpires(), "/");
            setcookie("ssid",$session->getCookieByName("ssid")->getValue(),$session->getCookieByName("ssid")->getExpires(), "/");
            setcookie("shard",$this->shard,$session->getCookieByName("ssid")->getExpires(), "/");
            $this->ssid = $session->getCookieByName("ssid")->getValue();
            $this->csid = $session->getCookieByName("csid")->getValue();
            $this->clid = $session->getCookieByName("clid")->getValue();
        }

        $this->accessToken = $utils->getBetween("access_token=","&scope",(string)$response->getBody());
        $this->idToken = $utils->getBetween("id_token=","&token_type",(string)$response->getBody());
        //dd(json_decode((string)$response->getBody()));
        return $this->accessToken;
    }

    public function start2FA($code)
    {
        $cookieJar = CookieJar::fromArray([
            'asid' => $_COOKIE['asid']
        ], 'auth.riotgames.com');

        $utils = new Utils();
        $addr = $this->address;
        $putData = json_decode('{"type":"multifactor", "code":"'.$code.'", "rememberDevice":true}');
        $mfaResponse = $this->client->request("PUT","https://auth.riotgames.com/api/v1/authorization",["json"=>$putData, "cookies"=>$cookieJar, "headers"=>$this->headers]);
        if(isset(json_decode((string) $mfaResponse->getBody(),true)["error"])) return json_decode((string) $mfaResponse->getBody());
        setcookie("ssid",$cookieJar->getCookieByName("ssid")->getValue(),$cookieJar->getCookieByName("ssid")->getExpires(), "/");
        setcookie("shard",$this->shard,$cookieJar->getCookieByName("ssid")->getExpires(), "/");
        if($this->remember){
            setcookie("csid",$cookieJar->getCookieByName("csid")->getValue(),$cookieJar->getCookieByName("csid")->getExpires(), "/");
            setcookie("clid",$cookieJar->getCookieByName("clid")->getValue(),$cookieJar->getCookieByName("clid")->getExpires(), "/");
            setcookie("ssid",$cookieJar->getCookieByName("ssid")->getValue(),$cookieJar->getCookieByName("ssid")->getExpires(), "/");
            setcookie("shard",$this->shard,$cookieJar->getCookieByName("ssid")->getExpires(), "/");
            $this->ssid = $cookieJar->getCookieByName("ssid")->getValue();
            $this->csid = $cookieJar->getCookieByName("csid")->getValue();
            $this->clid = $cookieJar->getCookieByName("clid")->getValue();
        }
        $this->accessToken = $utils->getBetween("access_token=","&scope",(string)$mfaResponse->getBody());
        $this->idToken = $utils->getBetween("id_token=","&token_type",(string)$mfaResponse->getBody());
        return $this->accessToken;
    }

    public function getEntitlements(String $accessToken){
        $postData = json_decode('{}');
        $response = $this->client->request("POST","https://entitlements.auth.riotgames.com/api/token/v1",["json"=>$postData, "headers"=>["Authorization"=>"Bearer $accessToken"]]);
        return json_decode((string)$response->getBody())->entitlements_token;
    }

    public function getRegion(String $accessToken){
        $response = $this->client->request("PUT","https://riot-geo.pas.si.riotgames.com/pas/v1/product/valorant",["json"=>['id_token' => $this->idToken], "headers"=>["Authorization"=>"Bearer $accessToken"]]);
        $this->shard = json_decode((string)$response->getBody())->affinities->live;
        return json_decode((string)$response->getBody())->affinities->live;
    }

    public function authByUsername($mfa = false, $code = 0){
        $this->collectCookies();
        if (!$mfa)
        {
            $authSession = $this->authUser();
            if ($authSession == "2FA") return "2FA";
        }else
        {
            $authSession = $this->start2FA($code);
        }
        if(isset($authSession->error)){
            if($authSession->error == "auth_failure") return "{\"error\":\"Invalid username or password\"}";
            return "{\"error\":\"".$authSession->error."\"}";
        }
        $region = $this->getRegion($this->accessToken);
        $entitlement = $this->getEntitlements($this->accessToken);
        $returnArr = array("accessToken"=>$this->accessToken,
                     "entitlements_token"=>$entitlement,
                     "shard"=>$this->shard);
        if(isset($this->ssid)){
            $returnArr["ssid"] = $this->ssid;
            $returnArr["csid"] = $this->csid;
            $returnArr["clid"] = $this->clid;
        }
        session(['accessToken' => $this->accessToken]);
        session(['entitlements_token' => $entitlement]);
        session(['shard' => $region]);
        return $returnArr;
    }

    public function authByToken(){
        $response = $this->getEntitlements($this->accessToken);
        if($response == null) return "{\"error\":\"You entered an expired or invalid token.\"}";
        return array("accessToken"=>$this->accessToken,
                     "entitlements_token"=>$response,
                     "shard"=>$this->shard);
    }


    // AUTH END //

    // DATA CONVERTERS //

    public function getWeaponName($weaponId){
        $raw = $this->client->request("GET","https://valorant-api.com/v1/weapons/skinlevels/$weaponId",["headers"=>["Authorization"=>"HDEV-920c8d78-9947-4108-9d4b-a34e0e9f9d27"]]);

        $response = json_decode((string)$raw->getBody());

        return $response;
    }

    // END DATA CONVERTERS //

    // DATA GETTERS //

    public function getPlayer($tokens){

        $postData = json_decode('{}');
        $response = $this->client->request("GET","https://auth.riotgames.com/userinfo",["json"=>$postData, "headers"=>["Authorization"=>"Bearer $this->accessToken"]]);
        $sub = json_decode((string)$response->getBody())->sub;
        $anotherResponse = $this->client->request("GET","https://pd.$this->shard.a.pvp.net/personalization/v2/players/$sub/playerloadout",["json"=>$postData, "headers"=>
            [
                "Authorization"=>"Bearer $this->accessToken",
                "X-Riot-Entitlements-JWT"=>$tokens['entitlements_token'],
            ]
        ]);

        $obj_merged = (object) array_merge((array) json_decode((string)$response->getBody()), (array) json_decode((string)$anotherResponse->getBody())->Identity);

        return $obj_merged;

    }

    public function getPlayerStore($playerId, $tokens){

        $postData = json_decode('{}');
        $raw = $this->client->request("GET","https://pd.$this->shard.a.pvp.net/store/v2/storefront/$playerId",["json"=>$postData, "headers"=>
        [
            "Authorization"=>"Bearer $this->accessToken",
            "X-Riot-Entitlements-JWT"=>$tokens['entitlements_token']
        ]]);

        $response = json_decode((string)$raw->getBody());

        $storeOffers = $response->SkinsPanelLayout->SingleItemOffers;




        return json_decode((string)$raw->getBody());
    }

    public function getPlayerMMR($playername, $tagLine){

        $response = $this->client->request("GET","https://api.henrikdev.xyz/valorant/v2/mmr/$this->shard/$playername/$tagLine",["headers"=>["Authorization"=>"HDEV-920c8d78-9947-4108-9d4b-a34e0e9f9d27"]]);

        return json_decode((string)$response->getBody());

    }

    public function getPlayerRRHistory($playerId, $tokens){

        $postData = json_decode('{}');
        $raw = $this->client->request("GET","https://pd.$this->shard.a.pvp.net/mmr/v1/players/$playerId/competitiveupdates?queue=competitive",["json"=>$postData, "headers"=>
            [
                "Authorization"=>"Bearer $this->accessToken",
                "X-Riot-Entitlements-JWT"=>$tokens['entitlements_token'],
                "X-Riot-ClientPlatform"=>$this->cp
            ]
        ]);

        return json_decode((string)$raw->getBody());
    }

    public function getPlayerEntitlements($playerId, $tokens){

        $postData = json_decode('{}');
        $raw = $this->client->request("GET","https://pd.$this->shard.a.pvp.net/personalization/v2/players/$playerId/playerloadout",["json"=>$postData, "headers"=>
            [
                "Authorization"=>"Bearer $this->accessToken",
                "X-Riot-Entitlements-JWT"=>$tokens['entitlements_token'],
            ]
        ]);

        return json_decode((string)$raw->getBody());
    }

    public function updatePlayerLoadout($playerId, $tokens, $json){

        $postData = json_decode('{}');
        $raw = $this->client->request("PUT","https://pd.$this->shard.a.pvp.net/personalization/v2/players/$playerId/playerloadout",["json"=>$json, "headers"=>
            [
                "Authorization"=>"Bearer $this->accessToken",
                "X-Riot-Entitlements-JWT"=>$tokens['entitlements_token'],
            ]
        ]);

        return json_decode((string)$raw->getBody());
    }

    public function getPlayerMatches($playerId, $tokens){

        $postData = json_decode('{}');
        $raw = $this->client->request("GET","https://pd.$this->shard.a.pvp.net/mmr/v1/players/$playerId/competitiveupdates",["json"=>$postData, "headers"=>
            [
                "Authorization"=>"Bearer $this->accessToken",
                "X-Riot-Entitlements-JWT"=>$tokens['entitlements_token'],
                "X-Riot-ClientPlatform"=>$this->cp
            ]
        ]);

        return json_decode((string)$raw->getBody());
    }

    public function getMatchDetails($playerId, $tokens, $matchId){

        $postData = json_decode('{}');
        $raw = $this->client->request("GET","https://pd.$this->shard.a.pvp.net/match-details/v1/matches/$matchId",["json"=>$postData, "headers"=>
            [
                "Authorization"=>"Bearer $this->accessToken",
                "X-Riot-Entitlements-JWT"=>$tokens['entitlements_token'],
                "X-Riot-ClientPlatform"=>$this->cp
            ]
        ]);

        return json_decode((string)$raw->getBody());
    }

    public function getMatchScore($playerId, $tokens, $matchId){

        $postData = json_decode('{}');
        $raw = $this->client->request("GET","https://pd.$this->shard.a.pvp.net/match-details/v1/matches/$matchId",["json"=>$postData, "headers"=>
            [
                "Authorization"=>"Bearer $this->accessToken",
                "X-Riot-Entitlements-JWT"=>$tokens['entitlements_token'],
                "X-Riot-ClientPlatform"=>$this->cp
            ]
        ]);

        $response = json_decode((string)$raw->getBody());

        foreach ($response->players as $player){
            if($player->subject == $playerId){
                $userTeam = $player->teamId;
                $matchScore['playerTeam'] = $userTeam;
            }
        }

        foreach ($response->teams as $team){
            if($team->teamId == $userTeam){
                $matchStatus = $team->won;
                $matchScore['won'] = $matchStatus;
                $allyScore = $team->roundsWon;
                $matchScore['allyScore'] = $allyScore;
                $enemyScore = $team->roundsPlayed - $team->roundsWon;
                $matchScore['enemyScore'] = $enemyScore;
                $matchScore['finalScore'] = $allyScore . "-" . $enemyScore;
            }
        }

        return $matchScore;
    }

    public function getPlayerStats($playerId, $tokens, $matchId){

        $postData = json_decode('{}');
        $raw = $this->client->request("GET","https://pd.$this->shard.a.pvp.net/match-details/v1/matches/$matchId",["json"=>$postData, "headers"=>
            [
                "Authorization"=>"Bearer $this->accessToken",
                "X-Riot-Entitlements-JWT"=>$tokens['entitlements_token'],
                "X-Riot-ClientPlatform"=>$this->cp
            ]
        ]);

        $response = json_decode((string)$raw->getBody());

        foreach ($response->players as $player){
            if($player->subject == $playerId){
                $playerData = $player;
            }
        }

        return $playerData;
    }





}
?>
