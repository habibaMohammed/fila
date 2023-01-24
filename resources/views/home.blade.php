@extends('layout')

@section('content')
<div class="container-xxl  hero-header " >
<section class="hero-section" id="section_1">
                <div class="section-overlay"></div>

                <div class="container d-flex justify-content-center align-items-center">
                    <div  div class="row justify-content-center">

              
                    <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.3s">
                         

                            <h1 class="text-white mb-5"> <br>Strategies for inclusive economic growth and strengthened food system for sustainable development in Africa through research, innovation and impact </break>
                          </h1>

                            <!-- <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{ url('/about') }}">Get Started</a> -->
                        </div>

                        <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                            <div class="date-wrap">
                                <h5 class="text-white">
                                    <!-- <i class="custom-icon bi-clock me-2"></i> -->
                                    <!-- 10 - 12<sup>th</sup>, Dec 2023 -->
                                </h5>
                            </div>

                            <div class="location-wrap mx-auto py-3 py-lg-0">
                                <h5 class="text-white">
                                    <!-- <i class="custom-icon bi-geo-alt me-2"></i> -->
                                    <!-- National Center, United States -->
                                </h5>
                            </div>

                            <div class="social-share">
                              <!--  <ul class="social-icon d-flex align-items-center justify-content-center">
                                     <span class="text-white me-3">Share:</span>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link">
                                            <span class="bi-facebook"></span>
                                        </a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link">
                                            <span class="bi-twitter"></span>
                                        </a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link">
                                            <span class="bi-instagram"></span>
                                        </a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="video-wrap">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="theme/video/sky.mp4" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>
</div>
<!-- 
<div class="container-xxl bg-primary hero-header " >
                <div class ="slider"> -->
                    <!-- <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">We Help To Push Your Business To The Top Level</h1>
                            <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                            <a href="" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn More</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="theme/img/hero.png" alt="">
                        </div>
                    </div> -->

                    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            @foreach($sliders as $slider)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div class="slider-image text-center">
                                        <img src="{{  asset('images/'.$slider->image) }}" class="d-inline-block border text-center rounded" alt="{{ $slider->image }}">
                                    </div>
                                    <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Organic Food Is Good For Health</h1>
                                    <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Products</a>
                                    <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a>
                                </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div> -->


            <!-- Carousel Start -->
          
    
    <!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="theme/img/comp.jpeg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About Us</div>
                        <h2 class="mb-4">Financial inclusion, livelihood transforming economies (Filatec)</h2>
                        <p class="mb-4">    Headquartered in Nairobi, we are a fast-growing international development  consultancy firm with a unique and diverse range of consultants in;
 </p>
                        <div class="row g-3 mb-4">
                            <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>Agriculture and Food system</h6>
                                      </div>
                            </div>
                            <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>Private sector development and Trade,</h6>
                                   
                                </div>
                            </div>

                            <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>Resilience Programing</h6>
                                    
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>Climate Change and Environmental Sustainability,</h6>
                                    
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>Knowledge management and analytics</h6>
                                 </div>
                            </div>

                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{ url('/services') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        

        <!-- Service Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Sectors</div>
                    <h2 class="mb-5">We help you in
                    adopting sustainable
economic growth models.
                    </h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-check fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-check fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Agriculture and Food Systems</h5>
                                <span>As part of initiatives to end global hunger, Filatec experts in Agriculture and food
systems have significantly contributed to adoption and implementation of approaches,
policies and transformative solutions across the eastern and southern African
countries.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-pie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Private sector development - Inclusive Economic Growth and Trade</h5>
                                <span>Private
Sector Development (PSD) covers a range of strategies aiming to establish markets that
function vibrantly and fairly, providing economic opportunities of quality to poor people at scale.
In line with OCED’s approaches for PSD, Filatec expertise help implement inclusive
economic models that will create jobs, fuel income growth, and improve the quality of
life.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-line fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Resillience Programming</h5>
                                <span>Our integrated approach ensures that partners and sectors work together to address
key leverage points and adopt complementary, synergistic strategies that will ultimately
strengthen resilience at all levels.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-area fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Climate Change and Environmental Sustainability</h5>
                                <span>We help organization adopt measures to mitigate the negative impact of climate
change for producers in the productive sectors.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-balance-scale fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Project Monitoring</h5>
                                <span>Our teams are trained to undertake independent evaluations/assessments of projects.

- Baseline evaluation studies
- Mid-Line evaluation studies
- End line evaluation studies
- Impact evaluation studies</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-house-damage fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Knowledge Management and Anlytics</h5>
                                <span> Our teams are trained to undertake independent evaluations/assessments of projects.
Project monitoring is designed to examine whether the implementation of project(s) are
either on track, or require corrections and improvements to achieve impact and assess
after closeout the sustainability and how the project has contributed to the
organizational objectives.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Features Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3"></div>
                        <h2 class="mb-4">Private sector development - Inclusive Economic Growth and Trade</h2>
                        <p>In recent years, donors have encouraged the implementation of private sector development
(PSD) initiative to support economic growth especially among the developing countries. Private
Sector Development (PSD) covers a range of strategies aiming to establish markets that
function vibrantly and fairly, providing economic opportunities of quality to poor people at scale.
In line with OCED’s approaches for PSD, Filatec expertise help implement inclusive
economic models that will create jobs, fuel income growth, and improve the quality of
life.</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{ url('/services') }}">Read More</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Market systems development (MSD)</h6>
                                </div>
                                <span>This approach aims for large-scale, sustainable impact by understanding how poor
people interact with market systems, and how these systems can be changed to
improve their lives.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-percent text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Private sector engagement (PSE)</h6>
                                </div>
                                <span>We help in implementing PSE by engaging domestic or international private sector as
partners in achieving development objectives – based on the basic principles of shared
costs, risks and benefits.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Green Growth</h6>
                                </div>
                                <span>Greater environmental sustainability requires new products,
new markets and new production methods. We support our client in investement in
greening economies which has been seen to be a business opportunity, including in the
developing world.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-smile-beam text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Industrial Policy</h6>
                                </div>
                                <span>Industrial policy is broadly defined as government intervention to promote productivity-
based growth through support to  high-potential economic sectors including
manufacturing, agricultural or services sectors.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-user-tie text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Inclusive Business (IB)</h6>
                                </div>
                                <span>Inclusive Business models integrate the poor, either as consumers or on the supply side
as distributors, suppliers or employees. Various PSD approaches can be used to
promote Inclusive Business models,</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-headset text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Women’s Economic Empowerment</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

 

        <!-- Client Start
        <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                 <div class="owl-carousel client-carousel">
                    <a href="#"><img class="img-fluid" src="theme/img/logo-1.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="theme/img/logo-2.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="theme/img/logo-3.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="theme/img/logo-4.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="theme/img/logo-5.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="theme/img/logo-6.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="theme/img/logo-7.png" alt=""></a>
                    <a href="#"><img class="img-fluid" src="theme/img/logo-8.png" alt=""></a>
                </div> 
            </div>
        </div> -->
        <!-- Client End -->


        <!-- Project Start -->
         
        <!-- Project Start -->
        <div class="container-xxl py-6 ">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Projects</div>
                    <h2 class="mb-5">Our Projects</h2>
                </div>
                <div class="card-row">
  <!-- the cols in this div change the number of cards per row depending on screen size and the mb-4 adds space below cards if they spill over into the next row-->
  <div class="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
      <img class="card-img-top" src="theme/img/wajir-livestock.png"  alt="WAjir Project">
      <div class="card-body">
      <h6  class="mb-0">Partnership With Wajir County Government </h6>
        <p class="text-white">In Wajir county, thousands of the rural population depend mainly on their livestock as source of food and income however changing climatic patterns, increased animal disease has affected animal productivity. The county government of Wajir requested Filatec experts to develop a long terms strategy for Fostering Growth Competitiveness And Climate-Resilient Livestock Sector</p>
        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ url('/project') }}">Read More</a>
    </div>
    </div>
  </div>
  <div class="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
      <img class="card-img-top" src="theme/img/about.png" alt="SME potential">
      <div class="card-body">
      <h6  class="mb-0">Expanding SME potential</h6>
        <p class="card-text">Highly entrepreneurial African women and youth have seen the rise of new SMEs across the agricultural value chain tapping into both domestic, regional, and international markets offering both product and service-based solutions. Women and youth-owned enterprises are less competitive despite their potential to support the growth of economies.</p>
        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ url('/project') }}">Read More</a>
    </div>
    </div>
  </div>
  <div class="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
      <img class="card-img-top" src="theme/img/farming.jpg"  alt="Food Systems">
      <div class="card-body">
      <h6 class="mb-0">Strengthening Food systems in the HoA</h6>
        <p class="card-text">Filatec has worked with stakeholder in the East and Horn of Africa in adopting food systems’ approach to address recurring food security challenges. We have contributed significantly to policy development and frameworks for strengthened food systems. By using different tools, we have for instance conducted cross market functions analysis as part of Food and Agricultural System Mapping and Analysis</p>
        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ url('/project') }}">Read More</a>
    </div>
      
    </div>
</div>

        </div>
      
        <!-- Project End -->


       
        

@endsection