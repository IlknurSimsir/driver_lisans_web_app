@include('layouts.head')
@extends('user_panel.part.navbar')
@section('content')
<div>
    <img src="img\mainPage.png" class="sliderImg" alt="">
</div>
<div class="card">

    <div class="titledark">
        <h6>ABC KURSU EHLİYET</h6>
    </div>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae cupiditate quo sed, necessitatibus est culpa nulla reiciendis temporibus? Enim veniam, dolorum deleniti aut quas repellat inventore ducimus molestias explicabo?</p>
</div>

<div class="text-center  mt-3">
    <div class="titlelight">
        <h6>EHLİYETİMİ ALIYORUM</h6>
    </div>
</div>
<div class="row  mt-3">
    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="card">
            <div class="icon">
                <i class="fa fa-vials"></i>
            </div>
            <div class="">
                <h6>Kayıt</h6>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae cupiditate quo sed, necessitatibus est culpa nulla reiciendis temporibus? Enim veniam, dolorum deleniti aut quas repellat inventore ducimus molestias explicabo?</p>
        </div>
        <button class="btn btn-success w-100">İletişim İçin Tıklayınız</button>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="card">
            <div class="icon">
                <i class="fa fa-vials"></i>
            </div>
            <div class="">
                <h6>Yazılı Sınav</h6>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae cupiditate quo sed, necessitatibus est culpa nulla reiciendis temporibus? Enim veniam, dolorum deleniti aut quas repellat inventore ducimus molestias explicabo?</p>
        </div>
        <button class="btn btn-success w-100">Dersler İçin Tıklayınız</button>

    </div>
    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="card">
            <div class="icon">
                <i class="fa fa-vials"></i>
            </div>

            <div class="titlelittle">
                <h6>Direksiyon Sınavı</h6>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae cupiditate quo sed, necessitatibus est culpa nulla reiciendis temporibus? Enim veniam, dolorum deleniti aut quas repellat inventore ducimus molestias explicabo?</p>
        </div>
        <button class="btn btn-success w-100">Güzergah İçin Tıklayınız</button>

    </div>
</div>
<div class="text-center mt-3">
    <div class="titlelight">
        <h6>BİZE ULAŞIN</h6>
    </div>
</div>
<div class="row text-center mt-3">
    <form action="" method="post">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div class="mb-3">

                    <input type="text" class="form-control" id="addName" name="name" placeholder="Adınız" required>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div class="mb-3">

                    <input type="text" class="form-control" id="addSurame" name="surname" placeholder="Soyadınız" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div class="mb-3">

                    <input type="text" class="form-control" id="addPhone" name="phone" placeholder="Telefonunuz" required>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div class="mb-3">
                    <input type="text" class="form-control" id="addMail" name="mail" placeholder="E-posta Adresiniz" required>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="mb-3">
                <textarea name="getInfo" class="form-control" rows="4" id="getInfo" placeholder="Bilgi almak istediğiniz konu ..."></textarea>
            </div>
        </div>

        <button class="btn btn-success w-50">Gönder</button>
    </form>
</div>

<div class="text-center  mt-3">
    <div class="titlelight">
        <h6>ŞUBELERİMİZ</h6>
    </div>
</div>
<div class="row  mt-3">
    <div class="col-lg-4 col-sm-12 col-md-4 ">
        <div class="backgroundcard p-1">
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
    <div class="col-lg-4 col-sm-12 col-md-4 ">
        <div class="backgroundcard p-1">
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
    <div class="col-lg-4 col-sm-12 col-md-4 ">
        <div class="backgroundcard p-1">
            <div class="cardwimage m-1 ">
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
@endsection