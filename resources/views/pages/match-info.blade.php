@extends('parts.layout')

@section('content')
    <div class="page-wrapper">
        <div class="page-titles">
            @if(url()->previous() != url()->current())
                <div class="col-lg-1 col-md-2 col-12 mb-3">
                    <a type="button" href="{{ URL::previous() }}" class="
                          justify-content-center
                          btn btn-rounded btn-light-info
                          text-info
                          font-weight-medium
                        ">
                        <i class="ri-arrow-left-s-line"></i>
                        Back
                    </a>
                </div>
            @endif
            <div class="card animated fadeInUp overflow-hidden mb-0 {{ ($matchScore['won']) ? "bg-light-success":"bg-light-danger" }}">
                <div class="d-flex align-items-center justify-content-end">
                    <img class="mapListViewEnd" src="{{ $matchMaps['image'] }}">
                </div>
                <div class="card-body card-img-overlay d-flex flex-column justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <h1 class="mb-0 fw-bold">{{ ($matchDetails->matchInfo->queueID != "") ? Str::ucfirst($matchDetails->matchInfo->queueID):"Custom" }} - {{ $matchMaps['name'] }}</h1>

                        <div class="ms-auto d-flex justify-content-end">
                            <span class="badge {{ ($matchScore['won']) ? "text-bg-success":"text-bg-danger" }} me-3">{{ ($matchScore['won']) ? "VICTORY":"DEFEAT" }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs animated fadeInUp" role="tablist">
                <li class="nav-item">
                    <a class="nav-link d-flex active" data-bs-toggle="tab" href="#overview" role="tab">
                    <span><i class="ri-information-line"></i></span>
                        <span class="d-none d-md-block ms-2">Overview</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#ability" role="tab">
                        <span><i class="ri-tools-line"></i></span>
                        <span class="d-none d-md-block ms-2">Ability Usage</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content animated fadeInUp">
                <div class="tab-pane p-3 active" id="overview" role="tabpanel">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-sm">
                                @foreach($matchDetails->players as $player)
                                    @if($player->teamId == $matchScore['playerTeam'])
                                        <div class="card rounded-3 my-2 {{ ($matchScore['won']) ? "bg-light-success" : "bg-light-danger" }} card-hover">
                                            <a href="{{ route('player-info', ['id' => $player->subject]) }}" class="stretched-link"></a>
                                            <div class="d-flex flex-row">
                                                <div class="d-flex align-items-start justify-content-center">
                                                    <img class="agentSideImage" src="https://media.valorant-api.com/agents/{{ $player->characterId }}/displayicon.png" width="120">
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-4">
                                                        <h5 class="text-dark">{{ $player->gameName }}#{{ $player->tagLine }}</h5>
                                                        <h6 class="card-subtitle mb-0 fs-2 fw-normal mb-1">
                                                            Score: {{ $player->stats->score }}
                                                        </h6>
                                                        <span class="fs-2 mt-1 font-weight-medium">{{ $player->stats->kills }} Eliminations {{ $player->stats->deaths }} Deaths {{ $player->stats->assists }} Assists</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <hr class="mobile-display my-0">
                            <div class="col-sm">
                                @foreach($matchDetails->players as $player)
                                    @if($player->teamId != $matchScore['playerTeam'])
                                        <div class="card rounded-3 my-2 {{ !($matchScore['won']) ? "bg-light-success" : "bg-light-danger" }} card-hover">
                                            <a href="{{ route('player-info', ['id' => $player->subject]) }}" class="stretched-link"></a>
                                            <div class="d-flex flex-row-reverse">
                                                <div class="d-flex align-items-start justify-content-center">
                                                    <img class="agentSideImageFlip" src="https://media.valorant-api.com/agents/{{ $player->characterId }}/displayicon.png" width="120">
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div class="me-4 text-end">
                                                        <h5 class="text-dark">{{ $player->gameName }}#{{ $player->tagLine }}</h5>
                                                        <h6 class="card-subtitle mb-0 fs-2 fw-normal mb-1">
                                                            Score: {{ $player->stats->score }}
                                                        </h6>
                                                        <span class="fs-2 mt-1 font-weight-medium">{{ $player->stats->kills }} Eliminations {{ $player->stats->deaths }} Deaths {{ $player->stats->assists }} Assists</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>


                    </div>
                </div>
                <div class="tab-pane p-3" id="ability" role="tabpanel">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-sm">
                                @foreach($matchDetails->players as $player)
                                    @if($player->teamId == $matchScore['playerTeam'])
                                        <div class="card rounded-3 my-2 {{ ($matchScore['won']) ? "bg-light-success" : "bg-light-danger" }} card-hover">
                                            <a href="{{ route('player-info', ['id' => $player->subject]) }}" class="stretched-link"></a>
                                            <div class="d-flex flex-row">
                                                <div class="d-flex align-items-start justify-content-center">
                                                    <img class="agentSideImage" src="https://media.valorant-api.com/agents/{{ $player->characterId }}/displayicon.png" width="120">
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-4">
                                                        <h5 class="text-dark">{{ $player->gameName }}#{{ $player->tagLine }}</h5>
                                                        <h5 class="fs-2 font-weight-medium">Basic (Q): <span class="card-subtitle">{{ $player->stats->abilityCasts->ability1Casts }} occurances</span></h5>
                                                        <h5 class="fs-2 font-weight-medium">Basic (C): <span class="card-subtitle">{{ $player->stats->abilityCasts->grenadeCasts }} occurances</span></h5>
                                                        <h5 class="fs-2 font-weight-medium">Signature (E): <span class="card-subtitle">{{ $player->stats->abilityCasts->ability2Casts }} occurances</span></h5>
                                                        <h5 class="fs-2 font-weight-medium">Ultimate (X): <span class="card-subtitle">{{ $player->stats->abilityCasts->ultimateCasts }} occurances</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <hr class="mobile-display my-0">
                            <div class="col-sm">
                                @foreach($matchDetails->players as $player)
                                    @if($player->teamId != $matchScore['playerTeam'])
                                        <div class="card rounded-3 my-2 {{ !($matchScore['won']) ? "bg-light-success" : "bg-light-danger" }} card-hover">
                                            <a href="{{ route('player-info', ['id' => $player->subject]) }}" class="stretched-link"></a>
                                            <div class="d-flex flex-row-reverse">
                                                <div class="d-flex align-items-start justify-content-center">
                                                    <img class="agentSideImageFlip" src="https://media.valorant-api.com/agents/{{ $player->characterId }}/displayicon.png" width="120">
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div class="me-4 text-end">
                                                        <h5 class="text-dark">{{ $player->gameName }}#{{ $player->tagLine }}</h5>
                                                        <h5 class="fs-2 font-weight-medium">Basic (Q): <span class="card-subtitle">{{ $player->stats->abilityCasts->ability1Casts }} occurances</span></h5>
                                                        <h5 class="fs-2 font-weight-medium">Basic (C): <span class="card-subtitle">{{ $player->stats->abilityCasts->grenadeCasts }} occurances</span></h5>
                                                        <h5 class="fs-2 font-weight-medium">Signature (E): <span class="card-subtitle">{{ $player->stats->abilityCasts->ability2Casts }} occurances</span></h5>
                                                        <h5 class="fs-2 font-weight-medium">Ultimate (X): <span class="card-subtitle">{{ $player->stats->abilityCasts->ultimateCasts }} occurances</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
@endsection
