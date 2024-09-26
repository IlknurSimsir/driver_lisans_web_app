@include('layouts.userHead')
<div class="navFixed">
    <nav class="navbar navbar-expand-lg user-navbar">
        <div class="container user-nav-text">
            <a class="navbar-brand" href="/">
                <img src="{{ Storage::url($companyLogo) }}" alt="{{ $companyName }} logo" width="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar"
                aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse text-end" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutUs">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/driverLicence">Sürücü Belgeleri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/teachers">Eğitmenlerimiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vehicles">Araçlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/route">Güzergahlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lessons">Dersler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/communication">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sss">SSS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- İkonları ortalama kısmı -->
    <div class="row navChannel">
        <div class="col-4 halfCircle bg-danger">
            <a href="tel:{{ $companyPhone }}"> <i class="fas fa-phone"></i></a>
        </div>
        <div class="col-4 halfCircle bg-warning">
            <a href="mailto:{{ $companyEmail }}"><i class="fas fa-envelope"></i></a>
        </div>
        <div class="col-4 halfCircle bg-success">
            <a href="https://wa.me/90{{ $companyPhone }}?text=Merhaba%20bilgi%20almak%20istiyorum." target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>

    </div>
</div>
