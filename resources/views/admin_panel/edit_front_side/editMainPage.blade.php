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
            @include('admin_panel.part.summernoteFour', [
                'label1' => 'Anasayfa Bilgilendirme',
                'variable1' => $user_side->mainInfo,
                'name1' => 'mainInfo',
                'label2' => 'İlk Aşama',
                'variable2' => $user_side->driverStage1,
                'name2' => 'driverStage1',
                'label3' => 'İkinci Aşama',
                'variable3' => $user_side->driverStage2,
                'name3' => 'driverStage2',
                'label4' => 'Üçüncü Aşama',
                'variable4' => $user_side->driverStage3,
                'name4' => 'driverStage3',
                'route' => 'editMainPagePost',
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
