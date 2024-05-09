<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Home page</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets1/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets1/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('assets1/css/templatemo-hexashop.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets1/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets1/css/lightbox.css')}}">


TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

    <style>
        .img {
            img {
                border-radius: 50%;
                width: 100px;
                height: 100px;
            }
        }
        .circle{
            display: block;
            border-radius: 50%;
            height: 20px;
            width: 20px;
            margin: 0;
        }
    </style>
    @livewirestyles
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->  
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{Route('home_page')}}" class="logo">
                            <img src="/assets1/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        
    {{$slot}}
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="/assets1/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="https://maps.app.goo.gl/7ShSsxdZYqAAw4Wc8">Nukus, Republic Karakalpakstan, Uzbekistan</a></li>
                            <li><a href="#">hexashop@company.uz</a></li>
                            <li><a href="#">+998 93 365 13 02</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{Route('home_page')}}">Homepage</a></li>
                        <li><a href="{{Route('home_page')}}">Products</a></li>
                        <li><a href="{{Route('about_page')}}">About Us</a></li>
                        <li><a href="{{Route('basket_page')}}">Basket</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved.
                            
                            <br>Design: <a href="https://templatemo.com" target="_parent"
                            title="free css templates">TemplateMo</a>
                        </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="{{URL::asset('assets1/js/jquery-2.1.0.min.js')}}"></script>
    
    <!-- Bootstrap -->
    <script src="{{URL::asset('assets1/js/popper.js')}}"></script>
    <script src="{{URL::asset('assets1/js/bootstrap.min.js')}}"></script>
    
    <!-- Plugins -->
    
    <script src="{{URL::asset('assets1/js/owl-carousel.js')}}"></script>
    <script src="{{URL::asset('assets1/js/accordions.js')}}"></script>
    <script src="{{URL::asset('assets1/js/datepicker.js')}}"></script>
    <script src="{{URL::asset('assets1/js/scrollreveal.min.js')}}"></script>
    <script src="{{URL::asset('assets1/js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('assets1/js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('assets1/js/imgfix.min.js')}}"></script>
    <script src="{{URL::asset('assets1/js/slick.js')}}"></script>
    <script src="{{URL::asset('assets1/js/lightbox.js')}}"></script>
    <script src="{{URL::asset('assets1/js/isotope.js')}}"></script>
    
    <!-- Global Init -->
    <script src="{{URL::asset('assets1/js/custom.js')}}"></script>
    <script>
        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
            });
        });
        @livewirescripts
    </script>
</body>
</html>