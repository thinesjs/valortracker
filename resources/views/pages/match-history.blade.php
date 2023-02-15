@extends('parts.layout')

@section('content')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <h1 class="mb-0 fw-bold">Match History</h1>
                </div>
                <div
                    class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
              "
                >
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @foreach($playerMatches->Matches as $index => $playerMatch)
                    <div class="card overflow-hidden {{ ($matchScore[$index]['won']) ? "bg-success":"bg-danger" }} bg-opacity-10 card-hover">
                        <a href="{{ route('match-info', ['id' => $playerMatch->MatchID]) }}">
                            <div class="d-flex flex-row">
                            <div class="d-flex align-items-center justify-content-center">
                                <img class="mapListView" src="{{ $matchMaps[$index]['image'] }}">
                            </div>

                            <div class="desktop-display">
                                <div class="p-3 mx-5">
                                    <span class="text-muted">{{ $matchMaps[$index]['name'] }}</span> • <span class="text-muted">{{ ($matchDetails[$index]->matchInfo->queueID != "") ? Str::ucfirst($matchDetails[$index]->matchInfo->queueID):"Custom" }}</span>
                                    <h1 class="mb-0">{{ $matchScore[$index]['finalScore'] }}</h1>
                                </div>
                            </div>
                            <div class="mobile-display">
                                <div class="p-3 mx-5 card-img-overlay text-center">
                                    <h3 class="mb-0">{{ $matchScore[$index]['finalScore'] }}</h3>
                                    <span class="text-muted">{{ ($matchDetails[$index]->matchInfo->queueID != "") ? Str::upper($matchDetails[$index]->matchInfo->queueID):"CUSTOM" }}</span>
                                    @if($playerMatch->RankedRatingEarned != 0)
                                        <div class="ms-auto">
                                            <h3 class="{{ ($playerMatch->RankedRatingEarned > 0) ? "text-success":"text-danger" }} mb-0">{{ ($playerMatch->RankedRatingEarned > 0) ? "+":"" }}{{ $playerMatch->RankedRatingEarned }} RR</h3>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if($playerMatch->RankedRatingEarned != 0)
                                <div class="align-self-center me-5 ms-auto">
                                    <h2 class="{{ ($playerMatch->RankedRatingEarned > 0) ? "text-success":"text-danger" }} mb-0">{{ ($playerMatch->RankedRatingEarned > 0) ? "+":"" }}{{ $playerMatch->RankedRatingEarned }} RR</h2>
                                </div>
                            @endif
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <h6 class="animated fadeInUp text-muted text-end">*Press on a match to view details.</h6>
        </div>
@endsection
