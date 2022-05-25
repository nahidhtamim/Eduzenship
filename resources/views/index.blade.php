@extends('layouts.front')

@section('title')
        Eduzenship | A True Professional Consultancy Firm
@endsection

@section('contents')



<!--======Hero Slider Section Starts=======-->
<section id="hero">
    <div id="hero-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner hero-item">
            @php
                $i = 1;
            @endphp
            @foreach ($sliders as $slider)
            <div class="carousel-item {{$i == 1 ? 'active': ''}}" style="background-image:url({{asset('/images/sliders/'.$slider->image)}})">
            @php
                $i++;
            @endphp
            </div>
            @endforeach
           
        </div>
           
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>

<!--======Navbar Section Ends=======-->

<!--======Call-to-action-box Section Starts=======-->
<section class="call-to-action-box no-padding text-center text-light">
    <div class="container">
        <div class="action-style-box" data-aos="flip-up" data-aos-duration="1000">
            <div class="row align-items-center">

                <div class="contain">
                    <div id="owl-carousel" class="owl-carousel owl-theme">
                      <div class="item">
                        <div class="card-wrapper">
                            <div class="card">
                                <div class="card-icon-wrapper" style="font-size: 50px;">
                                    <i class="fas fa-road"></i>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Guidance</h4>
                                    <div class="card-content">
                                        <p class="card-text">
                                            <a href="{{url('/our-offerings')}}" class="about__button_two">Learn More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-wrapper">
                            <div class="card">
                                <div class="card-icon-wrapper" style="font-size: 50px;"><i class="fas fa-flag"></i>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Country Information</h4>
                                    <div class="card-content">
                                        <p class="card-text">
                                            <a href="{{url('/our-offerings')}}" class="about__button_two">Learn More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-wrapper">
                            <div class="card">
                                <div class="card-icon-wrapper" style="font-size: 50px;"><i class="fas fa-list"></i>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Selection Of Course</h4>
                                    <div class="card-content">
                                        <p class="card-text">
                                            <a href="{{url('/our-offerings')}}" class="about__button_two">Learn More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-wrapper">
                            <div class="card">
                                <div class="card-icon-wrapper" style="font-size: 50px;"><i class="fas fa-archway"></i></div>
                                <div class="card-body">
                                    <h4 class="card-title">Admission Pathway</h4>
                                    <div class="card-content">
                                        <p class="card-text">
                                            <a href="{{url('/our-offerings')}}" class="about__button_two">Learn More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-wrapper">
                            <div class="card">
                                <div class="card-icon-wrapper" style="font-size: 50px;"><i class="fas fa-home"></i></div>
                                <div class="card-body">
                                    <h4 class="card-title">Accomodation Guidance</h4>
                                    <div class="card-content">
                                        <p class="card-text">
                                            <a href="{{url('/our-offerings')}}" class="about__button_two">Learn More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-wrapper">
                            <div class="card">
                                <div class="card-icon-wrapper" style="font-size: 50px;"><i class="fas fa-car"></i></div>
                                <div class="card-body">
                                    <h4 class="card-title">Travel Aboard</h4>
                                    <div class="card-content">
                                        <p class="card-text">
                                            <a href="{{url('/our-offerings')}}" class="about__button_two">Learn More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-wrapper">
                            <div class="card">
                                <div class="card-icon-wrapper" style="font-size: 50px;"><i class="fas fa-user-shield"></i></div>
                                <div class="card-body">
                                    <h4 class="card-title">Safety</h4>
                                    <div class="card-content">
                                        <p class="card-text">
                                            <a href="{{url('/our-offerings')}}" class="about__button_two">Learn More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-wrapper">
                            <div class="card">
                                <div class="card-icon-wrapper" style="font-size: 50px;"><i class="fas fa-award"></i></div>
                                <div class="card-body">
                                    <h4 class="card-title">Scholarships</h4>
                                    <div class="card-content">
                                        <p class="card-text">
                                            <a href="{{url('/our-offerings')}}" class="about__button_two">Learn More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                <!-- col end -->
            </div>
            <!-- row end -->
        </div>
        <!-- Action style box -->
    </div>
    <!-- Container end -->
</section>
<!--======Call-to-action-box Section Ends=======-->

<div class="container text-center">
    <div class="long-underline-blue"></div>
</div>


<!--======About Us Section Starts=======-->
<section id="about-us">
    <div class="short-description" data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="about container">
            <div class="about__wrp">
                <div class="about__item">
                    <div class="about__img">

                        <img src="{{asset('frontend/images/pexels-cottonbro-4098150.jpg')}}" alt="image">
                    </div>
                    <div class="about__content">
                        <div class="about__title">About Us
                        </div>
                        <div class="underline-white"></div>
                        <div class="about__text">Quality has been one of the most important factors for Eduzenship. At no point of time, we compromise with the quality of the services we render. Guidance is often regarded as an integral part of education therefore; we at Eduzenship provide students with all the required guidance.... </div>
                        <a href="{{url('/about')}}" class="about__button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="about__pagination"></div>
        </div>
    </div>

</section>

<!--======About Us Section Ends=======-->

<!--=====Offer Section Starts=======-->

<section id="offers" data-parallax="scroll" data-image-src="{{asset('frontend/images/IMG_20211219_012239_724.jpg')}}" data-android-fix="false" data-ios-fix="false">
    <div class="container" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400" data-aos-offset="0">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="section-title-white">We Are Here to Help</h3>
                <div class="underline-white"></div>
                <div class="row text-center">
                    <div class="col-md-4 col-sm-6 col-xs-6 pb-5 ts-offers">
                        <h2 style="font-size: 50px;"><i class="fa fa-list-alt" aria-hidden="true"></i></h2>
                        <div class="ts-offers-content">
                            <h3 class="ts-offers-title">Plan</h3>
                        </div>
                    </div>
                    <!-- Col end -->

                    <div class="col-md-4 col-sm-6 pb-5 col-xs-6 ts-offers">
                        <div class="ts-offers-content">
                            <h2 style="font-size: 50px;"><i class="fa fa-map-marker" aria-hidden="true"></i></h2>
                            <h3 class="ts-offers-title">Destination</h3>
                        </div>
                    </div>
                    <!-- Col end -->

                    <div class="col-md-4 col-sm-6 pb-5 ts-offers">
                        <h2 style="font-size: 50px;"><i class="fas fa-university"></i></h2>
                        <div class="ts-offers-content">
                            <h3 class="ts-offers-title">Institute</h3>
                        </div>
                    </div>
                    <!-- Col end -->

                    <div class="col-md-4 col-sm-6 pb-5 ts-offers">
                        <div class="ts-offers-content">
                            <h2 style="font-size: 50px;"><i class="fas fa-user-graduate"></i></h2>
                            <h3 class="ts-offers-title">Sholarship</h3>
                        </div>
                    </div>
                    <!-- Col end -->
                    <div class="col-md-4 col-sm-6 pb-5 ts-offers">
                        <h2 style="font-size: 50px;"><i class="fas fa-id-badge"></i></h2>
                        <div class="ts-offers-content">
                            <h3 class="ts-offers-title">Admission</h3>
                        </div>
                    </div>
                    <!-- Col end -->

                    <div class="col-md-4 col-sm-6 pb-5 ts-offers">
                        <h2 style="font-size: 50px;"><i class="fa fa-headphones" aria-hidden="true"></i></h2>
                        <div class="ts-offers-content">
                            <h3 class="ts-offers-title">Support</h3>
                        </div>
                    </div>
                    <!-- Col end -->

                </div>
                <!-- offers end -->
            </div>
            <!--/ Content row end -->
            <div class="col-lg-6 mt-4 mt-lg-0">
                <h3 class="section-title-white">Our Value</h3>
                <div class="underline-white"></div>
                <p class="text-light">These are the values we are build upon. Surviving is not our moto, living with pride is our goal.</p>

                <div class="accordion accordion-group" id="our-values-accordion">
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Honesty
              </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                            <div class="card-body text-dark">
                                We believe Honesty is the most important thing behind success. This is our first pillar.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Transparency
              </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                            <div class="card-body text-dark">
                                Transparency, as used in science, engineering, business, the humanities and in other social contexts, is operating in such a way that it is easy for others to see what actions are performed.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Experience
              </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                            <div class="card-body text-dark">
                                We are here to make your journey smooth with all the experience we have. In the end, experience speaks for itself.
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Accordion end -->

            </div>
            <!-- Col end -->
        </div>
    </div>
    <!--/ Container end -->
</section>

<!--======Offer Section Ends=======-->

<!--======Top Services Section Starts=======-->
<section id="top-services" class="top-services solid-bg">
    <div class="container">
        <div class="row text-left">
            <div class="col-lg-12">
                <h3 class="section-title-blue">Our Offerings</h3>
                <div class="underline-blue"></div>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
            <div class="col-12">
                <div class="shuffle-btn-group">
                    <label class="active" for="all">
    <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
  </label>
                    <label for="countries">
    <input type="radio" name="shuffle-filter" id="countries" value="countries">Countries
  </label>
                    <label for="courses">
    <input type="radio" name="shuffle-filter" id="courses" value="courses">Courses
  </label>
                    <!-- <label for="government">
    <input type="radio" name="shuffle-filter" id="government" value="government">Government
  </label> -->
                    <!-- <label for="infrastructure">
    <input type="radio" name="shuffle-filter" id="infrastructure" value="infrastructure">Infrastructure
  </label>
                    <label for="residential">
    <input type="radio" name="shuffle-filter" id="residential" value="residential">Residential
  </label>
                    <label for="healthcare">
    <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Healthcare
  </label> -->
                </div>
                <!-- service filter end -->


                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>

                    <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;countries&quot;]">
                        <div class="service-img-container">
                            <a class="gallery-popup" href="{{asset('frontend/images/services/service1.jpg')}}" aria-label="service-img">
                                <img class="img-fluid" src="{{asset('frontend/images/services/service1.jpg')}}" alt="service-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="service-item-info">
                                <div class="service-item-info-content">
                                    <h3 class="service-item-title">
                                        <a href="#">United States of America</a>
                                    </h3>
                                    <p class="service-cat">Opportunities, Growth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 1 end -->

                    <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;countries&quot;]">
                        <div class="service-img-container">
                            <a class="gallery-popup" href="{{asset('frontend/images/services/service3.jpg')}}" aria-label="service-img">
                                <img class="img-fluid" src="{{asset('frontend/images/services/service3.jpg')}}" alt="service-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="service-item-info">
                                <div class="service-item-info-content">
                                    <h3 class="service-item-title">
                                        <a href="#">United Kingdom</a>
                                    </h3>
                                    <p class="service-cat">Culture, Adapt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 2 end -->

                    <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;countries&quot;]">
                        <div class="service-img-container">
                            <a class="gallery-popup" href="{{asset('frontend/images/services/service2.jpg')}}" aria-label="service-img">
                                <img class="img-fluid" src="{{asset('frontend/images/services/service2.jpg')}}" alt="service-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="service-item-info">
                                <div class="service-item-info-content">
                                    <h3 class="service-item-title">
                                        <a href="#">Canada</a>
                                    </h3>
                                    <p class="service-cat">Diversity, Beauty</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 3 end -->

                    <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;courses&quot;]">
                        <div class="service-img-container">
                            <a class="gallery-popup" href="{{asset('frontend/images/services/service5.jpg')}}" aria-label="service-img">
                                <img class="img-fluid" src="{{asset('frontend/images/services/service5.jpg')}}" alt="service-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="service-item-info">
                                <div class="service-item-info-content">
                                    <h3 class="service-item-title">
                                        <a href="#">Engineering</a>
                                    </h3>
                                    <p class="service-cat">CSE, EEE, ME, Etc</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 4 end -->

                    <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;courses&quot;]">
                        <div class="service-img-container">
                            <a class="gallery-popup" href="{{asset('frontend/images/services/service4.jpg')}}" aria-label="service-img">
                                <img class="img-fluid" src="{{asset('frontend/images/services/service4.jpg')}}" alt="service-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="service-item-info">
                                <div class="service-item-info-content">
                                    <h3 class="service-item-title">
                                        <a href="#">Business Studies</a>
                                    </h3>
                                    <p class="service-cat">HR, MIS, Marketing, Etc</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 5 end -->

                    <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;courses&quot;]">
                        <div class="service-img-container">
                            <a class="gallery-popup" href="{{asset('frontend/images/services/service6.jpg')}}" aria-label="service-img">
                                <img class="img-fluid" src="{{asset('frontend/images/services/service6.jpg')}}" alt="service-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="service-item-info">
                                <div class="service-item-info-content">
                                    <h3 class="service-item-title">
                                        <a href="#">Law</a>
                                    </h3>
                                    <p class="service-cat">Legal Agendas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 6 end -->
                </div>
                <!-- shuffle end -->
            </div>

            <div class="col-md-12 text-center mt-5 mb-5">
                <div class="services-btn text-center">
                    <a class="btn" href="{{url('/contact')}}">View All Services</a>
                </div>
            </div>

        </div>
        <!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--======Top Services Section Ends=======-->

<!--======Testimonial Section Starts=======-->

<!-- <section id="testimonials" class="testimonials section-bg">
    <div class="container">

        <div class="row">
            <div class="col-lg-4">
                <div class="section-title" data-aos="fade-right">
                    <h3 class="section-title-blue">Testimonials</h3>
                    <div class="underline-blue"></div>
                    <p>Magnam dolores commodi suscipit uisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="500">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen
                                    aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="images/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                    irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="images/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                    quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="images/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit
                                    fore quem dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="images/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                    esse veniam culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="images/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

    </div>
</section> -->
<!--======Testimonial Section Ends=======-->

@endsection