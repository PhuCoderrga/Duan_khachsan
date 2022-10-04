@extends('user.layout.master')
@section('content')
<main id="loaitour">

    <section class="shop_breadcrumbs">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class="fa-solid fa-house"></i> <a href="./index.html">Trang
                            Chủ</a></li>
                    <li class="breadcrumb-item activ" aria-current="page">Du lịch trong nước</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--main-->
    <section class="main_tour">
        <div class="container">
            <div class="row">
                <div class="col-0 col-md-3 display-non-mb">
                    <div id="box_search" class="row border">
                        <div class="col-12 w-100 search_product ">
                            <p>TÌm Kiếm</p>
                        </div>
                        <div class="col-12 my-2 options_product">
                            <select name="" id="" class="form-control rounded-pill">
                                <option value="">--Tất Cả--</option>
                                <option value="">Cà mau</option>
                                <option value="">Mũi né</option>
                            </select>
                        </div>
                        <div class="col-12 my-2 options_product">
                            <select name="" id="" class="form-control rounded-pill">
                                <option value="">--Tất Cả--</option>
                                <option value="">Cà mau</option>
                                <option value="">Mũi né</option>
                            </select>
                        </div>
                        <div class="col-12 my-2 options_product">
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
                    <div id="box_search" class="row border mt-3 pb-4">
                        <div class="col-12 w-100 search_product ">
                            <p>tour khuyến mãi</p>
                        </div>
                    </div>
                    <div id="box_search" class="row border mt-3 pb-4 form2">
                        <div class="col-12 w-100 search_product">
                            <p>tin nổi bật</p>
                        </div>
                        <div class="col-12">
                            <strong>Những địa điểm du lịch hấp dẫn tại nha trang</strong>
                            <br>
                            <span>21/5/2022</span>
                        </div>
                        <div class="col-12">
                            <strong>Những địa điểm du lịch hấp dẫn tại nha trang</strong>
                            <br>
                            <span>21/5/2022</span>
                        </div>
                        <div class="col-12">
                            <strong>Những địa điểm du lịch hấp dẫn tại nha trang</strong>
                            <br>
                            <span>21/5/2022</span>
                        </div>
                    </div>
                    <div id="box_search" class="row border mt-3 pb-4 form2">
                        <div class="col-12 w-100 search_product">
                            <p>Tour vừa xem</p>
                        </div>
                        <div class="col-12">
                            <div class="row item-detail-product d-flex align-items-center pt-2">
                                <div class="col-4">
                                    <img class="img-fluid"
                                        src="https://balitourist.com.vn/public/uploads/files/sun-world-ba-na-hills-10.jpg"
                                        alt="">
                                </div>
                                <div class="col-8 product">
                                    <p class="name_product">Du Lịch đà nẵng 3N2Đ (Khởi hành hàng ngày)</p>
                                    <p class="price_product">2,800,000đ</p>
                                </div>
                            </div>
                            <div class="row item-detail-product d-flex align-items-center pt-2">
                                <div class="col-4">
                                    <img class="img-fluid"
                                        src="https://balitourist.com.vn/public/uploads/files/ttxvntrangan.jpg" alt="">
                                </div>
                                <div class="col-8 product">
                                    <p class="name_product">Du Lịch đà nẵng 3N2Đ (Khởi hành hàng ngày)</p>
                                    <p class="price_product">2,800,000đ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="col-12 mb-4">
                        <div class="title_tour d-flex justify-content-between">
                            <div class="title_product-tour">
                                Du lịch trong nước
                            </div>
                            <div>
                                sắp xếp theo thứ tự
                                <select name="\" id="">
                                    <option value="">Thứ tự</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="show_product row">
                            <div class="col-xl-3 col-md-4 col-6">
                                <div class="item rounded">
                                    <a href="" class="item-detail">
                                        <div class="product_img">
                                            <img class="img-fluid border px-1 py-2 w-100 h-100"
                                                src="https://balitourist.com.vn/public/uploads/files/sun-world-ba-na-hills-10.jpg"
                                                alt="">
                                        </div>
                                        <p class="name_product">DU LỊCH ĐÀ NẴNG 3N2Đ (Khởi Hành Hàng Ngày)</p>
                                        <p class="price_product">2,800,000₫</p>
                                    </a>
                                    <button type="button" class="btn btn-warning w-100" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Đặt ngay
                                    </button>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-6">
                                <div class="item rounded">
                                    <a href="" class="item-detail">
                                        <div class="product_img">
                                            <img class="img-fluid border px-1 py-2 w-100 h-100"
                                                src="https://balitourist.com.vn/public/uploads/files/ttxvntrangan.jpg"
                                                alt="">
                                        </div>
                                        <p class="name_product">DU LỊCH ĐÀ NẴNG 3N2Đ (Khởi Hành Hàng Ngày)</p>
                                        <p class="price_product">2,800,000₫</p>
                                    </a>
                                    <button type="button" class="btn btn-warning w-100" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Đặt ngay
                                    </button>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-6">
                                <div class="item rounded">
                                    <a href="" class="item-detail">
                                        <div class="product_img">
                                            <img class="img-fluid border px-1 py-2 w-100 h-100"
                                                src="https://balitourist.com.vn/public/uploads/images/7-mon-ngon-khong-the-cuong-noi-khi-den-con-dao-3.png"
                                                alt="">
                                        </div>
                                        <p class="name_product">DU LỊCH ĐÀ NẴNG 3N2Đ (Khởi Hành Hàng Ngày)</p>
                                        <p class="price_product">2,800,000₫</p>
                                    </a>
                                    <button type="button" class="btn btn-warning w-100" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Đặt ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Modal-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="" method="get">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Đặt Vé</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="name" class="my-2">Tên Của Bạn: </label>
                        <input type="text" placeholder="Nhập họ tên" class="form-control" name="name">

                        <label for="email" class="my-2">Email: </label>
                        <input type="text" placeholder="Nhập họ tên" class="form-control" name="email">

                        <label for="sdt" class="my-2">SDT: </label>
                        <input type="text" placeholder="Nhập họ tên" class="form-control" name="sdt">

                        <label for="name" class="my-2">Ngày đặt: </label>
                        <input type="datetime-local" placeholder="Nhập họ tên" class="form-control" name="email">

                        <label for="name" class="my-2">Ghi chú: </label>
                        <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-success">Đặt Ngay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--endModal-->
</main>
@endsection