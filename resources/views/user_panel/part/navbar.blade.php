@include('layouts.head')
<div class="navFixed">
    <nav class="navbar navbar-expand-lg user-navbar">
        <div class="container user-nav-text">
            <a class="navbar-brand" href="#">
                <img src="{{ Storage::url($companyLogo) }}" alt="{{ $companyName }} logo" width="60px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-end " id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutUs">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/driverLisans">Sürücü Belgeleri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/teachers">Eğitmenlerimiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vehicle">Araçlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Güzergahlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dersler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- İkonları ortalama kısmı -->
    <div class="row navChannel">
        <div class="col-md-1 navSubChannel bg-danger">
            <a style="color: white;" href="/about"> <i class="fas fa-phone"></i> <!-- İkonu buraya koyabilirsin --></a>
        </div>
        <div class="col-md-1 navSubChannel bg-warning">
            <i class="fas fa-envelope"></i> <!-- İkonu buraya koyabilirsin -->
        </div>
        <div class="col-md-1 navSubChannel bg-success">
            <i class="fab fa-whatsapp"></i> <!-- İkonu buraya koyabilirsin -->
        </div>
    </div>
</div>