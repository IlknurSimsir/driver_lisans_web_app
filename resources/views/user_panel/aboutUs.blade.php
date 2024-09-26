@include('layouts.head')
@extends('user_panel.part.tema')
@section('content')
    @include('user_panel.part.banner', [
        'dynamicBannerText' => 'Hakkımızda',
    ])
    <div class="container">
        <div class="card">

            <div class="titledark">
                <h6>Hakkımızda</h6>
            </div>
            <br>
            <p>{!! $user_side->aboutUsInfo !!}</p>
        </div>

        <x-title-card-component title="Sayılarla ABC" />
        <div class="row">
            <div class="col-lg-3 col-sm-12 col-md-6 p-5">
                <div class="splittedCard firstMainColor">
                    <div class="splits firstColor Top">
                        {{ $organisation_name->student_number }}
                    </div>
                    <div class="splits mt-3 ">
                        <i class="fa fa-user-graduate"></i> <!-- Öğrenci ikonu -->
                    </div>
                    <div class="splits mt-3 firstColor Bottom">
                        Öğrenci
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6 p-5">
                <div class="splittedCard secondMainColor">
                    <div class="splits secondColor Top">
                        {{ $organisation_name->teacher_number }}
                    </div>
                    <div class="splits mt-3 ">
                        <i class="fa fa-chalkboard-teacher"></i> <!-- Eğitmen ikonu -->
                    </div>
                    <div class="splits mt-3 secondColor Bottom">
                        Eğitmen
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6 p-5">
                <div class="splittedCard thirdMainColor">
                    <div class="splits thirdColor Top">
                        {{ $organisation_name->vehicle_number }}
                    </div>
                    <div class="splits mt-3 ">
                        <i class="fa fa-car"></i> <!-- Araç ikonu -->
                    </div>
                    <div class="splits mt-3 thirdColor Bottom">
                        Araç
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 col-md-6 p-5">
                <div class="splittedCard fourthMainColor">
                    <div class="splits fourthColor Top">
                        {{ $substationCount }}
                    </div>
                    <div class="splits mt-3">
                        <i class="fa fa-building"></i> <!-- Şube ikonu -->
                    </div>
                    <div class="splits mt-3 fourthColor Bottom">
                        Şube
                    </div>
                </div>
            </div>
        </div>

        <br>
    </div>
@endsection
