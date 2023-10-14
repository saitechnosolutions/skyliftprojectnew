@extends('layouts.default')
@section('title', 'skylift')
@section('main-content')

<style>
.cr_w{
        color: #d3ae7a;
    font-size: 22px;
    padding: 0px 5px 0px 5px
}
.kkr{
    text-align:center;
}
@media only screen and (min-width:1920px){
      .home-two-hero-title {
          margin-top: 79px;
          /*font-size: 34px !important;*/
        font-weight:700;
        font-size: 52px !important;
    }
}
 @media only screen and (max-width:1920px){
       .home-two-hero-title {
          margin-top: 79px;
          /*font-size: 34px !important;*/
        font-weight:700;
        font-size: 52px !important;
    }
    .banner-two-content-left{
        margin-left:-115px;
    }
 }
    @media only screen and (max-width:1400px)
    {
      .home-two-hero-title {
          margin-top: 79px;
          /*font-size: 34px !important;*/
        font-weight:700;
        font-size: 52px !important;
    }
   }
 @media only screen and (max-width:500px){
     .cr_w{
        color: #d3ae7a;
    font-size: 22px;
    padding: 0px 10px 0px 10px
}
       .home-two-hero-title {
          margin-top: 20px;
          /*font-size: 34px !important;*/
        font-weight:700;
        font-size: 45px !important;
    }
 .banner-two-content-left{
        margin-left:0px !important;
    }
 }
</style>
        <!-- start banner -->
        {{-- <section class="banner-one pt-70 pb-70 position-relative overflow-hidden bg-img-zoom d-flex justify-content-center align-items-center">
            <div class="banner-one-wrapper pt-5 pt-sm-0">

                <div class="floating-contact-box position-absolute">
                    <ul class="d-flex">
                        <li class="contact-info-one text-white">(406) 555-0120</li>
                        <li class="contact-info-two text-white">hello@archito.com</li>
                    </ul>
                </div>

                <div class="floating-line position-absolute"></div>

                <div class="floating-social-box position-absolute d-flex align-items-center justify-content-center">
                    <ul class="d-flex">
                        <li class="text-white floating-social-icon">
                            <a href="https://twitter.com">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li class="text-white floating-social-icon">
                            <a href="https://linkedin.com">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li class="text-white floating-social-icon">
                            <a href="https://linkedin.com">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="social-follow-text text-white">follow us</li>
                    </ul>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-onecontents">
                                <div>
                                    <div class="col-12 col-lg-8 col-xl-7">
                                        <div class="banner-onecontent-left">
                                            <div>
                                                <h1 class="text-white fw-700 text-capitalize mb-45 line-height-1 anim-text-hero">
                                                    Making Your Dream Space
                                                </h1>
                                            </div>
                                            <p class="text-white fw-500 line-height-5 mb-60 banner-paragraph position-relative anim-subtext">
                                                Welcome to our interior design agency! Our team of experienced designers and decorators is passionate about creating beautiful, functional spaces that enhance our client's lives.
                                            </p>
                                            <a href="portfolio.html" class="btn brand-btn text-uppercase border-0"><span
                                                    class="z-1 position-relative">portfolio</span></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xl-5"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-scroll-bottom d-none d-sm-inline-block">
                    <a href="#" class="position-absolute d-flex flex-column">
                        <p class="fw-500 line-height-5 text-white text-uppercase z-3 mb-10">Scroll</p>
                        <i class="fa-solid fa-arrow-down-long text-white upDown-animation-fast"></i>
                    </a>
                </div>
            </div>
        </section> --}}


        <section id="home" class="banner-two pt-35 pb-70 position-relative overflow-hidden bg-img-zoom d-flex justify-content-center align-items-center">
            <!--<div class="abs">-->
          <div class="abs1"><img src="/img/abs2.png"></div>
          <div class="abs2"><img src="/img/abv1.png"></div>
          <div class="abs3"><img src="/img/abv2.png"></div>
            <div class="banner-two-wrapper">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-twocontents">

                                <div class="row">
                                    <div class="col-12 col-lg-10">
                                        <div class="banner-two-content-left">
                                            <h1 class="text-white fw-700 text-capitalize trs line-height-1 position-relative ah-headline home-two-hero-title anim-text-hero">
                                                Premium Home Elevators
                                            </h1>
                                            <p class="fons text-white z-1 fw-500 line-height-5 mb-45 banner-paragraph position-relative banner-two-paragraph anim-subtext">
                                                at your affordable cost
                                                Also run on <span style="color: #d4af79;font-weight: bold;">Solar Power</span>
                                            </p>
                                            <a href="#ourproduct" class="btn brand-btn mt-45 text-uppercase border-0 shani1"><span
                                                    class="z-1 position-relative">OUR PRODUCTS</span></a>
                                                    <a  href="https://api.whatsapp.com/send?phone=918925325153" class="btn molbut mt-45 brand-btn1 text-uppercase border-0 shani2"><span
                                                        class="z-1 position-relative">GET IN TOUCH</span></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- <div class="position-absolute banner-two-counter">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="banner-two-border-responsive position-relative">
                                <div class="counter-container">
                                    <h1 class="h1 dark-text home-two-counter-number"><span class="amin-auto-count-single">46</span>K
                                    </h1>
                                    <h4 class="h4 fw-400 line-height-1 body- home-two-counter-title">
                                        Project Completed
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="position-relative">
                                <div class="counter-container banner-two-second-counter">
                                    <h1 class="h1 dark-text home-two-counter-number"><span class="amin-auto-count-single">3</span>K
                                    </h1>
                                    <h4 class="h4 fw-400 line-height-1 body-text home-two-counter-title">
                                        Happy customers
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
                <!--</div>-->


        </section>
        <!-- end banner -->
        <!-- start about -->
        <section id="about" class="abo-bg services-one section-padding-bottom pt-10 bg-black">
            <div class="siab"><img src="img/siabt.png"></div>
            <div class="abss"><img src="img/abside.png"></div>
            <!--<div class="ce2se"><img src="img/baabce.png" width="50%"></div>-->
            <div class="dowabs"><img src="img/abdoab.png" width="60%"></div>
            <div class="prabsi"><img src="img/prosideab.png" width="60%"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{-- <div class="about-one-top">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h2 class="h2  line-height-3 anim-heading-title">
                                        Transforming Spaces Elevating Lives
                                    </h2>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="about-one-first-text-box">
                                        <p class="p body-text fw-500 line-height-5">
                                            Welcome to our interior design agency! Our team of experienced designers and decorators is passionate about creating beautiful, functional spaces that enhance our clients' lives.
                                        </p>
                                        <a href="portfolio.html" class="btn brand-btn text-uppercase mt-30"><span
                                                class="z-1 position-relative">learn more</span></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="mt-70 about-one-bottom">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="mb-60 abcofo about-second-text-box-first-item">
                                        <h3 class="h3 aboco1 fw-700  line-height-3">
                                            About Us
                                        </h3>
                                        <p class="p abfop body-text text-white fw-500 line-height-5 mt-10">
                                            With 15 years of expertise in automation and engineering industry in <span style="color: #D3AF79;font-weight:bolder;">coimbatore</span>, we have become a trusted name in providing top-quality home elevator solutions that elevate not just your mobility but your lifestyle.</p>
                                           <p class="p abfop body-text text-white fw-500 line-height-5 mt-10"> We provide state-of-the-art customized Home Lifts which are meant for<span style="color: #D3AF79;font-weight:bolder;"> children, senior citizens and wheel chair users</span> as safety is the highest priority for us.</p>
                                          <p class="p abfop body-text text-white fw-500 line-height-5 mt-10">  Our elevators are designed and manufactured to meet or exceed the highest safety standards, giving you peace of mind every time you ride.</p>
                                          <p class="p abfop body-text text-white fw-500 line-height-5 mt-10">  Our team of engineers and designers work tirelessly to ensure every elevator we create is a masterpiece of functionality and aesthetics.</p>


                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 position-relative">
                                    <div>

                                        <div class="about-one-second-text-box pt-10  ml-60">
                                            <div class="mb-60 about-second-text-box-first-item d-flex">

                                                <img src="/img/poin.png" width="20%" height="20%" class="abicim">


                                            <div class="aabpoi">
                                                <h5 class="h5 fw-700 aboco1 dark-text line-height-3">
                                                    NO PIT
                                                </h5>
                                                <p class="p abfop body-text text-white fw-400 line-height-5 mt-10">
                                                    Our Home elevators do not require a pit as it is installed over On-floor.
                                                </p>
                                            </div>
                                            </div>
                                            <div class="mb-0 abmachine pt-65 d-flex">
                                                <img src="/img/poin.png" width="20%" height="20%" class="abicim">
                                                <div class="aabpoi">
                                                <h5 class="h5 fw-700 aboco1  line-height-3">
                                                    NO MACHINE ROOM
                                                </h5>
                                                <p class="p abfop body-text text-white fw-400 line-height-5 mt-10">
                                                    As per machine directive code, Machine room should never be placed inside the elevator shaft.
                                                </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 position-relative">
                                    <div>

                                        <div class="about-one-second-text-box pt-10  ml-60">
                                            <div class="mb-60 about-second-text-box-first-item d-flex">
                                                <img src="/img/poin.png" width="20%" height="20%" class="abicim">
                                                <div class="aabpoi">
                                                <h5 class="h5 fw-700 aboco1 dark-text line-height-3">
                                                    LOW MAINTENANCE COST
                                                </h5>
                                                <p class="p abfop body-text text-white fw-400 line-height-5 mt-10">
                                                    Our elevators don’t require routine maintenance, hence less AMC.
                                                </p>
                                                </div>
                                            </div>
                                            <div class="mb-0 d-flex">
                                                <img src="/img/poin.png" width="20%" height="20%" class="abicim">
                                                <div class="aabpoi">
                                                <h5 class="h5 fw-700 aboco1 dark-text line-height-3">
                                                    NO HEAD ROOM
                                                </h5>
                                                <p class="p abfop body-text text-white fw-400 line-height-5 mt-10">
                                                    Like in commercial elevators, our home elevators do not require headroom.
                                                </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="bokapo1">
                                <a href="https://api.whatsapp.com/send?phone=918925325153" class="btn brand-btn2 text-uppercase mt-30"><span
                                class=" position-relative">BOOK APPOINMENT</span></a>
                                 <div class="circles">
                                    <div class="circle1">
                                    </div>
                                    <div class="circle2">
                                    </div>
                                    <div class="circle3">
                                    </div>
                                </div>
                            </div>
                         </div>

                    </div>
                </div>
            </div>
            <div class="siimpro"><img src="img/prsecsi.png" width="60%"></div>
        </section>
        <!-- end about -->
        <!-- start count -->
        <div class="team-one  section-padding-bottom bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="intro-video-title">
                            <h3 class="h3  fw-700 line-height-3 position-relative mt-70 mb-10 intro-video-title anim-text-hero" >
                                Tired Of Climbing Steps ?
                            </h3>
                        </div>
                    </div>
                        {{-- <div class="team-one-card-container">
                            <div class="team-one-card-row"> --}}
                                <div class="col-lg-4">
                                <div class="team-one-item position-relative mb-30">
                                    <div class="team-img">
                                        <img class="img-fluid" style="border-radius: 25px;" src="img/tirse1.png" alt="team member">
                                    </div>

                                </div>
                                <div class="rrr">
                                    <h6 class="h6 dark-text oupr_h line-height-3 z-1 under-line-hover fw-700  position-relative">No Step Solutions</h6>
                                </div>
                                </div>
                                <div class="col-lg-4">
                                <div class="team-one-item position-relative mb-30">
                                    <div class="team-img">
                                        <img class="img-fluid" style="border-radius: 25px;" src="img/tirse2.png" alt="team member">
                                    </div>

                                </div>
                                <div class="rrr"> <h6 class="h6 mt-15 dark-text oupr_h line-height-3 z-1 under-line-hover fw-700  position-relative">Accessibility for Wheel Chairs</h6></div>
                                </div>
                            {{-- </div>
                        </div> --}}

                </div>
            </div>
        </div>
        <!-- end services -->
        <!-- start projects -->
        <section id="ourproduct" class="projects-one pro-bg section-padding-bottom-xl pt-60 ">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6 ">
                                <div class="projects-one-item">
                                    <a href="product1">
                                        <h2 class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block stroke-mobile-position">
                                            Model - 01
                                        </h2>
                                    </a>
                                    <div>
                                        <h3 class="h3 fw-700  line-height-3 mb-90  projects-section-title anim-text-hero"  >
                                            Here is the NO-STEP SOLUTIONS
                                        </h3>
                                        <div class="project-img-ontainer">
                                            <img class="home-one-portfolio-first-img" src="img/p01.png" alt="project image">
                                            <a href="product1" class="btn text-uppercase project-btn">
                                                <span class="position-relative z-1">View Product</span>
                                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                            </a>
                                        </div>
                                        <a href="product1" class="h6 coho line-height-3">
                                            <h6 class="h6 mt-15 dark-text oupr_h line-height-3 z-1 under-line-hover fw-700  position-relative">Space Master (Two Passengers - Customizable)</h6> </a>


                                        <div class="downre">
                                        <a href="/img/Skylift Brochure.pdf"  class="btn brand-btn2 text-uppercase mt-100 d-none d-lg-inline-block" target="_blank" download>
                                            <span class=" position-relative">Download
                                                Brochure</span></a>
                                             <div class="circl1">
                                    <div class="circle1">
                                    </div>
                                    <div class="circle2">
                                    </div>
                                    <div class="circle3">
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 ">
                                <div class="mt-5 mt-lg-0">
                                    <div class="ml-100 mobgali projects-one-item">
                                        <a href="product2">
                                            <h2 class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block">
                                              Model - 02</h2>
                                        </a>
                                        <div class="projects-one-contents">
                                            <div class="project-img-ontainer">
                                                <img class="home-one-portfolio-second-img" src="img/p02.png" alt="project image">
                                                <a href="product2" class="btn text-uppercase project-btn">
                                                    <span class="position-relative z-1">View Product</span>
                                                    <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                                </a>
                                            </div>
                                            <a href="product2" class="h6 coho line-height-3">
                                                <h6 class="h6 mt-15 dark-text oupr_h line-height-3 z-1 under-line-hover fw-700  position-absolute">Indoor Closed Elevator
                                                </h6>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="project-item-left-padding mt-110 z-1 projects-one-item">
                                        <a href="product3">
                                            <h2 class="h2 text-uppercase fw-700 line-height-3 projects-text-stroke d-inline-block project-text-stroke-utility">
                                                Model - 03</h2>
                                        </a>
                                        <div class="projects-contents">
                                            <div class="project-img-ontainer text-end">
                                                <img class="home-one-portfolio-third-img" src="img/p03.png" alt="project image">
                                                <a href="product3" class="btn text-uppercase project-btn">
                                                    <span class="position-relative z-1">View Product</span>
                                                    <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                                </a>
                                            </div>
                                            <a href="product3" class="h6 line-height-3">
                                                <h6 class="h6 mt-15 dark-text oupr_h line-height-3 z-1 under-line-hover fw-700  position-absolute">Outdoor Closed Elevator
                                            </a>
                                        </div>
                                    </div>
                                    <div class="project-mobile-cta-button">
                                        <a  href="/img/Skylift Brochure.pdf"  class="btn brand-btn mobbue text-uppercase z-1 mt-80 d-inline-block d-lg-none" target="_blank" download>
                                            <span class="z-1 position-relative">Download
                                                Brochure</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end projects -->
        <!-- start features -->
        <section  class="intro-video-one section-padding-bottom section-padding-top position-relative">
            <div class="prodowm"><img src="img/produdow.png" width="60%"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="video-title">
                            <div class="intro-video-title">
                                <h3 class="h3  fw-700 line-height-3 position-relative mb-70 intro-video-title anim-text-hero" >
                                    Exclusive Features SKYLIFT Home Elevators
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">

                        <div class="fotab d-flex">
                            {{-- <div class="ba_cic"> --}}
                            <img src="/img/fic11.png"  width="10%" height="10%"  >
                            {{-- </div> --}}
                            <h5 class="h5 fw-400 aboco calhs dark-text line-height-3" style="font-size:22px;">
                           SENSOR PROTECTED
                        </h5>
                        </div>

                        <div class="fotab d-flex">
                            <img src="/img/fic21.png"  width="10%" height="10%"  >
                            <h5 class="h5 fw-400 aboco calhs dark-text line-height-3" style="font-size:22px;">
                            CUSTOMIZED CABINS
                        </h5>
                        </div>

                        <div class="fotab d-flex">
                            <img src="/img/fic31.png"  width="10%" height="10%"  >
                            <h5 class="h5 fw-400 aboco calhs dark-text line-height-3" style="font-size:22px;">
                            TOP NOTCH SAFETY
                        </h5>
                        </div>

                        <div class="fotab d-flex">
                            <img src="/img/fic41.png" width="10%" height="10%"  >
                            <h5 class="h5 fw-400 aboco calhs dark-text line-height-3" style="font-size:22px;">
                            FAST INSTALLATION
                        </h5>
                        </div>

                       

                    </div>
                    <div class="col-lg-4">
                         <div class="fotab d-flex">
                            <img src="/img/fic51.png"  width="10%" height="10%" >
                            <h5 class="h5 fw-400 aboco calhs dark-text line-height-3" style="font-size:22px;">
                            KIDS SAFETY
                        </h5>
                        </div>

                        <div class="fotab d-flex">
                            <img src="/img/fic61.png"  width="10%" height="10%" >
                            <h5 class="h5 fw-400 aboco calhs dark-text line-height-3" style="font-size:22px;">
                            MINIMUM POWER
                        </h5>
                        </div>

                        <div class="fotab d-flex">
                            <img src="/img/fic71.png"  width="10%" height="10%"  >
                            <h5 class="h5 fw-400 aboco calhs dark-text line-height-3" style="font-size:22px;">
                            NOISE FREE
                        </h5>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="fotab d-flex">
                            <img src="/img/fic81.png"  width="10%" height="10%"  >
                            <h5 class="h5 fw-400 aboco calhs dark-text line-height-3" style="font-size:22px;">
                            BATTERY BACK UP
                        </h5>
                        </div>

                        <div class="fotab d-flex">
                            <img src="/img/fic21.png" width="10%" height="10%" >
                            <h5 class="h5 fw-400 aboco calhs dark-text line-height-3" style="font-size:22px;">
                            LESS AREA REQUIRED
                        </h5>
                        </div>

                        <div class="fotab d-flex">
                            <img src="/img/fic101.png"width="10%" height="10%" >
                            <h5 class="h5 fw-400 aboco calhs dark-text line-height-3" style="font-size:22px;">
                            WARRANTY WITH AMC
                        </h5>
                        </div>


                    </div>
                    <div class="col-lg-12">
                        <div class="bokapo bt_calre">
                            <a href="tel:+918925325153" class="btn z-1 brand-btn1 text-uppercase "><span
                            class=" position-relative">Call Us Now</span></a>
                            <div class="circlss">
                                <div class="circle1">
                                </div>
                                <div class="circle2">
                                </div>
                                <div class="circle3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
{{-- thisbg --}}
        <div class="section-padding-bottom pb-50 position-relative bg-black" style="overflow:hidden;">
            <div class="dowabs33"><img src="img/abdoab.png" width="60%"></div>
            <div class="container">
                <div class="row saf_se">
                    <div class="col-lg-8 col-12">
                        <div class="video-title">

                            <div class="intro-video-title"  style="display: flex">
                                <img src="img/iicccc.png" width="10%" height="10%">
                                <h3 class="h3  fw-700 line-height-3 position-relative mb-50 mt-20 intro-video-title anim-text-hero ic_smsafe" >
                                    In Safety First
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                    </div>
                </div>
            <div class="row g-5 justify-content-between position-relative">
                <div class="col-6 col-lg-2 kkr position-relative" >
                    <div class="client-hover-img-container">
                        <img class="testimonial-one-icon" src="img/icon_r2.png" alt="testimonial item logo">
                    </div>
                    <h6 class="testimonial-one-icon-heading text-white fw-700 line-height-3 text-uppercase">
                        Alarm System in Cabin
                    </h6>
                </div>
                <div class="col-6 col-lg-2 kkr position-relative">
                    <div class="client-hover-img-container">
                        <img class="testimonial-one-icon" src="img/icon_r1.png" alt="testimonial item logo">
                    </div>
                    <h6 class="testimonial-one-icon-heading text-white fw-700 line-height-3 text-uppercase">
                        Child Switch
                    </h6>
                </div>
                <div class="col-6 col-lg-2 kkr position-relative">
                    <div class="client-hover-img-container">
                        <img class="testimonial-one-icon" src="img/icon_r3.png" alt="testimonial item logo">
                    </div>
                    <h6 class="testimonial-one-icon-heading text-white fw-700 line-height-3 text-uppercase">
                       Door Safety Switches
                    </h6>
                </div>
                <div class="col-6 col-lg-2 kkr position-relative">
                    <div class="client-hover-img-container">
                        <img class="testimonial-one-icon" src="img/icon_r4.png" alt="testimonial item logo">
                    </div>
                    <h6 class="testimonial-one-icon-heading text-white fw-700 line-height-3 text-uppercase">
                       LED Light & Fan With Auxiliary Battery
                    </h6>
                </div>
                <div class="col-6 col-lg-2 kkr position-relative">
                    <div class="client-hover-img-container">
                        <img class="testimonial-one-icon" src="img/icon_r5.png" alt="testimonial item logo">
                    </div>
                    <h6 class="testimonial-one-icon-heading text-white fw-700 line-height-3 text-uppercase">
                        Emergency GSM Calling
                    </h6>
                </div>
            </div>
            </div>

    </div>
    <!--<div class="section-padding-bottom  position-relative bg-black">-->
    <!--    <div class="prabsi22"><img src="img/prosideab.png" width="60%"></div>-->

    <!--    <div class="safe_g"> <h5 class="h5 fw-500 abocosa calhs dark-text line-height-3">-->
    <!--      G-->
    <!--     </h5></div>-->
    <!--    <div class="safe_g1"><h5 class="h5 fw-500 abocosa calhs dark-text line-height-3">-->
    <!--        G+1-->
    <!--       </h5></div>-->
    <!--    <div class="safe_g2"><h5 class="h5 fw-500 abocosa calhs dark-text line-height-3">-->
    <!--        G+2-->
    <!--       </h5></div>-->
    <!--    <div class="container">-->
    <!--      <div class="row">-->
    <!--       <div class="col-lg-6 position-relative">-->
    <!--        <img src="img/asec_1.png" width="40%" style="border-radius: 15px;">-->
    <!--         </div>-->
    <!--       <div class="col-lg-6 position-relative">-->
    <!--        <h5 class="h5 fw-500 abocosa calhs dark-text line-height-3">-->
    <!--           Door Access Types-->
    <!--        </h5>-->
    <!--        <img src="img/asec_2.png" width="100%" style="border-radius: 15px;">-->
    <!--         </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="section-padding-bottom  position-relative bg-black">
        <div class="sindowp22"><img src="img/produdow.png" width="60%"></div>
        <div class="container">
          <div class="row">
           <div class="col-lg-4 position-relative m_cek">
            <h5 class="h5 fw-500 abocosa calhs dark-text line-height-3">
                Elevator Dimension
               </h5>
            <img src="img/asec_3t.png" width="60%" style="border-radius: 15px;">
             </div>
           <div class="col-lg-3 position-relative m_cek">
            <h5 class="h5 fw-500 abocosa calhs dark-text line-height-3">
              Cabin Diagram
             </h5>
            <img src="img/asec_3rrr.png" width="60%" style="border-radius: 15px;">
             </div>
             <div class="col-lg-5 pt-10 position-relative" style="display:flex;">
                <!--<div class="cer_saf"> <img src="img/ce_im2.png" width="50%" style="border-radius: 15px;" ></div>-->
                <!--<div class="cer_saf"><img src="img/en_im2.png" width="50%"  style="border-radius: 15px;"></div>-->
                <div class="" style="text-align:center;">
                <h1 style="color:#0f3646;font-weight:500px;font-style:none;">CE</h1>
                <h6 style="color:#d3ae7a;font-size:22px;">Certified</h6>
                </div>
                <div class="" style="text-align:center;">
                <h1 style="color:#0f3646;font-weight:500px;font-style:none;">EN</h1>
                <h6 class="cr_w">Standards of Machine Directive 2006/42/EC</h6>
                </div>

             </div>
          </div>
        </div>
    </div>
    {{-- </div>
</div> --}}
@endsection