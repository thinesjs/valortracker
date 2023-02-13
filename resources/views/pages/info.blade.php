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
                @if(url()->previous() != url()->current())
                <div class="col-lg-1 col-md-2 col-12">
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
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <h1 class="mb-0 fw-bold">{{ $skinDetails[0]->displayName }}</h1>
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
{{--                <div class="text-end">--}}
{{--                    <p href="" class="text-grey"></p>--}}
{{--                </div>--}}
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link d-flex active" data-bs-toggle="tab" href="#info" role="tab">
                    <span><i class="ri-information-line"></i></span>
                        <span class="d-none d-md-block ms-2">Info</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#levels" role="tab">
                        <span><i class="ri-palette-line"></i></span>
                        <span class="d-none d-md-block ms-2">Levels</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#variants" role="tab">
                    <span><i class="ri-palette-line"></i></span>
                        <span class="d-none d-md-block ms-2">Variants</span>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane p-3 active" id="info" role="tabpanel">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="animated fadeInLeft card-img-top border border-light-subtle rounded-4 shadow-lg img-responsive px-3 py-3"
                                     src="{{ $skinDetails[0]->displayIcon }}" alt="{{ $skinDetails[0]->displayName }}">
                            </div>
                            <div class="col-8">
                                <p><span class="fw-bold">Name: </span>{{ $skinDetails[0]->displayName }}</p>
                                <p><span class="fw-bold">Tier: </span>N/A</p>
                                <p><span class="fw-bold">Cost: </span>N/A</p>
                                <p><span class="fw-bold">Battlepass Reward: </span>N/A</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane p-3" id="levels" role="tabpanel">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img-top border border-light-subtle rounded-4 shadow-lg img-responsive px-3 py-3"
                                     src="{{ $skinDetails[0]->displayIcon }}" alt="{{ $skinDetails[0]->displayName }}">
                                <div class="row mt-3">
                                    @isset($skinDetails[0]->levels[0]->uuid)
                                        <div class="btn-group animated fadeInUp" role="group">
                                        @foreach($skinDetails[0]->levels as $index => $level)
                                            @if($index == 0 && (count($skinDetails[0]->levels) != 1))
                                                <input type="radio" class="levelPick btn-check" name="btnradio" id="level{{ $index }}" autocomplete="off" checked>
                                                <label class="btn btn-outline-secondary" for="level{{ $index }}">Level {{ $index + 1 }}</label>

                                                <input id="levelPickUrl" type="hidden" value="{{ $level->streamedVideo }}">
                                            @elseif(count($skinDetails[0]->levels) != 1)
                                                <input type="radio" class="levelPick btn-check only-child" name="btnradio" id="level{{ $index }}" autocomplete="off">
                                                <label class="btn btn-outline-secondary" for="level{{ $index }}">Level {{ $index + 1 }}</label>

                                                <input id="levelPickUrl" type="hidden" value="{{ $level->streamedVideo }}">
                                            @endif
                                        @endforeach
                                        </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="col-8">
                                @if(isset($skinDetails[0]->levels[0]->streamedVideo))
                                    <div class="ratio ratio-16x9 text-center animated pulse">
                                        <video id="levelPreview" src="{{ $skinDetails[0]->levels[0]->streamedVideo }}" class="embed-responsive-item" autoplay loop controls></video>
                                    </div>
                                @else
                                    <p> No level previews available for {{ $skinDetails[0]->displayName }}.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane p-3" id="variants" role="tabpanel">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-4">
                                <img id="swatchImage" class="card-img-top border border-light-subtle rounded-4 shadow-lg img-responsive px-3 py-3"
                                     src="{{ $skinDetails[0]->displayIcon }}" alt="{{ $skinDetails[0]->displayName }}">
                                <div class="row mt-3">
                                    @isset($skinDetails[0]->chromas[0]->swatch)
                                    @foreach($skinDetails[0]->chromas as $index => $swatch)
                                        @if($index == 0)
                                            <div class="swatchPick col text-center animated fadeInUp">
                                                <img class="border border-light-subtle rounded-2 shadow-lg w-75 card-hover" src="{{ $swatch->swatch }}" alt="{{ $swatch->displayName }}">
                                                @foreach($skinDetails[0]->levels as $level)
                                                    @if($loop->last)
                                                        <input id="swatchPickUrl" type="hidden" value="{{ $level->streamedVideo }}">
                                                    @endif
                                                @endforeach
                                                <input id="swatchIconUrl" type="hidden" value="{{ $swatch->displayIcon }}">
                                            </div>
                                        @else
                                            <div class="swatchPick col text-center animated fadeInUp">
                                                <img class="border border-light-subtle rounded-2 shadow-lg w-75 card-hover" src="{{ $swatch->swatch }}" alt="{{ $swatch->displayName }}">
                                                <input id="swatchPickUrl" type="hidden" value="{{ $swatch->streamedVideo }}">
                                                <input id="swatchIconUrl" type="hidden" value="{{ $swatch->displayIcon }}">
                                            </div>
                                        @endif
                                    @endforeach
                                    @endisset
                                </div>
                            </div>
                            <div class="col-8">
                                @if(isset($skinDetails[0]->levels[0]->streamedVideo))
                                    @foreach($skinDetails[0]->levels as $level)
                                        @if($loop->last)
                                            <div class="ratio ratio-16x9 text-center animated pulse">
                                                <video id="swatchPreview" src="{{ $level->streamedVideo }}" class="embed-responsive-item" autoplay loop controls></video>
                                            </div>
                                        @endif

                                    @endforeach
                                @else
                                    <p> No variants previews available for {{ $skinDetails[0]->displayName }}.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

@endsection
