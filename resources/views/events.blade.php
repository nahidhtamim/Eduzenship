
@extends('layouts.front')

@section('title')
        Events - Eduzenship
@endsection

@section('contents')


<!--======Intro Section Starts=======-->
<section id="intro">
    <div class="container-fluid">
        <h3 class="section-title-green text-center">
            Events
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

        @if(count($events))

        @foreach ($events as $event)
            @if ($counter % 2 == 0)
                <div id="long-card" class="long-card alt" data-aos="fade-up" data-aos-duration="1000">
            @else
                <div id="long-card" class="long-card  " data-aos="fade-up" data-aos-duration="1000">
            @endif
            
                <div class="long-card-photo" style="background: url('{{asset('/images/events/'.$event->event_image)}}') center no-repeat;
                background-size: cover;"></div>
                <ul class="details">
                    <h1>{{$event->event_title}}</h1>
                </ul>
                
                <div class="description">
                    <h2>{{$event->event_title}}</h2>

                    <?php 
                    
                    $desc = strip_tags($event->event_description);
                    $desc = substr($desc, 0, 200);

                    ?>

                    <p class="summary">
                        <b>Schedule : </b> {{$event->event_schedule}} <br>   
                        <b>Details : </b> {{$desc}}
                    </p>
                    <a href="#" type="button" class="btn">Learn More</a>
                </div>
            </div>
            <?php $counter++; ?>
        @endforeach

        @endif

    </div>

</section>

<!--======Countries Section Ends=======-->

@endsection