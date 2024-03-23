<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/loco.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <script src="{{ asset('js/script.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>devSync</title>
</head>

<body>
    <div class="main">
        <nav>
            <div class="nav-left">
                <h1>DevSync</h1>
            </div>
            <div class="nav-right">
                <a href="/">HOME</a>
                <a href="/about">ABOUT US</a>
                <a href="/contact">CONTACT US</a>
                <a href="/work">WORK</a>

                <div class="dropdown">
                    <i class="ri-menu-line" type="menu" data-bs-toggle="dropdown" aria-expanded="false">

                    </i>
                    <ul class="dropdown-menu mt-4">
                        <li><a href="/"><button class="dropdown-item fw-semibold " type="button">Home</button></li>
                        </a>
                        <li><a href="/about"><button class="dropdown-item fw-semibold " type="button">About us</button></a>
                        </li>
                        <li><a href="/work"><button class="dropdown-item fw-semibold " type="button">Work</button> </a></li>

                        <li><a href="/contact"><button class="dropdown-item fw-semibold " type="button">Contact us</button></a>
                        </li>

                    </ul>
                </div>




            </div>


        </nav>


        @yield('content')
        <div class="footer">

            <!-- <div class="cntct">
                <h1>Unleash your project's full potential.</h1>
                <a href="/contact"><button>Get in touch</button></a>


            </div> -->



            <div class="footer-div">

                <div class="footer-content">

                    <div class="para">
                        <h1>Services</h1>
                        <h5>Web development </h5>
                        <h5>Database Design</h5>
                        <h5>Maintenance and Support</h5>
                        <h5>UI/UX Design</h5>
                        <h5>Testing and Quality Assurance</h5>
                        <h5>IT Consulting</h5>
                    </div>

                    <div class="para">
                        <h1>BLOG</h1>
                        <h5>Devsync Reviews</h5>
                        <h5>Corporate Development Platform</h5>
                        <h5>Things to do on Testing</h5>
                        <h5>Business Development Planning</h5>
                        <h5>Technology Revolutionizing Businesses</h5>

                    </div>

                    <div class="para">
                        <h1>OTHER</h1>
                        <h5>About us</h5>
                        <h5>Privacy Policy</h5>
                        <h5>User Agreement</h5>
                        <h5>Terms of Services</h5>
                        <h5>Mail us</h5>

                    </div>
                </div>


                <div class="social">
                    <h4>FOLLOW US</h4>
                    <div class="icons">

                        <a href=""><i class="ri-facebook-box-fill"></i></a>
                        <a href=""><i class="ri-instagram-fill"></i></a>
                        <a href=""><i class="ri-linkedin-fill"></i></a>

                    </div>



                </div>


            </div>



        </div>

    </div>

    <!--scripts-->
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>