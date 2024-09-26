@include('layouts.head')

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        @include('component.loading')
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        @include('admin_panel.part.sidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin_panel.part.navbar')
            <!-- Navbar End -->

            <!-- -- içerik kısmı -- -->

            @include('admin_panel.part.summernote', [
                'variable' => $user_side->vehicleInfo,
                'name' => 'vehicleInfo',
                'label' => 'Araç Bilgilendirme',
                'route' => 'editVehiclePost',
            ])

            <!-- içerik kısmı sonu -->

            <!-- Footer Start -->
            @include('admin_panel.part.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        @include('component.backToTop')
    </div>

</body>
@include('layouts.script')
