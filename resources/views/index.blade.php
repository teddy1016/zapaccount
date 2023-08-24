@extends('layouts')

@section('content')
    <!--begin home section -->
    <section class="home-section" id="home">

        <div class="home-section-overlay"></div>

		<!--begin container -->
		<div class="container">

	        <!--begin row -->
	        <div class="row">
	          
                <!--begin col-md-6-->
                <div class="col-md-6 padding-top-120">

                    <h1>One account to manage all your ZAP Products</h1>

                    <p class="hero-text">We believe in making things easier, with a ZAP Account you can login to all our products like ZAP Ads, ZAP Places, ZAP Market and much more.</p>

                    <!--begin popup-video-wrapper-->
                    <div class="popup-gallery-wrapper">
                        
                        <!--begin popup-video-->
                        <div class="popup-gallery hero-gallery">
                            
                            <a class="popup4 video-icon" href="https://www.youtube.com/watch?v=FPfQMVf4vwQ">
                                <i class="fas fa-play"></i>
                            </a>

                        </div>
                        <!--end popup-video-->

                        <p class="popup-video-text">Watch Video</p>

                    </div>
                    <!--end popup-video-wrapper-->

                </div>
                <!--end col-md-6-->

                <!--begin col-md-5-->
                <div class="col-md-5 offset-md-1 margin-top-20">
			
                    <!--begin register-form-wrapper-->
                    <div  id="section2" class="register-form-wrapper wow bounceIn" data-wow-delay="0.5s" section="signup" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                        <h3>Get Your ZAP account here</h3>

                        <p>One account for all things ZAP!</p>

                        <!--begin form-->
                        <div>
                             
                            <!--begin success message -->
                            <p class="register_success_box" style="display:none;">We received your application, we are opening up ZAP accounts very soon and we'll notify you.</p>
                            <!--end success message -->
                            
                            <!--begin register form -->
                            <form action="{{ route('store') }}" method="post">
                                @csrf
                                <!-- <div class="mb-3 row">
                                    <div class="col-md-12">
                                    <input type="text" class="register-input name-input white-input form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="User Name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div> -->
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                    <input type="email" class="register-input name-email white-input form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email Address">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                    <input type="password" class="register-input name-pwd white-input form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                    <input type="password" class="register-input name-pwd white-input form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                    <input type="text" class="register-input name-country white-input form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="Country">
                                        @if ($errors->has('country'))
                                            <span class="text-danger">{{ $errors->first('country') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                    <select class="register-input white-input" required="" name="zaptype" id="zaptype">
                                        <option value="">We need a ZAP account for...</option>
                                        <option value="zapads">ZAP Ads</option>
                                        <option value="zapplace">ZAP Places</option>
                                        <option value="zapmarket">List things for sale on ZAP Market</option>
                                    </select>
                                    @if ($errors->has('zaptype'))
                                        <span class="text-danger">{{ $errors->first('zaptype') }}</span>
                                    @endif
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <input value="Get Started" class="register-submit" type="submit">
                                    </div>
                                </div>
                            </form>
                            <p class="register-form-terms">We'll email you to confirm your account</p>
                            
                        </div>
                        <!--end form-->

                    </div>
                    <!--end register-form-wrapper-->

                </div>
                <!--end col-md-5-->

	        </div>
	        <!--end row -->

		</div>
		<!--end container -->

    </section>
    <!--end home section -->

    <!--begin partners-section-->
    <div class="partners-section">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-sm-12-->
                <div class="col-md-10 mx-auto text-center partners">
                    <h5 class="partners-title">You can use your ZAP account for:</h5>
                    <img src="{{ asset('assets/images/1.png')}}" class="partners" alt="ZAP Search">
                    <img src="{{ asset('assets/images/2.png')}}" class="partners" alt="ZAP Places">
                    <img src="{{ asset('assets/images/3.png')}}" class="partners" alt="ZAP Ads">
                    <img src="{{ asset('assets/images/4.png')}}" class="partners" alt="ZAP Market">
                </div>
                <!--end col-sm-12-->
                
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->
    
    </div> 
    <!--end partners-section-->

    <!--begin section-grey -->
    <section class="section-grey" id="about">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center margin-bottom-10">

                    <h2 class="section-title">Why a ZAP account?</h2>

                    <p class="section-subtitle">Here at ZAP we have many products and we are building more. We wanted to simplify things with a single account, rather than you having to have an account for each. </p>
                    
                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

        <!--begin services-wrapper -->
        <div class="services-wrapper">

            <!--begin container -->
            <div class="container">

                <!--begin row -->
                <div class="row">

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services blue">

                           <img src="{{ asset('assets/images/1.png')}}" class="partners" alt="ZAP Search">

                            <h4>ZAP Search</h4>

                            <p>With your ZAP account you can manage your ZAP search settings.
							<br />
							<br />
						<a href="https://www.zapsearh.co" target="_blank">Go to ZAP Search</a></p>
                            
                        </div>

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services red">

                        <img src="{{ asset('assets/images/2.png')}}" class="partners" alt="ZAP Search">

                            <h4>ZAP Places</h4>

                            <p>With your ZAP account you can manage your ZAP Places including adding new places and more.
								<br />
							<br />
    							<a href="https://www.zapplaces.com" target="_blank">Go to ZAP Places</a></p>
							</p>
                            
                        </div>

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services green">

                        <img src="{{ asset('assets/images/3.png')}}" class="partners" alt="ZAP Search">

                            <h4>ZAP Ads</h4>

                            <p>Need to attract more new customers to your business, event or place? Use ZAP Ads
								<br />
							<br />
							<a href="https://www.zapads.co" target="_blank">Go to ZAP Ads</a>
							</p>
                            
                        </div>

                    </div>
                    <!--end col-md-4 -->
               
                </div>
                <!--end row -->
                
            </div>
            <!--end container -->

        </div>
        <!--end services-wrapper -->

    </section>
    <!--end section-grey -->

    <!--begin section-white -->
    <section class="section-white">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row align-items-center">
            
                <!--begin col-md-6-->
                <div class="col-md-6 wow slideInLeft" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: slideInLeft;">

                    <div class="margin-right-15">

                        <img src="{{ asset('assets/images/2.png')}}" class="width-100 image-shadow bottom-margins-images" alt="ZAP places">

                    </div>
                    
                </div>
                <!--end col-sm-6-->
                
                <!--begin col-md-6-->
                <div class="col-md-6">

                    <h3>Discover how a ZAP account can help you to grow your business fast.</h3>

                    <p>ZAP Ads and ZAP Places together will get your business exposed to locals FAST.</p>
                    
                    <ul class="benefits">
                        <li><i class="fas fa-check"></i> Only pay a small cost when new customers visit your website</li>
                        <li><i class="fas fa-check"></i> List your business on ZAP Places to be found locally</li>
                        <li><i class="fas fa-check"></i> If you need local customers a ZAP account can help</li>
                    </ul>

                    <a href="#" class="btn-red small scrool">Get an account now</a>

                </div>
                <!--end col-md-6-->
            
            </div>
            <!--end row-->
    
        </div>
        <!--end container-->
    
    </section>
    <!--end section-white-->

    <!--begin section-grey -->
    <section class="section-grey">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row align-items-center">
            
                <!--begin col-md-6-->
                <div class="col-md-6">

                    <div class="nav flex-column nav-pills margin-right-25" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        
                            <!--begin features-second -->
                            <div class="features-second">
                                
                                <div class="dropcaps-circle blue">
                                 <i class="fa fa-user-circle" aria-hidden="true"></i>
                                </div>

                                <h4 class="margin-bottom-5">Advertise to customers right now</h4>

                                <p>Target new customers actively searching for your poduct or service right now</p>

                            </div>
                            <!--end features-second-->
                        </a>

                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            
                            <!--begin features-second-->
                            <div class="features-second">

                                <div class="dropcaps-circle red">
                             <i class="fa fa-mouse-pointer" aria-hidden="true"></i>
                                </div>

                                <h4 class="margin-bottom-5">Only Pay when they click and visit your website</h4>

                                <p>You set how much you pay per click and per month so you are in control</p>

                            </div>
                            <!--end features-second-->

                        </a>

                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            
                            <!--begin features-second-->
                            <div class="features-second">

                                <div class="dropcaps-circle green">
                              <i class="fa fa-bullseye" aria-hidden="true"></i>
                                </div>

                                <h4 class="margin-bottom-5">Track your website data with ZAP Analytics</h4>

                                <p>You control your own data with ZAP Analytic you can view whats happening on your website</p>

                            </div>
                            <!--end features-second-->

                        </a>

                    </div>

                </div>
                <!--end col-md-6-->
                
                <!--begin col-md-6 -->
                <div class="col-md-6">

                    <div class="tab-content margin-left-20" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <img src="{{ asset('assets/images/23.png')}}" class="width-100 image-shadow top-margins-images" alt="pic">
                        </div>

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"> 
                            <img src="{{ asset('assets/images/24.png')}}" class="width-100 image-shadow top-margins-images" alt="pic">
                        </div>

                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <img src="{{ asset('assets/images/15.png')}}" class="width-100 image-shadow top-margins-images" alt="pic">
                        </div>

                    </div>

                </div>
                <!--end col-md-6 -->

            </div>
            <!--end row-->
    
        </div>
        <!--end container-->
    
    </section>
    <!--end section-grey-->

    <!--begin section-bg-1 -->
    <section class="section-bg-1">
        
        <div class="section-bg-overlay"></div>

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col md 7 -->
                <div class="col-md-7 mx-auto margin-bottom-20 text-center">

                    <h2 class="white-text">Fun Facts About ZAP Search</h2>

                </div>
                <!--end col md 7-->
            
            </div>
            <!--end row-->
    
            <!--begin row-->
            <div class="row">
        
                <!--begin fun-facts-box -->
                <div class="col-md-2 offset-md-2 fun-facts-box text-center">
                    
                   <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                    
                    <p class="fun-facts-title">We will <span class="facts-numbers">NEVER</span><br>Sell Your Data</p>
                    
                </div>
                <!--end fun-facts-box -->

                <!--begin fun-facts-box -->
                <div class="col-md-2 fun-facts-box text-center">
                    
                <i class="fa fa-tree" aria-hidden="true"></i>
                                               
                    <p class="fun-facts-title">We Plant <span class="facts-numbers">TREE'S</span><br>Thanks to YOU and our Tree Partners</p>
                        
                </div>
                <!--end fun-facts-box -->

                <!--begin fun-facts-box -->
                <div class="col-md-2 fun-facts-box text-center">
                    
                 <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                               
                    <p class="fun-facts-title">We serve <span class="facts-numbers">MEALS</span><br>Thanks to our Food serving partners</p>
                        
                </div>
                <!--end fun-facts-box -->

               \
                        
                </div>
                <!--end fun-facts-box -->

            </div>
            <!--end row-->
    
        </div>
        <!--end container-->
    
    </section>
    <!--end section-bg-1 -->

    <!--begin testimonials section -->
    <section class="section-grey" id="testimonials">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row align-items-center">

                <!--begin col-md-5 -->
                <div class="col-md-5 col-sm-12">

                    <h2>What People Are Saying.</h2>

                    <p>We absolutely love ZAP, we are so proud that there is a search company we can use that does nto sell our data, that also plants trees and serves meals. Keep it up! </p>
                    
                        <!--begin row-->
                        <div class="row">
                        
                            <!--begin col-md-4-->
                            <div class="col-md-4 col-sm-6">

                                <!--begin testim-platform-->
                                <div class="testim-platform first">

                                    <p>ZAP Search</p>

                                    <div class="testim-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                    </div>

                                </div>
                                <!--end testim-platform-->
                                
                            </div>
                            <!--end col-sm-4-->
                            
                            <!--begin col-md-4-->
                            <div class="col-md-4 col-sm-6">

                                <!--begin testim-platform-->
                                <div class="testim-platform">

                                    <p>ZAP Places</p>

                                    <div class="testim-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                    </div>

                                </div>
                                <!--end testim-platform-->
                                
                            </div>
                            <!--end col-sm-4-->
                            
                        </div>
                        <!--end row-->
                        
                </div>
                <!--end col-md-5 -->

                <!--begin col-md-1 -->
                <div class="col-md-1"></div>
                <!--end col-md-1 -->

                <!--begin col-md-6-->
                <div class="col-md-6">

                    <!--begin accordion -->
                    <div class="accordion" id="accordionFAQ">

                        <!--begin card -->
                        <div class="card">
                            
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                                <div class="card-body">
                                ZAP is a great platform, we don't have a big ad account, however they support us and provide great advice so we can get more from ZAPAds.
                                </div>
                            </div>

                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">
                                  <p class="testim-name">Alexandra Smith / <span>Manager - Pizza Plantet</span></p>
                                </button>
                                </h5>
                            </div>

                        </div>
                        <!--end card -->

                        <!--begin card -->
                        <div class="card">

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                                <div class="card-body">
                                We hate the big corporates, and we love that ZAP is nimble, Lean and the TREES and Meals is a big bonus
                                </div>
                            </div>

                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">
                                  <p class="testim-name">Mark P / <span>Evolution Electricians</span></p>
                                </button>
                                </h5>
                            </div>

                        </div>
                        <!--end card -->

                        <!--begin card -->
                        <div class="card">

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                                <div class="card-body">
                                We used Adwords for years and got billed monthly for thousands, we now spend the same, sometimes alot LESS per month with ZAP Ads but the clicks are genuine and we can see the sales from REAL people. Thank you 
                                </div>
                            </div>

                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">
                                  <p class="testim-name">Christina Philla / <span>Designer - Only Clothing</span></p>
                                </button>
                                </h5>
                            </div>

                        </div>
                        <!--end card -->

                    </div>
                    <!--end accordion -->

                </div>
                <!--end col-md-6-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end testimonials section -->

    <!--begin section-white -->
    <section class="section-white" id="portfolio">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center margin-bottom-30">

                    <h2 class="section-title">Our products</h2>

                    <p class="section-subtitle">Dicover the products and platforms developed by the ZAP Search team. You can sign in and manage each of them for yourself with a ZAP account.  </p>
                    
                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

        <!--begin container -->
        <div class="container">

            <!--begin row-->
            <div class="row wow fadeIn" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeIn;">

                <!--begin col-md-4 -->
                <div class="col-md-4 col-sm-12 p-0 m-0">

                    <figure class="gallery-insta">
                        <!--begin popup-gallery-->
                        <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                            <a class="popup2" href="images/11.png">
                                <img src="{{ asset('assets/images/11.png')}}" class="width-100" alt="pic">
                                <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                            </a>
                        </div>
                        <!--end popup-gallery-->
                    </figure>

                    <figure class="gallery-insta">
                        <!--begin popup-gallery-->
                        <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                            <a class="popup2" href="images/12.png">
                                <img src="{{ asset('assets/images/12.png')}}" class="width-100" alt="pic">
                                <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                            </a>
                        </div>
                        <!--end popup-gallery-->
                    </figure>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12 p-0 m-0">

                    <figure class="gallery-insta">
                        <!--begin popup-gallery-->
                        <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                            <a class="popup2" href="images/13.png">
                                <img src="{{ asset('assets/images/13.png')}}" class="width-100" alt="pic">
                                <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                            </a>
                        </div>
                        <!--end popup-gallery-->
                    </figure>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12 p-0 m-0">

                    <figure class="gallery-insta">
                        <!--begin popup-gallery-->
                        <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                            <a class="popup2" href="images/14.png">
                                <img src="{{ asset('assets/images/14.png')}}" class="width-100" alt="pic">
                                <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                            </a>
                        </div>
                        <!--end popup-gallery-->
                    </figure>

                    <figure class="gallery-insta">
                        <!--begin popup-gallery-->
                        <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                            <a class="popup2" href="images/15.png">
                                <img src="{{ asset('assets/images/15.png')}}" class="width-100" alt="pic">
                                <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                            </a>
                        </div>
                        <!--end popup-gallery-->
                    </figure>
                    
                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section-white -->

   

    <!--begin section-bg-2 -->
    <section class="section-bg-2">
        
        <div class="section-bg-overlay"></div>

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col md 7 -->
                <div class="col-md-7 mx-auto text-center">

                    <h2 class="white-text">Do more with a ZAP Account</h2>

                    <p class="white-text">With a ZAP account you can manage all aspects of our products. With one account you can sign in and personalise ZAP Search, as well as create ZAP Ads, create and manage ZAP Places or even setup ZAP Analytics or even buy and sell on ZAP Market.</p>
                
                    <a href="#" class="btn-white small scrool">Get an account</a>

                    <a href="#" class="btn-white-border small scrool">Sign in</a>

                </div>
                <!--end col md 7-->
            
            </div>
            <!--end row-->
    
        </div>
        <!--end container-->
    
    </section>
    <!--end section-bg-2 -->

    <!--begin features section -->
    <section class="section-white" id="features">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center padding-bottom-10">

                    <h2 class="section-title">Some addition information</h2>

                    <p class="section-subtitle">We aim to build digital products that help you grow your business / find what you are looking for. We also aim to in all things simplify the process to make it easier for you.</p>

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box light-green wow fadeIn" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                      <i class="fa fa-search" aria-hidden="true"></i>

                        <div class="feature-box-text">

                            <h4>Clean Honest Web Search</h4>

                            <p>We aim to offer web search that is clean and honest. Enabling you to find what you want, fast.</p>

                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box light-blue wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                       <i class="fa fa-check" aria-hidden="true"></i>

                        <div class="feature-box-text">

                            <h4>Cost Effective Advertising</h4>

                            <p>With ZAPAds you can market your product, service, business or event and pay only when users visit your website</p>

                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md 4-->
                <div class="col-md-4">

                    <div class="feature-box orange wow fadeIn" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                       <i class="fa fa-map-marker" aria-hidden="true"></i>

                        <div class="feature-box-text">

                            <h4>Places that matter to YOU</h4>

                            <p>With ZAP Places you can mark places that you find interesting that you think others will too from Parks to Playgrounds, to Good food and Coffee.</p>


                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box dark-blue wow fadeIn" data-wow-delay="1s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                      <i class="fa fa-info-circle" aria-hidden="true"></i>

                        <div class="feature-box-text">

                            <h4>FREE Web Analytics</h4>

                            <p>With ZAP Analytics you can privately view, monitor and access ALL your website analytics to help you make informed decisions. </p>

                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box light-red wow fadeIn" data-wow-delay="1.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                       <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                        <div class="feature-box-text">

                            <h4>Buy & Sell on ZAP Market</h4>

                            <p>Have something to sell? Sell it on ZAP Market and show your listing on ZAP Search locally.</p>

                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4-->
                <div class="col-md-4">

                    <div class="feature-box dark-green wow fadeIn" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">


                       <i class="fa fa-tree" aria-hidden="true"></i>


                        <div class="feature-box-text">

                            <h4>When you Search we Plant Trees and serve Meals</h4>

                            <p>ZAP is all about being positive and so when you search it means we are able to Plant Tree's and serve Meals to those in need. </p>

                        </div>

                    </div>

                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end features section -->

    <!--begin faq section -->
    <section class="section-white" id="faq">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center padding-bottom-10">

                    <h2 class="section-title">Frequently Asked Questions</h2>

                    <p class="section-subtitle">We'll try and answer some common questions here:</p>

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col-md-6-->
                <div class="col-md-6">

                    <div class="faq-box">

                        <h5>Why launch search and why in 2023? Isn't it already crowded?</h5>

                        <p>Why? Why not? We first launched our first version of ZAP (formally called BrisFind back in 2002 and it wasn't a complex search by any means it was never released publically however it was our entry into the space. And there are some HUGE playes who currently have the search market but they are doing some things we do not like with your data and censoring information that we believe is not fair.</p>

                    </div>

                    <div class="faq-box">

                        <h5>How is ZAP different to other search engines?</h5>

                        <p>Great question! In is simplest form we will NEVER sell your data, we don't sensor results based on big corporate requests, we've built a search advertising platform that rewards agency partners, and also advertisers who are being stung by high advertising costs. Plus as you search it means we can plant trees and serve meals to those in need.</p>

                    </div>
                    
                </div>
                <!--end col-md-6 -->

                <!--begin col-md-6-->
                <div class="col-md-6">

                    <div class="faq-box">

                        <h5>Do ZAP Ads work? </h5>

                        <p>They sure do! Its like the quetion, Does online marketing work? Of course but like with anything you only get out what your prepared to put in and work towards. With ZAPAds you can create ads that directly target your product, service or event in the locations near you! </p>

                    </div>

                    <div class="faq-box">

                        <h5>So you Plant Trees and serve meals? Explain that. </h5>

                        <p>We certainly do! It's about us being able create positive change that we can track and show your impact by using ZAP Search. So as you search and use our products it allows us to plant trees and serve meals. We partner with OneTreePlanted as well sa Food bank here in Australia to serve meals through.</p>

                    </div>

                </div>

                <!--end col-md-6 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end faq section -->

    <!--begin footer -->
    <div class="footer">
            
        <!--begin container -->
        <div class="container">
        
            <!--begin row -->
            <div class="row">
            
                <!--begin col-md-5 -->
                <div class="col-md-5">
                   
                    <p>© 2023 <span class="template-name">ZAP Search Pty Ltd</span>. Designed by <a href="https://www.zapsearch.co" target="_blank">ZAP Team</a></p>
                    
                </div>
                <!--end col-md-5 -->
                
                <!--begin col-md-2 -->
                <div class="col-md-2"></div>
                <!--end col-md-2 -->
                
                <!--begin col-md-5 -->
                <div class="col-md-5">                                         
                    <!--begin footer_social -->
                    <ul class="footer_social">

                        <li>Follw us:</li>

                        <li><a href="https://twitter.com/ZAPsearch_aus"><i class="fab fa-twitter"></i></a></li>

                        <li><a href="https://www.facebook.com/zapsearch.com.au"><i class="fab fa-facebook-square"></i></a></li>

                        <li><a href="https://www.instagram.com/zap.search/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <!--end footer_social -->
                </div>
                <!--end col-md-5 -->
            </div>
            <!--end row -->
        </div>
        <!--end container -->
    </div>
    <!--end footer -->
@endsection