@extends('layouts.front')

@section('title')
        Blog Details - Eduzenship
@endsection

@section('contents')

        <!--======About Overview Section Starts=======-->
        <section id="blog_description">
            <div class="blog_desc-container" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="blog_desc container">
                    <div class="blog_desc__wrp">
                        <div class="blog_desc__item">
                            <div class="blog_desc__img">

                                <img src="{{asset('images/blogs/'.$blog->blog_image)}}" alt="{{$blog->blog_title}}">
                            </div>
                            <div class="blog_desc__content">
                                <div class="blog_desc__title">{{$blog->blog_title}}
                                </div>
                                <div class="underline-white"></div>
                                <div class="blog_desc__text">
                                    <p class="text-white">{!!$blog->blog_description!!}
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