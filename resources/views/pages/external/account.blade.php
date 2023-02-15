@extends('pages.external.parts.layout')

@section('content')
      <div class="page-wrapper">
        <div class="page-titles">
          <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
              <h1 class="mb-0 fw-bold">Account</h1>
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
          <div class="row animated fadeInUp">
            <div class="col-lg-8">
                <div class="card text-white bg-dark">
                    <img class="card-img img-responsive"
                         src="{{ $playerDetails->data->card->wide }}"
                         alt="Player Card">
                    <div class="card-img-overlay">
                        <div class="card-body">
                            <h3 class="card-title mb-0 text-white">{{ $playerDetails->data->name }}</h3>
                            <p class="card-text text-white-50 fs-3 fw-normal">
                                #{{ $playerDetails->data->tag }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
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
          </div>
        </div>
@endsection
