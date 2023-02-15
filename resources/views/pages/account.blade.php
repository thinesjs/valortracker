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
            <div class="card animated fadeInUp overflow-hidden mb-0 static-card">
                <div class="d-flex align-items-center justify-content-end">
                    <img class="mapListViewEnd" src="{{ $playerDetails->data->card->wide }}">
                </div>
                <div class="card-body card-img-overlay d-flex flex-column justify-content-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <h1 class="mb-0 fw-bold">{{ $playerDetails->data->name }}#{{ $playerDetails->data->tag }}</h1>
                        <div class="ms-auto d-flex justify-content-end">
                            <span class="badge text-bg-secondary me-3">{{ $playerDetails->data->account_level }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs animated fadeInUp" role="tablist">
                <li class="nav-item">
                    <a class="nav-link d-flex active" data-bs-toggle="tab" href="#overview" role="tab">
                    <span><i class="ri-information-line"></i></span>
                        <span class="d-none d-md-block ms-2">Overview</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#sharing" role="tab">
                        <span><i class="ri-share-line"></i></span>
                        <span class="d-none d-md-block ms-2">Sharing</span>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content animated fadeInUp">
                <div class="tab-pane p-3 active" id="overview" role="tabpanel">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card static-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row align-items-center">
                                            <img
                                                src="{{ $playerDetails->data->card->small }}"
                                                alt="user"
                                                width="50"
                                                class="rounded-circle"
                                            />
                                            <div class="ms-3 align-self-center">
                                                <h3 class="mb-0">{{ $playerDetails->data->name }}</h3>
                                                <span class="text-muted">{{ $playerDetails->data->tag }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card static-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div>
                                                <h3>Rank</h3>
                                                <h6 class="card-subtitle">{{ $playermmr->data->current_data->currenttierpatched }}</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="text-info display-6"><img class="card-img-top img-responsive " src="{{ $playermmr->data->current_data->images->small }}" alt="{{ $playermmr->data->current_data->currenttierpatched }}"></span>
                                            </div>
                                        </div>
                                        <p class="card-text">
                                            {{ $playermmr->data->current_data->ranking_in_tier }}/100
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="{{ $playermmr->data->current_data->ranking_in_tier }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $playermmr->data->current_data->ranking_in_tier }}%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card static-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h3>Last Competitive Result</h3>
                                                <h6 class="card-subtitle">Played on {{ $playermmrhistory->data[0]->date }} in {{ $playerrankedhistory->data[0]->metadata->map }}</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="badge text-bg-secondary me-3">{{ $playerrankedhistory->data[0]->metadata->mode }}</span>
                                                <span class="badge text-bg-secondary me-3 {{ ($playermmrhistory->data[0]->mmr_change_to_last_game > 0) ? "bg-success" : "bg-danger" }}">{{ ($playermmrhistory->data[0]->mmr_change_to_last_game > 0) ? "+":"" }}{{ $playermmrhistory->data[0]->mmr_change_to_last_game }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane p-3" id="sharing" role="tabpanel">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="card static-card">
                                    <div class="card-body">
                                    <div class="d-flex align-items-center pb-3 border-bottom">
                                        <div>
                                        <h3 class="card-title">Sharing Account</h3>
                                        <h6 class="card-subtitle mb-0">You are currently sharing your account!</h6>
                                        </div>
                                        <div class="ms-auto">
                                            <a type="submit" class="btn btn-danger">DISABLE</a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mt-4">
                                        <h5 class="text-muted fw-normal mb-0">Sales Yearly</h5>
                                        <div class="ms-auto">
                                            <a type="button" class="btn btn-sm btn-info" href="{{ route('share-account', ['id' => encrypt($playerdata->sub)]) }}" target="_blank">View Account</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
