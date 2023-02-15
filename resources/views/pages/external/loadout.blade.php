@extends('pages.external.parts.layout')

@section('content')

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-8 col-6 align-self-center">
                    <h1 class="mb-0 fw-bold">Loadout</h1>
                </div>
                {{-- <div class="col-lg-4 col-md-6 col-sm-4 col-6 d-md-flex align-items-center justify-content-end">
                    <a data-bs-toggle="modal" data-bs-target="#share-loadout" class="btn btn-sm btn-rounded btn-light-info align-items-center ms-2">
                        <i class="ri-share-box-line me-2"></i>Share Loadout
                    </a>
                </div> --}}
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="inventory-display animated pulse">
                <div id="inventory">
                    <div class="col">
                        <p>PLAYER CARDS</p>
                        <div id="playerCard" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="cardImage" onclick="">
                                <img src="https://media.valorant-api.com/playercards/{{ $playerEntitlements->Identity->PlayerCardID }}/largeart.png" alt="Player Card" id="playerCardImage" loading="lazy">
                            </div>
                            <div id="cardContent">
                                <p>{{ $playerdata->acct->game_name }}</p>
                                <input type="hidden" id="playerTitleUUID" value="{{ $playerEntitlements->Identity->PlayerTitleID }}">
                                <p id="playerTitle1"></p>
                            </div>
                        </div>
                        <p>SPRAYS</p>
                        <div id="spray1" class="spray inventoryCell">
                            <div class="sprayImage" onclick="">
                                <img src="https://media.valorant-api.com/sprays/{{ $playerEntitlements->Sprays[0]->SprayID }}/displayicon.png" alt="Preround Spray" loading="lazy">
                            </div>
                            <p>PREROUND SPRAY</p>
                        </div>
                        <div id="spray2" class="spray inventoryCell">
                            <div class="sprayImage" onclick="">
                                <img src="https://media.valorant-api.com/sprays/{{ $playerEntitlements->Sprays[1]->SprayID }}/displayicon.png" alt="Midround Spray" loading="lazy">
                            </div>
                            <p>MIDROUND SPRAY</p>
                        </div>
                        <div id="spray3" class="spray inventoryCell">
                            <div class="sprayImage" onclick="">
                                <img src="https://media.valorant-api.com/sprays/{{ $playerEntitlements->Sprays[2]->SprayID }}/displayicon.png" alt="Postround Spray" loading="lazy">
                            </div>
                            <p>POSTROUND SPRAY</p>
                        </div>
                    </div>
                    <div class="col">
                        <p>SIDEARMS</p>
                        <div id="classic" weaponId="13" currentUUID="{{ $playerEntitlements->Guns[8]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[8]->ChromaID }}/fullrender.png" alt="Classic" id="classicImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[8]->CharmID){{ $playerEntitlements->Guns[8]->CharmID }}@endisset/displayicon.png" alt="" id="classicBuddy">
                            </div>
                            <p>CLASSIC</p>
                        </div>
                        <div id="shorty" weaponId="7" currentUUID="{{ $playerEntitlements->Guns[11]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[11]->ChromaID }}/fullrender.png" alt="Shorty" id="shortyImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[11]->CharmID){{ $playerEntitlements->Guns[11]->CharmID }}@endisset/displayicon.png" alt="" id="shortyBuddy">
                            </div>
                            <p>SHORTY</p>
                        </div>
                        <div id="frenzy" weaponId="15" currentUUID="{{ $playerEntitlements->Guns[7]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[7]->ChromaID }}/fullrender.png" alt="Frenzy" id="frenzyImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[7]->CharmID){{ $playerEntitlements->Guns[7]->CharmID }}@endisset/displayicon.png" alt="" id="frenzyBuddy">
                            </div>
                            <p>FRENZY</p>
                        </div>
                        <div id="ghost" weaponId="6" currentUUID="{{ $playerEntitlements->Guns[9]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[9]->ChromaID }}/fullrender.png" alt="Ghost" id="ghostImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[9]->CharmID){{ $playerEntitlements->Guns[9]->CharmID }}@endisset/displayicon.png" alt="" id="ghostBuddy">
                            </div>
                            <p>GHOST</p>
                        </div>
                        <div id="sheriff" weaponId="8" currentUUID="{{ $playerEntitlements->Guns[10]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[10]->ChromaID }}/fullrender.png" alt="Sheriff" id="sheriffImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[10]->CharmID){{ $playerEntitlements->Guns[10]->CharmID }}@endisset/displayicon.png" alt="" id="sheriffBuddy">
                            </div>
                            <p>SHERIFF</p>
                        </div>
                    </div>
                    <div class="col">
                        <p>SMGS</p>
                        <div id="stinger" weaponId="17" currentUUID="{{ $playerEntitlements->Guns[16]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[16]->ChromaID }}/fullrender.png" alt="Stinger" id="stingerImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[16]->CharmID){{ $playerEntitlements->Guns[16]->CharmID }}@endisset/displayicon.png" alt="" id="stingerBuddy">
                            </div>
                            <p>STINGER</p>
                        </div>
                        <div id="spectre" weaponId="16" currentUUID="{{ $playerEntitlements->Guns[15]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[15]->ChromaID }}/fullrender.png" alt="Spectre" id="spectreImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[15]->CharmID){{ $playerEntitlements->Guns[15]->CharmID }}@endisset/displayicon.png" alt="" id="spectreBuddy">
                            </div>
                            <p>SPECTRE</p>
                        </div>
                        <p>SHOTGUNS</p>
                        <div id="bucky" weaponId="10" currentUUID="{{ $playerEntitlements->Guns[6]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[6]->ChromaID }}/fullrender.png" alt="Bucky" id="buckyImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[6]->CharmID){{ $playerEntitlements->Guns[6]->CharmID }}@endisset/displayicon.png" alt="" id="buckyBuddy">
                            </div>
                            <p>BUCKY</p>
                        </div>
                        <div id="judge" weaponId="5" currentUUID="{{ $playerEntitlements->Guns[5]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[5]->ChromaID }}/fullrender.png" alt="Judge" id="judgeImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[5]->CharmID){{ $playerEntitlements->Guns[5]->CharmID }}@endisset/displayicon.png" alt="" id="judgeBuddy">
                            </div>
                            <p>JUDGE</p>
                        </div>
                    </div>
                    <div class="col">
                        <p>RIFLES</p>
                        <div id="bulldog" weaponId="3" currentUUID="{{ $playerEntitlements->Guns[3]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[3]->ChromaID }}/fullrender.png" alt="Bulldog" id="bulldogImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[3]->CharmID){{ $playerEntitlements->Guns[3]->CharmID }}@endisset/displayicon.png" alt="" id="bulldogBuddy">
                            </div>
                            <p>BULLDOG</p>
                        </div>
                        <div id="guardian" weaponId="11" currentUUID="{{ $playerEntitlements->Guns[13]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[13]->ChromaID }}/fullrender.png" alt="Guardian" id="guardianImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[13]->CharmID){{ $playerEntitlements->Guns[13]->CharmID }}@endisset/displayicon.png" alt="" id="guardianBuddy">
                            </div>
                            <p>GUARDIAN</p>
                        </div>
                        <div id="phantom" weaponId="9" currentUUID="{{ $playerEntitlements->Guns[4]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[4]->ChromaID }}/fullrender.png" alt="Phantom" id="phantomImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[4]->CharmID){{ $playerEntitlements->Guns[4]->CharmID }}@endisset/displayicon.png" alt="" id="phantomBuddy">
                            </div>
                            <p>PHANTOM</p>
                        </div>
                        <div id="vandal" weaponId="0" currentUUID="{{ $playerEntitlements->Guns[2]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[2]->ChromaID }}/fullrender.png" alt="Vandal" id="vandalImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[2]->CharmID){{ $playerEntitlements->Guns[2]->CharmID }}@endisset/displayicon.png" alt="" id="vandalBuddy">
                            </div>
                            <p>VANDAL</p>
                        </div>
                    </div>
                    <div class="col">
                        <p>SNIPER RIFLES</p>
                        <div id="marshal" weaponId="12" currentUUID="{{ $playerEntitlements->Guns[14]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[14]->ChromaID }}/fullrender.png" alt="Marshal" id="marshalImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[14]->CharmID){{ $playerEntitlements->Guns[14]->CharmID }}@endisset/displayicon.png" alt="" id="marshalBuddy">
                            </div>
                            <p>MARSHAL</p>
                        </div>
                        <div id="operator" weaponId="14" currentUUID="{{ $playerEntitlements->Guns[12]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[12]->ChromaID }}/fullrender.png" alt="Operator" id="operatorImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[12]->CharmID){{ $playerEntitlements->Guns[12]->CharmID }}@endisset/displayicon.png" alt="" id="operatorBuddy">
                            </div>
                            <p>OPERATOR</p>
                        </div>
                        <p>MACHINE GUNS</p>
                        <div id="ares" weaponId="1" currentUUID="{{ $playerEntitlements->Guns[1]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[1]->ChromaID }}/fullrender.png" alt="Ares" id="aresImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[1]->CharmID){{ $playerEntitlements->Guns[1]->CharmID }}@endisset/displayicon.png" alt="" id="aresBuddy">
                            </div>
                            <p>ARES</p>
                        </div>
                        <div id="odin" weaponId="2" currentUUID="{{ $playerEntitlements->Guns[0]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[0]->ChromaID }}/fullrender.png" alt="Odin" id="odinImage" loading="lazy">
                                <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[0]->CharmID){{ $playerEntitlements->Guns[0]->CharmID }}@endisset/displayicon.png" alt="" id="odinBuddy">
                            </div>
                            <p>ODIN</p>
                        </div>
                        <p>MELEE</p>
                        <div id="melee" weaponId="4" currentUUID="{{ $playerEntitlements->Guns[17]->SkinID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                            <div id="knifeImage" class="skinImage" onclick="">
                                <img src="https://media.valorant-api.com/weaponskins/{{ $playerEntitlements->Guns[17]->SkinID }}/displayicon.png" alt="Melee" id="meleeImage" loading="lazy">
                            </div>
                            <p>MELEE</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-display">
                <div class="accordion rounded rounded-3">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#sidearms" aria-expanded="false" aria-controls="collapseTwo">
                            SIDEARMS
                          </button>
                        </h2>
                        <div id="sidearms" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="col">
                                <div id="classic" weaponId="13" currentUUID="{{ $playerEntitlements->Guns[8]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[8]->ChromaID }}/fullrender.png" alt="Classic" id="classicImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[8]->CharmID){{ $playerEntitlements->Guns[8]->CharmID }}@endisset/displayicon.png" alt="" id="classicBuddy">
                                    </div>
                                    <p>CLASSIC</p>
                                </div>
                                <div id="shorty" weaponId="7" currentUUID="{{ $playerEntitlements->Guns[11]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[11]->ChromaID }}/fullrender.png" alt="Shorty" id="shortyImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[11]->CharmID){{ $playerEntitlements->Guns[11]->CharmID }}@endisset/displayicon.png" alt="" id="shortyBuddy">
                                    </div>
                                    <p>SHORTY</p>
                                </div>
                                <div id="frenzy" weaponId="15" currentUUID="{{ $playerEntitlements->Guns[7]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[7]->ChromaID }}/fullrender.png" alt="Frenzy" id="frenzyImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[7]->CharmID){{ $playerEntitlements->Guns[7]->CharmID }}@endisset/displayicon.png" alt="" id="frenzyBuddy">
                                    </div>
                                    <p>FRENZY</p>
                                </div>
                                <div id="ghost" weaponId="6" currentUUID="{{ $playerEntitlements->Guns[9]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[9]->ChromaID }}/fullrender.png" alt="Ghost" id="ghostImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[9]->CharmID){{ $playerEntitlements->Guns[9]->CharmID }}@endisset/displayicon.png" alt="" id="ghostBuddy">
                                    </div>
                                    <p>GHOST</p>
                                </div>
                                <div id="sheriff" weaponId="8" currentUUID="{{ $playerEntitlements->Guns[10]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[10]->ChromaID }}/fullrender.png" alt="Sheriff" id="sheriffImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[10]->CharmID){{ $playerEntitlements->Guns[10]->CharmID }}@endisset/displayicon.png" alt="" id="sheriffBuddy">
                                    </div>
                                    <p>SHERIFF</p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#smg" aria-expanded="false" aria-controls="collapseTwo">
                            SMGS
                        </button>
                      </h2>
                      <div id="smg" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="col">
                                <div id="stinger" weaponId="17" currentUUID="{{ $playerEntitlements->Guns[16]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[16]->ChromaID }}/fullrender.png" alt="Stinger" id="stingerImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[16]->CharmID){{ $playerEntitlements->Guns[16]->CharmID }}@endisset/displayicon.png" alt="" id="stingerBuddy">
                                    </div>
                                    <p>STINGER</p>
                                </div>
                                <div id="spectre" weaponId="16" currentUUID="{{ $playerEntitlements->Guns[15]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[15]->ChromaID }}/fullrender.png" alt="Spectre" id="spectreImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[15]->CharmID){{ $playerEntitlements->Guns[15]->CharmID }}@endisset/displayicon.png" alt="" id="spectreBuddy">
                                    </div>
                                    <p>SPECTRE</p>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#shotgun" aria-expanded="false" aria-controls="collapseThree">
                            SHOTGUNS
                        </button>
                      </h2>
                      <div id="shotgun" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="col">
                                <div id="bucky" weaponId="10" currentUUID="{{ $playerEntitlements->Guns[6]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[6]->ChromaID }}/fullrender.png" alt="Bucky" id="buckyImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[6]->CharmID){{ $playerEntitlements->Guns[6]->CharmID }}@endisset/displayicon.png" alt="" id="buckyBuddy">
                                    </div>
                                    <p>BUCKY</p>
                                </div>
                                <div id="judge" weaponId="5" currentUUID="{{ $playerEntitlements->Guns[5]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[5]->ChromaID }}/fullrender.png" alt="Judge" id="judgeImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[5]->CharmID){{ $playerEntitlements->Guns[5]->CharmID }}@endisset/displayicon.png" alt="" id="judgeBuddy">
                                    </div>
                                    <p>JUDGE</p>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#rifle" aria-expanded="false" aria-controls="collapseThree">
                            RIFLES
                          </button>
                        </h2>
                        <div id="rifle" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="col">
                                <div id="bulldog" weaponId="3" currentUUID="{{ $playerEntitlements->Guns[3]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[3]->ChromaID }}/fullrender.png" alt="Bulldog" id="bulldogImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[3]->CharmID){{ $playerEntitlements->Guns[3]->CharmID }}@endisset/displayicon.png" alt="" id="bulldogBuddy">
                                    </div>
                                    <p>BULLDOG</p>
                                </div>
                                <div id="guardian" weaponId="11" currentUUID="{{ $playerEntitlements->Guns[13]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[13]->ChromaID }}/fullrender.png" alt="Guardian" id="guardianImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[13]->CharmID){{ $playerEntitlements->Guns[13]->CharmID }}@endisset/displayicon.png" alt="" id="guardianBuddy">
                                    </div>
                                    <p>GUARDIAN</p>
                                </div>
                                <div id="phantom" weaponId="9" currentUUID="{{ $playerEntitlements->Guns[4]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[4]->ChromaID }}/fullrender.png" alt="Phantom" id="phantomImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[4]->CharmID){{ $playerEntitlements->Guns[4]->CharmID }}@endisset/displayicon.png" alt="" id="phantomBuddy">
                                    </div>
                                    <p>PHANTOM</p>
                                </div>
                                <div id="vandal" weaponId="0" currentUUID="{{ $playerEntitlements->Guns[2]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[2]->ChromaID }}/fullrender.png" alt="Vandal" id="vandalImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[2]->CharmID){{ $playerEntitlements->Guns[2]->CharmID }}@endisset/displayicon.png" alt="" id="vandalBuddy">
                                    </div>
                                    <p>VANDAL</p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            SNIPER RIFLES
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="col">
                                <div id="marshal" weaponId="12" currentUUID="{{ $playerEntitlements->Guns[14]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[14]->ChromaID }}/fullrender.png" alt="Marshal" id="marshalImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[14]->CharmID){{ $playerEntitlements->Guns[14]->CharmID }}@endisset/displayicon.png" alt="" id="marshalBuddy">
                                    </div>
                                    <p>MARSHAL</p>
                                </div>
                                <div id="operator" weaponId="14" currentUUID="{{ $playerEntitlements->Guns[12]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[12]->ChromaID }}/fullrender.png" alt="Operator" id="operatorImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[12]->CharmID){{ $playerEntitlements->Guns[12]->CharmID }}@endisset/displayicon.png" alt="" id="operatorBuddy">
                                    </div>
                                    <p>OPERATOR</p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#mg" aria-expanded="false" aria-controls="collapseThree">
                            MACHINE GUNS
                          </button>
                        </h2>
                        <div id="mg" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="col">
                                <div id="ares" weaponId="1" currentUUID="{{ $playerEntitlements->Guns[1]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[1]->ChromaID }}/fullrender.png" alt="Ares" id="aresImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[1]->CharmID){{ $playerEntitlements->Guns[1]->CharmID }}@endisset/displayicon.png" alt="" id="aresBuddy">
                                    </div>
                                    <p>ARES</p>
                                </div>
                                <div id="odin" weaponId="2" currentUUID="{{ $playerEntitlements->Guns[0]->ChromaID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskinchromas/{{ $playerEntitlements->Guns[0]->ChromaID }}/fullrender.png" alt="Odin" id="odinImage" loading="lazy">
                                        <img src="https://media.valorant-api.com/buddies/@isset($playerEntitlements->Guns[0]->CharmID){{ $playerEntitlements->Guns[0]->CharmID }}@endisset/displayicon.png" alt="" id="odinBuddy">
                                    </div>
                                    <p>ODIN</p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#knife" aria-expanded="false" aria-controls="collapseThree">
                            MELEE
                          </button>
                        </h2>
                        <div id="knife" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="col">
                                <div id="melee" weaponId="4" currentUUID="{{ $playerEntitlements->Guns[17]->SkinID }}" class="inventoryCell" data-bs-toggle="modal" data-bs-target="#dark-header-modal">
                                    <div id="knifeImage" class="skinImage" onclick="">
                                        <img src="https://media.valorant-api.com/weaponskins/{{ $playerEntitlements->Guns[17]->SkinID }}/displayicon.png" alt="Melee" id="meleeImage" loading="lazy">
                                    </div>
                                    <p>MELEE</p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Skin Chooser Modal  -->
        <!-- ============================================================== -->
        <div id="dark-header-modal" class="modal fade" tabindex="-1" aria-labelledby="dark-header-modalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="
                              modal-header modal-colored-header
                              bg-dark
                              text-white
                            ">
                        <h4 class="modal-title" id="dark-header-modalLabel">
                            Select Skin for <span id="weaponDisplayName"></span>
                        </h4>
                    </div>
                    <form method="post" action="{{ route ('loadout-update') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="card-body">
                                <ul class="nav nav-pills nav-fill custom-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#skinSelector" role="tab" aria-selected="true" tabindex="-1">Skin</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#buddySelector" role="tab" aria-selected="false">Buddy</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="skinSelector" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="text-center">
                                            <img id="skinPreview" class="img-fluid mb-4" src="https://media.valorant-api.com/weaponskinchromas/140a48ad-4daf-a6f8-027c-a5b890eac738/fullrender.png" alt="" style="height: 128px; margin-top: 20px;">
                                        </div>

                                        <div class="mb-3">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-text"><i class="ri-search-2-line"></i></span>
                                                <input id="searchSkin" type="text" class="form-control" placeholder="Search">
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="wrapper">
                                                <div class="scrolls" id="skinChooser">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="buddySelector" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <p>Buddies are not yet supported!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-info">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="share-loadout" class="modal fade" tabindex="-1" aria-labelledby="share-loadoutLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="
                              modal-header modal-colored-header
                              bg-dark
                              text-white
                            ">
                        <h4 class="modal-title" id="dark-header-modalLabel">
                            Sharing Loadout
                        </h4>
                    </div>
                    <form method="post" action="{{ route ('loadout-update') }}">
                        @csrf
                        <div class="modal-body">
                            <label for="exampleFormControlSelect1">Sharable Link</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ri-link"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                <button class="btn btn-light-danger text-danger" type="button">
                                    Copy Link
                                </button>
                            </div>
                            <label for="exampleFormControlSelect1">Expiry</label>
                            <select class="form-select mr-sm-2" id="">
                                <option value="1">24 hours</option>
                                <option value="2">1 week</option>
                                <option value="3">Never</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-info">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
