
@extends('layouts.front')

@section('title')
        Our Services - Eduzenship
@endsection

@section('contents')


<!--======Intro Section Starts=======-->
<section id="intro">
    <div class="container-fluid">
        <h3 class="section-title-green text-center">
            Our Services
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
        <div id="long-card" class="long-card" data-aos="fade-up" data-aos-duration="100">
            <div class="long-card-photo counseling"></div>
            <ul class="details">
                <!-- <img class="icon" src="images/maps/america-map.png" alt="" width="150px"> -->
                <h1>Counseling</h1>
            </ul>
            <div class="description">
                <h2>Counseling</h2>
                <p class="summary">Our counseling department is provided by the best counselors, where clients are helped in dealing with difficulties while going abroad for studies and also helped in resolving their conscious conflicts with the focus of setting
                    goals & reaching out on a final solution. </p>
                <a href="#" type="button" class="btn">Learn More</a>
            </div>
        </div>

        <!-- DESIGN FUNDAMENTALS I-->
        {{-- <div id="long-card" class="long-card alt" data-aos="fade-down" data-aos-duration="1000">
            <div class="long-card-photo visa-assistance"></div>
            <ul class="details">
                <h1>Visa Assistance</h1>
            </ul>
            <div class="description">
                <h2>Visa Assistance</h2>
                <p class="summary">Generally, we assist our students to step by step with all the required documents that need to be done before his enrollment in the desired school or university. The whole process and requirement of getting students. Visa undergoes
                    some major shreds of evidence that are thoroughly scanned and certified. </p>
                <a href="#" type="button" class="btn">Learn More</a>
            </div>
        </div> --}}

        <!-- DESIGN FUNDAMENTALS I-->

        <div id="long-card" class="long-card alt" data-aos="zoom-in" data-aos-duration="1000">
            <div class="long-card-photo scholarship-assistance"></div>
            <ul class="details">
                <h1>Scholarship Assistance</h1>
                <!-- <img class="icon" src="images/maps/canada-map.png" alt="" width="150px"> -->
            </ul>
            <div class="description">
                <h2>Scholarship Assistance</h2>
                <p class="summary">Winning a scholarship gives you more than just a healthy bank balance. A student will get a scholarship based on academic achievement or other criteria. Otherwise, there are also opportunities of getting a full scholarship in some
                    following countries </p>
                <a href="#" type="button" class="btn">Learn More</a>
            </div>
        </div>

        <!-- DESIGN FUNDAMENTALS I-->
        <div id="long-card" class="long-card " data-aos="fade-down" data-aos-duration="1000">
            <div class="long-card-photo travel-assistance"></div>
            <ul class="details">
                <h1>Travel Assistance</h1>
                <!-- <img class="icon" src="images/maps/uk-map.png" alt="" width="150px"> -->
            </ul>
            <div class="description">
                <h2>Travel Assistance</h2>
                <p class="summary">Ensuring the health, security, and safety of all students is a top priority for us. For further guidance and support border essential for cross quality travel service on our shoulders.</p>
                <a href="#" type="button" class="btn">Learn More</a>
            </div>
        </div>

        <!-- GETTINGS STARTED-->
        <div id="long-card" class="long-card alt" data-aos="fade-up" data-aos-duration="1000">
            <div class="long-card-photo accommodation"></div>
            <ul class="details">
                <!-- <img class="icon" src="images/maps/america-map.png" alt="" width="150px"> -->
                <h1>Accommodation</h1>
            </ul>
            <div class="description">
                <h2>Accommodation</h2>
                <p class="summary">It is common for your institute to offer help or support especially when it comes to university accommodation partially hazed on personal budget and preference.</p>
                <a href="#" type="button" class="btn">Learn More</a>
            </div>
        </div>



    </div>

</section>

<!--======Countries Section Ends=======-->

@endsection