
@extends('layouts.front')

@section('title')
        Countries - Eduzenship
@endsection

@section('contents')


<!--======Intro Section Starts=======-->
<section id="intro">
    <div class="container-fluid">
        <h3 class="section-title-green text-center">
            Countries
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
        <div id="long-card" class="long-card" data-aos="fade-up" data-aos-duration="1000">
            <div class="long-card-photo usa"></div>
            <ul class="details">
                <img class="icon" src="{{asset('frontend/images/maps/america-map.png')}}" alt="" width="150px">
            </ul>
            <div class="description">
                <h2>United States of America</h2>
                <p class="summary">The United States of America (USA) hosts the most number of international students in the world. Quality education, unique curriculum, multicultural environment, and abundant opportunities are just some of the reasons why many Bangladeshi students want to study in the US.</p>
                <a href="#" type="button" class="btn">Learn More</a>
            </div>
        </div>

        <!-- DESIGN FUNDAMENTALS I-->
        <div id="long-card" class="long-card alt" data-aos="fade-down" data-aos-duration="1000">
            <div class="long-card-photo uk"></div>
            <ul class="details">
                <img class="icon" src="{{asset('frontend/images/maps/uk-map.png')}}" alt="" width="150px">
            </ul>
            <div class="description">
                <h2>United Kingdom</h2>
                <p class="summary">Home to some of the world’s greatest cities and one of the most popular cultural hubs of Europe, there are plenty of reasons to study in the UK. High quality education, affordable fees structure, multi-cultural environment and amazing scholarship opportunities are just some of the few! In fact, the QS World University Rankings 2020 also feature four of the UK universities within the global top 10.</p>
                <a href="#" type="button" class="btn">Learn More</a>
            </div>
        </div>

        <!-- DESIGN FUNDAMENTALS I-->

        <div id="long-card" class="long-card" data-aos="zoom-in" data-aos-duration="1000">
            <div class="long-card-photo canada"></div>
            <ul class="details">
                <img class="icon" src="{{asset('frontend/images/maps/canada-map.png')}}" alt="" width="150px">
            </ul>
            <div class="description">
                <h2>Canada</h2>
                <p class="summary">Academic excellence, affordability and adventure – Canada stands out as an ideal place to study. Until August 2019, the country experienced almost 70,000 international students studying at all levels in the country; which explains why students across the globe aspire to study in Canada. </p>
                    {{-- Studying in Canada definitely offers promising career opportunities evident from the last decade stats where Canada created 1.6 million new jobs for graduates. Plus, apart from ranking #1 on the world’s quality of life index, it also boasts of having 5 of the top 100 best student cities in the world. 
                    </p> --}}
                <a href="#" type="button" class="btn">Learn More</a>
            </div>
        </div>
    </div>

</section>

<!--======Countries Section Ends=======-->

@endsection