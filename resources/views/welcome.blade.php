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
            <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.comprar') }} > </a>
        </div>
        <div class="col-auto">
            <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.alquilar') }} > </a>
        </div>
    </div>
</section>

<section class="section-title">
    <div class="row d-flex justify-content-center">
        <div class="col-11 col-xl-6 text-center">
            <h2>{{ __('variable.proporcionar_servicio') }}</h2>
        </div>
    </div>
</section>
<section class="section-service">
    <div class="row d-flex justify-content-center h-100">
        <div class="col-xl-6">
            <div class="card h-100 ms-xl-4">
                <img src="{{ asset('images/yacht.webp') }}" class="card-img-top" alt="yacht" loading="lazy">
                <div class="card-body text-center">
                    <h4>{{ __('variable.comprar_yate') }}</h4>
                    <p>{{ __('variable.comprar_yate_subtitulo') }}</p>
                    <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.buscar_yate_venta') }} > </a>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card h-100 me-xl-4">
                <img src="{{ asset('images/charter_yacht.webp') }}" class="card-img-top"  alt="charter yacht"  loading="lazy">
                <div class="card-body text-center">
                    <h4>{{ __('variable.alquilar_yate') }}</h4>
                    <p>{{ __('variable.alquilar_yate_subtitulo') }}</p>
                    <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.buscar_yate_alquiler') }} ></a>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card h-100 ms-xl-4">
                <img src="{{ asset('images/yacht_2.webp') }}" class="card-img-top"  alt="yacht"  loading="lazy">
                <div class="card-body text-center">
                    <h4>{{ __('variable.vender_yate') }}</h4>
                    <p>{{ config('app.name', 'Laravel').'  '.__('variable.vender_yate_subtitulo') }}</p>
                    <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.mas_informacion') }} ></a>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card h-100 me-xl-4">
                <img src="{{ asset('images/yacht_3.webp') }}" class="card-img-top"  alt="yacht"  loading="lazy">
                <div class="card-body text-center">
                    <h4>{{ __('variable.propietario_yate') }}</h4>
                    <p>{{ config('app.name', 'Laravel').'  '.__('variable.oferta_servicios') }}</p>
                    <a href="" class="btn btn-primary py-2 px-3">{{ __('variable.buscar_yate_alquiler') }} ></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
