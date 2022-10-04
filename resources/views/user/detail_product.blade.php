@extends('user.layout.master')
@push('css')
<link rel="stylesheet" href="{{asset('user/assets/css/products.css')}}" />
@endpush
@section('content')
<main id="loaitour">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    </script> <!-- 33 KB -->
    <!-- fotorama.css & fotorama.js. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <section class="shop_breadcrumbs">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class="fa-solid fa-house"></i> <a href="./index.html">Trang
                            Chủ</a></li>
                    <li class="breadcrumb-item activ" aria-current="page">DU LỊCH THÁI LAN: BANGKOK - PATTAYA 5N4Đ
                        Thứ 5-7 Hàng tuần (THÁNG 7-8-9)</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--detail-->
    <section class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="fotorama" data-nav="thumbs" data-loop="true">
                        <img class="img-fluid"
                            src="https://balitourist.com.vn/public/uploads/files/z3531855207197_0c0dfb8453b3676b5f36f2db96b352fd.jpg">

                        <img class="img-fluid"
                            src="https://balitourist.com.vn/public/uploads/files/z3531855183521_35e92aeeb32ef4b4cbc24878b2b1c285.jpg">

                        <img class="img-fluid"
                            src="https://balitourist.com.vn/public/uploads/files/z3531855197121_fb9bfdaf61362c297a19a0a40f872120.jpg">

                        <img class="img-fluid"
                            src="https://balitourist.com.vn/public/uploads/files/z3531855191235_ae65d4074b41efcb7d5a51a29f2ad7b2.jpg">

                        <img class="img-fluid"
                            src="https://balitourist.com.vn/public/uploads/files/z3531855206239_d6716e6d2619d4d048f4a3ba9c9d536e.jpg">

                        <img class="img-fluid"
                            src="https://balitourist.com.vn/public/uploads/files/z3531855218806_f1da26938a7393aaeaa2a5684a501792.jpg">

                        <img class="img-fluid"
                            src="https://balitourist.com.vn/public/uploads/files/z3531855212566_d7f2adc0dd272535ad50282399d1307c.jpg">

                        <img class="img-fluid"
                            src="https://balitourist.com.vn/public/uploads/files/z3531855218083_bd33fcfa77b3191b7dd6d20a58857538.jpg">

                        <img class="img-fluid"
                            src="https://balitourist.com.vn/public/uploads/files/z3531855221853_bbdeb2f6238a127110206e23f6c0049b.jpg">

                        <img class="img-fluid"
                            src="https://balitourist.com.vn/public/uploads/files/z3531855207197_0c0dfb8453b3676b5f36f2db96b352fd.jpg">

                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="item_product w-100">
                        <div class="name w-100">
                            {{ $product_details->name }}
                        </div>
                        <div class="price">
                            {{ number_format($product_details->price) }} VNĐ
                        </div>
                        <div class="desc_short mb-3">
                            Mã tour: LTL001
                        </div>
                        <div class="row location">
                            <div class="col-md-6 noikhoihanh">
                                <strong>Nơi khởi hành</strong> <span>Hồ Chí Minh - Việt Nam</span>
                            </div>
                            <div class="col-md-6 noiden">
                                <strong>Nơi đến</strong> <span>Bangkok Thái Lan</span>
                            </div>
                        </div>
                        <div class="row location1">
                            <div class="col-md-6 lienhe">
                                liên hệ
                            </div>
                            <div class="col-md-6 hotline">
                                0907.45.81.76 (MS. Vàng)
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 tag mt-3">
                                tags: HCM, Bangkok
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--endDetail-->
    <!--main-->
    <section class="main_tour mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="col-12 mb-4">
                        <div class="title_tour d-flex justify-content-between">
                            <div class="title_product-tour">
                                Du lịch trong nước
                            </div>
                        </div>
                    </div>
                    <div class="row text-start CSS">
                        XỨ SỞ CHÙA VÀNG THÁI LAN
                        BANGKOK - PATTAYA
                        Thời gian: 05 Ngày – 04 Đêm

                        Khởi hành: Thứ 5 & thứ 7 hàng tuần

                        Phương tiện: Máy bay + Xe ô tô

                        NGÀY 1: TP HỒ CHÍ MINH – BANGKOK (Ăn Tối)

                        09:00 HDV đón quý khách tại sân bay Tân Sơn Nhất, làm thủ tục đáp chuyến bay VJ803 đi
                        BANGKOK lúc 11:15. Đến sân bay, quý khách làm thủ tục nhập cảnh Thái Lan. HDV đón đoàn khởi
                        hành tham quan:

                        CHÙA WAT SAKET – Là ngôi chùa nằm trên ngọn núi vàng, thuộc khu quần thể Phu Khao Thong, gồm
                        nhiều nhà nguyện, chánh điện và thư viện. Với bảo tháp lưu giữ nhiều vật Xá Phúc Lợi linh
                        thiêng.
                        Buổi chiều: Xe đưa đoàn về khách sạn dùng cơm tối, nhận phòng, quý khách sẽ có thời gian tự
                        do khám phá thành phố Bangkok về đêm, Nghỉ đêm tại khách sạn.

                        NGÀY 2: BANGKOK – MUANG BORAN - PATTAYA (Ăn sáng, trưa, tối)

                        07:00 Quý khách dùng điểm tâm sáng tại khách sạn., trả phòng. Khởi hành về thành phố PATAYA.
                        Trên đường quý khách tham quan:

                        BẢO TÀNG MỞ MUANG BORAN - Tận mắt chiêm ngưỡng những công trình kiến trúc của đất nước Thái
                        Lan được phục dựng lại tại đây, tái hiện chính xác nguyên mẫu các địa danh có thật, ngay cả
                        những công trình đã bị hủy hoại trên thực tế.
                        11:00 Quý khách dùng cơm trưa tại đây.

                        12:30 Đoàn khởi hành về thành phố biển Pattaya.

                        15:30 Đoàn khởi hành đi tham quan buổi chiều.

                        KHAO PHRA TAMNAK – Đây là khu vực cao nhất Pattaya, nơi đây du khách có thể ngắm toàn cảnh
                        thành phố biển từ trên cao.
                        17:30 Đoàn dùng cơm tối BBQ hải sản, sau đó về khách sạn nhận phòng, nghỉ ngơi. Quý khách có
                        thể tự do khám phá thành phố nhộn nhịp, sầm uất bậc nhất Thái Lan về đêm. Nghỉ đêm tại
                        Pattaya.

                        NGÀY 3: PATTAYA – ĐẢO SAN HÔ – CHỢ NỔI BỐN MIỀN (Ăn sáng, trưa, tối)

                        07:00 Quý khách dùng điểm tâm sáng tại khách sạn, HDV đưa đoàn ra đảo san hô bằng tàu cao
                        tốc.

                        ĐẢO SAN HÔ - Đảo san hô nằm trong vịnh Thái Lan có bờ cát trắng, làn nước trong xanh. Quý
                        khách tự do tắm biển hoặc tham gia các trò chơi ngoài đảo như: Lặn biển, Mô tô nước, dù
                        kéo,…
                        11:00 Trở lại đất liền, đoàn về khách sạn tắm rửa nghỉ ngơi, dùng cơm trưa chuẩn bị cho
                        chuyến tham quan buổi chiều.

                        TRUNG TÂM WORLD GEM - Với hàng nghìn loại đá quý khác nhau, được xây dựng bởi Hoàng Gia Thái
                        Lan
                        TRÂN BẢO PHẬT SƠN – Tượng Phật khổng lồ bằng vàng khắc trên núi đá vôi
                        CHỢ NỔI 4 MIỀN - Với kiến trúc và hàng chục món ăn mang đậm nét văn hóa Thái Lan.
                        NONGNOOCH GARDEN - Với công viên Khủng Long, vườn hoa tuyệt đẹp
                        17:00 Đoàn dùng cơm tối. Sau bữa tối, quý khách xem chương trình đại nhạc hội nổi tiếng Thái
                        Lan:

                        ALCAZAR SHOW – show diễn của các vũ công chuyển giới xinh đẹp.
                        MASSAGE THÁI CỔ TRUYỀN - Xe đưa quý khách đi trải nghiệm Massage Thái sau một ngày tham quan
                        mệt mỏi. Sau đó về khách sạn nghỉ ngơi. Nghỉ đêm tại Pattaya.
                        NGÀY 4: PATTAYA – BANGKOK (Ăn Sáng, Trưa)

                        07:00 Quý khách dùng điểm tâm sáng tại khách sạn, trả phòng. Quý khách khởi hành về BangKok,
                        tham quan:

                        BIG BEE FARM – quý khách chiêm ngưỡng cách người Thái nuôi và thu hoạch mật ong, tìm hiểu về
                        công dụng của mật ong Thái Lan.
                        TRẠI RẮN – Đến đây quý khách sẽ được tìm hiểu về điểm nổi bật của nền y học Thái.
                        11:00 Dùng bữa trưa tại nhà hàng xoay Buffet quốc tế Baiyoke Sky với hàng chục món ăn từ Á
                        đến Âu, ngắm toàn cảnh BangKok từ trên cao. Đặc biệt du khách ăn chay, phần chay được chuẩn
                        bị khá chu đáo và tinh tế.

                        14:00 Sau khi dùng bữa trưa, quý khách sẽ được đến viếng đền Phật Bốn Mặt linh thiên tọa lạc
                        ngay tại trung tâm thủ đô Bangkok. Sau đó tự do tham quan mua sắm, quý khách có thể dùng bữa
                        tối Coupon tự túc tại các siêu thị như Big C, Central World, Siam Paragon hay chợ sỉ
                        Platinum,… Đến giờ hẹn xe và HDV đón đoàn về khách sạn, nhận phòng. Nghỉ đêm tại Bangkok.

                        NGÀY 5: BANGKOK – TP HỒ CHÍ MINH (Ăn Sáng, Trưa)

                        07:00 Quý khách dùng điểm tâm sáng tại khách sạn, trả phòng. Đoàn đi tham quan:

                        CHÙA PHẬT VÀNG WAT TRIMIT – Ngôi chùa linh thiêng với tượng Phật nặng 5,500kg vàng nguyên
                        khối tọa lạc tại trung tâm Yaowarat.
                        DẠO THUYỀN TRÊN DÒNG SÔNG CHAOPHAYA – Con sông huyền thoại, ngắm nhìn đặc điểm khác lạ giữa
                        Bangkok xưa và nay.
                        VIẾNG CHÙA THUYỀN WAT YANNAWA – Quý khách sẽ có cơ hội được chiêm bái Xá Lợi Phật Thích Ca
                        và Xá Lợi của các vị sư tu hành đắc đạo.
                        11:30 Đoàn khởi hành ra sân bay. Đến sân bay, quý khách dùng bữa trưa Coupon tại sân bay,
                        sau đó HDV làm thủ tục cho quý khách đáp chuyến bay VJ804 vào lúc 13:50 về lại TPHCM. Đến
                        sân bay Tân Sơn Nhất, quý khách làm thủ tục nhập cảnh, lấy hành lý, trưởng đoàn chia tay quý
                        khách và hẹn gặp lại trong các chuyến đi sau.

                        Lịch trình có thể thay đổi phụ thuộc vào tình hình thực tế, nhưng vẫn đảm bảo đủ điểm tham
                        quan.

                        GIÁ TOUR TRỌN GÓI:



                        ­­­­­

                        TIÊU CHUẨN



                        THỨ 5 HÀNG TUẦN



                        THỨ 7 HÀNG TUẦN

                        NGƯỜI LỚN (Từ 11 Tuổi)

                        6.990.000 VNĐ

                        7.190.000 VNĐ

                        TRẺ EM (Từ 02 – 11 tuổi)

                        6.290.000 VNĐ

                        6.490.000 VNĐ

                        EM BÉ (Dưới 02T)

                        1.990.000 VNĐ

                        1.990.000 VNĐ

                        PHỤ THU PHÒNG ĐƠN

                        + 2.200.000 VNĐ

                        + 2.200.000 VNĐ

                        GIÁ TOUR BAO GỒM

                        Vé máy bay khứ hồi SÀI GÒN – BANGKOK – SÀI GÒN, hành lý 07kg xách tay + 20kg hành lý kí gửi.
                        Xe máy lạnh phục vụ riêng cho đoàn suốt tuyến
                        Các loại thuế phí sân bay, xăng dầu, an ninh,…
                        Khách sạn CHUẨN 4 sao, 02 khách người lớn 1 phòng, trẻ em ngủ chung giường với người lớn,
                        trường hợp khách đi lẻ sẽ ở ghép với khách khác hoặc sẽ phụ thu phòng đơn.
                        Ăn uống theo chương trình, 4 bữa sáng Buffet khách sạn, 06 bữa ăn chính, 01 bữa ăn Coupon
                        sân bay
                        Vé tham quan một lần các điểm có trong chương trình.
                        Hướng dẫn viên tiếng Việt suốt tuyến
                        Nón du lịch
                        Nước suối phục vụ hàng ngày, tiêu chuẩn 01 chai trên xe và 01 chai tại khách sạn
                        Bảo hiểm Covid tại Thái Lan với mức bồi thường 10.000usd
                        GIÁ TOUR KHÔNG BAO GỒM

                        Hộ chiếu hợp lệ còn thời hạn là 06 tháng so với ngày về của tour
                        Chi phí tham quan ngoài chương trình và các chi phí cá nhân khác.
                        Các bữa ăn tự túc, không theo chương trình.
                        Phí TIP cho HDV và lái xe tại Thái Lan là 4usd/ngày/người
                        Visa nhập cảnh Việt Nam (35usd/khách) đối với khách Việt Kiều hoặc khách nước ngoài. (Phí
                        visa có thể thay đổi theo quy định của cục xuất nhập cảnh Việt Nam)
                        Phụ thu phòng đơn: 90usd/khách
                        HÌNH THỨC THANH TOÁN

                        Cọc 50% tổng giá trị tour ngay sau khi đăng ký tour.
                        Số tiền còn lại thanh toán hết trước ngày khởi hành 7-10 ngày (áp dụng tour ngày thường),
                        trước ngày khởi hành 20 - 25 ngày (áp dụng tour lễ tết).
                        QUY ĐỊNH HỦY VÉ

                        Nếu quý khách huỷ vé sau khi mua chịu chi phí: 50% giá vé (mất cọc)
                        Nếu quý khách huỷ trước ngày khởi hành 07 ngày chịu chi phí 75% giá vé.
                        Nếu quý khách hủy trước ngày khởi hành 05 ngày chịu chí phí 100% giá vé.
                        Giai đoạn Lễ/Tết: không hoàn, không hủy, không đổi.
                        LƯU Ý

                        Quý khách phải có hộ chiếu còn hạn 06 tháng tính từ ngày tour kết thúc và mang theo khi đi
                        tour.
                        Sau khi đăng kí tour quý khách cung cấp hình chụp hộ chiếu, số điện thoại để công ty khai
                        Thai Pass cho quý khách.
                        Qúy khách phải có xác nhận tiêm chủng Vaccine Covid đủ 2 mũi trở lên. Tra cứu chứng nhận
                        tiêm chủng tại https://tiemchungcovid19.gov.vn/portal
                        Trẻ em dưới 11 tuổi không cần chứng nhận tiêm chủng Vaccine Covid. Yêu cầu: Test PCR trước
                        khởi hành 72h và đi cùng bố mẹ.
                        Trẻ em từ 12 – 17 tuổi không đi cùng bố mẹ, yêu cầu phải có chứng nhận tiêm chủng Vaccine
                        Covid 01 mũi trước khởi hành 14 ngày và giấy ủy quyền cho người lớn đi kèm. Trường hợp đi
                        cùng bố mẹ, không yêu cầu có giấy chứng nhận tiêm chủng nhưng cần test PCR trước khởi hành
                        72h.
                        Trường hợp quý khách bị dương tính Covid tại Thái Lan cần phải nhập viện điều trị, quý khách
                        vui lòng thanh toán trước, sau đó giữ lại toàn bộ hóa đơn bệnh viện, bảo hiểm sẽ chi trả
                        lại. Bảo hiểm không chi trả cho trường hợp quý khách tự ý cách ly tại khách sạn và tự điều
                        trị.
                        Trước khởi hành, công ty Bali Tourist khuyến khích quý khách nên test Covid trước khi đi để
                        đảm bảo sức khỏe và lịch trình đi.
                        Đối với khách Việt Kiều, khách nước ngoài phải có visa tái nhập Việt Nam nhiều lần hoặc miễn
                        thị thực mang đi theo tour.
                        Thứ tự các điểm tham quan theo chương trình HDV có thể thay đổi tùy theo thời tiết vá các
                        vấn đề khách quan khác mà vẫn đảm bảo đầy đủ các điểm tham quan.
                        Thời gian trong chương trình tour là thời gian dự kiến, thực tế tour sẽ có chênh lệch (không
                        nhiều) so với thời gian dự kiến. HDV sẽ báo trực tiếp cho Khách hàng trong thời gian thực
                        hiện tour.
                        Cam kết đã được tư vấn hiểu rõ và đồng ý các quy định liên quan về điều kiện sức khỏe khi
                        tham gia chương trình du lịch.
                        Đây là tour du lịch thuần túy, quý khách vui lòng không tách đoàn trong quá trình tham gia
                        tour.
                        Quý khách có nhu cầu cần xuất hóa đơn VAT vui lòng cung cấp thông tin xuất hóa đơn cho nhân
                        viên bán tour khi ngay khi đăng ký hoặc trước khi thanh toán hết, không nhận xuất hóa đơn
                        sau khi tour đã kết thúc.
                        Quý khách vui lòng đọc kỹ chương trình, giá tour, các khoản bao gồm cũng như không bao gồm
                        trong chương trình, các điều kiện hủy tour trên biên nhận đóng tiền.
                        Bali Tourist sẽ không chịu trách nhiệm nếu quý khách bị từ chối xuất nhập cảnh với bất kì lý
                        do gì.
                        Các trường hợp bất khả kháng Bali Tourist không chịu trách nhiệm trước khách hàng về những
                        thay đổi hoặc hủy bỏ vì những lý do khách quan và chủ quan như: Động đất, núi lửa, bão gió,
                        chiến tranh, đình công, biểu tình, khủng bố, rối loạn chính trị, dịch bệnh..Các giải pháp
                        hoặc đền bù (nếu có) sẽ phụ thuộc vào Nhà cung cấp dịch vụ liên quan.
                        MỌI THÔNG TIN CHI TIẾT XIN VUI LÒNG LIÊN HỆ:

                        CÔNG TY TNHH LỮ HÀNH BALI TOURIST

                        Địa chỉ: 54 Nguyễn Oanh, Phường 7, Quận Gò Vấp Tp.HCM

                        Tel: (028) 39 63.68.69 - Website: https://balitourist.com.vn/

                        KÍNH CHÚC QUÝ KHÁCH CÓ CHUYẾN DU LỊCH VUI VẺ VÀ BỔ ÍCH!
                    </div>
                </div>
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
@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://balitourist.com.vn/public/lib/jquery/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/slick-1.8.1/slick/slick.min.js"></script>
@endpush