<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <script type="application/ld+json">
        {"@context":"https://schema.org","@type":"Article","name":"Article","description":"Du lịch 3 miền","image":"/public/uploads/files/logo.webp"}
    </script>
    <link rel="shortcut icon" type="image/x-icon" href="https://balitourist.com.vn/public/uploads/files/logo.webp" />
    <!-- Boostrap 5. và JS-->
    <link href="https://balitourist.com.vn/public/lib/bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://balitourist.com.vn/public/lib/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <!--Font-->
    <link rel="stylesheet" href="{{asset('user/assets/font/FA5PRO-master/css/all.min.css')}}">
    <!-- End Boostrap 5. -->

    <!-- CSS Nhà Làm-->
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css')}} ">
    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css')}} ">
    <link rel="stylesheet" href="{{ asset('user/assets/js/slick-1.8.1/slick/slick.css')}} ">
    <link rel=" stylesheet" href="{{ asset('user/assets/js/slick-1.8.1/slick/slick-theme.css')}} ">
    <!--endCSS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700;900&display=swap" rel="stylesheet">

</head>

<body>
    @stack('css')

    @include('user.layout.header')

    @yield('content')

    @include('user.layout.footer')

    @stack('scripts')
    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{ URL::to('search') }}',
                data: {
                    'search': $value
                },
                success:function(data){
                    $('.result').html(data);
                    $('.result').css('display', 'block');
                }
            });
        })
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>

    <script type="text/javascript">
        $('html').on('click',function(){
            $('.result').css('display', 'none');
        })
    </script>
</body>

</html>