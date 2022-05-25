
@extends('layouts.front')

@section('title')
        Blogs - Eduzenship
@endsection

@section('contents')


<!--======Intro Section Starts=======-->
<section id="intro">
    <div class="container-fluid">
        <h3 class="section-title-green text-center">
            Blogs
        </h3>
    </div>


</section>
<div class="container">
    <div class="long-underline-green"></div>
</div>
<!--======Intro Section Ends=======-->

<!--======Countries Section Starts=======-->
<section id="countries">
    <div class="container">
        <!-- GETTINGS STARTED-->
        <?php $counter = 1; ?>

        @if(count($blogs))

        @foreach ($blogs as $blog)
            @if ($counter % 2 == 0)
                <div id="long-card" class="long-card alt" data-aos="fade-up" data-aos-duration="1000">
            @else
                <div id="long-card" class="long-card  " data-aos="fade-up" data-aos-duration="1000">
            @endif
            
                <div class="long-card-photo" style="background: url('{{asset('/images/blogs/'.$blog->blog_image)}}') center no-repeat;
                background-size: cover;"></div>
                <ul class="details">
                    <h1>{{$blog->blog_title}}</h1>
                </ul>
                
                <div class="description">
                    <h2>{{$blog->blog_title}}</h2>

                    <?php 
                    
                    $desc = strip_tags($blog->blog_description);
                    $desc = substr($desc, 0, 200);

                    ?>

                    <p class="summary">{{$desc}}</p>
                    <a href="{{url('/blog-details/'.$blog->blog_slug)}}" type="button" class="btn">Learn More</a>
                </div>
            </div>
            <?php $counter++; ?>
        @endforeach

        @endif

    </div>

</section>

<!--======Countries Section Ends=======-->

@endsection