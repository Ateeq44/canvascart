
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
    <title>Multikart - Multi-purpose E-commerce Html Template</title>
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

<body class="theme-color-1">



    @yield('content')



    


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

    <script>
        $(window).on('load', function () {
            setTimeout(function () {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
          swal("{{session('status')}}");
        </script>
    @endif
    @yield('script')
</body>

</html>