@include('layouts.head')
@extends('user_panel.part.tema')
@section('content')
    @include('user_panel.part.banner', [
        'dynamicBannerText' => 'Araçlar',
    ])
    <div class="container">
        <div class="card">

            <div class="titledark">
                <h6>Eğitim Araçları</h6>
            </div>

            <p>{!! $user_side->vehicleInfo !!}</p>
        </div>

        <x-title-card-component title="Araçlar" />

        <div class="row vehicles">

            <div class="row">
                {{-- foreach başlangıcı --}}
                @foreach ($vehicles as $vehicle)
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="cardwimage borderedcard p-3">
                            <img src="img\mainPage.png" alt=""class="borderedimage p-1" style="width: 100%;">
                            <div class="col-sm-12 mt-2">
                                <div class="textVehicle">
                                    <h6>{{ $vehicle->brand }} {{ $vehicle->model }}</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 pr-2 pt-1">
                                    <div class="textVehicle">
                                        <p>{{ $vehicle->year }}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-2 pt-1">
                                    <div class="textVehicle">
                                        <p>{{ $vehicle->gear_type }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- foreach bitişi --}}


            </div>
        </div>

    </div>

    <br>
    </div>
@endsection
