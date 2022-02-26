        <!--======Header Section Starts=======-->
        <header id="header" class="header">
            <div class="top-info-header pt-2">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-subtitle">
                                            <a href="tel:(+880) 1729272673">(+880) 1729272673</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-subtitle"><i class="fas fa-envelope-open "></i> <a href="mailto:office@ibproconsultant.com">info@eduzenship.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box last">
                                    <div class="info-box-content">
                                        <div class="top-social text-center">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a title="Facebook" class="facebook-bg" href="https://facebbok.com/">
                                                        <span class="social-icon"><i
                                                                    class="fab fa-facebook-f"></i></span>
                                                    </a>
                                                    &nbsp; &nbsp; &nbsp;
                                                    <a title="Instagram" class="instagram-bg" href="https://instagram.com/">
                                                        <span class="social-icon"><i
                                                                    class="fab fa-instagram"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!--======Header Section Ends=======-->
        <!--======Navbar Section Starts=======-->

        <nav class="navbar navbar-expand-sm sticky-top">
            <div class="container" >
                <!-- <a href="/" class="navbar-brand">
                    <i class="fas fa-blog"></i> &nbsp; Blog Template
                </a> -->
                <a class="d-block" href="{{url('/')}}" >
                    <img src="{{asset('frontend/images/main-logo.png')}}" alt="" height="100px"> 
                    
                </a>
                {{-- <div class="text-light">
                    <h3 class="text-light" style="font-size: 40px">Edu<span style="color: #59CAF7;  ">zen</span>ship</h3>
                    <p class="text-center" style="color: rgb(219, 215, 215); font-size: 15px "> <i>Let's Make It Real</i> </p>
                </div> --}}

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/about')}}">Overview</a>
                                <a class="dropdown-item" href="{{url('/mission-vision')}}">Mission & Vision</a>
                                <a class="dropdown-item" href="{{url('/goals')}}">Goals</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/countries')}}">Countries</a>
                                <a class="dropdown-item" href="{{url('/our-services')}}">Our Services</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>



            </div>

        </nav>
        <!--======Navbar Section Ends=======-->


