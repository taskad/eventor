<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eventor</title>

   <!-- google font -->
   <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">

   
   <!-- magnific popup -->
   <link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}} ">
   
   <!-- font awesome -->
   <link rel="stylesheet" href="{{asset('public/assets/css/all.min.css')}} ">
   
   <!-- slik carousel -->
   <link rel="stylesheet" href="{{asset('public/assets/css/slick-theme.css')}} ">
   <link rel="stylesheet" href="{{asset('public/assets/css/slick.css')}} ">
   
   <!-- bootstrap -->
   <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}} ">
   
   <!-- css -->
   <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">


</head>
<body>
<div class="body-wrap">
      <!-- header area start -->
      <header class="header-area">
         <nav class="header-nav navbar fixed-top navbar-expand-lg position-absolute w-100">
            <div class="container header-nav-menu">
               <a class="navbar-brand" href="{{url('/')}}">
                  <img src="{{asset('public/assets/images/logo/logo.png')}} " alt="Header Logo">
               </a>
              
               <div class="collapse navbar-collapse d-none d-lg-block">
                  <ul class="navbar-nav m-auto">
                     <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link py-3">Homepages</a>            
                     </li>
                     <li class="nav-item">
                        <a href="#about" class="nav-link py-3">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="#schedule" class="nav-link py-3">Schedule</a>
                     </li>
                     <li class="nav-item">
                        <a href="#speakers" class="nav-link py-3">Speakers</a>
                     </li>
                  </ul>
                  <div class="mode-and-button d-flex align-items-center">

                     @guest
                        <a class="header-btn custom-btn2" href="{{ route('register') }}">Register</a>
                        <a class="header-btn custom-btn2" href="{{ route('login') }}">Login</a>
                     @endguest
                     @auth
                        <a href="{{ url('/') }}" class="header-btn custom-btn2">Home</a>
                        <a href="{{ url('/home') }}" class="header-btn custom-btn2">Profile</a>
                        <a class="header-btn custom-btn2" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                        </form>
                        @endauth

             


                    
            
                     
                  </div>
               </div>

               <!-- mobile menu -->
               <div class="mobile-view-header d-block d-lg-none d-flex gap-3 align-items-center">
                  <div class="mode me-md-3">
                     <img src="{{asset('public/assets/images/icon/sun.svg')}} " alt="Sun" class="fa-sun" style="display: none;">
                     <img src="{{asset('public/assets/images/icon/moon.svg')}} " alt="Moon" class="fa-moon">
                  </div>
                  <button class="header-btn custom-btn2" data-bs-toggle="modal" data-bs-target="register.html">Regsiter </button>
                  <button class="header-btn custom-btn2" data-bs-toggle="modal" data-bs-target="login.html">Login </button>

                  <a class="border rounded-1 py-1 px-2 bg-light" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                     <span class="navbar-toggler-icon nav-toggler-icon"></span>
                  </a>

                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" >
                     <div class="offcanvas-header">
                        <a class="navbar-brand" href="index-2.html">
                           <img src="{{asset('public/assets/images/logo/logo.png')}} " alt="Header Logo">
                        </a>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </div>
                     <div class="offcanvas-body">
                        <div class="dropdown mt-3">
                           <ul class="navbar-nav m-auto">
                              <li class="nav-item">
                                 <a href="index-.html" class="nav-link py-3">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a href="#about" class="nav-link py-3">About</a>
                              </li>
                              <li class="nav-item">
                                 <a href="#schedule" class="nav-link py-3">Schedule</a>
                              </li>
                              <li class="nav-item">
                                 <a href="#speakers" class="nav-link py-3">Speakers</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end mobile menu -->

            </div>
         </nav>
          @yield('hero')
      </header>
      <!-- header area end -->     
      
      @yield('content')

      <!-- footer area start -->
      <footer class="footer-area" style="background-image:url({{asset('public/assets/images/banner/Footer.png')}}) ;">
         <div class="container">
            <div class="footer-top">
               <div class="row">
                  <div class=" col-lg-6">
                     <div class="row">
                        <div class="col-sm-6 col-lg-8 ">
                           <div class="footer-info">
                              <a href="{{ url('/') }}" class="footer-logo">
                                 <img src="{{asset('public/assets/images/logo/footerlogo.png')}}" alt="Footer Logo">
                              </a>
                              <p class="footer-desc">
                                 Join 5,000+ dev and designers professionals for the world’s largest virtual conference series with 4+ fully immersive events covering the newest technology innovations, best practices, and more.
                              </p>
                              <ul class="footer-social social">
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
                        </div>
                        <div class="col-sm-6 col-lg-4">
                           <div class="footer-about custom-item">
                              <h5 class="title">About</h5>
                              <ul class="about-item">
                                 <li><a href="#">Conference Schedule</a></li>
                                 <li><a href="#">Sponsoring</a></li>
                                 <li><a href="#">Volunteer</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=" col-lg-6">
                     <div class="row">
                        
                        <div class="col-sm-6">
                           <div class="footer-enterprise custom-item">
                              <h5 class="title">Enterprise</h5>
                              <ul class="enterprise-item">
                                 <li><a href="#">Committees</a></li>
                                 <li><a href="#">Advisory Boards</a></li>
                                 <li><a href="#">Apply to Speak</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="footer-contact custom-item">
                              <h5 class="title">Contact</h5>
                              <ul class="contact-item">
                                 <li><a href="#">Help Desk</a></li>
                                 <li><a href="#">Comntact Us</a></li>
                                 <li><a href="#">Documentation</a></li>
                                 <li><a href="#">Newsletter</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <hr>
            <div class="footer-copyright-area text-center pb-3">
               <span>© 2022 Eventor. All rights reserved.</span> 
            </div>
         </div>
      </footer>
      <!-- footer area end -->
   <!-- jquery -->
   <script src="{{asset('public/assets/js/jquery.min.js')}} "></script>

   <script src="{{ asset('public/assets/js/jquery.countdown.min.js') }}"></script>
   

   
   <!-- magnific popup -->
   <script src="{{ asset('public/assets/js/jquery.magnific-popup.min.js') }} "></script>
   
   <!-- bootstrap -->
   <script src="{{ asset('public/assets/js/bootstrap.min.js') }} "></script>
   
   <!-- slick -->
   <script src="{{ asset('public/assets/js/slick.min.js') }} "></script>
   

   <!-- javaScript -->
   <script src="{{ asset('public/assets/js/main.js') }} "></script>
    
   </div>
</body>
</html>
