@include('layouts.head')
@extends('user_panel.part.tema')
@section('content')

<div>
    <img src="img\mainPage.png" class="bannerImg" alt="">
</div>
<div class="container">
    <div class="card">

        <div class="titledark">
            <h6>Hakkımızda</h6>
        </div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae cupiditate quo sed, necessitatibus est culpa nulla reiciendis temporibus? Enim veniam, dolorum deleniti aut quas repellat inventore ducimus molestias explicabo?</p>
    </div>

    <div class="text-center  mt-3">
        <div class="titlelight">
            <h6>Sayılarla ABC</h6>
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-3 col-sm-12 col-md-6 p-5">
            <div class="splittedCard">
                <div class="splits firstColor Top">
                    2332
                </div>
                <div class="splits mt-3">
                    <i class="fa fa-vials"></i>
                </div>
                <div class="splits mt-3 firstColor Bottom">
                    Kişi
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6 p-5">
            <div class="splittedCard">
                <div class="splits secondColor Top">
                    2332
                </div>
                <div class="splits mt-3">
                    <i class="fa fa-vials"></i>
                </div>
                <div class="splits mt-3 secondColor Bottom">
                    Araç
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6 p-5">
            <div class="splittedCard">
                <div class="splits thirdColor Top">
                    2332
                </div>
                <div class="splits mt-3">
                    <i class="fa fa-vials"></i>
                </div>
                <div class="splits mt-3 thirdColor Bottom">
                    Eğitmen
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-12 col-md-6 p-5">
            <div class="splittedCard">
                <div class="splits fourthColor Top">
                    2332
                </div>
                <div class="splits mt-3">
                    <i class="fa fa-vials"></i>
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