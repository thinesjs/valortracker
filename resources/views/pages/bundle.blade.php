@extends('parts.layout')

@section('content')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <h1 class="mb-0 fw-bold">Featured Bundle</h1>
                </div>
                <div
                    class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
              "
                >
                <p href="" class="text-grey">Refreshes
                    in {{ gmdate('d \d\a\y\s h \h\o\u\r\s i \s\e\c\o\n\d\s', $rawPlayerStore->FeaturedBundle->BundleRemainingDurationInSeconds) }}</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card animated fadeInUp overflow-hidden static-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0">{{ $bundleDetails->data->displayName }} Bundle</h4>
                        <div class="ms-auto">
                            <span class="fs-6 font-weight-medium d-flex align-items-center">{{ $bundle->data[0]->bundle_price }}<img class="mx-2 text-primary" height="20" src="https://media.valorant-api.com/currencies/85ad13f7-3d1b-5128-9eb2-7cd8ee0b5741/displayicon.png" style="filter: invert(100%);"></span>
                        </div>
                    </div>
                </div>
            </div>
            @isset($bundleDetails->data->extraDescription)
            <div class="card animated pulse overflow-hidden static-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">{{ $bundleDetails->data->extraDescription }}</h6>
                    </div>
                </div>
            </div>
            @endisset
            <div class="card animated fadeInUp">
                <img class="card-img-top" src="{{ $bundleDetails->data->displayIcon }}" style="max-height: 700px">
                <div class="card-img-overlay d-flex flex-column align-items-end">

                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="wrapper" >
                            <div class="scrolls" id="bundleList">
                                @foreach($bundle->data[0]->items as $item)
                                    <div class="card static-card bg-light-primary bg-gradient mx-2">
                                        <a href="{{ route('skin-info', ['id' => $item->uuid]) }}" class="">
                                            <div class="card-body">
                                                <h4 class="card-title mb-2">{{ $item->name }}</h4>
                                                <img class="img-responsive mx-3" src="{{ $item->image }}" height="100">
                                                <h6 class="card-text mt-0">
                                                    {{ $item->base_price }} VP
                                                </h6>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="animated fadeInUp text-muted">*The items of the bundle may take several minutes to hours to update after a new bundle is released.</h6>
        </div>
@endsection
