@extends('layouts.app')


@section('hero')

 <!-- hero sec start -->
 <section class="hero-sec"  style="background-image:url({{asset('public/assets/images/banner/group.png')}})">
            <div class="hero-slider-wrap">
               
               <div class="hero-slider-item overflow-hidden">
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-lg-8 col-md-6 order-md-1 order-2">
                           <div class="slider-item-content-wrap">
                              <div class="item-content">
                                 <h3 class="item-title1">
                                    The leading nonprofit
                                    conference of the year
                                 </h3>
                                 <p class="item-sub">
                                    Join us for Eventor Collaborative: Virtual Sessions on October 2023
                                 </p>
                                 <img src="{{asset('public/assets/images/dots/dots.png')}}" alt="Shadow Image" class="dots-1 opacity-50 img-moving-anim2">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 order-md-2 order-1">
                           <div class="item-image">
                              <div class="img-1 img-moving-anim1">
                                 <img src="{{asset('public/assets/images/banner-slider/2.jpg')}}" alt="Event template">
                              </div>
                              <div class="img-2 img-moving-anim2">
                                 <img src="{{asset('public/assets/images/banner-slider/1.jpg')}} " alt="Event template">
                              </div>
                              <img src="{{asset('public/assets/images/dots/dots2.png')}}" alt="Shadow Image" class="dots-2 img-moving-anim3">
                           </div>
                        </div>
                     </div>
                     <div class="highlight-text img-moving-anim4">
                        <strong class="big-title"><span class="text">CONF 2023</span></strong>
                     </div>
                  </div>
               </div>
               
            </div>
         </section>
         <!-- hero sec start -->

@endsection


@section('content')
   
      <!-- info sec start -->
      <div class="info-sec">
         <div class="container">
            <div class="info-countdown" style="background-image: url(public/assets/images/banner/bg.png);">
               <ul class="counter-box d-flex justify-content-around" data-countdown="2024/10/24">
               </ul>
               <div class="dots img-moving-anim2">
                  <img src="{{asset('public/assets/images/dots/dots3.png')}} " alt="Shadow Image">
               </div>
            </div>
            <div class="information-area">
               <div class="row g-4">
                  <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="600">
                     <div class="mail">
                        <div class="icon"><img src="{{ asset('public/assets/images/icon/mail.svg') }}" alt="Mail"></div>
                        <a href="#" class="mail-link">conference@eventor.com</a>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="800">
                     <div class="location">
                        <div class="icon"><img src="{{ asset('public/assets/images/icon/map-pin.svg')}} " alt="Map"></div>
                        <a href="#" class="location-link">1000 S Eighth Ave, NYC.</a>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                     <div class="number">
                     <div class="icon"><img src="{{asset('public/assets/images/icon/phone.svg')}} " alt="Phone"></div>
                        <a href="#" class="number-link">+1 (646) 652-0000/1000</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- info sec end -->
      
      <!-- about sec start -->
      <section id="about" class="about-sec">
         <div class="container">
            <div class="section-head col-xl-9 m-auto text-center mb-5">
               <span class="label">Welcome to Eventor Conference 2023</span>
               <h1 class="title mb-4">
                  The conference on the design, and engineering
                  is focused on programming topics
               </h1>
               <p class="desc mx-3">
                  Eventor Collaborative, brought to you by IBM, Google and AWS, is where the most inventive and forward-thinking nonprofit leaders come together to discover emerging trends in fundraising and technology.
               </p>
            </div>
            <div class="about-items-wrap" data-aos="fade-right" data-aos-duration="1000">
               <div class="row g-4">
                  <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                     <div class="about-item">
                        <div class="item-thumb">
                           <img src="{{asset('public/assets/images/about/about1.png')}}" alt="About Images">
                           <div class="item-content">
                              <div class="content-title text-white">
                                 <span class="date">October3,2023</span>
                                 <h5 class="title">Virtual sessions. Eventor Live@MAX</h5>
                              </div>
                              <div class="about-video">
                                 <a class="video-btn1 popup-video" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><span><i class="fas fa-play"></i></span></a>
                              </div>
                           </div>
                        </div>      
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-3" data-aos="fade-right" data-aos-duration="700">
                     <div class="about-item">
                        <div class="item-thumb">
                           <img src="{{asset('public/assets/images/about/about2.png')}} " alt="About Images">
                           <div class="item-content text-white">
                              <div class="content-title">
                                 <span class="date">October3,2023</span>
                                 <h5 class="title">Opening</h5>
                              </div>
                              <div class="about-video">
                                 <a class="video-btn1 popup-video" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#"><span><i class="fas fa-play"></i></span></a>
                              </div>
                           </div>
                        </div> 
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-3" data-aos="fade-right" data-aos-duration="600">
                     <div class="about-item">
                        <div class="item-thumb">
                           <img src="{{asset('public/assets/images/about/about3.png')}}" alt="About Images">
                           <div class="item-content text-white">
                              <div class="content-title">
                                 <span class="date">October3,2023</span>
                                 <h5 class="title">Inspiration Art</h5>
                              </div>
                              <div class="about-video">
                                 <a class="video-btn1 popup-video" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><span><i class="fas fa-play"></i></span></a>
                              </div>
                           </div>
                        </div> 
                     </div>
                  </div>
                  <div class="dots img-moving-anim5">
                     <img src="public/assets/images/dots/dots4.png" alt="Shape Images">
                  </div>
               </div>
            </div>
         </div>
         <div class="shape">
            <img src="public/assets/images/shape/1.svg" alt="Shadow">
         </div>
      </section>
      <!-- about sec end -->
      <div class="container mt-5">
         <hr>
      </div>
      
      <!-- schedule sec start -->
      <section id="schedule" class="schedule-sec">
         <div class="container">
            <div class="section-head text-center col-xl-8 m-auto mb-5">
               <span class="label mb-4">Our Conference Schedule 2023</span>
               <h2 class="title">
                  An environment where participants and experts
                  can exchange ideas and experiences
               </h2>
            </div>
            <div class="schedule-content-wrap">

               <div class="tab-content schedule-tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-day-1" role="tabpanel" aria-labelledby="pills-day-1-tab" tabindex="0">
                     <div class="row schedule-item" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" style="background-image: url(public/assets/images/banner/schedule1.png);">
                        <div class="col-lg-4">
                           <div class="d-flex align-items-center justify-content-around">
                              <div class="card-thumb item-thumb">
                                 <img src="public/assets/images/profile1.png" alt="Profile 1">
                              </div>
                              <div class="card-description">
                                 <span class="name d-block">Stella Smith</span>
                                 <span class="date d-block">October2,2023</span>
                                 <span class="time d-block">08:00 - 08:45</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-8">
                           <div class=" d-flex align-items-center justify-content-between">
                              <div class="card-title-area col-7">
                                 <h4 class="title">Presentation and Keynotes</h4>
                                 <p class="title-desc">Discover the latest trends in creativity and get inspired by creative leaders.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row schedule-item" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" style="background-image: url(public/assets/images/banner/schedule2.png);">
                        <div class="col-lg-4">
                           <div class="d-flex align-items-center justify-content-around">
                              <div class="card-thumb">
                                 <img src="{{asset('public/assets/images/profile2.png')}}" alt="Profile 2">
                              </div>
                              <div class="card-description">
                                 <span class="name d-block">Thomas Smith</span>
                                 <span class="date d-block">October 2, 2023</span>
                                 <span class="time d-block">09:00 - 09:45</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-8">
                           <div class=" d-flex align-items-center justify-content-between">
                              <div class="card-title-area col-7">
                                 <h4 class="title">Sessions and Labs</h4>
                                 <p class="title-desc">Discover the latest trends in creativity and get inspired by creative leaders.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row schedule-item" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" style="background-image: url(public/assets/images/banner/schedule1.png);">
                        <div class="col-lg-4">
                           <div class="d-flex align-items-center justify-content-around">
                              <div class="card-thumb">
                                 <img src="{{asset('public/assets/images/profile3.png')}}" alt="Profile 3">
                              </div>
                              <div class="card-description">
                                 <span class="name d-block">Monica Smith</span>
                                 <span class="date d-block">October 2, 2023</span>
                                 <span class="time d-block">10:00 - 10:45</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-8">
                           <div class=" d-flex align-items-center justify-content-between">
                              <div class="card-title-area col-7">
                                 <h4 class="title">Events and Networking</h4>
                                 <p class="title-desc">Discover the latest trends in creativity and get inspired by creative leaders.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row schedule-item" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" style="background-image: url(public/assets/images/banner/schedule2.png);">
                        <div class="col-lg-4">
                           <div class="d-flex align-items-center justify-content-around">
                              <div class="card-thumb">
                                 <img src="{{asset('public/assets/images/profile4.png')}}" alt="Profile 4">
                              </div>
                              <div class="card-description">
                                 <span class="name d-block">Stella Smith</span>
                                 <span class="date d-block">October2,2023</span>
                                 <span class="time d-block">08:00 - 08:45</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-8">
                           <div class=" d-flex align-items-center justify-content-between">
                              <div class="card-title-area col-7">
                                 <h4 class="title">Luminary Sessions</h4>
                                 <p class="title-desc">Discover the latest trends in creativity and get inspired by creative leaders.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="dots img-moving-anim1">
                  <img src="{{asset('public/assets/images/dots/dots2.png')}}" alt="Shadow Image">
               </div>
            </div>
         </div>
         <div class="shape">
            <img src="public/assets/images/shape/2.svg" alt="Shape">
         </div>
      </section>
      <!-- schedule sec end -->
      

     
      <!-- speakers sec start -->
      <section id="speakers" class="speakers-gallery-sec position-relative">
         <div class="container">
            <div class="section-head col-xl-8 m-auto text-center mb-5">
               <span class="label">Meet Our Experts, and Speakers</span>
               <h2 class="title">
                  Meet our fantastic speakers from around the globe
                  and join in with live debates & events
               </h2>
            </div>
            <div class="speakers-gallery-items-wrap">
               <div class="row">
                  <div class="col-md-6 col-lg-4 col-xl-3">
                     <div class="speakers-gallery-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                        <div class="speakers-gallery-item-thumb overflow-hidden position-relative">
                           <img src="{{asset('public/assets/images/gallery/gallery1.jpg')}}" alt="Gallery Image 1">
                        </div>
                        <div class="">
                           <ul class="social-icons social">
                              <li>
                                 <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              </li>
                              <li>
                                 <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                              </li>
                              <li>
                                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              </li>
                           </ul>
                        </div>
                        <div class="item-content">
                           <h3 class="title">Stella Smith</h3>
                           <span class="sub">Eventor Live Max</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                     <div class="speakers-gallery-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                        <div class="speakers-gallery-item-thumb overflow-hidden position-relative">
                           <img src="{{asset('public/assets/images/gallery/gallery2.jpg')}}" alt="Gallery Image 2">
                        </div>
                        <ul class="social-icons social">
                           <li>
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           </li>
                        </ul>
                        <div class="item-content">
                           <h3 class="title">Stella Smith</h3>
                           <span class="sub">Eventor Live Max</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                     <div class="speakers-gallery-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="800">
                        <div class="speakers-gallery-item-thumb overflow-hidden position-relative">
                           <img src="{{asset('public/assets/images/gallery/gallery3.jpg')}}" alt="Gallery Image 3">
                        </div>
                        <ul class="social-icons social">
                           <li>
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           </li>
                        </ul>
                        <div class="item-content">
                           <h3 class="title">Stella Smith</h3>
                           <span class="sub">Eventor Live Max</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-3">
                     <div class="speakers-gallery-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                        <div class="speakers-gallery-item-thumb overflow-hidden position-relative">
                           <img src="{{asset('public/assets/images/gallery/gallery4.jpg')}}" alt="Gallery Image 4">
                        </div>
                        <ul class="social-icons social">
                           <li>
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           </li>
                        </ul>
                        <div class="item-content">
                           <h3 class="title">Stella Smith</h3>
                           <span class="sub">Eventor Live Max</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="dots img-moving-anim1">
                  <img src="{{asset('public/assets/images/dots/dots8.png')}}" alt="Shadow Image">
               </div>
            </div>
         </div>
         <div class="shape">
            <img src="{{asset('public/assets/images/shape/3.svg')}}" alt="">
         </div>
      </section>
      <!-- speakers sec end -->

@endsection
