@include('layouts.head')
@extends('user_panel.part.tema')
@section('content')

<div>
    <img src="img\mainPage.png" class="bannerImg" alt="">
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-sm-12 col-md-6 p-3">
            <div class="card ">
                <div class="titledark">
                    <h6>Teorik Ders Eğitmenlerimiz</h6>
                </div>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae cupiditate quo sed, necessitatibus est culpa nulla reiciendis temporibus? Enim veniam, dolorum deleniti aut quas repellat inventore ducimus molestias explicabo?</p>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12 col-md-6 p-3">
            <div class="card ">
                <div class="titledark">
                    <h6>Teorik Ders Eğitmenlerimiz</h6>
                </div>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae cupiditate quo sed, necessitatibus est culpa nulla reiciendis temporibus? Enim veniam, dolorum deleniti aut quas repellat inventore ducimus molestias explicabo?</p>
            </div>
        </div>
    </div>

    <div class="text-center  mt-3">
        <div class="titlelight">
            <h6>Eğitmenlerimiz</h6>
        </div>
    </div>

    <div class="row  mt-3">

        <div class="col-lg-4 col-sm-12 col-md-4 ">
            <div class="backgroundcard p-1">
                <div class="cardwimage">
                    <img src="img\mainPage.png" alt="teacherImg" class="teacherImg">
                    <h6 class='mt-3 teacherName'>İsim Soyisim</h6>
                    <div class="teacherStatus">
                        <a href="tel:+900000000000" class="btn cardbtn ">Direksiyon Ders Eğitmeni</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<br>
</div>
@endsection