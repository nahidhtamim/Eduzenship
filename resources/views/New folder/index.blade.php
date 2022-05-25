@extends('layouts.front')

@section('title')
        Eduzenship|A True Professional Consultancy Firm
@endsection

@section('contents')



<!--======Hero Slider Section Starts=======-->
<section id="hero">
    <div id="hero-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#hero-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#hero-carousel" data-slide-to="1"></li>
            <li data-target="#hero-carousel" data-slide-to="2"></li>
            <li data-target="#hero-carousel" data-slide-to="3"></li>
            <li data-target="#hero-carousel" data-slide-to="4"></li>
            <li data-target="#hero-carousel" data-slide-to="5"></li>
            <li data-target="#hero-carousel" data-slide-to="6"></li>
            <li data-target="#hero-carousel" data-slide-to="7"></li>
            <li data-target="#hero-carousel" data-slide-to="8"></li>
            <li data-target="#hero-carousel" data-slide-to="9"></li>
            <li data-target="#hero-carousel" data-slide-to="10"></li>
            <li data-target="#hero-carousel" data-slide-to="11"></li>
            <li data-target="#hero-carousel" data-slide-to="12"></li>
            <li data-target="#hero-carousel" data-slide-to="13"></li>
            <li data-target="#hero-carousel" data-slide-to="14"></li>
            <li data-target="#hero-carousel" data-slide-to="15"></li>
            <li data-target="#hero-carousel" data-slide-to="16"></li>
            <li data-target="#hero-carousel" data-slide-to="17"></li>
            <li data-target="#hero-carousel" data-slide-to="18"></li>
            <li data-target="#hero-carousel" data-slide-to="19"></li>
            <li data-target="#hero-carousel" data-slide-to="20"></li>
            <li data-target="#hero-carousel" data-slide-to="21"></li>
            <li data-target="#hero-carousel" data-slide-to="22"></li>
            <li data-target="#hero-carousel" data-slide-to="23"></li>
            <li data-target="#hero-carousel" data-slide-to="24"></li>
            <li data-target="#hero-carousel" data-slide-to="25"></li>
            <li data-target="#hero-carousel" data-slide-to="26"></li>
            <li data-target="#hero-carousel" data-slide-to="27"></li>
            <li data-target="#hero-carousel" data-slide-to="28"></li>
            <li data-target="#hero-carousel" data-slide-to="29"></li>
            <li data-target="#hero-carousel" data-slide-to="30"></li>
            <li data-target="#hero-carousel" data-slide-to="31"></li>
            <li data-target="#hero-carousel" data-slide-to="32"></li>
            <li data-target="#hero-carousel" data-slide-to="33"></li>
            <li data-target="#hero-carousel" data-slide-to="34"></li>
            <li data-target="#hero-carousel" data-slide-to="35"></li>
            <li data-target="#hero-carousel" data-slide-to="36"></li>
            <li data-target="#hero-carousel" data-slide-to="37"></li>
            <li data-target="#hero-carousel" data-slide-to="38"></li>
            <li data-target="#hero-carousel" data-slide-to="39"></li>
            <li data-target="#hero-carousel" data-slide-to="40"></li>
            <li data-target="#hero-carousel" data-slide-to="41"></li>
            <li data-target="#hero-carousel" data-slide-to="42"></li>
            <li data-target="#hero-carousel" data-slide-to="43"></li>
            <li data-target="#hero-carousel" data-slide-to="44"></li>
        </ol>
        <div class="carousel-inner hero-item">
            <!--<div class="carousel-item active" style="background-image:url({{asset('frontend/images/slider-main/bg1.jpg')}})">-->
            <!--    <div class="carousel-caption">-->
            <!--        <h2 class="animated fadeInLeft">Dreams</h2>-->
            <!--        <p class="hero-caption animated fadeInUp"><span>Start Your Dream of Achieving Something Precious</span></p>-->
            <!--        {{-- <p class="animated fadeInUp"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}-->
            <!--    </div>-->
            <!--</div>-->
 
            <!--<div class="carousel-item active" style="background-image:url({{asset('frontend/images/slider-main/bg3.jpg')}})">-->
            <!--    <div class="carousel-caption">-->
            <!--        <h2 class="animated fadeInRight">Set Goal</h2>-->
            <!--        <p class="hero-caption animated fadeInRight"><span>Start Running Towards Your Dream</span></p>-->
            <!--        {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}-->
            <!--    </div>-->
            <!--</div>-->
      
            <div class="carousel-item active" style="background-image:url({{asset('frontend/images/slider-main/bg1.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            
            
    
   
            

            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg2.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown">Seek Experts</h2>
                    <p class="hero-caption animated fadeInUp"><span>Experience The World Through The Words of Experts</span></p>
                    {{-- <p class="animated fadeInUp"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg3.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Set Goal</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Running Towards Your Dream</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg4.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg5.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg6.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg7.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            

          
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg8.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
   
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg9.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            
            
            
            
            
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg10.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown">Seek Experts</h2>
                    <p class="hero-caption animated fadeInUp"><span>Experience The World Through The Words of Experts</span></p>
                    {{-- <p class="animated fadeInUp"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg11.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Set Goal</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Running Towards Your Dream</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg12.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg13.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg14.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown">Seek Experts</h2>
                    <p class="hero-caption animated fadeInUp"><span>Experience The World Through The Words of Experts</span></p>
                    {{-- <p class="animated fadeInUp"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg15.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Set Goal</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Running Towards Your Dream</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg16.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg17.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg18.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown">Seek Experts</h2>
                    <p class="hero-caption animated fadeInUp"><span>Experience The World Through The Words of Experts</span></p>
                    {{-- <p class="animated fadeInUp"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg19.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Set Goal</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Running Towards Your Dream</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg20.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg21.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            
     
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg22.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Set Goal</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Running Towards Your Dream</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg23.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg24.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            
        
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg25.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Set Goal</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Running Towards Your Dream</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg26.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
      
            
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg27.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown">Seek Experts</h2>
                    <p class="hero-caption animated fadeInUp"><span>Experience The World Through The Words of Experts</span></p>
                    {{-- <p class="animated fadeInUp"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
        
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg28.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg29.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg30.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown">Seek Experts</h2>
                    <p class="hero-caption animated fadeInUp"><span>Experience The World Through The Words of Experts</span></p>
                    {{-- <p class="animated fadeInUp"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg31.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Set Goal</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Running Towards Your Dream</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg32.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg33.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg34.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown">Seek Experts</h2>
                    <p class="hero-caption animated fadeInUp"><span>Experience The World Through The Words of Experts</span></p>
                    {{-- <p class="animated fadeInUp"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg35.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Set Goal</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Running Towards Your Dream</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg36.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg37.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
   
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg38.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg39.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
   
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg40.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg41.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
   
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg42.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
            
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg43.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Learn</h2>
                    <p class="hero-caption animated fadeInRight"><span>Start Learning With The Knowlegde You Gathered</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
   
            <div class="carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg44.jpg')}})">
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">Final Light</h2>
                    <p class="hero-caption animated fadeInRight"><span>Finally See The Light You Desired</span></p>
                    {{-- <p class="animated fadeInRight"><a href="{{url('/contact')}}" class="btn hero-btn-transparent hero-btn-rounded hero-btn-large">Learn More</a></p> --}}
                </div>
            </div>
           
           
           
            
            

            
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
            <div class="row item align-items-center">
                <div class="card-wrapper col-lg-3 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="card-icon-wrapper" style="font-size: 50px;">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Admission Counselling</h4>
                            <div class="card-content">
                                <p class="card-text">Admission counseling is the first and most important step leading to a proper gateway to career counseling</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper col-lg-3 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="card-icon-wrapper" style="font-size: 50px;"><i class="fas fa-home"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Accomodation</h4>
                            <div class="card-content">
                                <p class="card-text">It is common for your institute to offer help or support especially when it comes to university accommodation partially hazed on personal budget and preference.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper col-lg-3 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="card-icon-wrapper" style="font-size: 50px;"><i class="fas fa-award"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Sholarships Counselling</h4>
                            <div class="card-content">
                                <p class="card-text">Sholarships are a way of funding students for their livelihood and academic needs. Organizations tend to sponsor students who are not easily distracted</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper col-lg-3 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="card-icon-wrapper" style="font-size: 50px;"><i class="fas fa-book-reader"></i></div>
                        <div class="card-body">
                            <h4 class="card-title">Travel Assistance</h4>
                            <div class="card-content">
                                <p class="card-text">Our aim is to guide students with whole process of studying abroad through our coaching classes where they will be lead by experts</p>
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
                        <div class="about__text">Eduzenship, we are a leading overseas education consulting company in Bangladesh and have a leading role in global education opportunities. Our core activity is to assist students in making the right choices for education in overseas educational institutions"... </div>
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
                        <h2 style="font-size: 50px;"><i class="fas fa-map-signs"></i></h2>
                        <div class="ts-offers-content">
                            <h3 class="ts-offers-title">Plan</h3>
                        </div>
                    </div>
                    <!-- Col end -->

                    <div class="col-md-4 col-sm-6 pb-5 col-xs-6 ts-offers">
                        <div class="ts-offers-content">
                            <h2 style="font-size: 50px;"><i class="fas fa-map-marked-alt"></i></h2>
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
                        <h2 style="font-size: 50px;"><i class="fas fa-phone-volume"></i></h2>
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
                            <a class="gallery-popup" href="{{asset('frontend/images/services/service2.jpg')}}" aria-label="service-img">
                                <img class="img-fluid" src="{{asset('frontend/images/services/service2.jpg')}}" alt="service-img">
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
                            <a class="gallery-popup" href="{{asset('frontend/images/services/service3.jpg')}}" aria-label="service-img">
                                <img class="img-fluid" src="{{asset('frontend/images/services/service3.jpg')}}" alt="service-img">
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
                            <a class="gallery-popup" href="{{asset('frontend/images/services/service4.jpg')}}" aria-label="service-img">
                                <img class="img-fluid" src="{{asset('frontend/images/services/service4.jpg')}}" alt="service-img">
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
                            <a class="gallery-popup" href="{{asset('frontend/images/services/service5.jpg')}}" aria-label="service-img">
                                <img class="img-fluid" src="{{asset('frontend/images/services/service5.jpg')}}" alt="service-img">
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