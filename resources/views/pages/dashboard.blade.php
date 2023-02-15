@extends('parts.layout')

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
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
              <h1 class="mb-0 fw-bold">Dashboard</h1>
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
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- row -->
          <div class="row animated fadeInUp">
            <div class="col-lg-8">
                <div class="card text-white bg-dark">
                    <img class="card-img img-responsive"
                         src="https://media.valorant-api.com/playercards/{{ $playerdata->PlayerCardID }}/wideart.png"
                         alt="Player Card">
                    <div class="card-img-overlay">
                        <div class="card-body">
                            <h3 class="card-title mb-0 text-white">{{ $playerdata->acct->game_name }}</h3>
                            <p class="card-text text-white-50 fs-3 fw-normal">
                                #{{ $playerdata->acct->tag_line }}
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

            <!-- column -->
            <div class="col-lg">
              <div class="card w-100 animated fadeInUp static-card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h3 class="card-title">Competitive Performance</h3>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-5 border-end">
                      <div class="pe-4">
                        <h3 class="fs-8 d-flex align-items-center mb-0">
                          {{ $playermmr->data->current_data->mmr_change_to_last_game }}
                        </h3>
                        <h6 class="fw-normal text-muted mb-0">Last Change to Rank Rating</h6>
                        <h3 class="fs-8 d-flex align-items-center mb-0 mt-4">
                          {{ 100 - $playermmr->data->current_data->ranking_in_tier }}
                        </h3>
                        <h6 class="fw-normal text-muted mb-0">Rank Rating needed to Rank Up</h6>
                      </div>
                    </div>
                    <div class="col-md-7">
                        <h6 class="card-subtitle">Rank Rating trend for last 10 matches</h6>
                        <?php $i = 0;?>
                        @foreach($playerrr->Matches as $match)
                            <input type="hidden" value="{{ $match->RankedRatingEarned }}" id="match{{$i++}}">
                        @endforeach
                        <div id="product-performance" class="ps-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

@endsection
