@extends('layouts.front') 
@section('title') 
Product 
@endsection 
@section('content') 



<div class="breadcrumb-section" bis_skin_checked="1">
  <div class="container" bis_skin_checked="1">
      <div class="row" bis_skin_checked="1">

          <div class="col-sm-12" bis_skin_checked="1">
              <nav aria-label="breadcrumb" class="theme-breadcrumb">
                  <ol class="breadcrumb justify-content-start">
                      <li class="breadcrumb-item"><a href="index.html" previewlistener="true">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{$product_details->category->title}}</li>
                      <li class="breadcrumb-item active" aria-current="page">{{$product_details->product_name }}</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
</div>
<section>
    <div class="collection-wrapper prod_data">
        <div class="container">
            <div class="row">
              @php
              $images = json_decode($product_details->images)
              @endphp
              <div class="col-lg-6" >

                  <div class="simple-slider" style="height: 600px;">
                    <img id="displayedImage" style="width: 100%;height: 100%;" src="{{ asset('upload/product/'.$images[0]) }}" alt="Displayed Product Image">
                </div>
                <div class="full-slider" style="width: 100%;">
                  <div class="slider">
                    @foreach($images as $val)
                    <img  src="{{ asset('upload/product/'.$val) }}" alt="Product 1" onclick="showImage('{{ asset('upload/product/'.$val) }}')">
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="product-right">
                <div class="product-count">
                            {{-- <ul>
                                <li>
                                    <img src="../assets/images/fire.gif" class="img-fluid" alt="image">
                                    <span class="p-counter" id="demo"></span>
                                    <span class="lang">orders in last 24 hours</span>
                                </li>
                                <li>
                                    <img src="../assets/images/person.gif" class="img-fluid user_img" alt="image">
                                    <span class="p-counter">44</span>
                                    <span class="lang">active view this</span>
                                </li>
                            </ul> --}}
                        </div>
                        <h2>{{$product_details->product_name}}</h2>
                        <div class="rating-section" bis_skin_checked="1">
                            <div class="rating" bis_skin_checked="1">
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i>
                            </div>
                            <h6>120 ratings</h6>
                        </div>
                        <div class="label-section" bis_skin_checked="1">
                            <span class="label-text">AVAILABILITY</span>
                            @if(!$product_details->qty == '0')
                            <span class="badge badge-grey-color ms-3">In Stock</span>
                            <span class="badge badge-grey-color ms-2">{{$product_details->qty}} Item</span>
                            @else
                            <span class="badge badge-grey-color ms-3">Out of Stock</span>
                            <span class="badge badge-grey-color ms-2">{{$product_details->qty}} Item</span>
                            @endif
                        </div>
                        <?php
                            // Check if $val->price and $val->selling_price are numeric before performing the calculation
                        if (is_numeric($product_details->price) && is_numeric($product_details->selling_price) && $product_details->price != 0) {
                                // Calculate the discount percentage
                            $discountPercentage = round((($product_details->price - $product_details->selling_price) / $product_details->price) * 100);
                        } else {
                                // Set a default value or handle the case where the values are not numeric or $val->price is 0
                            $discountPercentage = 0;
                        }
                        ?>
                        <h3 class="price-detail">${{$product_details->selling_price}} <del>${{$product_details->price}}</del><span>{{ $discountPercentage }}% off</span></h3>
                        
                        <div id="selectSize" class="addeffect-section product-description border-product" bis_skin_checked="1">
                            <h6 class="product-title size-text">select Color 
                              <span>
                                <a href="" data-bs-toggle="modal" data-bs-target="#sizemodal" previewlistener="true">size
                                  chart
                              </a>
                          </span>
                      </h6>


                      <div class="size-box" bis_skin_checked="1">
                        @php
                        $color = json_decode($product_details->color)
                        @endphp
                        @foreach($color as $val)
                        <input type="radio" class="custom-control color" id="size-1" name="color" value="{{ $val }}"> 
                        <span class="ml-1">{{ $val }}</span>
                        @endforeach
                    </div>

                </div>
                <div id="" class="addeffect-section product-description border-product" bis_skin_checked="1">
                  @if(!empty($product_details->size))
                  <h6 class="product-title size-text">select size </h6>

                  <div class="size-box" bis_skin_checked="1">
                      @php
                      $size = json_decode($product_details->size)
                      @endphp
                      @foreach($size as $val)
                      <input type="radio" class="custom-control size" id="size-1" name="size" value="{{ $val }}"> 
                      <span class="ml-1">{{ $val }}</span>
                      @endforeach
                  </div>
                  @endif

                  <h6 class="product-title">quantity</h6>
                  <div class="qty-box" bis_skin_checked="1">
                    <div class="input-group" bis_skin_checked="1"><span class="input-group-prepend"><button id="decrease" type="button" class="btn quantity-left-minus" data-type="minus" data-field="" fdprocessedid="hqd1z"><i class="fa-solid fa-minus"></i></button> </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" fdprocessedid="rogv2">
                        <span class="input-group-prepend"><button id="increase" type="button" class="btn quantity-right-plus" data-type="plus" data-field="" fdprocessedid="a2hh48"><i class="fa-solid fa-plus"></i></button></span>
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{$product_details->id}}" class="prod_id" name="">
            <div class="product-buttons" bis_skin_checked="1">
                <a href="javascript:void(0)" id="cartEffect" class="addTocartBtn btn btn-solid hover-solid btn-animation">
                    <i class="fa fa-shopping-cart me-1" aria-hidden="true"></i> 
                    add to cart
                </a> 
                <a href="#" class="btn btn-solid addToWishlist">
                    <i class="fa fa-bookmark fz-16 me-2" aria-hidden="true"></i>
                    wishlist
                </a>
            </div>
            <div class="border-product" bis_skin_checked="1">
                <h6 class="product-title">Sales Ends In</h6>
                <div class="timer" bis_skin_checked="1">
                    <p id="demo">
                      <span>239<span class="padding-l">:</span>
                      <span class="timer-cal">Days</span>
                  </span>
                  <span>19<span class="padding-l">:</span>
                  <span class="timer-cal">Hrs</span>
              </span>
              <span>52<span class="padding-l">:</span>
              <span class="timer-cal">Min</span></span>
              <span>31
                <span class="timer-cal">Sec</span>
            </span> 
        </p>
    </div>
</div>
<div class="border-product" bis_skin_checked="1">
    <h6 class="product-title">shipping info</h6>
    <ul class="shipping-info">
        <li>100% Original Products</li>
        <li>Free Delivery on order above Rs. 799</li>
        <li>Pay on delivery is available</li>
        <li>Easy 30 days returns and exchanges</li>
    </ul>
</div>
<div class="border-product" bis_skin_checked="1">
    <h6 class="product-title">share it</h6>
    <div class="product-icon" bis_skin_checked="1">
        <ul class="product-social">
            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="tab-product m-0">
    <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="col-sm-12 col-lg-12" bis_skin_checked="1">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-selected="true"><i class="icofont icofont-ui-home"></i>Details</a>
                        <div class="material-border" bis_skin_checked="1"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="review-top-tab" data-bs-toggle="tab" href="#top-review" role="tab" aria-selected="false"><i class="icofont icofont-contacts"></i>Write Review</a>
                        <div class="material-border" bis_skin_checked="1"></div>
                    </li>
                </ul>
                <div class="tab-content nav-material" id="top-tabContent" bis_skin_checked="1">
                    <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab" bis_skin_checked="1">
                        {!! $product_details->long_detail !!}
                    </div>
                    <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab" bis_skin_checked="1">
                        <form class="theme-form">
                            <div class="form-row row" bis_skin_checked="1">
                                <div class="col-md-12" bis_skin_checked="1">
                                    <div class="media" bis_skin_checked="1">
                                        <label>Rating</label>
                                        <div class="media-body ms-3" bis_skin_checked="1">
                                            <div class="rating three-star" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" bis_skin_checked="1">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your name" required="">
                                </div>
                                <div class="col-md-6" bis_skin_checked="1">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" required="">
                                </div>
                                <div class="col-md-12" bis_skin_checked="1">
                                    <label for="review">Review Title</label>
                                    <input type="text" class="form-control" id="review" placeholder="Enter your Review Subjects" required="">
                                </div>
                                <div class="col-md-12" bis_skin_checked="1">
                                    <label for="review">Review Title</label>
                                    <textarea class="form-control" placeholder="Wrire Your Testimonial Here" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <div class="col-md-12" bis_skin_checked="1">
                                    <button class="btn btn-solid" type="submit">Submit YOur
                                    Review</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-b-space ratio_asos">
    <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="col-12 product-related" bis_skin_checked="1">
                <h2>Related Products</h2>
            </div>
        </div>
        <div class="row search-product" bis_skin_checked="1">
            @foreach($related_product as $val)
            <div class="col-xl-2 col-md-4 col-6" bis_skin_checked="1">
                <div class="product-box">
                  <div class="img-wrapper">
                      <div class="front">
                          @php
                          $images = json_decode($val['images']);
                          @endphp
                          <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                              <img src="{{asset('upload/product/'.$images[0])}}" class="img-fluid blur-up lazyload bg-img" alt="">
                          </a>
                      </div>
                      <div class="back">
                          <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                              <img src="{{asset('upload/product/'.$images[1])}}" class="img-fluid blur-up lazyload bg-img" alt="">
                          </a>
                      </div>
                      <div class="cart-info cart-wrap">
                          <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                              <i class="fa-solid fa-cart-shopping"></i>
                          </button>
                          <a href="javascript:void(0)" title="Add to Wishlist">
                              <i class="fa-regular fa-heart"></i>
                          </a>
                          <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}"  title="Quick View">
                              <i class="fa-solid fa-eye"></i>
                          </a>
                      </div>
                  </div>
                  <div class="product-detail">
                      <div class="rating">
                          <i class="fa fa-star"></i> 
                          <i class="fa fa-star"></i> 
                          <i class="fa fa-star"></i> 
                          <i class="fa fa-star"></i> 
                          <i class="fa fa-star"></i>
                      </div>
                      <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                          <h6>{{$val->category->title}}</h6>
                          <h6>{{$val->product_name}}</h6>
                      </a>
                      <div class="d-flex">
                          <h4><del>${{$val->price}}</del></h4>
                          <h4 style="margin-left: 20px;">${{$val->selling_price}}</h4>
                      </div>
                      <?php
                              // Check if $val->price and $val->selling_price are numeric before performing the calculation
                      if (is_numeric($val->price) && is_numeric($val->selling_price) && $val->price != 0) {
                                  // Calculate the discount percentage
                          $discountPercentage = round((($val->price - $val->selling_price) / $val->price) * 100);
                      } else {
                                  // Set a default value or handle the case where the values are not numeric or $val->price is 0
                          $discountPercentage = 0;
                      }
                      ?>
                      <div>
                          <p>{{ $discountPercentage }}%</p>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</section>
<div class="modal fade" id="sizemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" bis_skin_checked="1">
  <div class="modal-dialog modal-dialog-centered" role="document" bis_skin_checked="1">
      <div class="modal-content" bis_skin_checked="1">
          <div class="modal-header" bis_skin_checked="1">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body" bis_skin_checked="1"><img src="{{asset('assets/images/size-chart.jpg')}}" alt="" class="img-fluid blur-up lazyload"></div>
      </div>
  </div>
</div>
@endsection
@section('script')

<script>
    $(document).ready(function(){

        $('.addTocartBtn').click(function(e){
            e.preventDefault();
            var product_id = $(this).closest('.prod_data').find('.prod_id').val();
            var product_qty = $(this).closest('.prod_data').find('.input-number').val();
            var color = $(this).closest('.prod_data').find('.color:checked').val();
            var size = $(this).closest('.prod_data').find('.size:checked').val();
            alert
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "GET",
                url: "{{ url('add-to-cart')}}"+"/",
                data: {
                    'product_id' : product_id,
                    'product_qty' : product_qty,
                    'color' : color,
                    'size' : size,
                },
                success: function (response){
                    swal(response.status);

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    // alert(errorThrown)
                    if(errorThrown == 'Unauthorized'){
                        swal('Login to continue')
                    }
                }

            });
            // 45
        });

        

        $('.addToWishlist').click(function (e) {
            // e.preventDefault();
            var product_id = $(this).closest('.prod_data').find('.prod_id').val();
            var color = $(this).closest('.prod_data').find('.color:checked').val();
            var size = $(this).closest('.prod_data').find('.size:checked').val();

            console.log(product_id);
            $.ajax({
                method : "get",
                url : "{{url('/add-to-wishlist')}}",
                data :{
                    'prod_id' : product_id,
                    'color' : color,
                    'size' : size,
                },
                success: function (response){
                    swal(response.status);
                }
            })
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



    });



    function starry (instance) {
        // (A) SET DEFAULTS
        if (instance.max === undefined) { instance.max = 5; }
        if (instance.now === undefined) { instance.now = 0; }
        if (instance.now > instance.max) { instance.now = instance.max; }
        if (instance.disabled === undefined) { instance.disabled = false; }

        // (B) GENERATE STARS
        instance.target.classList.add("starwrap");
        for (let i=1; i<=instance.max; i++) {
            // (B1) CREATE HTML STAR
            let s = document.createElement("div");
            s.className = "star";
            instance.target.appendChild(s);

            // (B2) HIGHLIGHT STAR
            if (i <= instance.now) { s.classList.add("on"); }

            if (!instance.disabled) {
                // (B3) ON MOUSE OVER
                s.onmouseover = () => {
                    let all = instance.target.getElementsByClassName("star");
                    for (let j=0; j<all.length; j++) {
                        if (j<i) { all[j].classList.add("on"); }
                        else { all[j].classList.remove("on"); }
                    }
                };

                // (B4) ON CLICK
                if (instance.click) { s.onclick = () => { instance.click(i); }; }
            }
        }

        // (C) GET NUMBER OF SELECTED STARS
        instance.target.getstars = () => {
            return instance.target.querySelectorAll(".on").length;
        };
    }

    starry({
        // (C1) REQUIRED
        target: document.getElementById("demo"),
        // (C2) OPTIONAL
        max: 5,
        now: 3,
        // disabled: true,
        click : (stars) => { alert(stars); }
    });

    // (D) TO GET NUMBER OF STARS PROGRAMMATICALLY
    var stars = document.getElementById("demo").getstars();
    console.log(stars);




</script>

{{-- Add to cart --}}

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const decreaseButton = document.getElementById('decrease');
        const increaseButton = document.getElementById('increase');
        const quantityInput = document.getElementById('quantity');

        decreaseButton.addEventListener('click', function () {
            let currentQuantity = parseInt(quantityInput.value, 10);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }
        });

        increaseButton.addEventListener('click', function () {
            let currentQuantity = parseInt(quantityInput.value, 10);
            quantityInput.value = currentQuantity + 1;
        });
    });

</script>

@endsection