<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50388.9198330789!2d32.45534513483561!3d37.876491121449796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d085b6d1aa3341%3A0x2297b267efcc5101!2sKonya%20G%C4%B1da%20ve%20Tar%C4%B1m%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1725966687200!5m2!1str!2str"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
<div class="footer-card">
    <footer>
        <div class="container">
            <div class="row text-center ">

                <div class="col-sm-4 col-md-4 col-lg-4 item">
                    <h3>{{ $companyName }}</h3>
                    <div>
                        <a class="navbar-brand" href="#">
                            <img src="{{ Storage::url($companyLogo) }}" alt="{{ $companyName }} logo" width="200px">
                        </a>
                    </div>
                    <div class="icon-container">
                        <a href="https://www.instagram.com" target="_blank" class="social-icon instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com" target="_blank" class="social-icon facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.youtube.com" target="_blank" class="social-icon youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="social-icon twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://apps.apple.com" target="_blank" class="social-icon app-store">
                            <i class="fab fa-apple"></i>
                        </a>
                        <a href="https://play.google.com" target="_blank" class="social-icon play-store">
                            <i class="fab fa-google-play"></i>
                        </a>
                    </div>



                </div>


                <div class="col-sm-4 col-md-4 col-lg-4 item">
                    <h3>HIZLI ERİŞİM</h3>
                    <ul>
                        <li>
                            <a href="/">Anasayfa</a>
                        </li>
                        <li>
                            <a href="/aboutUs">Hakkımızda</a>
                        </li>
                        <li>
                            <a href="/driverLicence">Sürücü Belgeleri</a>
                        </li>
                        <li>
                            <a href="/teachers">Eğitmenlerimiz</a>
                        </li>
                        <li>
                            <a href="/vehicles">Araçlar</a>
                        </li>
                        <li>
                            <a href="/route">Güzergahlar</a>
                        </li>
                        <li>
                            <a href="/lessons">Dersler</a>
                        </li>
                        <li>
                            <a href="/sss">SSS</a>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 item">
                    <h3>İLETİŞİM</h3>
                    <ul>
                        Çalışma Saatlerimiz
                        <li>Hafta İçi : {{ $companyWeekDay }}</li>
                        <li>Cumartesi : {{ $companySaturday }}</li>
                        <li>Pazar : {{ $companySunday }}</li>
                        <li>Telefon : <a href="tel:{{ $companyPhone }}">{{ $companyPhone }}</a></li>
                        <li>E-Posta : <a href="mailto:{{ $companyEmail }}">{{ $companyEmail }}</a></li>
                        <li>Adres : <a href="mailto:{{ $companyAddress }}">{{ $companyAddress }}</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
</div>
