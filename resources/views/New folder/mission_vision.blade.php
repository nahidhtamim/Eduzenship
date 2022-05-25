@extends('layouts.front')

@section('title')
Mission & Vision - Eduzenship
@endsection

@section('contents')

<!--======About Overview Section Starts=======-->
<section id="description">
    <div class="desc-container" data-aos="zoom-in-up" data-aos-duration="2000">
        <div class="desc container">
            <div class="desc__wrp">
                <div class="desc__item">
                    <div class="desc__img">

                        <img src="{{asset('frontend/images/pexels-erik-mclean-5864188.jpg')}}" alt="Gifts">
                    </div>
                    <div class="desc__content">
                        <div class="desc__title">Mission & Vision
                        </div>
                        <div class="underline-white"></div>
                        <div class="desc__text">
                            <h4 class="text-white">Mission</h4>
                            <p>
                                <ul>
                                    <li>
                                        * To match the student's abilities, performance, and desires with the best possible career options.
                                    </li>
                                    <li>
                                        * To provide customized solutions to the students aspiring to study overseas.
                                    </li>
                                    <li>
                                        * Strive for the organic growth of our organization through integrity, honesty, and excellence.
                                    </li>
                                    <li>
                                        * To build a strong and credible relationship with the partner institutions by recognizing shared values & goals.
                                    </li>
                                </ul>
                            </p>
                            <h4 class="text-white">Vision</h4>
                            <p class="text-white">
                                To be the market leader in providing one-stop study abroad solutions for the students and help they achieve their goals through proper career counseling & guidance, to add value for our partner institutions and all other stakeholders.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--======About Overview Ends=======-->

@endsection