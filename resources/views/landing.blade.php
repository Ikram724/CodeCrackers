@extends('main')
@section('content')
<!-- <div class="cursor">

    </div> -->

<!--Navbar-->




<!--page1-->
<div class="page1">





    <div class="main-content">


        <div class="gradient">

        </div>

        <div id="centre-text">
            <h1 id="text1">WELCOME TO DEVSYNC, <br> WHERE INNOVATION <br>MEETS EFFICIENCY IN THE <br> WORLD OF
                DEVELOPMENT.</h1>

            <a href=""><button>EXPLORE</button></a>
        </div>
        <img src="{{asset('images/Group2.png')}}" alt="">
    </div>



</div>
<!--message button-->
<div class="massege">
    <a href=""><button> Message Us</button></a>

</div>


<!--moving div-->

<div class="moving-text">
    <h1>TRANSFORMING VISIONS INTO <span>DIGITAL REALITY</span>, ONE LINE OF CODE AT A TIME</h1>

</div>

<!--page2-->
<div class="page2">

    <div class="text-container">




        <p>We are driven by a passion for creating cutting-edge solutions tailored to meet the unique needs of
            our clients. With a team of skilled developers, designers, and engineers, we specialize in crafting
            high-quality software products that empower businesses to thrive in an ever-evolving digital
            landscape. From web and mobile applications to custom software solutions, we leverage the latest
            technologies and best practices to deliver exceptional results. Partner with us today and let's
            transform your ideas into reality.

        </p>
        <div class="vertical-line">

        </div>
        <div class="gradient">

        </div>

    </div>



    <div class="p2-main-content">
        <img src="{{asset('images/Mask Group 10.png')}}" alt="">

    </div>




</div>
<!--page 3-->

<div class="page3">
    <div class="moving-text">
    </div>

    <div class="page3-text">
        <h1>Seamless Access <br>from Everywhere.</h1>
        <h2>With our super intuitive and connected web application <br>devsync is always available to address
            all your business <br> development needs.</h2>

    </div>

    <!-- <video autoplay loop muted src="vecteezy_programming-or-software-development-loopable-concept_5287285.mp4 "></video> -->
    <video autoplay loop muted>
        <source src="{{ asset('videos/vecteezy_programming-or-software-development-loopable-concept_5287285.mp4') }}" type="video/mp4">

    </video>



</div>
<!--page 4-->
<div class="moving-text"></div>
<div class="page4">

    <div class="p4-container">

        <div class="p4-text">
            <h1>The team</h1>
            <h5>Our development team is a dynamic group of skilled professionals dedicated to exceeding client
                expectations. With expertise spanning various technologies and methodologies, we are adept at
                crafting tailor-made solutions to meet diverse client needs. From responsive web applications to
                scalable backend systems, our team leverages cutting-edge tools and best practices to deliver
                high-quality results on time and within budget.</h5>
        </div>
        <div class="gradient"></div>
        <img src="{{asset('images/Mask Group 8.png')}}" alt="">



    </div>


    <div class="page4-card-container">

        <div class="card1">


            <div class="card1-img">

                <img src="{{asset('images/WhatsApp Image 2024-02-12 at 03.50.48_f423cae7.jpg')}}" alt="">
            </div>



            <div class="card1-text">
                <h2>Qazi Muhammad Ali</h2>
                <h1>Front-end Developer/<br>Lead Role</h1>

            </div>




        </div>
        <div class="card1">


            <div class="card1-img">
                <img src="https://avatars.githubusercontent.com/u/115077093?v=4" alt="">
            </div>



            <div class="card1-text">
                <h2>Ikram Ali</h2>
                <h1>Back-end Developer/ <br> Laravel expert</h1>

            </div>




        </div>
        <div class="card1">


            <div class="card1-img">

                <img src="{{asset('images/WhatsApp Image 2024-03-20 at 02.31.46_7debe762.jpg')}}" alt="">

            </div>



            <div class="card1-text">
                <h2>Soban Awan</h2>
                <h1>UI/UX Designer/ <br> Branding enthusiast</h1>

            </div>




        </div>








    </div>







</div>
<div class="cntct">
    <h1>Unleash your project's full potential.</h1>
    <a href="/contact"><button>Get in touch</button></a>


</div>


<!--footer -->











@endsection()