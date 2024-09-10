<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="/admin_index">
                                <div class="text-center">
                                    <img src="{{ Storage::url($companyLogo) }}" alt="{{ $companyName }} logo" width="30%">
                                </div>
                            </a>
                        </div>
                        <div>
                            <h3>Yeni Parola</h3>
                        </div>
                        <form action="{{ route('newPasswordPost') }}" method="post">
                            @csrf
                            <input type="hidden" name="forgot_token" value="{{ $forgot_token }}">

                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Parola</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Parolayı Değiştir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tempus Dominus JS -->
    <script src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.0.0-beta.1/build/js/tempus-dominus.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Waypoints JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <!-- Easing JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom JS (Optional) -->
    <script src="{{ asset('js/main.js') }}"></script>


    <!-- Spinner Hide Script -->
    <script>
        $(window).on('load', function() {
            $('#spinner').fadeOut();
        });
    </script>
</body>

</html>