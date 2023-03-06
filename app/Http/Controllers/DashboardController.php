<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Weedeej\AuthSpace\Authentication;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $authObject = new Authentication();
        $henrikAPI = new HenrikAPIController();
        $authTokens = $authObject->reAuth();

        $playerdata = $authObject->getPlayer($authTokens);

        $playerrr = $authObject->getPlayerRRHistory($playerdata->sub, $authTokens);
        $playermmr = $authObject->getPlayerMMR($playerdata->acct->game_name,$playerdata->acct->tag_line);

        return view("pages.dashboard", compact('authTokens', 'playerdata', 'playermmr', 'playerrr'));
    }

    public function store()
    {
        $authObject = new Authentication();
        $authTokens = $authObject->reAuth();

        $playerdata = $authObject->getPlayer($authTokens);

        $rawPlayerStore = $authObject->getPlayerStore($playerdata->sub, $authTokens);

        $weaponDisplayNames = array();
        foreach($rawPlayerStore->SkinsPanelLayout->SingleItemOffers as $i) {
            $weaponDisplayNames[] = $authObject->getWeaponName($i);
        }

        $nightmarketDisplayNames = array();
        if(isset($rawPlayerStore->BonusStore)){
            foreach($rawPlayerStore->BonusStore->BonusStoreOffers as $i) {
                $nightmarketDisplayNames[] = $authObject->getWeaponName($i->Offer->Rewards[0]->ItemID);
            }
        }


        return view("pages.store", compact('playerdata', 'rawPlayerStore', 'weaponDisplayNames', 'nightmarketDisplayNames'));
    }

    public function bundle()
    {
        $authObject = new Authentication();
        $henrikAPI = new HenrikAPIController();

        $bundle = $henrikAPI->getFeaturedBundle();

        $authTokens = $authObject->reAuth();

        $playerdata = $authObject->getPlayer($authTokens);

        $rawPlayerStore = $authObject->getPlayerStore($playerdata->sub, $authTokens);
        $bundleDetails = $henrikAPI->getFeaturedBundleDetails($rawPlayerStore->FeaturedBundle->Bundle->DataAssetID);

        // dd($rawPlayerStore);

        return view("pages.bundle", compact('playerdata', 'rawPlayerStore', 'bundle', 'bundleDetails'));
    }

    public function loadout()
    {
        $authObject = new Authentication();

        $authTokens = $authObject->reAuth();
        $playerdata = $authObject->getPlayer($authTokens);
        $playerEntitlements = $authObject->getPlayerEntitlements($playerdata->sub, $authTokens);

        return view("pages.loadout", compact('playerdata', 'playerEntitlements'));
    }

    public function info(Request $request)
    {
        $uuid = $request->id;
        $henrikAPI = new HenrikAPIController();
        $authObject = new Authentication();
        $authTokens = $authObject->reAuth();

        $playerdata = $authObject->getPlayer($authTokens);

        if(!empty($henrikAPI->getWeaponSkinDetailsByLevels($uuid))){
            $skinDetails = $henrikAPI->getWeaponSkinDetailsByLevels($uuid);
        }elseif (!empty($henrikAPI->getWeaponSkinDetails($uuid))){
            $skinDetails = $henrikAPI->getWeaponSkinDetails($uuid);
        }elseif (!empty($henrikAPI->getBuddiesDetails($uuid))){
            $skinDetails = $henrikAPI->getBuddiesDetails($uuid);
        }elseif (!empty($henrikAPI->getPlayerCardDetails($uuid))){
            $skinDetails = $henrikAPI->getPlayerCardDetails($uuid);
        }elseif (!empty($henrikAPI->getSprayDetails($uuid))){
            $skinDetails = $henrikAPI->getSprayDetails($uuid);
        }


        return view("pages.info", compact('playerdata', 'skinDetails'));
    }

    public function matchHistory()
    {
        $authObject = new Authentication();
        $henrikAPI = new HenrikAPIController();
        $authTokens = $authObject->reAuth();
        $playerdata = $authObject->getPlayer($authTokens);

        $playerMatches = $authObject->getPlayerMatches($playerdata->sub, $authTokens);

        $matchDetails = array();
        $matchScore = array();
        $matchMaps = array();
        //$playerStats = array();



        foreach($playerMatches->Matches as $i) {
            $matchScore[] = $authObject->getMatchScore($playerdata->sub, $authTokens, $i->MatchID);
            $matchDetails[] = $authObject->getMatchDetails($playerdata->sub, $authTokens, $i->MatchID);
            $matchMaps[] = $henrikAPI->getMapImageByUrl($i->MapID);
            //$playerStats[] = $authObject->getPlayerStats($playerdata->sub, $authTokens, $i->MatchID);
        }

        return view("pages.match-history", compact('playerdata', 'playerMatches','matchDetails', 'matchScore', 'matchMaps'));
    }

    public function matchInfo(Request $request)
    {
        $matchId = $request->id;
        $refferer = $request->as;
        $henrikAPI = new HenrikAPIController();
        $authObject = new Authentication();
        $authTokens = $authObject->reAuth();

        $playerdata = $authObject->getPlayer($authTokens);

        if(isset($refferer)){
            $matchDetails = $authObject->getMatchDetails($refferer, $authTokens, $matchId);
            $matchMaps = $henrikAPI->getMapImageByUrl($matchDetails->matchInfo->mapId);
            $matchScore = $authObject->getMatchScore($refferer, $authTokens, $matchId);
        }else{
            $matchDetails = $authObject->getMatchDetails($playerdata->sub, $authTokens, $matchId);
            $matchMaps = $henrikAPI->getMapImageByUrl($matchDetails->matchInfo->mapId);
            $matchScore = $authObject->getMatchScore($playerdata->sub, $authTokens, $matchId);
        }




        return view("pages.match-info", compact('playerdata', 'matchDetails', 'matchMaps', 'matchScore'));
    }

    public function playerInfo(Request $request)
    {
        $playerId = $request->id;
        $henrikAPI = new HenrikAPIController();
        $authObject = new Authentication();
        $authTokens = $authObject->reAuth();
        $playerdata = $authObject->getPlayer($authTokens);

        $playerDetails = $henrikAPI->getPlayerData($playerId);
        $playermmr = $authObject->getPlayerMMR($playerDetails->data->name,$playerDetails->data->tag);
        $playermmrhistory = $henrikAPI->getPlayerMMRHistory($playerId);
        $playerrankedhistory = $henrikAPI->getPlayerRankedMatchHistory($playerId);

        $playerMatches = $authObject->getPlayerMatches($playerId, $authTokens);

        foreach($playerMatches->Matches as $i) {
            $matchScore[] = $authObject->getMatchScore($playerId, $authTokens, $i->MatchID);
            $matchDetails[] = $authObject->getMatchDetails($playerId, $authTokens, $i->MatchID);
            $matchMaps[] = $henrikAPI->getMapImageByUrl($i->MapID);
        }

        return view("pages.player-info", compact('playerdata', 'playerDetails', 'playermmr', 'playermmrhistory', 'playerrankedhistory', 'playerMatches', 'matchScore', 'matchDetails', 'matchMaps'));
    }

    public function accountInfo()
    {
        $authObject = new Authentication();
        $henrikAPI = new HenrikAPIController();
        $authTokens = $authObject->reAuth();

        $playerdata = $authObject->getPlayer($authTokens);
        $playerId = $playerdata->sub;

        $playerDetails = $henrikAPI->getPlayerData($playerId);
        $playermmr = $authObject->getPlayerMMR($playerDetails->data->name,$playerDetails->data->tag);
        $playermmrhistory = $henrikAPI->getPlayerMMRHistory($playerId);
        $playerrankedhistory = $henrikAPI->getPlayerRankedMatchHistory($playerId);

        return view("pages.account", compact('playerdata', 'playerDetails', 'playermmr', 'playermmrhistory', 'playerrankedhistory'));
    }

    public function shareAccount(Request $request)
    {
        $encryptedId = $request->id;
        $playerId = decrypt($encryptedId);

        $authObject = new Authentication();
        $henrikAPI = new HenrikAPIController();
        $authTokens = $authObject->reAuth();

        $playerDetails = $henrikAPI->getPlayerData($playerId);
        $playermmr = $authObject->getPlayerMMR($playerDetails->data->name,$playerDetails->data->tag);

        return view("pages.external.account", compact('playermmr', 'playerDetails'));
    }

    public function shareAccountLoadout(Request $request)
    {
        $authObject = new Authentication();

        $authTokens = $authObject->reAuth();
        $playerdata = $authObject->getPlayer($authTokens);
        $playerEntitlements = $authObject->getPlayerEntitlements($playerdata->sub, $authTokens);

        return view("pages.external.loadout", compact('playerdata', 'playerEntitlements'));
    }
}
