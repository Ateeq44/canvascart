@extends('layouts.front') 
@section('title') 
Product 
@endsection 
@section('content') 



<div class="breadcrumb-section" bis_skin_checked="1">
      <div class="container" bis_skin_checked="1">
          <div class="row" bis_skin_checked="1">
              <div class="col-sm-6" bis_skin_checked="1">
                  <div class="page-title" bis_skin_checked="1">
                      <h2>product</h2>
                  </div>
              </div>
              <div class="col-sm-6" bis_skin_checked="1">
                  <nav aria-label="breadcrumb" class="theme-breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html" previewlistener="true">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">roduct</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
</div>
<section>
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
              @php
                $images = json_decode($product_details->images)
              @endphp
                <div class="col-lg-6" >

                  <div class="simple-slider">
                    <img id="displayedImage" style="width: 100%" src="{{ asset('upload/product/'.$images[0]) }}" alt="Displayed Product Image">
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
                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <h6>120 ratings</h6>
                        </div>
                        {{-- <div class="label-section" bis_skin_checked="1">
                            <span class="badge badge-grey-color">#1 Best seller</span>
                            <span class="label-text">in fashion</span>
                        </div> --}}
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
                        
                            {{-- @if(!$product_details->size == []) --}}
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
                                <ul>
                                    @foreach($color as $val)
                                    <li style="border-radius: unset;padding: 5px 11px; min-width: 100px;">{{$val}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            
                        </div>
                            {{-- @endif --}}
                        <div id="" class="addeffect-section product-description border-product" bis_skin_checked="1">
                            <h6 class="product-title size-text">select size </h6>
                          {{-- @if(!$product_details->size == 'null') --}}

                          <div class="size-box" bis_skin_checked="1">
                              @php
                              $size = json_decode($product_details->size)
                              @endphp
                              <ul>
                                  @foreach($size as $val)
                                  <li><a href="#">{{$val}}</a></li>
                                  @endforeach
                              </ul>
                          </div>
                          {{-- @endif --}}
                            
                            <h6 class="product-title">quantity</h6>
                            <div class="qty-box" bis_skin_checked="1">
                                <div class="input-group" bis_skin_checked="1"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field="" fdprocessedid="hqd1z"><i class="ti-angle-left"></i></button> </span>
                                    <input type="text" name="quantity" class="form-control input-number" value="1" fdprocessedid="rogv2">
                                    <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field="" fdprocessedid="a2hh48"><i class="ti-angle-right"></i></button></span>
                                </div>
                            </div>
                        </div>
                        <div class="product-buttons" bis_skin_checked="1"><a href="javascript:void(0)" id="cartEffect" class="btn btn-solid hover-solid btn-animation"><i class="fa fa-shopping-cart me-1" aria-hidden="true"></i> add to cart</a> <a href="#" class="btn btn-solid"><i class="fa fa-bookmark fz-16 me-2" aria-hidden="true"></i>wishlist</a></div>
                        {{-- <div class="product-count" bis_skin_checked="1">
                            <ul>
                                <li>
                                    <img src="../assets/images/icon/truck.png" class="img-fluid" alt="image">
                                    <span class="lang">Free shipping for orders above $500 USD</span>
                                </li>
                            </ul>
                        </div> --}}
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
                        <div class="border-product" bis_skin_checked="1">
                            <h6 class="product-title">Frequently bought together</h6>
                            <div class="bundle" bis_skin_checked="1">
                                <div class="bundle_img" bis_skin_checked="1">
                                    <div class="img-box" bis_skin_checked="1">
                                        <a href="#"><img src="../assets/images/fashion/pro/001.jpg" alt="" class="img-fluid blur-up lazyloaded"></a>
                                    </div>
                                    <span class="plus">+</span>
                                    <div class="img-box" bis_skin_checked="1">
                                        <a href="#"><img src="../assets/images/fashion/pro/skirt.jpg" alt="" class="img-fluid blur-up lazyloaded"></a>
                                    </div>
                                    <span class="plus">+</span>
                                    <div class="img-box" bis_skin_checked="1">
                                        <a href="#"><img src="../assets/images/fashion/pro/shoes.jpg" alt="" class="img-fluid blur-up lazyloaded"></a>
                                    </div>
                                </div>
                                <div class="bundle_detail" bis_skin_checked="1">
                                    <div class="theme_checkbox" bis_skin_checked="1">
                                        <label>this product: WOMEN PINK SHIRT <span class="price_product">$55</span>
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label>black long skirt <span class="price_product">$20</span>
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label>women heeled boots <span class="price_product">$15</span>
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <a href="#" class="btn btn-solid btn-xs">buy this bundle</a>
                                    </div>
                                </div>
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
                    <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Specification</a>
                        <div class="material-border" bis_skin_checked="1"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-selected="false"><i class="icofont icofont-contacts"></i>Video</a>
                        <div class="material-border" bis_skin_checked="1"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="review-top-tab" data-bs-toggle="tab" href="#top-review" role="tab" aria-selected="false"><i class="icofont icofont-contacts"></i>Write Review</a>
                        <div class="material-border" bis_skin_checked="1"></div>
                    </li>
                </ul>
                <div class="tab-content nav-material" id="top-tabContent" bis_skin_checked="1">
                    <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab" bis_skin_checked="1">
                        <div class="product-tab-discription" bis_skin_checked="1">
                            <div class="part" bis_skin_checked="1">
                                <p>The Model is wearing a white blouse from our stylist's collection, see the image
                                    for a mock-up of what the actual blouse would look like.it has text written on
                                    it in a black cursive language which looks great on a white color.</p>
                            </div>
                            <div class="part" bis_skin_checked="1">
                                <h5 class="inner-title">fabric:</h5>
                                <p>Art silk is manufactured by synthetic fibres like rayon. It's light in weight and
                                    is soft on the skin for comfort in summers.Art silk is manufactured by synthetic
                                    fibres like rayon. It's light in weight and is soft on the skin for comfort in
                                    summers.</p>
                            </div>
                            <div class="part" bis_skin_checked="1">
                                <h5 class="inner-title">size &amp; fit:</h5>
                                <p>The model (height 5'8") is wearing a size S</p>
                            </div>
                            <div class="part" bis_skin_checked="1">
                                <h5 class="inner-title">Material &amp; Care:</h5>
                                <p>Top fabric: pure cotton</p>
                                <p>Bottom fabric: pure cotton</p>
                                <p>Hand-wash</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab" bis_skin_checked="1">
                        <p>The Model is wearing a white blouse from our stylist's collection, see the image for a
                            mock-up of what the actual blouse would look like.it has text written on it in a black
                            cursive language which looks great on a white color.</p>
                        <div class="single-product-tables" bis_skin_checked="1">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Sleeve Length</td>
                                        <td>Sleevless</td>
                                    </tr>
                                    <tr>
                                        <td>Neck</td>
                                        <td>Round Neck</td>
                                    </tr>
                                    <tr>
                                        <td>Occasion</td>
                                        <td>Sports</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Fabric</td>
                                        <td>Polyester</td>
                                    </tr>
                                    <tr>
                                        <td>Fit</td>
                                        <td>Regular Fit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab" bis_skin_checked="1">
                        <div class="" bis_skin_checked="1">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        </div>
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
                <h2>related products</h2>
            </div>
        </div>
        <div class="row search-product" bis_skin_checked="1">
            <div class="col-xl-2 col-md-4 col-6" bis_skin_checked="1">
                <div class="product-box" bis_skin_checked="1">
                    <div class="img-wrapper" bis_skin_checked="1">
                        <div class="front" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="back" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/01.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/01.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="cart-info cart-wrap" bis_skin_checked="1">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" fdprocessedid="ox4pz9"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" previewlistener="true"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail" bis_skin_checked="1">
                        <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        </div>
                        <a href="product-page(no-sidebar).html" previewlistener="true">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6" bis_skin_checked="1">
                <div class="product-box" bis_skin_checked="1">
                    <div class="img-wrapper" bis_skin_checked="1">
                        <div class="front" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/5.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/5.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="back" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/05.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/05.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="cart-info cart-wrap" bis_skin_checked="1">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" fdprocessedid="f12biyc"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" previewlistener="true"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail" bis_skin_checked="1">
                        <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        </div>
                        <a href="product-page(no-sidebar).html" previewlistener="true">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6" bis_skin_checked="1">
                <div class="product-box" bis_skin_checked="1">
                    <div class="img-wrapper" bis_skin_checked="1">
                        <div class="front" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/6.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/6.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="back" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/06.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/06.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="cart-info cart-wrap" bis_skin_checked="1">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" fdprocessedid="gjbgve"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" previewlistener="true"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail" bis_skin_checked="1">
                        <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        </div>
                        <a href="product-page(no-sidebar).html" previewlistener="true">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6" bis_skin_checked="1">
                <div class="product-box" bis_skin_checked="1">
                    <div class="img-wrapper" bis_skin_checked="1">
                        <div class="front" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/7.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/7.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="back" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/07.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/07.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="cart-info cart-wrap" bis_skin_checked="1">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" fdprocessedid="lr0kte"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" previewlistener="true"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail" bis_skin_checked="1">
                        <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        </div>
                        <a href="product-page(no-sidebar).html" previewlistener="true">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6" bis_skin_checked="1">
                <div class="product-box" bis_skin_checked="1">
                    <div class="img-wrapper" bis_skin_checked="1">
                        <div class="front" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="back" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="cart-info cart-wrap" bis_skin_checked="1">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" fdprocessedid="30g91e"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" previewlistener="true"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail" bis_skin_checked="1">
                        <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        </div>
                        <a href="product-page(no-sidebar).html" previewlistener="true">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6" bis_skin_checked="1">
                <div class="product-box" bis_skin_checked="1">
                    <div class="img-wrapper" bis_skin_checked="1">
                        <div class="front" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/11.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/11.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="back" bis_skin_checked="1">
                            <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/fashion/pro/011.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/fashion/pro/011.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                        </div>
                        <div class="cart-info cart-wrap" bis_skin_checked="1">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart" fdprocessedid="fzo6z"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" previewlistener="true"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail" bis_skin_checked="1">
                        <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        </div>
                        <a href="product-page(no-sidebar).html" previewlistener="true">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="sizemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" bis_skin_checked="1">
                                <div class="modal-dialog modal-dialog-centered" role="document" bis_skin_checked="1">
                                    <div class="modal-content" bis_skin_checked="1">
                                        <div class="modal-header" bis_skin_checked="1">
                                            <h5 class="modal-title" id="exampleModalLabel">Sheer
                                                Straight Kurta</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body" bis_skin_checked="1"><img src="../assets/images/size-chart.jpg" alt="" class="img-fluid blur-up lazyload"></div>
                                    </div>
                                </div>
                            </div>
@endsection