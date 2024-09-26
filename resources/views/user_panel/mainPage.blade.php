@include('layouts.head')
@extends('user_panel.part.tema')
@section('content')
    <div class="container">
        <div>
            <img src="img\mainPage.png" class="sliderImg" alt="">
        </div>
        <div class="card">

            <div class="titledark">
                <h6>ABC KURSU EHLİYET</h6>
            </div>

            <p>{!! $user_side->mainInfo !!}</p>
        </div>


        <x-title-card-component title="EHLİYETİMİ ALIYORUM" />
        <div class="row mainPageThreePart mt-3">
            <div class="col-lg-4 col-sm-12 col-md-4">
                <div class="card">
                    <div class="icon">
                        <i class="fa fa-id-card"></i>
                    </div>
                    <p>{!! $user_side->driverStage1 !!}</p>
                </div>
                <button class="btn btn-success w-100">İletişim İçin Tıklayınız</button>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-4">
                <div class="card">
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <p>{!! $user_side->driverStage2 !!}</p>
                </div>
                <button class="btn btn-success w-100">Dersler İçin Tıklayınız</button>

            </div>
            <div class="col-lg-4 col-sm-12 col-md-4">
                <div class="card">
                    <div class="icon">
                        <i class="fa fa-map-signs"></i>
                    </div>
                    <p>{!! $user_side->driverStage3 !!}</p>
                </div>
                <button class="btn btn-success w-100">Güzergah İçin Tıklayınız</button>

            </div>
        </div>

        @include('user_panel.part.communicationForm')

        <x-title-card-component title="ŞUBELERİMİZ" />

        <div class="row  mt-3">
            @foreach ($substations as $substation)
                <div class="col-lg-4 col-sm-12 col-md-4 ">
                    <div class="backgroundcard ">
                        <div class="cardwimage">
                            <img src="img\mainPage.png" alt="" style="width: 100%;">
                            <h6 class='mt-3'>{{ $substation->substation_name }}</h6>
                            <div>
                                <a href="tel:+90{{ $substation->phone }}"
                                    class="btn btn-light cardbtn">{{ $substation->phone }}</a>
                            </div>
                            <div>
                                <a href="{{ $substation->maps }}" class="btn btn-light cardbtn"
                                    target="_blank">{{ $substation->address }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
