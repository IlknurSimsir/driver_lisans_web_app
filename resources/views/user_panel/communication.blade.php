@include('layouts.head')
@extends('user_panel.part.tema')
@section('content')
    @include('user_panel.part.banner', [
        'dynamicBannerText' => 'İletişim',
    ])
    <div class="container">

        <div class="comdiv topcom">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="comm_icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h6>Telefon</h6>
                    <div class="comm_info">
                        <p>
                            <a href="tel:{{ $organisations->phone }}">{{ $organisations->phone }}</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="comm_icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <h6>Adres</h6>
                    <div class="comm_info">
                        <p>
                            <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($organisations->address) }}"
                                target="_blank">{!! $organisations->address !!}</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="comm_icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h6>Mail</h6>
                    <div class="comm_info">
                        <p>
                            <a href="mailto:{{ $organisations->email }}">{{ $organisations->email }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="comdiv bottomcom">
            @include('user_panel.part.communicationForm')

        </div>
        <br>
    </div>
@endsection
