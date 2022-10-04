<header>
    <section id="top_bar">
        <div class="container">
            <div class="row">
                <div class="col-7 col-md-3">
                    <div class="search livesearch my-1">
                        <input type="search" id="search" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        <div class="result" id="result" name="result">

                        </div>
                    </div>
                </div>
                <div class="col-5 col-md-9 text-end header_items">
                    <p class="text-white m-0">
                        <span class="display-non-mb">
                            <i class="fa-solid fa-location-dot px-2"></i>
                            Số 54 Nguyễn Oanh, Phường 7, Quận Gò Vấp, Tp. Hồ Chí Minh
                        </span>
                        <span class="display-non-mb">
                            <i class="fa-solid fa-phone-flip px-2"></i>
                            Hotline: 0907.45.81.76 (Ms. Vàng)
                        </span>
                        <span class="display-non-mb">
                            <i class="fa-solid fa-envelope px-2"></i>
                            luhanh@balitourist.com.vn
                        </span>
                        <span class="display-non-dt">
                            <a href="#" class="fb_link">
                                <i class="fa-brands fa-facebook-f fb_design"></i>
                            </a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid menu_relative">
                <a class="navbar-brand img_absolute" href="{{ route('index.publish')}}">
                    <img src="https://balitourist.com.vn/public/uploads/files/logo.webp" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-5" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">GIỚI THIỆU</a>
                            <ul class="dropdown-menu1">
                                <li>Về balitourist</li>
                                <li>Cảm nhận khách hàng</li>
                                <li>hình ảnh tư liệu</li>
                                <li>câu hỏi thường gặp</li>
                                <li>Thông tin tuyển dụng</li>
                            </ul>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('dulichtrongnuoc.publish') }}">DL TRONG NƯỚC</a>
                            <ul class="dropdown-menu1">
                                <li>Phú Quốc</li>
                                <li>Phú Yên</li>
                                <li>Đà Nẵng</li>
                                <li>quy nhơn</li>
                                <li>Côn Đảo</li>
                                <li>hà nội</li>
                                <li>cần giờ</li>
                            </ul>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('dulichngoainuoc.publish') }}">DL NGOÀI NƯỚC</a>
                            <ul class="dropdown-menu1">
                                <li>Bangkok thái lan</li>
                                <li>Singapore - malaysia</li>
                                <li>hàn quốc</li>
                                <li>đảo bali</li>
                            </ul>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">DANH MỤC DU LỊCH</a>
                            <ul class="dropdown-menu1">
                                <li>tour hàng ngày</li>
                                <li>tour trekking</li>
                                <li>Tour quốc tế</li>
                                <li>Tour hàng tuần</li>
                                <li>tour sinh thái</li>
                                <li>teambulding</li>
                            </ul>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">CẨM NANG</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">LIÊN HỆ</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">FANPAGE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>