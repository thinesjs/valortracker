@extends('parts.layout')

@section('content')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <h1 class="mb-0 fw-bold">Daily Store</h1>
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
                    in {{ gmdate('h \h\o\u\r\s i \s\e\c\o\n\d\s', $rawPlayerStore->SkinsPanelLayout->SingleItemOffersRemainingDurationInSeconds) }}</p>
                </div>
            </div>
        </div>
        <?php $i=0; ?>
        <div class="container-fluid">
            <div class="row">
                @foreach($weaponDisplayNames as $weaponDisplayName)
                    <div class="col-md-6 col-lg-3 mb-3 animated fadeInUp">
                        <a href="{{ route('skin-info', ['id' => $weaponDisplayName->data->uuid]) }}" class="card static-card bg-light bg-gradient text-white w-100 card-hover h-100">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center">
                                    <img class="card-img-top img-responsive px-3 py-3"
                                         src="{{ $weaponDisplayName->data->displayIcon }}" alt="{{ $weaponDisplayName->data->displayName }}">
                                </div>
                                <div class="mt-auto">
                                    <h4 class="card-title mb-1">
                                        {{ $weaponDisplayName->data->displayName }}
                                    </h4>
                                    <h6 class="card-text fw-normal">
                                        {{ $rawPlayerStore->SkinsPanelLayout->SingleItemStoreOffers[$i++]->Cost->{'85ad13f7-3d1b-5128-9eb2-7cd8ee0b5741'} }} VP
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            @if(!empty($nightmarketDisplayNames))
            <div class="page-titles">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12 align-self-center">
                        <h2 class="mb-0 fw-bold">Nightmarket</h2>
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
                        in {{ gmdate('d \d\a\y\s h \h\o\u\r\s i \s\e\c\o\n\d\s', $rawPlayerStore->BonusStore->BonusStoreRemainingDurationInSeconds) }}</p>
                    </div>
                </div>
            </div>
            
            <?php $i=0; ?>
            <div class="container-fluid">
                <div class="row">
                    @foreach($nightmarketDisplayNames as $nightmarketDisplayName)
                        <div class="col-md-6 col-lg-2 mb-3 animated fadeInUp">
                            <a href="{{ route('skin-info', ['id' => $nightmarketDisplayName->data->uuid]) }}" class="card static-card bg-light-primary bg-gradient text-white w-100 card-hover h-100">
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <img class="card-img-top img-responsive px-3 py-3"
                                             src="{{ $nightmarketDisplayName->data->displayIcon }}" alt="{{ $nightmarketDisplayName->data->displayName }}">
                                    </div>
                                    <div class="mt-auto">
                                        <h4 class="card-title mb-1">
                                            {{ $nightmarketDisplayName->data->displayName }}
                                        </h4>
                                        <h6 class="card-text fw-normal">
                                            {{ $rawPlayerStore->BonusStore->BonusStoreOffers[$loop->index]->DiscountCosts->{'85ad13f7-3d1b-5128-9eb2-7cd8ee0b5741'} }} VP
                                            <del>{{ $rawPlayerStore->BonusStore->BonusStoreOffers[$loop->index]->Offer->Cost->{'85ad13f7-3d1b-5128-9eb2-7cd8ee0b5741'} }} VP</del>
                                            <span class="badge rounded-pill text-bg-danger">-{{ $rawPlayerStore->BonusStore->BonusStoreOffers[$loop->index]->DiscountPercent }} %</span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <h6 class="animated fadeInUp text-muted text-end">*Press on a skin to preview variants and levels.</h6>
            </div>
            @endif
        </div>
@endsection
