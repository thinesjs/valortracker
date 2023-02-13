<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weedeej\AuthSpace\Authentication;

class RiotLoadoutController extends Controller
{
    public function loadoutUpdate(Request $request)
    {
        // dd($request->currentSkinId);
        $authObject = new Authentication();
        $authTokens = $authObject->reAuth();
        $playerdata = $authObject->getPlayer();
        $playerEntitlements = $authObject->getPlayerEntitlements($playerdata->sub, $authTokens);


        foreach($playerEntitlements->Guns as $i){
            if($i->ChromaID == $request->currentSkinId){
                $i->ChromaID = $request->newSkinId;
            }
        }



        $updatedLoadout = $authObject->updatePlayerLoadout($playerdata->sub, $authTokens, $playerEntitlements);

        // dd($updatedLoadout);

        return redirect()->route('loadout');
    }
}
