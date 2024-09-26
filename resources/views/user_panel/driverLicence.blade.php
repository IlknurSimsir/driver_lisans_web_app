@include('layouts.head')
@extends('user_panel.part.tema')
@section('content')
    @include('user_panel.part.banner', [
        'dynamicBannerText' => 'Sürücü Belgeleri',
    ])
    <div class="container">
        <div class="card">
            <div class="titledark">
                <h6>Sürücü Belgeleri</h6>
            </div>
            <p>{!! $user_side->driverLicenceInfo !!}</p>
        </div>

        <x-title-card-component title="Sürücü Belgeleri" />
        <div class="row ">

        </div>
        <div class="slider">
            <div class="slide-track">
                {{-- foreach --}}
                @foreach ($licence_type as $type)
                    <div class="slide">
                        <div class="licence ">
                            <img src="img\mainPage.png" alt="" style="width: 100%;">
                            <h3 class='mt-3'>{{ $type->type }} </h3>
                            <p class='mt-6'>{{ $type->explanation }} </p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>

    <br>
    </div>
@endsection
