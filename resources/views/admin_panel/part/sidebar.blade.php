<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="/admin_index" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-address-card me-2"></i>{{ $companyName }}</h3>
        </a>
        <hr>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.webp" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Session::get('user_name') }}</h6>
                <span>Yönetici</span>
            </div>
        </div>

        <div class="navbar-nav w-100">
            <a href="/admin_index" class="nav-item nav-link {{ Request::is('admin_index') ? 'active' : '' }}">
                <i class="fa fa-home me-2"></i>Anasayfa
            </a>
            <hr>
            <a href="/announcement" class="nav-item nav-link {{ Request::is('announcement') ? 'active' : '' }}">
                <i class="fa fa-bullhorn me-2"></i>Duyuru
            </a>
            <hr>
            <a href="/organisation" class="nav-item nav-link {{ Request::is('organisation') ? 'active' : '' }}">
                <i class="fa fa-building me-2"></i>Kurum Bilgisi
            </a>
            <hr>
            <a href="/substation" class="nav-item nav-link {{ Request::is('substation') ? 'active' : '' }}">
                <i class="fa fa-map-marker-alt me-2"></i>Şube
            </a>
            <hr>
            <a href="/manager" class="nav-item nav-link {{ Request::is('manager') ? 'active' : '' }}">
                <i class="fa fa-user-tie me-2"></i>Yönetici
            </a>
            <hr>
            <a href="/student" class="nav-item nav-link {{ Request::is('student') ? 'active' : '' }}">
                <i class="fa fa-user-graduate me-2"></i>Öğrenci
            </a>
            <hr>
            <a href="/teacher" class="nav-item nav-link {{ Request::is('teacher') ? 'active' : '' }}">
                <i class="fa fa-book me-2"></i>Eğitmen
            </a>
            <hr>
            <a href="/class" class="nav-item nav-link {{ Request::is('class') ? 'active' : '' }}">
                <i class="fa fa-chalkboard me-2"></i>Sınıf
            </a>
            <hr>
            <a href="/lesson" class="nav-item nav-link {{ Request::is('lesson') ? 'active' : '' }}">
                <i class="fa fa-book-open me-2"></i>Ders
            </a>
            <hr>
            <a href="/resource" class="nav-item nav-link {{ Request::is('resource') ? 'active' : '' }}">
                <i class="fa fa-box me-2"></i>Kaynak
            </a>
            <hr>
            <a href="/importand_information"
                class="nav-item nav-link {{ Request::is('importand_information') ? 'active' : '' }}">
                <i class="fa fa-info-circle me-2"></i>Önemli Bilgi
            </a>
            <hr>
            <a href="/test" class="nav-item nav-link {{ Request::is('test') ? 'active' : '' }}">
                <i class="fa fa-vials me-2"></i>Test
            </a>







        </div>
    </nav>
</div>