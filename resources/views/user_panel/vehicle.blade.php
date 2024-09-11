@include('layouts.head')
@extends('user_panel.part.tema')
@section('content')

<div>
    <img src="img\mainPage.png" class="bannerImg" alt="">
</div>
<div class="container">
    <div class="card">

        <div class="titledark">
            <h6>Eğitim Araçları</h6>
        </div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae cupiditate quo sed, necessitatibus est culpa nulla reiciendis temporibus? Enim veniam, dolorum deleniti aut quas repellat inventore ducimus molestias explicabo?</p>
    </div>

    <div class="text-center  mt-3">
        <div class="titlelight">
            <h6>Araçlar</h6>
        </div>
    </div>
    <div class="row vehicles">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cardwimage m-1">
                    <img src="img\mainPage.png" alt="" style="width: 100%;">
                    <div class="col-sm-12 mt-2">
                        <div class="textVehicle">
                            <h6>renaultclio</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 pr-3 pt-2">
                            <div class="textVehicle">
                                <p>manuel</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pl-3 pt-2">
                            <div class="textVehicle">
                                <p>otomatik</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cardwimage m-1">
                    <img src="img\mainPage.png" alt="" style="width: 100%;">
                    <h6 class='mt-3'>Bayır Diamond</h6>
                    <div>
                        <a href="tel:+900000000000" class="btn btn-dark cardbtn">Telefon</a>
                    </div>
                    <div>
                        <a href="https://www.google.com/maps?q=adresiniz" class="btn btn-dark cardbtn" target="_blank">Adres</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cardwimage m-1">
                    <img src="img\mainPage.png" alt="" style="width: 100%;">
                    <h6 class='mt-3'>Bayır Diamond</h6>
                    <div>
                        <a href="tel:+900000000000" class="btn btn-dark cardbtn">Telefon</a>
                    </div>
                    <div>
                        <a href="https://www.google.com/maps?q=adresiniz" class="btn btn-dark cardbtn" target="_blank">Adres</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cardwimage m-1">
                    <img src="img\mainPage.png" alt="" style="width: 100%;">
                    <h6 class='mt-3'>Bayır Diamond</h6>
                    <div>
                        <a href="tel:+900000000000" class="btn btn-dark cardbtn">Telefon</a>
                    </div>
                    <div>
                        <a href="https://www.google.com/maps?q=adresiniz" class="btn btn-dark cardbtn" target="_blank">Adres</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<br>
</div>
@endsection