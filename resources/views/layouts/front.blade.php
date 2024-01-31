
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="icon" href="{{asset('assets/images/fav1.png')}}" type="image/x-icon"> -->
    <!-- <link rel="shortcut icon" href="{{asset('assets/images/fav1.png')}}" type="image/x-icon"> -->
    <title>
        @yield('title')
    </title>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f5eb8f10bc.js" crossorigin="anonymous"></script>

    <!--Slick slider css-->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/price-range.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/timer.css')}}">
    <style type="text/css">
        .product-box .cart-info{
            color: #f85606 !important;
        }
        .color-change-btn.active {
            color: #ff5733; /* Change this to your desired active color */
        }
        .swal-button {
            background-color: #f39910 !important;
        }
        .swal-button:hover {
            background-color: #f39910 !important;
        }
        .swal-text{
            color: black !important;
        }
    </style>


</head>

<body class="theme-color-1 theme-color-27">

    <header class="header-style-5 color-style" id="sticky-header">
        <div class="mobile-fix-option" bis_skin_checked="1"></div>
        <div class="top-header top-header-theme" bis_skin_checked="1">
            <div class="container" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-lg-6" bis_skin_checked="1">
                        <div class="header-contact" bis_skin_checked="1">
                            <ul>
                                <li>Welcome to Our store Multikart</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6" bis_skin_checked="1">
                        <div class="header-contact text-end" bis_skin_checked="1">
                            <ul>
                                <li><i class="fa fa-truck" aria-hidden="true"></i>Track Order</li>
                                <li class="pe-0"><i class="fa fa-gift" aria-hidden="true"></i>Gift Cards</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-sm-12" bis_skin_checked="1">
                    <div class="main-menu" bis_skin_checked="1">
                        <div class="menu-left" bis_skin_checked="1">
                            <div class="brand-logo" bis_skin_checked="1">
                                <a href="index.html" bis_skin_checked="1" previewlistener="true"><img src="{{asset('assets/images/logo.png')}}" class="img-fluid blur-up lazyloaded" alt=""></a>
                            </div>
                        </div>
                        <div bis_skin_checked="1">
                            <form class="form_search" role="form" action="{{url('search')}}" method="Get">
                                <span class="twitter-typeahead w-100" style="position: relative; display: inline-block;">
                                    <input type="search" placeholder="Search Product....." class="nav-search nav-search-field typeahead tt-input" aria-expanded="true" autocomplete="off" spellcheck="false" dir="auto" name="search" style="color: #060606; position: relative; vertical-align: top; background-color: transparent;">
                                    <div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;" bis_skin_checked="1">
                                        <div class="tt-dataset tt-dataset-states" bis_skin_checked="1"></div>
                                    </div>
                                </span>
                                <button type="submit" name="nav-submit-button" class="btn-search" fdprocessedid="kk34r">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                        <div class="menu-right pull-right" bis_skin_checked="1">
                            <nav class="text-start">
                                <div class="toggle-nav" bis_skin_checked="1"><i class="fa fa-bars sidebar-bar"></i></div>
                            </nav>
                            <div class="top-header d-block" bis_skin_checked="1">
                                <ul class="d-flex align-items-center">
                                    @if(!auth()->check())
                                    <li><a href="{{url('/login')}}"><i class="fa-solid fa-user" style="color:white;font-size:30px;"></i></a></li>
                                    {{-- <li><a href="{{url('/register')}}">Register</a></li> --}}
                                    @else
                                    @if(auth()->user()->role == '1')
                                    <li><a class="btn btn-solid" href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                                    @elseif(auth()->user()->role == '3')
                                    <li>
                                        <a href="{{url('dashboard')}}">
                                            <div class="d-flex">
                                                <div class="" style="width: 50px;height: 50px;border-radius: 100%;border: 2px solid white;">
                                                   <img style="width:100%;height: 100%; border-radius: 100%;padding: 0px;" src="{{asset('assets/images/avator.png')}}" alt="">   
                                               </div>
                                               <div class="ms-4 text-center" style="margin-top: 5px;"> 
                                                <p class="text-white mb-0">Hello, {{Auth::User()->name}}</p>
                                                <h4 class="text-white font-weight-bold">Orders & Account</h4>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endif
                                @endif
                                <?php 
                                @$count = cartItem();
                                @$count1 = wishlist();
                                ?>
                                <li class="onhover-div mobile-cart ms-4">
                                    <a href="{{url('wishlist')}}">
                                        <div bis_skin_checked="1">
                                            <i class="fa-solid fa-heart" style="color:white;font-size:30px;"></i>
                                        </div>
                                        <span class="cart_qty_cls">{{@$count1}}</span>
                                    </a>
                                </li>
                                <li class="onhover-div mobile-cart ms-4">
                                    <a href="{{url('cart')}}">
                                        <div bis_skin_checked="1">
                                            <i class="fa-solid fa-cart-shopping" style="display: block!important; color: white;font-size:30px;top: 14% !important;right: -15px!important;"></i>
                                        </div>
                                        <span class="cart_qty_cls">{{@$count}}</span>
                                        {{-- <span class="cart_qty_cls">0</span> --}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-part" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-xl-3" bis_skin_checked="1">
                    <div class="category-menu d-none d-xl-block h-100" bis_skin_checked="1">
                        <div id="toggle-sidebar" class="toggle-sidebar" bis_skin_checked="1">
                            <i class="fa fa-bars sidebar-bar"></i>
                            <h5 class="mb-0">shop by category</h5>
                        </div>
                    </div>
                    @php
                    $all_category = category();

                    @endphp
                    <div class="sidenav fixed-sidebar marketplace-sidebar" bis_skin_checked="1">
                        <nav>
                            <ul id="sub-menu" class="sm pixelstrap sm-vertical" data-smartmenus-id="17060802750915059">
                                @foreach($all_category as $val)
                                <li><a href="{{url('products_category/'.$val->id)}}">{{$val->title}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-9 position-unset" bis_skin_checked="1">
                    <div class="main-nav-center" bis_skin_checked="1">
                        <nav class="text-start">
                            <!-- Sample menu definition -->
                            <ul id="main-menu" class="sm pixelstrap sm-horizontal" data-smartmenus-id="1706080275084905">

                                <li>
                                    <a href="{{url('/')}}" bis_skin_checked="1" previewlistener="true">Home</a>
                                </li>
                                <li>
                                    <a href="{{url('category')}}" bis_skin_checked="1" previewlistener="true">Category</a>
                                </li>
                                <li>
                                    <a href="{{url('shop')}}" bis_skin_checked="1" previewlistener="true">Shop</a>
                                </li>
                                <li>
                                    <a href="{{url('/')}}" bis_skin_checked="1" previewlistener="true">Contact</a>
                                </li>
                                <li>
                                    <a href="{{url('/')}}" bis_skin_checked="1" previewlistener="true">Blog</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                {{-- <div class="col-xxl-3 d-none d-xxl-inline-block" bis_skin_checked="1">
                    <div class="header-options" bis_skin_checked="1">
                        <div class="vertical-slider no-arrow slick-initialized slick-slider slick-vertical" bis_skin_checked="1"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button><div class="slick-list draggable" style="height: 26px;" bis_skin_checked="1"><div class="slick-track" style="opacity: 1; height: 182px; transform: translate3d(0px, -52px, 0px);" bis_skin_checked="1"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 326px;" tabindex="-1" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                            <span><i class="ti-gift" aria-hidden="true"></i>Gift Card for all the season</span>
                        </div></div></div><div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 326px;" bis_skin_checked="1" tabindex="-1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                            <span><i class="ti-truck" aria-hidden="true"></i>Free Shipping on Orders
                            $100+</span>
                        </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 326px;" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                            <span><i class="ti-announcement" aria-hidden="true"></i>Buy One Get Two Free</span>
                        </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 326px;" bis_skin_checked="1" tabindex="-1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                            <span><i class="ti-gift" aria-hidden="true"></i>Gift Card for all the season</span>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" style="width: 326px;" tabindex="-1" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                            <span><i class="ti-truck" aria-hidden="true"></i>Free Shipping on Orders
                            $100+</span>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 326px;" tabindex="-1" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                            <span><i class="ti-announcement" aria-hidden="true"></i>Buy One Get Two Free</span>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 326px;" tabindex="-1" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                            <span><i class="ti-gift" aria-hidden="true"></i>Gift Card for all the season</span>
                        </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</header>




@yield('content')


<footer class="dark-footer footer-style-1 footer-theme-color">
    <section class="section-b-space darken-layout">
        <div class="container" bis_skin_checked="1">
            <div class="row footer-theme partition-f" bis_skin_checked="1">
                <div class="col-lg-4 col-md-6 sub-title" bis_skin_checked="1">
                    <div class="footer-title footer-mobile-title" bis_skin_checked="1">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant" bis_skin_checked="1">
                        <div class="footer-logo" bis_skin_checked="1"><img src="{{asset('assets/images/logo.png')}}" alt=""></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore</p>
                        <ul class="contact-list">
                            <li><i class="fa fa-map-marker"></i>Multikart Demo Store, Demo store India 345-659
                            </li>
                            <li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
                            <li><i class="fa fa-envelope"></i>Email Us: <a href="#">Support@Multikart.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6" bis_skin_checked="1">
                    <div class="sub-title" bis_skin_checked="1">
                        <div class="footer-title" bis_skin_checked="1">
                            <h4>my account</h4>
                        </div>
                        <div class="footer-contant" bis_skin_checked="1">
                            <ul>
                                <li><a href="#">mens</a></li>
                                <li><a href="#">womens</a></li>
                                <li><a href="#">clothing</a></li>
                                <li><a href="#">accessories</a></li>
                                <li><a href="#">featured</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6" bis_skin_checked="1">
                    <div class="sub-title" bis_skin_checked="1">
                        <div class="footer-title" bis_skin_checked="1">
                            <h4>information</h4>
                        </div>
                        <div class="footer-contant" bis_skin_checked="1">
                            <ul>
                                <li><a href="#">shipping &amp; return</a></li>
                                <li><a href="#">secure shopping</a></li>
                                <li><a href="#">gallary</a></li>
                                <li><a href="#">affiliates</a></li>
                                <li><a href="#">contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" bis_skin_checked="1">
                    <div class="sub-title" bis_skin_checked="1">
                        <div class="footer-title" bis_skin_checked="1">
                            <h4>follow us</h4>
                        </div>
                        <div class="footer-contant" bis_skin_checked="1">
                            <p class="mb-cls-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt
                            ut labore</p>
                            <form class="form-inline">
                                <div class="form-group me-sm-3 mb-2" bis_skin_checked="1">
                                    <label for="inputPassword2" class="sr-only">Password</label>
                                    <input type="password" class="form-control" id="inputPassword2" placeholder="Enter Your Email">
                                </div>
                                <button type="submit" class="btn btn-solid mb-2">subscribe</button>
                            </form>
                            <div class="footer-social" bis_skin_checked="1">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sub-footer dark-subfooter" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-xl-6 col-md-6 col-sm-12" bis_skin_checked="1">
                    <div class="footer-end" bis_skin_checked="1">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i> 2023-24 themeforest powered by
                        pixelstrap</p>
                    </div>
                </div>
                {{-- <div class="col-xl-6 col-md-6 col-sm-12" bis_skin_checked="1">
                    <div class="payment-card-bottom" bis_skin_checked="1">
                        <ul>
                            <li>
                                <a href="#"><img src="../assets/images/icon/visa.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="../assets/images/icon/mastercard.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="../assets/images/icon/paypal.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="../assets/images/icon/american-express.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="../assets/images/icon/discover.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</footer>

<!-- tap to top -->
<div class="tap-top top-cls">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top end -->


<!-- latest jquery-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function () {
        $('.color-change-btn').click(function () {
                // Remove active class from all buttons
            $('.color-change-btn').removeClass('active');

                // Add active class to the clicked button
            $(this).addClass('active');
        });
    });

    $(document).ready(function () {
        $('.payment-radio').change(function () {
            var selectedPaymentMethod = $(this).val();

            if (selectedPaymentMethod === 'card') {
                $('#card-payment-form').show();
            } else {
                $('#card-payment-form').hide();
            }
        });
    });

</script>
<!-- fly cart ui jquery-->
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
{{-- <script src="{{asset('assets/js/timer.js')}}"></script> --}}

<!-- exitintent jquery-->
<script src="{{asset('assets/js/jquery.exitintent.js')}}"></script>
<script src="{{asset('assets/js/exit.js')}}"></script>

<!-- slick js-->
{{-- <script src="{{asset('assets/js/slick.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>


  $('.full-slider .slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev">Previous</button>',
    nextArrow: '<button type="button" class="slick-next">Next</button>',
});

  function showImage(imagePath) {
    var displayedImage = document.getElementById('displayedImage');
    displayedImage.src = imagePath;
}

</script>

<!-- menu js-->
<script src="{{asset('assets/js/menu.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Bootstrap Notification js-->
<script src="{{asset('assets/js/bootstrap-notify.min.js')}}"></script>

<!-- Fly cart js-->
<script src="{{asset('assets/js/fly-cart.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('assets/js/theme-setting.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/price-range.js')}}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
<script>
  swal("{{session('status')}}");
</script>
@endif
@yield('script')
</body>

</html>