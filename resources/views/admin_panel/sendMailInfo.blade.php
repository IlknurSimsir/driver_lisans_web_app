<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="/admin_index">
                            <div class="text-center"> <img src="{{ Storage::url($companyLogo) }}" alt="{{ $companyName }} logo" width="30%"></div>
                        </a>
                    </div>
                    <div>
                        <h3>Mail Gönderildi</h3>
                    </div>
                    <div>
                        <div class="mb-3">
                            <label for="floatingInput">Parola yenileme linki mail adresinize gönderildi. Lütfen mail adresinize gelen linke tıklayarak yeni parolanızı oluşturunuz.</label>
                        </div>

                        <div class="mb-4 text-end">

                            <a href="{{route('resetPasswordPage')}}">Mail gelmedi mi?</a>
                        </div>
                        <button type="button" class="btn btn-primary py-3 w-100 mb-4" onclick="window.location.href='https://www.google.com/intl/tr/gmail/about/';">Mail Adresine Git</button>
                        <div class="navbar-nav w-100 ">
                            <a href="/" class="nav-item text-center nav-link">
                                <i class="fa fa-home me-2 "></i>Anasayfa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script> <!-- JS dosyasının doğru dizinde olduğundan emin ol -->
</body>

</html>