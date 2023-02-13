<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

class HenrikAPIController
{
    private $client;
    private $headers;

    public function __construct(Array $credentials = null){
        $this->client = new Client(array('curl' => [CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_3],'cookies' => true,'http_errors' => false, 'verify'=>false));
        $this->headers = [
            "Authorization" => "HDEV-920c8d78-9947-4108-9d4b-a34e0e9f9d27",
            'Content-Type' => 'application/json',
        ];
    }

    public function getNews(){

        $response = $this->client->request("GET","https://api.henrikdev.xyz/valorant/v1/website/en-us",$this->headers);

        return json_decode((string)$response->getBody());
    }

    public function getFeaturedBundle(){

        $response = $this->client->request("GET","https://api.henrikdev.xyz/valorant/v2/store-featured",$this->headers);

        return json_decode((string)$response->getBody());
    }

    public function getFeaturedBundleDetails($uuid){

        $response = $this->client->request("GET","https://valorant-api.com/v1/bundles/$uuid");

        return json_decode((string)$response->getBody());
    }

    public function getWeaponSkinDetailsByLevels($levelId){
        $raw = $this->client->request("GET","https://valorant-api.com/v1/weapons/skins/");

        $response = json_decode((string)$raw->getBody());

        $i = array();

        foreach ($response->data as $skin){
            if ($skin->levels[0]->uuid == $levelId){
                $i[] = $skin;
            }
        }

        return $i;
    }

    public function getWeaponSkinDetails($uuid){
        $raw = $this->client->request("GET","https://valorant-api.com/v1/weapons/skins/$uuid");

        if (property_exists(json_decode((string)$raw->getBody()), 'data')){
            $response = array(json_decode((string)$raw->getBody())->data);
        }else{
            $response = [];
        }
        return $response;
    }

    public function getBuddiesDetails($uuid){
        $raw = $this->client->request("GET","https://valorant-api.com/v1/buddies/$uuid");
        if (property_exists(json_decode((string)$raw->getBody()), 'data')){
            $response = array(json_decode((string)$raw->getBody())->data);
        }else{
            $response = [];
        }
        return $response;
    }

    public function getPlayerCardDetails($uuid){
        $raw = $this->client->request("GET","https://valorant-api.com/v1/playercards/$uuid");
        if (property_exists(json_decode((string)$raw->getBody()), 'data')){
            $response = array(json_decode((string)$raw->getBody())->data);
        }else{
            $response = [];
        }
        return $response;
    }

    public function getSprayDetails($uuid){
        $raw = $this->client->request("GET","https://valorant-api.com/v1/sprays/$uuid");
        if (property_exists(json_decode((string)$raw->getBody()), 'data')){
            $response = array(json_decode((string)$raw->getBody())->data);
        }else{
            $response = [];
        }
        return $response;
    }

    public function getMapImageByUrl($mapUrl){
        $raw = $this->client->request("GET","https://valorant-api.com/v1/maps");
        $response = json_decode((string)$raw->getBody())->data;

        $mapImage = array();

        foreach ($response as $map){
            if($map->mapUrl == $mapUrl){
                $mapImage['name'] = $map->displayName;
                $mapImage['image'] = $map->listViewIcon;
            }
        }
        return $mapImage;
    }

    public function getPlayerData($uuid){
        $response = $this->client->request("GET","https://api.henrikdev.xyz/valorant/v1/by-puuid/account/$uuid?force=true");

        return json_decode((string)$response->getBody());
    }

    public function getPlayerMMRHistory($uuid){
        $response = $this->client->request("GET","https://api.henrikdev.xyz/valorant/v3/by-puuid/mmr-history/ap/$uuid?size=1");

        return json_decode((string)$response->getBody());
    }

    public function getPlayerRankedMatchHistory($uuid){
        $response = $this->client->request("GET","https://api.henrikdev.xyz/valorant/v3/by-puuid/matches/ap/$uuid?filter=competitive");

        return json_decode((string)$response->getBody());
    }




}
