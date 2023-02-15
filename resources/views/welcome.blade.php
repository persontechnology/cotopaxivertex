<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
      <link href="{{ asset('ui/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('ui/assets/css/fontawesome.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('ui/assets/css/themify-icons.css') }}" rel="stylesheet" />
      <link href="{{ asset('ui/assets/css/icofont.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('ui/assets/css/flaticon.css') }}" rel="stylesheet" />
      <link href="{{ asset('ui/assets/css/magnific-popup.css') }}" rel="stylesheet" />
      <link href="{{ asset('ui/assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('ui/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('ui/assets/css/animate.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('ui/assets/css/style.css') }}" rel="stylesheet">
   </head>
   <body>
      <div class="preloader">
         <div class="loader">
            <div class="loader-box-1"></div>
            <div class="loader-box-2"></div>
         </div>
      </div>
      <header class="header">
         <div class="top-header">
            <div class="container">
               <div class="top-header-wrapper">
                  <div class="top-header-left">
                     <p>¡Bienvenido! <strong>20% de</strong> descuento en todos nuestros servicios de limpieza</p>
                  </div>
                  <div class="top-header-right">
                     <div class="header-social">
                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!"><i class="fab fa-twitter"></i></a>
                        <a href="#!"><i class="fab fa-instagram"></i></a>
                        <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#!"><i class="fab fa-whatsapp"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="middle-header">
            <div class="container">
               <div class="middle-header-wrapper">
                  <div class="middle-header-left">
                     <div class="middle-header-item">
                        <i class="flaticon-phone-call"></i>
                        <div class="header-item-info">
                           <span>Necesita Ayuda Llámenos</span>
                           <a href="#!">(+593) 98 756 3057</a>
                        </div>
                     </div>
                     <div class="middle-header-item">
                        <i class="flaticon-mail-inbox-app"></i>
                        <div class="header-item-info">
                           <span>Envíenos su correo</span>
                           <a href="#!">info@cotopaxi-vertex.com</a>
                        </div>
                     </div>
                  </div>
                  <div class="middle-header-right">
                     <div class="middle-header-item">
                        <i class="flaticon-location"></i>
                        <div class="header-item-info">
                           <span>Dirección de la oficina</span>
                           <a href="#">Quito, Italia y Vancouver</a>
                        </div>
                     </div>
                     <div class="middle-header-item">
                        <i class="flaticon-alarm-clock"></i>
                        <div class="header-item-info">
                           <span>Apertura (Lun-Vie)</span>
                           <a href="#">08AM - 17PM</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
               <div class="container custom-navbar g-0">
                  <a class="navbar-brand" href="index.html">
                  <img src="{{ asset('ui/assets/img/logo/logo-cotopaxi-vertex.png') }}" alt="logo">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="fal fa-stream"></i></span>
                  </button>
                  <div class="collapse navbar-collapse" id="main_nav">
                     <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html"> Nosotros </a>
                        </li>

                      
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Servicios</a>
                           <ul class="dropdown-menu fade-up">
                              <li><a class="dropdown-item" href="service.html">Onshore</a></li>
                              <li><a class="dropdown-item" href="service-2.html">Offshore</a></li>
                              <li><a class="dropdown-item" href="service-3.html">Industria</a></li>
                              <li><a class="dropdown-item" href="service-4.html">Capacitación</a></li>
                              <li><a class="dropdown-item" href="service-single.html">Servicios Urbanos</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contacto</a>
                        </li>
                     </ul>
                     <div class="header-btn">
                        <a href="#" class="theme-btn">Lamar <i class="far fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </nav>
         </div>
      </header>
      <main class="main">

        
         <div class="about-area pb-120">
            <div class="hero-single">
                <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-left">
                            <div class="sticker">
                            <div class="sticker-wrapper">
                                <div class="sticker-content">
                                    <h2>5 <span>+</span></h2>
                                    <p>Años de <br> experiencia</p>
                                </div>
                            </div>
                            </div>
                            <div class="about-img-box">
                            <div class="about-img-one">
                                <img src="{{ asset('ui/assets/img/slider/urban-services.png') }}" alt="">
                            </div>
                            <div class="about-img-two">
                                <img src="{{ asset('ui/assets/img/about/about-2.jpg') }}" alt="">
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right">
                            <div class="site-header">
                            <span class="site-title-tagline">Sobre nosotros</span>
                            <h2 class="site-title mb-10">{{ config('app.name','') }}</h2>
                            </div>
                            <p class="about-text">
                                Es una compañía de ingeniería y proyectos específicos en sistemas de posicionamientos por cuerdas.  Contamos con profesionales de excelencia en las distintas áreas de servicios para la industria nacional e internacional. Entregamos soluciones integrales para faenas específicas de alto riesgo, aplicando altos estándares de seguridad por medio de nuestra experiencia y capacitación permanente.
                            </p>
                            <div class="about-list-wrapper">
                                <ul class="about-list list-unstyled">
                                    <li>
                                        <div class="icon"><span class="far fa-check"></span></div>
                                        <div class="text">
                                            <p>Soluciones en trabajos de altura</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="far fa-check"></span></div>
                                        <div class="text">
                                            <p>Contamos con técnicos IRATA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="far fa-check"></span></div>
                                        <div class="text">
                                            <p>Trabajos a nivel nacional</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-solutions">
                                <div class="about-solutions-icon">
                                    <span class="fal fa-analytics"></span>
                                </div>
                                <div class="about-solutions-text-box">
                                    <p class="about-solutions-tex">Somos una empresa especializada y contamos con diferentes certificaciones
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
         </div>

         <div class="feature-area py-120">
            <div class="container">
               <div class="feature-wrapper">
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <div class="feature-single-item">
                           <div class="feature-icon">
                              <i class="flaticon-team"></i>
                           </div>
                           <div class="feature-text">
                              <h3>Professional Team</h3>
                              <p>It is a long established fact that a reader will be distracted.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="feature-single-item">
                           <div class="feature-icon">
                              <i class="flaticon-clean"></i>
                           </div>
                           <div class="feature-text">
                              <h3>Quality Washing</h3>
                              <p>It is a long established fact that a reader will be distracted.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="feature-single-item">
                           <div class="feature-icon">
                              <i class="flaticon-bubbles"></i>
                           </div>
                           <div class="feature-text">
                              <h3>Modern Cleaning Tools</h3>
                              <p>It is a long established fact that a reader will be distracted.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="services-area mt-60 py-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 mx-auto">
                     <div class="site-heading text-center">
                        <span class="site-title-tagline">Services</span>
                        <h2 class="site-title">Best Services</h2>
                        <div class="heading-divider"></div>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable content
                           of a page when looking at its layout.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-4">
                     <div class="services-item">
                        <div class="services-img">
                           <img src="assets/img/service/1.jpg" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="assets/img/service/icon-2/4.png" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">Home Cleaning</a>
                           </h3>
                           <p class="services-text">There are many variations of passages of lorem im available,
                              but majority suffered.
                           </p>
                           <div class="services-arrow">
                              <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="services-item">
                        <div class="services-img">
                           <img src="assets/img/service/2.jpg" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="assets/img/service/icon-2/2.png" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">Commercial Cleaning</a>
                           </h3>
                           <p class="services-text">There are many variations of passages of lorem im available,
                              but majority suffered.
                           </p>
                           <div class="services-arrow">
                              <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="services-item">
                        <div class="services-img">
                           <img src="assets/img/service/3.jpg" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="assets/img/service/icon-2/1.png" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">Building Cleaning</a>
                           </h3>
                           <p class="services-text">There are many variations of passages of lorem im available,
                              but majority suffered.
                           </p>
                           <div class="services-arrow">
                              <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="services-item">
                        <div class="services-img">
                           <img src="assets/img/service/4.jpg" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="assets/img/service/icon-2/5.png" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">Office Cleaning</a>
                           </h3>
                           <p class="services-text">There are many variations of passages of lorem im available,
                              but majority suffered.
                           </p>
                           <div class="services-arrow">
                              <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="services-item">
                        <div class="services-img">
                           <img src="assets/img/service/5.jpg" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="assets/img/service/icon-2/6.png" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">Window Cleaning</a>
                           </h3>
                           <p class="services-text">There are many variations of passages of lorem im available,
                              but majority suffered.
                           </p>
                           <div class="services-arrow">
                              <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="services-item">
                        <div class="services-img">
                           <img src="assets/img/service/6.jpg" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="assets/img/service/icon-2/3.png" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">Car Cleaning</a>
                           </h3>
                           <p class="services-text">There are many variations of passages of lorem im available,
                              but majority suffered.
                           </p>
                           <div class="services-arrow">
                              <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="process-area py-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 mx-auto">
                     <div class="site-heading text-center">
                        <span class="site-title-tagline">Working Process</span>
                        <h2 class="site-title">How It Works</h2>
                        <div class="heading-divider"></div>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable content
                           of a page when looking at its layout.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-between">
                  <div class="col-lg-3 col-md-6 text-center mb-30">
                     <div class="process-single">
                        <div class="icon">
                           <span>01</span>
                           <i class="fal fa-calendar-check"></i>
                        </div>
                        <h4>Book Your Plan</h4>
                        <p>It is a long established fact that a reader will be distracted.</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 text-center mb-30">
                     <div class="process-single">
                        <div class="icon">
                           <span>02</span>
                           <i class="fal fa-badge-check"></i>
                        </div>
                        <h4>Confirm Your Plan</h4>
                        <p>It is a long established fact that a reader will be distracted.</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 text-center mb-30">
                     <div class="process-single">
                        <div class="icon">
                           <span>03</span>
                           <i class="fal fa-hand-heart"></i>
                        </div>
                        <h4>Cleaning With Care</h4>
                        <p>It is a long established fact that a reader will be distracted.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="choose-area bg pt-70 pb-70">
            <div class="choose-bg-img">
               <img src="assets/img/bg/choose.png" alt="">
            </div>
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="choose-left">
                        <div class="choose-slider-wrapper">
                           <div class="choose-compare-slider">
                              <div class="beforeAfter">
                                 <img src="assets/img/choose/compare-1.jpg" alt="">
                                 <img src="assets/img/choose/compare-2.jpg" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="choose-right">
                        <div class="site-header">
                           <span class="site-title-tagline">Why Choose Us</span>
                           <h2 class="site-title mb-10">We Provide Best Cleaning Services For You</h2>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available,
                           but the majority have suffered alteration in some form, by injected humour, or
                           randomised words which don't look even.
                        </p>
                        <div class="row choose-items-wrapper mt-4">
                           <div class="col-sm-6 col-6">
                              <div class="choose-item">
                                 <i class="fal fa-award"></i>
                                 <h5>Experienced</h5>
                              </div>
                           </div>
                           <div class="col-sm-6 col-6">
                              <div class="choose-item">
                                 <i class="fal fa-shield-check"></i>
                                 <h5>Safe & Sceure</h5>
                              </div>
                           </div>
                           <div class="col-sm-6 col-6">
                              <div class="choose-item">
                                 <i class="fal fa-sack-dollar"></i>
                                 <h5>Price Oriented</h5>
                              </div>
                           </div>
                           <div class="col-sm-6 col-6">
                              <div class="choose-item">
                                 <i class="fal fa-headset"></i>
                                 <h5>24/7 Support</h5>
                              </div>
                           </div>
                        </div>
                        <a href="#" class="theme-icon-btn mt-4">Learn More <i class="far fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="case-area py-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 mx-auto">
                     <div class="site-heading text-center">
                        <span class="site-title-tagline">Works</span>
                        <h2 class="site-title">Recent Works</h2>
                        <div class="heading-divider"></div>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable content
                           of a page when looking at its layout.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row popup-gallery">
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="assets/img/work/1.jpg" alt="">
                           <div class="cases-hover">
                              <p>There are many variations of passages available but the majority have suffered.</p>
                           </div>
                           <a class="popup-img cases-link" href="assets/img/work/1.jpg"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              <small>Cleaning</small>
                              <h4><a href="case-studies-single.html">Kitchen Cleaning</a></h4>
                           </div>
                           <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="assets/img/work/2.jpg" alt="">
                           <div class="cases-hover">
                              <p>There are many variations of passages available but the majority have suffered.</p>
                           </div>
                           <a class="popup-img cases-link" href="assets/img/work/2.jpg"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              <small>Cleaning</small>
                              <h4><a href="case-studies-single.html">Property Cleaning</a></h4>
                           </div>
                           <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="assets/img/work/3.jpg" alt="">
                           <div class="cases-hover">
                              <p>There are many variations of passages available but the majority have suffered.</p>
                           </div>
                           <a class="popup-img cases-link" href="assets/img/work/3.jpg"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              <small>Cleaning</small>
                              <h4><a href="case-studies-single.html">Glass Cleaning</a></h4>
                           </div>
                           <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="assets/img/work/4.jpg" alt="">
                           <div class="cases-hover">
                              <p>There are many variations of passages available but the majority have suffered.</p>
                           </div>
                           <a class="popup-img cases-link" href="assets/img/work/4.jpg"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              <small>Cleaning</small>
                              <h4><a href="case-studies-single.html">Office Cleaning</a></h4>
                           </div>
                           <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="assets/img/work/5.jpg" alt="">
                           <div class="cases-hover">
                              <p>There are many variations of passages available but the majority have suffered.</p>
                           </div>
                           <a class="popup-img cases-link" href="assets/img/work/5.jpg"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              <small>Cleaning</small>
                              <h4><a href="case-studies-single.html">House Cleaning</a></h4>
                           </div>
                           <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="assets/img/work/6.jpg" alt="">
                           <div class="cases-hover">
                              <p>There are many variations of passages available but the majority have suffered.</p>
                           </div>
                           <a class="popup-img cases-link" href="assets/img/work/6.jpg"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              <small>Cleaning</small>
                              <h4><a href="case-studies-single.html">Window Cleaning</a></h4>
                           </div>
                           <a href="#" class="theme-btn"><span class="far fa-arrow-right"></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="top-feature-area bg py-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 mx-auto">
                     <div class="site-heading text-center">
                        <span class="site-title-tagline">Feature</span>
                        <h2 class="site-title">Feature For You</h2>
                        <div class="heading-divider"></div>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable content
                           of a page when looking at its layout.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row align-items-center">
                  <div class="col-lg-4">
                     <div class="top-feature-left">
                        <div class="top-feature-wrapper">
                           <div class="top-feature-item">
                              <div class="top-feature-icon">
                                 <i class="flaticon-sanitary"></i>
                              </div>
                              <div class="top-feature-content">
                                 <a href="#">
                                    <h5>Plumbing Service</h5>
                                 </a>
                                 <p>All the orem generat tend to art repeat predefined chunks.</p>
                              </div>
                           </div>
                           <div class="top-feature-item">
                              <div class="top-feature-icon">
                                 <i class="flaticon-clean"></i>
                              </div>
                              <div class="top-feature-content">
                                 <a href="#">
                                    <h5>Cleaning Service</h5>
                                 </a>
                                 <p>All the orem generat tend to art repeat predefined chunks.</p>
                              </div>
                           </div>
                           <div class="top-feature-item">
                              <div class="top-feature-icon">
                                 <i class="flaticon-bubbles"></i>
                              </div>
                              <div class="top-feature-content">
                                 <a href="#">
                                    <h5>Laundry Service</h5>
                                 </a>
                                 <p>All the orem generat tend to art repeat predefined chunks.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="top-feature-middle">
                        <div class="top-feature-img">
                           <img src="assets/img/feature/1.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="top-feature-right">
                        <div class="top-feature-wrapper">
                           <div class="top-feature-item">
                              <div class="top-feature-icon">
                                 <i class="flaticon-house"></i>
                              </div>
                              <div class="top-feature-content">
                                 <a href="#">
                                    <h5>Property Cleaning</h5>
                                 </a>
                                 <p>All the orem generat tend to art repeat predefined chunks.</p>
                              </div>
                           </div>
                           <div class="top-feature-item">
                              <div class="top-feature-icon">
                                 <i class="flaticon-presentation"></i>
                              </div>
                              <div class="top-feature-content">
                                 <a href="#">
                                    <h5>Expert Cleaner</h5>
                                 </a>
                                 <p>All the orem generat tend to art repeat predefined chunks.</p>
                              </div>
                           </div>
                           <div class="top-feature-item">
                              <div class="top-feature-icon">
                                 <i class="flaticon-team"></i>
                              </div>
                              <div class="top-feature-content">
                                 <a href="#">
                                    <h5>24/7 Online Support</h5>
                                 </a>
                                 <p>All the orem generat tend to art repeat predefined chunks.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="partner-area2 mt-100 mb-100">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 mx-auto">
                     <div class="site-heading text-center">
                        <span class="site-title-tagline">Partner</span>
                        <h2 class="site-title">Our Partner</h2>
                        <div class="heading-divider"></div>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable content
                           of a page when looking at its layout.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center align-items-center">
                  <div class="col-6 col-md-2">
                     <div class="partner-item">
                        <img src="assets/img/partner/1.png" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-2">
                     <div class="partner-item">
                        <img src="assets/img/partner/2.png" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-2">
                     <div class="partner-item">
                        <img src="assets/img/partner/3.png" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-2">
                     <div class="partner-item">
                        <img src="assets/img/partner/4.png" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-2">
                     <div class="partner-item">
                        <img src="assets/img/partner/5.png" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-2">
                     <div class="partner-item">
                        <img src="assets/img/partner/6.png" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-2">
                     <div class="partner-item">
                        <img src="assets/img/partner/3.png" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-2">
                     <div class="partner-item">
                        <img src="assets/img/partner/1.png" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-2">
                     <div class="partner-item">
                        <img src="assets/img/partner/6.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="counter-area pt-50 pb-50">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="counter-box">
                        <div class="icon"><i class="fal fa-layer-group"></i></div>
                        <div class="counter-content">
                           <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                           <h6 class="title">+ Project Done</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="counter-box mt-40">
                        <div class="icon"><i class="fal fa-mug-hot"></i></div>
                        <div class="counter-content">
                           <span class="counter" data-count="+" data-to="250" data-speed="3000">250</span>
                           <h6 class="title">+ Cup Of Tea</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="counter-box">
                        <div class="icon"><i class="fal fa-user-friends"></i></div>
                        <div class="counter-content">
                           <span class="counter" data-count="+" data-to="120" data-speed="3000">120</span>
                           <h6 class="title">+ Total Employee</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="counter-box mt-40">
                        <div class="icon"><i class="fal fa-award"></i></div>
                        <div class="counter-content">
                           <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                           <h6 class="title">+ Win Awards</h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="team-area py-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 mx-auto">
                     <div class="site-heading text-center">
                        <span class="site-title-tagline">Team</span>
                        <h2 class="site-title">Meet Experts</h2>
                        <div class="heading-divider"></div>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable content
                           of a page when looking at its layout.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-3">
                     <div class="team-item">
                        <div class="team-item-img">
                           <img src="assets/img/team/team-1.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                           <div class="team-bio">
                              <h5><a href="#">Ted Holland</a></h5>
                              <span>Project Manager</span>
                           </div>
                           <div class="team-social-box">
                              <span class="far fa-share-alt"></span>
                              <div class="team-social">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#" class="active"><i class="fab fa-instagram"></i></a>
                                 <a href="#"><i class="fab fa-linkedin-in"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="team-item">
                        <div class="team-item-img">
                           <img src="assets/img/team/team-2.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                           <div class="team-bio">
                              <h5><a href="#">Stanley Dang</a></h5>
                              <span>Founder & CEO</span>
                           </div>
                           <div class="team-social-box">
                              <span class="far fa-share-alt"></span>
                              <div class="team-social">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#" class="active"><i class="fab fa-instagram"></i></a>
                                 <a href="#"><i class="fab fa-linkedin-in"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="team-item">
                        <div class="team-item-img">
                           <img src="assets/img/team/team-3.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                           <div class="team-bio">
                              <h5><a href="#">Pamela Smith</a></h5>
                              <span>Senior Cleaner</span>
                           </div>
                           <div class="team-social-box">
                              <span class="far fa-share-alt"></span>
                              <div class="team-social">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#" class="active"><i class="fab fa-instagram"></i></a>
                                 <a href="#"><i class="fab fa-linkedin-in"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="team-item">
                        <div class="team-item-img">
                           <img src="assets/img/team/team-4.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                           <div class="team-bio">
                              <h5><a href="#">Nichola Leger</a></h5>
                              <span>Senior Cleaner</span>
                           </div>
                           <div class="team-social-box">
                              <span class="far fa-share-alt"></span>
                              <div class="team-social">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#" class="active"><i class="fab fa-instagram"></i></a>
                                 <a href="#"><i class="fab fa-linkedin-in"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="quote-area">
            <div class="container">
               <div class="quote-wrapper">
                  <div class="row g-0 align-items-center">
                     <div class="col-lg-6 col-12">
                        <div class="quote-thum">
                           <img src="assets/img/quote/1.png" alt="">
                        </div>
                     </div>
                     <div class="col-lg-6 col-12">
                        <div class="quote-content">
                           <div class="quote-header">
                              <h6>Request A Quote</h6>
                              <h2>If You Have Any Questions Contact With Us</h2>
                           </div>
                           <form action="#">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <input type="email" name="email" class="form-control" placeholder="Email Address">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <input type="text" name="subject" class="form-control" placeholder="Subject">
                              </div>
                              <div class="form-group">
                                 <textarea name="message" class="form-control" placeholder="Type Message" rows="4"></textarea>
                              </div>
                              <button class="theme-btn"><i class="far fa-paper-plane"></i> Submit Now</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="pricing-area2 py-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 mx-auto">
                     <div class="site-heading text-center">
                        <span class="site-title-tagline">Pricing</span>
                        <h2 class="site-title">Our Pricing</h2>
                        <div class="heading-divider"></div>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable content
                           of a page when looking at its layout.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="pricing-item">
                        <div class="pricing-item-wrapper">
                           <div class="pricing-title">property</div>
                           <div class="pricing-icon">
                              <i class="flaticon-paper-plane-1"></i>
                           </div>
                           <div class="price-box">
                              <h2 class="price-total"><small>$</small>50.99</h2>
                              <span class="price-type">One Time Instalation</span>
                           </div>
                           <ul class="pricing-features">
                              <li>2 Bedrooms cleaning</li>
                              <li>Vacuming Service</li>
                              <li>2 Bathroom cleaning</li>
                              <li>Window cleaning</li>
                              <li>Floor cleaning</li>
                           </ul>
                           <div class="pricing-footer">
                              <a href="pricing.html" class="theme-icon-btn">Get Started <i class="far fa-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="pricing-item active">
                        <div class="pricing-item-wrapper">
                           <div class="pricing-title">office</div>
                           <div class="pricing-icon">
                              <i class="flaticon-paper-plane-1"></i>
                           </div>
                           <div class="price-box">
                              <h2 class="price-total"><small>$</small>150.99</h2>
                              <span class="price-type">One Time Instalation</span>
                           </div>
                           <ul class="pricing-features">
                              <li>2 Bedrooms cleaning</li>
                              <li>Vacuming Service</li>
                              <li>2 Bathroom cleaning</li>
                              <li>Window cleaning</li>
                              <li>Floor cleaning</li>
                           </ul>
                           <div class="pricing-footer">
                              <a href="pricing.html" class="theme-icon-btn">Get Started <i class="far fa-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="pricing-item">
                        <div class="pricing-item-wrapper">
                           <div class="pricing-title">building</div>
                           <div class="pricing-icon">
                              <i class="flaticon-paper-plane-1"></i>
                           </div>
                           <div class="price-box">
                              <h2 class="price-total"><small>$</small>350.59</h2>
                              <span class="price-type">One Time Instalation</span>
                           </div>
                           <ul class="pricing-features">
                              <li>2 Bedrooms cleaning</li>
                              <li>Vacuming Service</li>
                              <li>2 Bathroom cleaning</li>
                              <li>Window cleaning</li>
                              <li>Floor cleaning</li>
                           </ul>
                           <div class="pricing-footer">
                              <a href="pricing.html" class="theme-icon-btn">Get Started <i class="far fa-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="testimonial-area pt-100 pb-100">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 mx-auto">
                     <div class="site-heading text-center">
                        <span class="site-title-tagline">Testimonials</span>
                        <h2 class="site-title">What Client Say's</h2>
                        <div class="heading-divider"></div>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable content
                           of a page when looking at its layout.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="testimonial-slider owl-carousel owl-theme">
                  <div class="testimonial-single">
                     <div class="testimonial-quote">
                        <p>
                           <i class="fal fa-quote-left"></i>
                           There are many variations of passages available but the majority have suffered
                           alteration in some form by injected humour or randomised words which don't look even
                           slightly believable.
                        </p>
                     </div>
                     <div class="testimonial-content">
                        <div class="testimonial-author-img">
                           <img src="assets/img/testimonial/2.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                           <h4>Sylvia H Green</h4>
                           <p>Software Engineer</p>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-single">
                     <div class="testimonial-quote">
                        <p>
                           <i class="fal fa-quote-left"></i>
                           There are many variations of passages available but the majority have suffered
                           alteration in some form by injected humour or randomised words which don't look even
                           slightly believable.
                        </p>
                     </div>
                     <div class="testimonial-content">
                        <div class="testimonial-author-img">
                           <img src="assets/img/testimonial/1.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                           <h4>Gordon D Novak</h4>
                           <p>Software Engineer</p>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-single">
                     <div class="testimonial-quote">
                        <p>
                           <i class="fal fa-quote-left"></i>
                           There are many variations of passages available but the majority have suffered
                           alteration in some form by injected humour or randomised words which don't look even
                           slightly believable.
                        </p>
                     </div>
                     <div class="testimonial-content">
                        <div class="testimonial-author-img">
                           <img src="assets/img/testimonial/3.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                           <h4>Reid E Butt</h4>
                           <p>Software Engineer</p>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-single">
                     <div class="testimonial-quote">
                        <p>
                           <i class="fal fa-quote-left"></i>
                           There are many variations of passages available but the majority have suffered
                           alteration in some form by injected humour or randomised words which don't look even
                           slightly believable.
                        </p>
                     </div>
                     <div class="testimonial-content">
                        <div class="testimonial-author-img">
                           <img src="assets/img/testimonial/4.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                           <h4>Parker Jimenez</h4>
                           <p>Software Engineer</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="blog-area pt-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 mx-auto">
                     <div class="site-heading text-center">
                        <span class="site-title-tagline">Our Blog</span>
                        <h2 class="site-title">Latest News & Blog</h2>
                        <div class="heading-divider"></div>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable content
                           of a page when looking at its layout.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="blog-items">
                  <div class="row">
                     <div class="blog-single-item col-md-6 col-lg-4">
                        <div class="item">
                           <div class="thumb">
                              <img src="assets/img/blog/1.jpg" alt="Thumb">
                              <div class="date"><i class="far fa-calendar-alt"></i>15 Aug, 2022</div>
                           </div>
                           <div class="info">
                              <div class="meta">
                                 <ul>
                                    <li><a href="#"><i class="far fa-user"></i> Jesus Paul</a></li>
                                    <li><a href="#"><i class="far fa-folder-open"></i> Cleaning</a></li>
                                 </ul>
                              </div>
                              <h4>
                                 <a href="#">It is a long established fact that a reader</a>
                              </h4>
                              <p>
                                 There are many variations of passages available but the majority suffered.
                              </p>
                              <a class="btn-more" href="#">Read More <i class="far fa-long-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="blog-single-item col-md-6 col-lg-4">
                        <div class="item">
                           <div class="thumb">
                              <img src="assets/img/blog/2.jpg" alt="Thumb">
                              <div class="date"><i class="far fa-calendar-alt"></i>12 Aug, 2022</div>
                           </div>
                           <div class="info">
                              <div class="meta">
                                 <ul>
                                    <li><a href="#"><i class="far fa-user"></i> Jesus Paul</a></li>
                                    <li><a href="#"><i class="far fa-folder-open"></i> Cleaning</a></li>
                                 </ul>
                              </div>
                              <h4>
                                 <a href="#">It is a long established fact that a reader</a>
                              </h4>
                              <p>
                                 There are many variations of passages available but the majority suffered.
                              </p>
                              <a class="btn-more" href="#">Read More <i class="far fa-long-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="blog-single-item col-md-6 col-lg-4">
                        <div class="item">
                           <div class="thumb">
                              <img src="assets/img/blog/3.jpg" alt="Thumb">
                              <div class="date"><i class="far fa-calendar-alt"></i>25 Aug, 2022</div>
                           </div>
                           <div class="info">
                              <div class="meta">
                                 <ul>
                                    <li><a href="#"><i class="far fa-user"></i> Jesus Paul</a></li>
                                    <li><a href="#"><i class="far fa-folder-open"></i> Cleaning</a></li>
                                 </ul>
                              </div>
                              <h4>
                                 <a href="#">It is a long established fact that a reader</a>
                              </h4>
                              <p>
                                 There are many variations of passages available but the majority suffered.
                              </p>
                              <a class="btn-more" href="#">Read More <i class="far fa-long-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="cta-banner mt-100 mb-100">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="cta-wrapper">
                        <div class="row align-items-center">
                           <div class="col-xl-6">
                              <h2 class="cta-title"> <span>Want to Get 20% Off?</span>
                                 Save Time &amp; Money
                              </h2>
                           </div>
                           <div class="col-xl-6 ">
                              <div class="cta-btn">
                                 <a href="#" class="theme-btn">Get A Quote <i class="far fa-globe"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <footer class="footer-area">
         <div class="footer-widget">
            <div class="container">
               <div class="row footer-widget-wrapper pt-120 pb-60">
                  <div class="col-md-6 col-lg-3">
                     <div class="footer-widget-box about-us">
                        <a href="#" class="footer-logo">
                        <img src="assets/img/logo/logo.png" alt="">
                        </a>
                        <p class="mb-20">
                           There are many variations of the passages available the majority have suffered
                           alteration in
                           some form by injected humour.
                        </p>
                        <ul class="footer-social">
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                           <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                           <li><a href="#"><i class="far fa-angle-double-right"></i> About Us</a></li>
                           <li><a href="#"><i class="far fa-angle-double-right"></i> FAQ's</a></li>
                           <li><a href="#"><i class="far fa-angle-double-right"></i> Terms Of Service</a></li>
                           <li><a href="#"><i class="far fa-angle-double-right"></i> Privacy policy</a></li>
                           <li><a href="#"><i class="far fa-angle-double-right"></i> Our Services</a></li>
                           <li><a href="#"><i class="far fa-angle-double-right"></i> Career</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="footer-widget-box">
                        <h4 class="footer-widget-title">Contact Us</h4>
                        <ul class="footer-contact">
                           <li><i class="flaticon-location"></i>15/B Road, New York, USA</li>
                           <li><i class="flaticon-phone-call"></i><a href="tel:+21234566789">+2 123 4566 789</a></li>
                           <li><i class="flaticon-mail-inbox-app"></i><a href="/cdn-cgi/l/email-protection#9af3f4fcf5daffe2fbf7eaf6ffb4f9f5f7"><span class="__cf_email__" data-cfemail="0861666e67486d70696578646d266b6765">[email&#160;protected]</span></a></li>
                           <li><i class="flaticon-alarm-clock"></i>Sun - Fri (10AM - 08PM)</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Newsletter</h4>
                        <div class="footer-newsletter">
                           <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                           <div class="subscribe-form">
                              <form action="#">
                                 <input type="email" class="form-control" placeholder="Your Email">
                                 <button class="theme-btn" type="submit">
                                 <i class="far fa-paper-plane"></i> Subscribe Now
                                 </button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 align-self-center">
                     <ul class="footer-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Case Studies</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-6 align-self-center">
                     <p class="copyright-text">
                        &copy; Copyright <span id="date"></span> <a href="#"> Cleanox </a> All Rights Reserved.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <a href="#" id="scroll-top"><i class="fal fa-arrow-to-top"></i></a>
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="{{ asset('ui/assets/js/jquery-3.6.0.min.js') }}"></script>
      <script src="{{ asset('ui/assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('ui/assets/js/jquery.easing.min.js') }}"></script>
      <script src="{{ asset('ui/assets/js/jquery.appear.js') }}"></script>
      <script src="{{ asset('ui/assets/js/modernizr.min.js') }}"></script>
      <script src="{{ asset('ui/assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('ui/assets/js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('ui/assets/js/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('ui/assets/js/imagesloaded.pkgd.min.js') }}"></script>
      <script src="{{ asset('ui/assets/js/wow.min.js') }}"></script>
      <script src="{{ asset('ui/assets/js/count-to.js') }}"></script>
      <script src="{{ asset('ui/assets/js/beforeafter.min.js') }}"></script>
      <script src="{{ asset('ui/assets/js/main.js') }}"></script>
   </body>
</html>