
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
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
                            <div class="navbar d-block d-xl-none" bis_skin_checked="1">
                                <a href="javascript:void(0)" bis_skin_checked="1">
                                    <div class="bar-style" id="toggle-sidebar-res" bis_skin_checked="1"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="brand-logo" bis_skin_checked="1">
                                <a href="index.html" bis_skin_checked="1" previewlistener="true"><img src="{{asset('assets/images/logo.png')}}" class="img-fluid blur-up lazyloaded" alt=""></a>
                            </div>
                        </div>
                        <div bis_skin_checked="1">
                            <form class="form_search ajax-search the-basics" role="form">
                                <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="search" class="nav-search nav-search-field typeahead tt-hint" aria-expanded="true" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input type="search" placeholder="Search any Device or Gadgets..." class="nav-search nav-search-field typeahead tt-input" aria-expanded="true" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Lato, sans-serif; font-size: 18px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;" bis_skin_checked="1"><div class="tt-dataset tt-dataset-states" bis_skin_checked="1"></div></div></span>
                                <button type="submit" name="nav-submit-button" class="btn-search" fdprocessedid="kk34r">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="menu-right pull-right" bis_skin_checked="1">
                            <nav class="text-start">
                                <div class="toggle-nav" bis_skin_checked="1"><i class="fa fa-bars sidebar-bar"></i></div>
                            </nav>
                            <div class="top-header d-block" bis_skin_checked="1">
                                <ul class="header-dropdown">
                                    <li class="mobile-wishlist"><a href="#"><img src="../assets/images/icon/white-icon/heart.png" alt=""> </a></li>
                                    <li class="onhover-dropdown mobile-account">
                                        <a href="login.html" bis_skin_checked="1" previewlistener="true">
                                            <img src="../assets/images/icon/white-icon/user.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div bis_skin_checked="1">
                                <div class="icon-nav" bis_skin_checked="1">
                                    <ul>
                                        <li class="onhover-div d-xl-none d-inline-block mobile-search">
                                            <div bis_skin_checked="1"><img src="../assets/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                            <div id="search-overlay" class="search-overlay" bis_skin_checked="1">
                                                <div bis_skin_checked="1"> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                    <div class="overlay-content" bis_skin_checked="1">
                                                        <div class="container" bis_skin_checked="1">
                                                            <div class="row" bis_skin_checked="1">
                                                                <div class="col-xl-12" bis_skin_checked="1">
                                                                    <form class="ajax-search">
                                                                        <div class="form-group the-basics" bis_skin_checked="1">
                                                                            <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" class="form-control typeahead tt-hint" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input type="text" class="form-control typeahead tt-input" id="exampleInputPassword1" placeholder="Search a Product" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Lato, sans-serif; font-size: 18px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" bis_skin_checked="1" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-states" bis_skin_checked="1"></div></div></span>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div bis_skin_checked="1"><img src="../assets/images/icon/setting.png" class="img-fluid blur-up lazyloaded" alt=""> <i class="ti-settings"></i></div>
                                            <div class="show-div setting" bis_skin_checked="1">
                                                <h6>language</h6>
                                                <ul>
                                                    <li><a href="#">english</a></li>
                                                    <li><a href="#">french</a></li>
                                                </ul>
                                                <h6>currency</h6>
                                                <ul class="list-inline">
                                                    <li><a href="#">euro</a></li>
                                                    <li><a href="#">rupees</a></li>
                                                    <li><a href="#">pound</a></li>
                                                    <li><a href="#">doller</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div bis_skin_checked="1"><img src="../assets/images/icon/cart.png" class="img-fluid blur-up lazyloaded" alt=""> <i class="ti-shopping-cart"></i></div>
                                            <span class="cart_qty_cls">2</span>
                                            <ul class="show-div shopping-cart">
                                                <li>
                                                    <div class="media" bis_skin_checked="1">
                                                        <a href="#"><img alt="" class="me-3" src="../assets/images/fashion/product/1.jpg"></a>
                                                        <div class="media-body" bis_skin_checked="1">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle" bis_skin_checked="1"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="media" bis_skin_checked="1">
                                                        <a href="#"><img alt="" class="me-3" src="../assets/images/fashion/product/2.jpg"></a>
                                                        <div class="media-body" bis_skin_checked="1">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle" bis_skin_checked="1"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="total" bis_skin_checked="1">
                                                        <h5>subtotal : <span>$299.00</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="buttons" bis_skin_checked="1"><a href="cart.html" class="view-cart" bis_skin_checked="1" previewlistener="true">view
                                                            cart</a> <a href="#" class="checkout">checkout</a></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
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
                        <div class="sidenav fixed-sidebar marketplace-sidebar" bis_skin_checked="1">
                            <nav>
                                <ul id="sub-menu" class="sm pixelstrap sm-vertical" data-smartmenus-id="17060802750915059">
                                    @foreach($category as $val)
                                    <li><a href="#">{{$val->title}}</a></li>
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
                                        <div class="mobile-back text-end" bis_skin_checked="1">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                    </li>
                                    <li><a href="index.html" bis_skin_checked="1" previewlistener="true">Home</a></li>
                                    <li class="mega" id="hover-cls">
                                        <a href="#" class="has-submenu" id="sm-1706080275084905-1" aria-haspopup="true" aria-controls="sm-1706080275084905-2" aria-expanded="false">feature<span class="sub-arrow"></span></a>
                                        <ul class="mega-menu full-mega-menu" id="sm-1706080275084905-2" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-1" aria-expanded="false">
                                            <li>
                                                <div class="container" bis_skin_checked="1">
                                                    <div class="row" bis_skin_checked="1">
                                                        <div class="col mega-box" bis_skin_checked="1">
                                                            <div class="link-section" bis_skin_checked="1">
                                                                <div class="menu-title" bis_skin_checked="1">
                                                                    <h5>invoice template</h5>
                                                                </div>
                                                                <div class="menu-content" bis_skin_checked="1">
                                                                    <ul>
                                                                        <li><a target="_blank" href="invoice-1.html" bis_skin_checked="1" previewlistener="true">invoice
                                                                                1</a></li>
                                                                        <li><a target="_blank" href="invoice-2.html" bis_skin_checked="1" previewlistener="true">invoice
                                                                                2</a></li>
                                                                        <li><a target="_blank" href="invoice-3.html" bis_skin_checked="1" previewlistener="true">invoice
                                                                                3</a></li>
                                                                        <li><a target="_blank" href="invoice-4.html" bis_skin_checked="1" previewlistener="true">invoice
                                                                                4</a></li>
                                                                        <li><a target="_blank" href="invoice-5.html" bis_skin_checked="1" previewlistener="true">invoice
                                                                                5</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="menu-title mt-2" bis_skin_checked="1">
                                                                    <h5>elements</h5>
                                                                </div>
                                                                <div class="menu-content" bis_skin_checked="1">
                                                                    <ul>
                                                                        <li><a href="elements.html" bis_skin_checked="1" previewlistener="true">
                                                                                elements page<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col mega-box" bis_skin_checked="1">
                                                            <div class="link-section" bis_skin_checked="1">
                                                                <div class="menu-title" bis_skin_checked="1">
                                                                    <h5>email template</h5>
                                                                </div>
                                                                <div class="menu-content" bis_skin_checked="1">
                                                                    <ul>
                                                                        <li><a target="_blank" href="../email-template/welcome.html" bis_skin_checked="1" previewlistener="true">welcome</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="../email-template/new-product-announcement.html" bis_skin_checked="1" previewlistener="true">announcement</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="../email-template/abandonment-email.html" bis_skin_checked="1" previewlistener="true">abandonment</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="../email-template/offer.html" bis_skin_checked="1" previewlistener="true">offer</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="../email-template/offer-2.html" bis_skin_checked="1" previewlistener="true">offer
                                                                                2</a></li>
                                                                        <li><a target="_blank" href="../email-template/product-review.html" bis_skin_checked="1" previewlistener="true">review</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="../email-template/featured-products.html" bis_skin_checked="1" previewlistener="true">featured
                                                                                product</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box" bis_skin_checked="1">
                                                            <div class="link-section" bis_skin_checked="1">
                                                                <div class="menu-title" bis_skin_checked="1">
                                                                    <h5>email template</h5>
                                                                </div>
                                                                <div class="menu-content" bis_skin_checked="1">
                                                                    <ul>
                                                                        <li><a target="_blank" href="../email-template/black-friday.html" bis_skin_checked="1" previewlistener="true">black
                                                                                friday</a></li>
                                                                        <li><a target="_blank" href="../email-template/christmas.html" bis_skin_checked="1" previewlistener="true">christmas</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="../email-template/cyber-monday.html" bis_skin_checked="1" previewlistener="true">cyber-monday</a>
                                                                        </li>
                                                                        <li><a target="_blank" href="../email-template/flash-sale.html" bis_skin_checked="1" previewlistener="true">flash
                                                                                sale</a></li>
                                                                        <li><a target="_blank" href="../email-template/email-order-success.html" bis_skin_checked="1" previewlistener="true">order
                                                                                success</a></li>
                                                                        <li><a target="_blank" href="../email-template/email-order-success-two.html" bis_skin_checked="1" previewlistener="true">order
                                                                                success 2</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col mega-box" bis_skin_checked="1">
                                                            <div class="link-section" bis_skin_checked="1">
                                                                <div class="menu-title" bis_skin_checked="1">
                                                                    <h5>cookie bar</h5>
                                                                </div>
                                                                <div class="menu-content" bis_skin_checked="1">
                                                                    <ul>
                                                                        <li><a href="index.html" bis_skin_checked="1" previewlistener="true">bottom<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                        <li><a href="fashion-4.html" bis_skin_checked="1" previewlistener="true">bottom left</a>
                                                                        </li>
                                                                        <li><a href="bicycle.html" bis_skin_checked="1" previewlistener="true">bottom right</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="menu-title mt-2" bis_skin_checked="1">
                                                                    <h5>search</h5>
                                                                </div>
                                                                <div class="menu-content" bis_skin_checked="1">
                                                                    <ul>
                                                                        <li><a href="marketplace-demo-2.html" bis_skin_checked="1" previewlistener="true">ajax
                                                                                search<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col mega-box" bis_skin_checked="1">
                                                            <div class="link-section" bis_skin_checked="1">
                                                                <div class="menu-title" bis_skin_checked="1">
                                                                    <h5>model</h5>
                                                                </div>
                                                                <div class="menu-content" bis_skin_checked="1">
                                                                    <ul>
                                                                        <li><a href="index.html" bis_skin_checked="1" previewlistener="true">Newsletter</a></li>
                                                                        <li><a href="index.html" bis_skin_checked="1" previewlistener="true">exit<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                        <li><a href="christmas.html" bis_skin_checked="1" previewlistener="true">christmas</a>
                                                                        </li>
                                                                        <li><a href="furniture-3.html" bis_skin_checked="1" previewlistener="true">black
                                                                                friday</a></li>
                                                                        <li><a href="fashion-4.html" bis_skin_checked="1" previewlistener="true">cyber
                                                                                monday</a></li>
                                                                        <li><a href="marketplace-demo-3.html" bis_skin_checked="1" previewlistener="true">new
                                                                                year</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col mega-box" bis_skin_checked="1">
                                                            <div class="link-section" bis_skin_checked="1">
                                                                <div class="menu-title" bis_skin_checked="1">
                                                                    <h5>add to cart</h5>
                                                                </div>
                                                                <div class="menu-content" bis_skin_checked="1">
                                                                    <ul>
                                                                        <li><a href="nursery.html" bis_skin_checked="1" previewlistener="true">cart modal
                                                                                popup</a></li>
                                                                        <li><a href="vegetables.html" bis_skin_checked="1" previewlistener="true">qty. counter
                                                                                <i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                        <li><a href="bags.html" bis_skin_checked="1" previewlistener="true">cart top</a></li>
                                                                        <li><a href="shoes.html" bis_skin_checked="1" previewlistener="true">cart bottom</a>
                                                                        </li>
                                                                        <li><a href="watch.html" bis_skin_checked="1" previewlistener="true">cart left</a></li>
                                                                        <li><a href="tools.html" bis_skin_checked="1" previewlistener="true">cart right</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" bis_skin_checked="1">
                                                        <div class="col-12" bis_skin_checked="1">
                                                            <img src="../assets/images/menu-banner.jpg" class="img-fluid mega-img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="has-submenu" id="sm-1706080275084905-3" aria-haspopup="true" aria-controls="sm-1706080275084905-4" aria-expanded="false">shop<span class="sub-arrow"></span></a>
                                        <ul id="sm-1706080275084905-4" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-3" aria-expanded="false">
                                            <li><a href="category-page(vegetables).html" bis_skin_checked="1" previewlistener="true">tab style<span class="new-tag">new</span></a></li>
                                            <li><a href="category-page(top-filter).html" bis_skin_checked="1" previewlistener="true">top filter</a></li>
                                            <li><a href="category-page(modern).html" bis_skin_checked="1" previewlistener="true">modern</a></li>
                                            <li><a href="category-page.html" bis_skin_checked="1" previewlistener="true">left sidebar</a></li>
                                            <li><a href="category-page(right).html" bis_skin_checked="1" previewlistener="true">right sidebar</a></li>
                                            <li><a href="category-page(no-sidebar).html" bis_skin_checked="1" previewlistener="true">no sidebar</a></li>
                                            <li><a href="category-page(sidebar-popup).html" bis_skin_checked="1" previewlistener="true">sidebar popup</a>
                                            </li>
                                            <li><a href="category-page(metro).html" bis_skin_checked="1" previewlistener="true">metro</a></li>
                                            <li><a href="category-page(full-width).html" bis_skin_checked="1" previewlistener="true">full width</a></li>
                                            <li><a href="category-page(infinite-scroll).html" bis_skin_checked="1" previewlistener="true">infinite
                                                    scroll</a></li>
                                            <li><a href="category-page(3-grid).html" bis_skin_checked="1" previewlistener="true">three grid</a></li>
                                            <li><a href="category-page(6-grid).html" bis_skin_checked="1" previewlistener="true">six grid</a></li>
                                            <li><a href="category-page(list-view).html" bis_skin_checked="1" previewlistener="true">list view</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="has-submenu" id="sm-1706080275084905-5" aria-haspopup="true" aria-controls="sm-1706080275084905-6" aria-expanded="false">product<span class="sub-arrow"></span></a>
                                        <ul id="sm-1706080275084905-6" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-5" aria-expanded="false">
                                            <li><a href="product-page(360-view).html" bis_skin_checked="1" previewlistener="true">360 view <span class="new-tag">new</span></a></li>
                                            <li><a href="product-page(video-thumbnail).html" bis_skin_checked="1" previewlistener="true">video
                                                    thumbnail<span class="new-tag">new</span></a></li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-1706080275084905-7" aria-haspopup="true" aria-controls="sm-1706080275084905-8" aria-expanded="false">sidebar<span class="sub-arrow"></span></a>
                                                <ul id="sm-1706080275084905-8" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-7" aria-expanded="false">
                                                    <li><a href="product-page.html" bis_skin_checked="1" previewlistener="true">left sidebar</a></li>
                                                    <li><a href="product-page(right-sidebar).html" bis_skin_checked="1" previewlistener="true">right
                                                            sidebar</a>
                                                    </li>
                                                    <li><a href="product-page(no-sidebar).html" bis_skin_checked="1" previewlistener="true">no sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-1706080275084905-9" aria-haspopup="true" aria-controls="sm-1706080275084905-10" aria-expanded="false">thumbnail image<span class="sub-arrow"></span></a>
                                                <ul id="sm-1706080275084905-10" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-9" aria-expanded="false">
                                                    <li><a href="product-page(left-image).html" bis_skin_checked="1" previewlistener="true">left image</a>
                                                    </li>
                                                    <li><a href="product-page(right-image).html" bis_skin_checked="1" previewlistener="true">right image</a>
                                                    </li>
                                                    <li><a href="product-page(image-outside).html" bis_skin_checked="1" previewlistener="true">image
                                                            outside</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-1706080275084905-11" aria-haspopup="true" aria-controls="sm-1706080275084905-12" aria-expanded="false">three column<span class="sub-arrow"></span></a>
                                                <ul id="sm-1706080275084905-12" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-11" aria-expanded="false">
                                                    <li><a href="product-page(3-col-left).html" bis_skin_checked="1" previewlistener="true">thumbnail
                                                            left</a>
                                                    </li>
                                                    <li><a href="product-page(3-col-right).html" bis_skin_checked="1" previewlistener="true">thumbnail
                                                            right</a>
                                                    </li>
                                                    <li><a href="product-page(3-column).html" bis_skin_checked="1" previewlistener="true">thubnail
                                                            bottom</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="product-page(4-image).html" bis_skin_checked="1" previewlistener="true">four image</a></li>
                                            <li><a href="product-page(sticky).html" bis_skin_checked="1" previewlistener="true">sticky</a></li>
                                            <li><a href="product-page(accordian).html" bis_skin_checked="1" previewlistener="true">accordian</a></li>
                                            <li><a href="product-page(bundle).html" bis_skin_checked="1" previewlistener="true">bundle</a></li>
                                            <li><a href="product-page(image-swatch).html" bis_skin_checked="1" previewlistener="true">image swatch </a></li>
                                            <li><a href="product-page(vertical-tab).html" bis_skin_checked="1" previewlistener="true">vertical tab</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="has-submenu" id="sm-1706080275084905-13" aria-haspopup="true" aria-controls="sm-1706080275084905-14" aria-expanded="false">pages<span class="sub-arrow"></span></a>
                                        <ul id="sm-1706080275084905-14" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-13" aria-expanded="false">
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-1706080275084905-15" aria-haspopup="true" aria-controls="sm-1706080275084905-16" aria-expanded="false">vendor<span class="sub-arrow"></span></a>
                                                <ul id="sm-1706080275084905-16" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-15" aria-expanded="false">
                                                    <li><a href="vendor-dashboard.html" bis_skin_checked="1" previewlistener="true">vendor dashboard</a>
                                                    </li>
                                                    <li><a href="vendor-profile.html" bis_skin_checked="1" previewlistener="true">vendor profile</a></li>
                                                    <li><a href="become-vendor.html" bis_skin_checked="1" previewlistener="true">become vendor</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-1706080275084905-17" aria-haspopup="true" aria-controls="sm-1706080275084905-18" aria-expanded="false">account<span class="sub-arrow"></span></a>
                                                <ul id="sm-1706080275084905-18" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-17" aria-expanded="false">
                                                    <li><a href="wishlist.html" bis_skin_checked="1" previewlistener="true">wishlist</a></li>
                                                    <li><a href="cart.html" bis_skin_checked="1" previewlistener="true">cart</a></li>
                                                    <li><a href="dashboard.html" bis_skin_checked="1" previewlistener="true">Dashboard</a></li>
                                                    <li><a href="login.html" bis_skin_checked="1" previewlistener="true">login</a></li>
                                                    <li><a href="register.html" bis_skin_checked="1" previewlistener="true">register</a></li>
                                                    <li><a href="contact.html" bis_skin_checked="1" previewlistener="true">contact</a></li>
                                                    <li><a href="forget_pwd.html" bis_skin_checked="1" previewlistener="true">forget password</a></li>
                                                    <li><a href="profile.html" bis_skin_checked="1" previewlistener="true">profile</a></li>
                                                    <li><a href="checkout.html" bis_skin_checked="1" previewlistener="true">checkout</a></li>
                                                    <li><a href="order-success.html" bis_skin_checked="1" previewlistener="true">order success</a></li>
                                                    <li><a href="order-tracking.html" bis_skin_checked="1" previewlistener="true">order tracking<span class="new-tag">new</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-1706080275084905-19" aria-haspopup="true" aria-controls="sm-1706080275084905-20" aria-expanded="false">portfolio<span class="sub-arrow"></span></a>
                                                <ul id="sm-1706080275084905-20" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-19" aria-expanded="false">
                                                    <li><a href="" class="has-submenu" id="sm-1706080275084905-21" aria-haspopup="true" aria-controls="sm-1706080275084905-22" aria-expanded="false" previewlistener="true">grid<span class="sub-arrow"></span></a>
                                                        <ul id="sm-1706080275084905-22" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-21" aria-expanded="false">
                                                            <li><a href="grid-2-col.html" bis_skin_checked="1" previewlistener="true">grid
                                                                    2</a></li>
                                                            <li><a href="grid-3-col.html" bis_skin_checked="1" previewlistener="true">grid
                                                                    3</a></li>
                                                            <li><a href="grid-4-col.html" bis_skin_checked="1" previewlistener="true">grid
                                                                    4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="" class="has-submenu" id="sm-1706080275084905-23" aria-haspopup="true" aria-controls="sm-1706080275084905-24" aria-expanded="false" previewlistener="true">masonry<span class="sub-arrow"></span></a>
                                                        <ul id="sm-1706080275084905-24" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-23" aria-expanded="false">
                                                            <li><a href="masonary-2-grid.html" bis_skin_checked="1" previewlistener="true">grid 2</a></li>
                                                            <li><a href="masonary-3-grid.html" bis_skin_checked="1" previewlistener="true">grid 3</a></li>
                                                            <li><a href="masonary-4-grid.html" bis_skin_checked="1" previewlistener="true">grid 4</a></li>
                                                            <li><a href="masonary-fullwidth.html" bis_skin_checked="1" previewlistener="true">full width</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="about-page.html" bis_skin_checked="1" previewlistener="true">about us</a></li>
                                            <li><a href="search.html" bis_skin_checked="1" previewlistener="true">search</a></li>
                                            <li><a href="review.html" bis_skin_checked="1" previewlistener="true">review</a>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-1706080275084905-25" aria-haspopup="true" aria-controls="sm-1706080275084905-26" aria-expanded="false">compare<span class="sub-arrow"></span></a>
                                                <ul id="sm-1706080275084905-26" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-25" aria-expanded="false">
                                                    <li><a href="compare.html" bis_skin_checked="1" previewlistener="true">compare</a></li>
                                                    <li><a href="compare-2.html" bis_skin_checked="1" previewlistener="true">compare-2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="collection.html" bis_skin_checked="1" previewlistener="true">collection</a></li>
                                            <li><a href="lookbook.html" bis_skin_checked="1" previewlistener="true">lookbook</a></li>
                                            <li><a href="sitemap.html" bis_skin_checked="1" previewlistener="true">site map</a>
                                            </li>
                                            <li><a href="404.html" bis_skin_checked="1" previewlistener="true">404</a></li>
                                            <li><a href="coming-soon.html" bis_skin_checked="1" previewlistener="true">coming soon</a></li>
                                            <li><a href="faq.html" bis_skin_checked="1" previewlistener="true">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="has-submenu" id="sm-1706080275084905-27" aria-haspopup="true" aria-controls="sm-1706080275084905-28" aria-expanded="false">blog<span class="sub-arrow"></span></a>
                                        <ul id="sm-1706080275084905-28" role="group" aria-hidden="true" aria-labelledby="sm-1706080275084905-27" aria-expanded="false">
                                            <li><a href="blog-page.html" bis_skin_checked="1" previewlistener="true">left sidebar</a></li>
                                            <li><a href="blog(right-sidebar).html" bis_skin_checked="1" previewlistener="true">right sidebar</a></li>
                                            <li><a href="blog(no-sidebar).html" bis_skin_checked="1" previewlistener="true">no sidebar</a></li>
                                            <li><a href="blog-details.html" bis_skin_checked="1" previewlistener="true">blog details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-3 d-none d-xxl-inline-block" bis_skin_checked="1">
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
                    </div>
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
                    <div class="col-xl-6 col-md-6 col-sm-12" bis_skin_checked="1">
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
                    </div>
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