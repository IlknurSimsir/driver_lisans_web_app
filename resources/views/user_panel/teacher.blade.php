@include('layouts.head')
@extends('user_panel.part.tema')
@section('content')
@include('user_panel.part.banner', [
'dynamicBannerText' => 'Eğitmenlerimiz',
])
<div class="container">

    <div class="row tacherInfoCard">
        <div class="col-lg-6 col-sm-12 col-md-6 p-3">
            <div class="card ">
                <div class="titledark">
                    <h6>Teorik Ders Eğitmenlerimiz</h6>
                </div>

                <p>{!! $user_side->teacherInfoTheoretical !!}</p>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12 col-md-6 p-3">
            <div class="card ">
                <div class="titledark">
                    <h6>Pratik Ders Eğitmenlerimiz</h6>
                </div>

                <p>{!! $user_side->teacherInfoPractical !!}</p>
            </div>
        </div>
    </div>

    <x-title-card-component title="Eğitmenlerimiz" />


    <div class="row  mt-3">
        {{-- foreah başlangıcı --}}
        @foreach ($teachers as $teacher)
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4 ">
            <div class="borderCard p-1">
                <div class="cardwimage">

                    <img src="{{ asset($teacher->photo) }} " alt="teacherImg" class="teacherImg borderCard">
                    <h6 class='mt-3 teacherName'>{{ $teacher->name }} {{ $teacher->surname }}</h6>
                    <div class="teacherStatus">
                        <a href="tel:+900000000000" class="btn cardbtn borderCard ">{{ $teacher->explanation }}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{-- foreah bitişi --}}
    </div>


</div>

<br>
</div>
@endsection