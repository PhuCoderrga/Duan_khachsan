@extends('user.layout.master')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="image-wrapper">
                    <img src="https://balitourist.com.vn/public/images/slideshow_2.webp" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--Box tìm kiếm-->
    <section id="box_tim_kiem" class="container">
        <form action="" method="get" id="des_search" class="shadow mb-5 bg-body rounded">
            <div class="show">
                <span class="btn btn-warning w-100 text-white">TÌM KIẾM</span>
                <div id="box_search" class="row">
                    <div class="col-12 col-md-4">
                        <p class="title_box">Nhóm tour </p>
                        <select name="" id="" class="form-control rounded-pill">
                            <option value="">--Tất Cả--</option>
                            <option value="">Cà mau</option>
                            <option value="">Mũi né</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <p class="title_box">Nơi Khởi hành</p>
                        <select name="" id="" class="form-control rounded-pill">
                            <option value="">--Tất Cả--</option>
                            <option value="">Cà mau</option>
                            <option value="">Mũi né</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <p class="title_box">Nơi đến</p>
                        <select name="" id="" class="form-control rounded-pill">
                            <option value="">--Tất Cả--</option>
                            <option value="">Cà mau</option>
                            <option value="">Mũi né</option>
                        </select>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-3 mb-3">
                        <button class="btn btn-warning text-white fx">TÌM KIẾM</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!--banner Desktop-->
    <section id="banner_desktop" class="display-non-mb">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="https://balitourist.com.vn/public/images/banner_top_1.webp" class="img-fluid rounded"
                        alt="">
                </div>
                <div class="col-6">
                    <img src="https://balitourist.com.vn/public/images/banner_top_2.webp" class="img-fluid rounded"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <!--Main DeskTop-->

    <section id="main_desktop">
        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col-12">
                    <div class="home-nav-tab" id="tab_content_1">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <ul class="main-nav">
                                    <li class="nav-item active rounded">DL Trong Nước</li>
                                    <li class="nav-item">DL Ngoài Nước</li>
                                    <li class="nav-item"> Tour Khuyến mãi</li>
                                </ul>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end">
                                <a href="" class="link-nav">
                                    Xem thêm >>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab_content_2">
                        <div class="show_product row">
                            @foreach($products->get() as $key => $product)
                            <div class="col-xl-3 col-md-4 col-6">
                                <div class="item rounded">
                                    <a href="{{route('chitiettour.punlish',['id' => $product->id]) }}"
                                        class="item-detail">
                                        <div class="product_img">
                                            <img class="img-fluid border px-1 py-2 w-100 h-100"
                                                src="{{asset($product->feature_img)}}" alt="">
                                        </div>
                                        <p class="name_product">{{ $product->name}}</p>
                                        <p class="price_product">{{ number_format($product->price)}} vnđ</p>
                                        <button class="btn btn-warning w-100">Đặt ngay</button>
                                    </a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="home-nav-tab" id="tab_content_1">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <ul class="main-nav">
                                    <li class="nav-item active rounded">DL Trong Nước</li>
                                    <li class="nav-item">DL Ngoài Nước</li>
                                    <li class="nav-item"> Tour Khuyến mãi</li>
                                </ul>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end">
                                <a href="" class="link-nav">
                                    Xem thêm >>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab_content_2">
                        <div class="show_product row">
                            @foreach($products->get() as $key => $product)
                            <div class="col-xl-3 col-md-4 col-6">
                                <div class="item rounded">
                                    <a href="" class="item-detail">
                                        <div class="product_img">
                                            <img class="img-fluid border px-1 py-2 w-100 h-100"
                                                src="{{asset($product->feature_img)}}" alt="">
                                        </div>
                                        <p class="name_product">{{ $product->name}}</p>
                                        <p class="price_product">{{ number_format($product->price)}} vnđ</p>
                                        <button class="btn btn-warning w-100">Đặt ngay</button>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Doi Tac-->

    <section id="doi_tac">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="title_doitac">đối Tác</p>
                </div>
                <div class="col-12">
                    <div class="slider_autoplay">
                        <div>
                            <img class="w-100"
                                src="https://balitourist.com.vn/public/uploads/images/partner/popular_brand_img_3.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="w-100"
                                src="https://balitourist.com.vn/public/uploads/images/partner/popular_brand_img_6.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="w-100"
                                src="https://balitourist.com.vn/public/uploads/images/partner/popular_brand_img_5.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="w-100"
                                src="https://balitourist.com.vn/public/uploads/images/partner/popular_brand_img_1.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="w-100"
                                src="https://balitourist.com.vn/public/uploads/images/partner/popular_brand_img_4.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="w-100"
                                src="https://balitourist.com.vn/public/uploads/images/partner/popular_brand_img_2.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="w-100"
                                src="https://balitourist.com.vn/public/uploads/images/partner/popular_brand_img_3.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="w-100"
                                src="https://balitourist.com.vn/public/uploads/images/partner/popular_brand_img_6.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="w-100"
                                src="https://balitourist.com.vn/public/uploads/images/partner/popular_brand_img_5.webp"
                                alt="">
                        </div>
                        <div>
                            <img class="w-100"
                                src="https://balitourist.com.vn/public/uploads/images/partner/popular_brand_img_1.webp"
                                alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

</main>
@endsection

@push('scripts')
<!--Js Nhà Làm-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://balitourist.com.vn/public/lib/jquery/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('user/assets/js/slick-1.8.1/slick/slick.min.js')}}"></script>
<!--endJS-->
<script>
    $('.slider_autoplay').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
});
</script>
@endpush