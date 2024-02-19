@extends('layouts.front') 
@section('title') 
Contact
@endsection 
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb justify-content-start">
                        <li class="breadcrumb-item"><a href="index.html" previewlistener="true">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="contact-page section-b-space">
        <div class="container" bis_skin_checked="1">
            <div class="row section-b-space" bis_skin_checked="1">
                <div class="col-lg-7 map" bis_skin_checked="1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1605.811957341231!2d25.45976406005396!3d36.3940974010114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1550912388321" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-5" bis_skin_checked="1">
                    <div class="contact-right" bis_skin_checked="1">
                        <ul>
                            <li>
                                <div class="contact-icon" bis_skin_checked="1">
                                    <i class="fa-solid fa-phone"></i>
                                    <h6>Contact Us</h6>
                                </div>
                                <div class="media-body" bis_skin_checked="1">
                                    <p>+91 123 - 456 - 7890</p>
                                    <p>+86 163 - 451 - 7894</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon" bis_skin_checked="1">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h6>Address</h6>
                                </div>
                                <div class="media-body" bis_skin_checked="1">
                                    <p>ABC Complex,Near xyz, New York</p>
                                    <p>USA 123456</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon" bis_skin_checked="1">
                                    <i class="fa-regular fa-envelope"></i>
                                    <h6>Email Address</h6>
                                </div>
                                <div class="media-body" bis_skin_checked="1">
                                    <p>Support@Shopcart.com</p>
                                    <p>info@shopcart.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon" bis_skin_checked="1"><i class="fa fa-fax" aria-hidden="true"></i>
                                    <h6>Fax</h6>
                                </div>
                                <div class="media-body" bis_skin_checked="1">
                                    <p>Support@Shopcart.com</p>
                                    <p>info@shopcart.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" bis_skin_checked="1">
                <div class="col-sm-12" bis_skin_checked="1">
                    <form class="theme-form" method="Post" action="{{ url('contact') }}">
                        @csrf
                        <div class="form-row row" bis_skin_checked="1">
                            <div class="col-md-6" bis_skin_checked="1">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" id="name" name="fname" placeholder="Enter Your name" required="" fdprocessedid="l75yrk">
                            </div>
                            <div class="col-md-6" bis_skin_checked="1">
                                <label for="email">Last Name</label>
                                <input type="text" class="form-control" id="last-name" name="lname" placeholder="Email" required="" fdprocessedid="pzzj0r">
                            </div>
                            <div class="col-md-6" bis_skin_checked="1">
                                <label for="review">Phone number</label>
                                <input type="text" class="form-control" id="review" name="phone" placeholder="Enter your number" required="" fdprocessedid="wupr5r">
                            </div>
                            <div class="col-md-6" bis_skin_checked="1">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="" fdprocessedid="091lu">
                            </div>
                            <div class="col-md-12" bis_skin_checked="1">
                                <label for="review">Write Your Message</label>
                                <textarea class="form-control" name="message" placeholder="Write Your Message" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="col-md-12" bis_skin_checked="1">
                                <button class="btn btn-solid" type="submit" fdprocessedid="q9428p">Send Your Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection 