<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/logo.png') }}">
  <title>@yield('title')</title>

  <!--===================Favicon========================-->
  <!-- <link rel="icon" type="image/png" href=""> -->

  <!--===================Fonts========================-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  <!--===================Css========================-->
  <!--==Bootstrap==-->
  <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/bootstrap.min.css') }}">
  <!--==FortAwesome==-->
  <link rel="stylesheet" href="{{ asset('frontend/vendor/fontawesome/css/all.min.css') }}">
  <!--==Animate==-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!--==AOS==-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--==Flickity Slider==-->
  <link rel="stylesheet" href="{{ asset('frontend/vendor/flickity/flickity.min.css') }}">
  <!--==Slick Slider==-->
  <link rel="stylesheet" href="{{ asset('frontend/vendor/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/vendor/slick/slick-theme.css') }}">
  <!--==Swiper Slider==-->
  <link rel="stylesheet" href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}">
  <!--==Colorbox==-->
  <link rel="stylesheet" href="{{ asset('frontend/vendor/colorbox/colorbox.css') }}">
  <!--==Owl Carousel==-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <!--==Custom Css==-->
  <!-- <link rel="stylesheet" href="css/slider.scss"> -->
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">



</head>


<body>
  <div class="body-inner">


    <!-- Start Top Navbar  -->
    @include('layouts.includes.header')
    <!-- End Top Navbar -->

    <!-- Start Main Content  -->
    @yield('contents')
    <!-- End Main Content  -->

    <!-- Start Footer  -->
    @include('layouts.includes.footer')
    <!-- End Footer  -->

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <!-- initialize jQuery Library -->
    <script src="{{ asset('frontend/vendor/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('frontend/vendor/bootstrap/bootstrap.min.js') }}" defer></script>
    <!-- Flickity Carousel -->
    <script src="{{ asset('frontend/vendor/flickity/flickity.min.js') }}"></script>
    <!-- Slick Carousel -->
    <script src="{{ asset('frontend/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/slick/slick-animation.min.js') }}"></script>
    <!-- Swiper Carousel -->
    <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- Color box -->
    <script src="{{ asset('frontend/vendor/colorbox/jquery.colorbox.js') }}"></script>
    <!-- shuffle -->
    <script src="{{ asset('frontend/vendor/shuffle/shuffle.min.js') }}" defer></script>
    <!-- parallax -->
    <script src="{{ asset('frontend/vendor/parallax/parallax.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="{{ asset('frontend/vendor/google-map/map.js') }}" defer></script>
    <!-- AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Template custom -->
    <script src="{{ asset('frontend/js/script.js') }}"></script>




    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "100461405913052");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function () {
        FB.init({
          xfbml: true,
          version: 'v13.0'
        });
      };

      (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <script>
      $('#owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: true,
        items: 4,
        autoplay: true,
        autoPlaySpeed: 5000,
        autoPlayTimeout: 5000,
        autoplayHoverPause: true
      })
    </script>
  </div>
</body>

</html>