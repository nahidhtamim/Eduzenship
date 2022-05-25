@extends('layouts.front')

@section('title')
        Contact - Eduzenship
@endsection

@section('contents')

        <!--======Contact Section Starts=======-->
        <section class="contact-page">
            <div class="container contact-page-sec" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marked"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>address</h2>
                                    <span>The Laureate, Level #C6, House #56,</span>
                                    <span>Road #11, Block #F, Banani, Dhaka-1213</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>E-mail</h2>
                                    <span>info@eduzenship.com</span>
                                    {{-- <span>eduzenship@gmail.com</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>office time</h2>
                                    <span>Sat - Thu  09.00 am - 6.00 pm</span>
                                    <span>Friday - Closed </span>
                                    <!-- <span>Thu - Mon  10.00 pm - 5.00 pm</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="long-underline-yellow"></div>
                <div class="row pb-5">
                    <div class="col-md-8">
                        <div class="contact-page-form" method="post">
                            @if (Session::has('message_sent'))
                                <div class="alert alert-success" role="alert">{{Session::get('message_sent')}}</div>
                            @endif
                            <h2>Get in Touch</h2>
                            <form action="{{route('contact.send')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" placeholder="Your Name" name="name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="email" placeholder="E-mail" name="email" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" placeholder="Phone Number" name="phone" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" placeholder="Address" name="address" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" placeholder="IELTS Done? (Yes/No)" name="ielts" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" placeholder="Countries, You are Interested!" name="countries" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 message-input">
                                        <div class="single-input-field">
                                            <textarea placeholder="Write Your Message" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="single-input-fieldsbtn">
                                        <input type="submit" value="Send Now" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-page-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7796875835056!2d90.40096871534068!3d23.790858393145534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c752e948bbef%3A0x163c6b95603ef31c!2sEduzenship!5e0!3m2!1sen!2sbd!4v1644123285284!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Contact Address Area-->

        <!--======Contact Section Ends=======-->

@endsection