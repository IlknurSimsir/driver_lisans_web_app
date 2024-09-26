@include('layouts.head')
@extends('user_panel.part.tema')
@section('content')
    @include('user_panel.part.banner', [
        'dynamicBannerText' => 'Dersler',
    ])
    <div class="container">

        <div class="row mainDiamond">
            {{-- her bir karo --}}
            {{-- foreah başlangıcı --}}
            @foreach ($lessons as $lesson)
                <div class="diamond-container col-6 col-sm-6 col-md-3 col-lg-2">
                    <!-- Üstteki üçgen -->
                    <div class="top-triangle">
                        <img src="img/mainPage.png" alt="Üçgen Resim" class="triangle-image">
                    </div>

                    <!-- Alttaki ters üçgen iki parçaya bölünecek -->
                    <div class="bottom-triangle">
                        <div class="upper-part">
                            {{ $lesson->name }}
                        </div>
                        <div class="lower-part bg-success">
                            <i class="{{ $lesson->icon }} iconText"></i>
                            <!-- Buraya bir ikon ekledim, istediğiniz ikonu kullanabilirsiniz -->
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endsection
