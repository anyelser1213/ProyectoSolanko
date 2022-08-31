@extends('layouts.app')

@section('content')
<section class="section-main position-relative">
    <video class="video_homepage" src="{{ asset('video/homepage.mp4') }}" autoplay="" playsinline="" loop="" muted="" preload="auto"></video>
    <div class="position-absolute positionAudio">
        <i class="fas fa-volume-mute"></i>
        <i class="fas fa-volume-up d-none"></i>
    </div>
    <div class="row position-absolute buttonMain">
        <div class="col-auto">
            <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.buy') }} > </a>
        </div>
        <div class="col-auto">
            <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.charter') }} ></a>
        </div>
    </div>
</section>

<section class="section-title">
    <div class="row d-flex justify-content-center">
        <div class="col-11 col-xl-6 text-center">
            <h2>{{ __('variable.providing_service') }}</h2>
        </div>
    </div>
</section>
<section class="section-service">
    <div class="row d-flex justify-content-center h-100">
        <div class="col-xl-6">
            <div class="card h-100 ms-xl-4">
                <img src="{{ asset('images/yacht.webp') }}" class="card-img-top" alt="yacht" loading="lazy">
                <div class="card-body text-center">
                    <h4>{{ __('variable.buy_yacht') }}</h4>
                    <p>{{ __('variable.buy_yacht_subtitle') }}</p>
                    <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.search_yacht_sale') }} > </a>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card h-100 me-xl-4">
                <img src="{{ asset('images/charter_yacht.webp') }}" class="card-img-top"  alt="charter yacht"  loading="lazy">
                <div class="card-body text-center">
                    <h4>{{ __('variable.charter_yacht') }}</h4>
                    <p>{{ __('variable.charter_yachtt_subtitle') }}</p>
                    <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.search_yacht_charter') }} ></a>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card h-100 ms-xl-4">
                <img src="{{ asset('images/yacht_2.webp') }}" class="card-img-top"  alt="yacht"  loading="lazy">
                <div class="card-body text-center">
                    <h4>{{ __('variable.selling_yacht') }}</h4>
                    <p>{{ config('app.name', 'Laravel').'  '.__('variable.selling_yacht_subtitle') }}</p>
                    <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.find_out_more') }} ></a>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card h-100 me-xl-4">
                <img src="{{ asset('images/yacht_3.webp') }}" class="card-img-top"  alt="yacht"  loading="lazy">
                <div class="card-body text-center">
                    <h4>{{ __('variable.superyacht_owner') }}</h4>
                    <p>{{ config('app.name', 'Laravel').'  '.__('variable.offers_services') }}</p>
                    <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.search_yacht_charter') }} ></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
