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
                     <p>¡Bienvenido! <strong>20% de</strong> descuento en todos nuestros servicios industriales</p>
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
                           <a href="#!">(+593) 987499132</a>
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
                           <a href="#">Quito, 9 de octubre y Eloy Alfaro</a>
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
                  <a class="navbar-brand" href="{{ url('/') }}">
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
                                <img src="{{ asset('ui/assets/img/about/about-1.png') }}" alt="">
                            </div>
                            <div class="about-img-two">
                                <img src="{{ asset('ui/assets/img/about/about-2.png') }}" alt="">
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
                              Es una empresa del grupo COTOPAXI, nace con la
                              finalidad de satisfacer las necesidades en trabajos especiales (Trabajos
                              en alturas) utilizando técnicas comprobadas, equipos homologados y
                              personal capacitado que garantizan un trabajo integral, nuestro
                              esfuerzo se centra en brindar seguridad, calidad y compromiso con
                              cada uno de nuestros clientes.
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

         <div class="feature-area py-50">
            <div class="container">
               <div class="feature-wrapper">
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <div class="feature-single-item">
                           <div class="feature-icon">
                              <i class="flaticon-team"></i>
                           </div>
                           <div class="feature-text">
                              <h3>Equipo profesional</h3>
                              <p>
                                 Nuestros colaboradores son acreditados y están en
                                 constante capacitación, frente al Ministerio del Trabajo
                                 disponen de todas las acreditaciones necesarias.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="feature-single-item">
                           <div class="feature-icon">
                              <i class="flaticon-clean"></i>
                           </div>
                           <div class="feature-text">
                              <h3>Seguimos evolucionando</h3>
                              <p>
                                 Seguimos evolucionando
                                 para mejorar cada día y así proyectarnos como un
                                 referte en trabajos en vertical en todo el territorio
                                 nacional.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="feature-single-item">
                           <div class="feature-icon">
                              <i class="flaticon-bubbles"></i>
                           </div>
                           <div class="feature-text">
                              <h3>Responsabilidad ambiental</h3>
                              <p>Nuestra responsabilidad ambiental
                                 conlleva a utilizar productos 100%
                                 ecuatorianos de la mejor calidad y
                                 biodegradables.</p>
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
                        <span class="site-title-tagline">Servicios</span>
                        <h2 class="site-title"></h2>
                        <div class="heading-divider"></div>
                        <p>
                           Nuestro servicio están enfocados en brindar calidad y cordialidad.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-4">
                     <div class="services-item">
                        <div class="services-img">
                           <img src="{{ asset('ui/assets/img/service/techo.avif') }}" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="{{ asset('ui/assets/img/service/icon-2/4.png') }}" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">TRABAJOS EN TECHOS</a>
                           </h3>
                           <p class="services-text">
                              Realizamos el mejor trabajo en su techo.
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
                           <img src="{{ asset('ui/assets/img/service/confinado.avif') }}" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="{{ asset('ui/assets/img/service/icon-2/2.png') }}" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">TRABAJOS CONFINADOS</a>
                           </h3>
                           <p class="services-text">
                              Somos especilista en trabajos confinados.
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
                           <img src="{{ asset('ui/assets/img/service/panel.avif') }}" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="{{ asset('ui/assets/img/service/icon-2/1.png') }}" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">TRABAJO STEEL PANEL</a>
                           </h3>
                           <p class="services-text">
                              Realizamos todo tipo de trabajos y reformas en tu hogar.
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
                           <img src="{{ asset('ui/assets/img/service/eolico.avif') }}" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="{{ asset('ui/assets/img/service/icon-2/5.png') }}" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">TRABAJOS EN EÓLICOS</a>
                           </h3>
                           <p class="services-text">
                              Somos técnicos de mantenimiento eólico.
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
                           <img src="{{ asset('ui/assets/img/service/vertycal.avif') }}" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="{{ asset('ui/assets/img/service/icon-2/6.png') }}" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">ACCESO VERTICAL</a>
                           </h3>
                           <p class="services-text">
                              Aplicamos reglamentos de seguridad en operaciones verticales.
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
                           <img src="{{ asset('ui/assets/img/service/capacitacion.avif') }}" alt="">
                        </div>
                        <div class="services-icon">
                           <img src="{{ asset('ui/assets/img/service/icon-2/3.png') }}" alt="">
                        </div>
                        <div class="services-content">
                           <h3 class="services-title">
                              <a href="#">Capacitación</a>
                           </h3>
                           <p class="services-text">
                              Contamos con capacitadores expertos de talla mundial a tu servicio.
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
                        <span class="site-title-tagline">Proceso de trabajo</span>
                        <h2 class="site-title">Cómo funciona</h2>
                        <div class="heading-divider"></div>
                        <p>
                           Nuestra forma de brindar servicios industriales son fruto de años de experiencia.
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
                        <h4>Primer contacto</h4>
                        <p>En primer lugar, nos encontramos por primera vez con el cliente para conocernos y saber más acerca de nuestras empresas</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 text-center mb-30">
                     <div class="process-single">
                        <div class="icon">
                           <span>02</span>
                           <i class="fal fa-badge-check"></i>
                        </div>
                        <h4>Establecemos un plan de trabajo</h4>
                        <p>Diseñamps y elaboramos un plan de trabajo detallado que incluya tareas específicas, plazos y responsabilidades.</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 text-center mb-30">
                     <div class="process-single">
                        <div class="icon">
                           <span>03</span>
                           <i class="fal fa-hand-heart"></i>
                        </div>
                        <h4>Aprendemos a decir "no"</h4>
                        <p>A veces, es necesario decir "no" a ciertas tareas o compromisos para poder enfocarnos en lo que es más importante y para trabajar de manera más eficiente.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="choose-area bg pt-70 pb-70">
            <div class="choose-bg-img">
               <img src="{{ asset('ui/assets/img/bg/choose.png') }}" alt="">
            </div>
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="choose-left">
                        <div class="choose-slider-wrapper">
                           <div class="choose-compare-slider">
                              <div class="beforeAfter">
                                 <img src="{{ asset('ui/assets/img/choose/compare-1.avif') }}" alt="">
                                 <img src="{{ asset('ui/assets/img/choose/compare-2.avif') }}" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="choose-right">
                        <div class="site-header">
                           <span class="site-title-tagline">Por qué elegirnos</span>
                           <h2 class="site-title mb-10">Brindamos los mejores servicios industriales para usted</h2>
                        </div>
                        <p>
                           Nuestra experiencia profesional y procedimiento de trabajo nos hacen extraordinariamente competitivos respecto a las grandes consultoras nacionales e internacionales que realizan el mismo trabajo de una manera aséptica e impersonal.
                        </p>
                        <div class="row choose-items-wrapper mt-4">
                           <div class="col-sm-6 col-6">
                              <div class="choose-item">
                                 <i class="fal fa-award"></i>
                                 <h5>Experimentado</h5>
                              </div>
                           </div>
                           <div class="col-sm-6 col-6">
                              <div class="choose-item">
                                 <i class="fal fa-shield-check"></i>
                                 <h5>Seguro y seguro</h5>
                              </div>
                           </div>
                           <div class="col-sm-6 col-6">
                              <div class="choose-item">
                                 <i class="fal fa-sack-dollar"></i>
                                 <h5>Orientado al precio</h5>
                              </div>
                           </div>
                           <div class="col-sm-6 col-6">
                              <div class="choose-item">
                                 <i class="fal fa-headset"></i>
                                 <h5>Soporte 24/7</h5>
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
                        <span class="site-title-tagline">Obras</span>
                        <h2 class="site-title">Trabajos recientes</h2>
                        <div class="heading-divider"></div>
                        <p>
                           Tenemos el gusto de presentar nuestro portafolio de servicios, diseñado para brindar soluciones integrales a las necesidades propias de la industria ecuatoriana.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row popup-gallery">
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="{{ asset('ui/assets/img/work/1.jpeg') }}" alt="">
                           <div class="cases-hover">
                              <p>Realizamos el mejor trabajo en su techo.</p>
                           </div>
                           <a class="popup-img cases-link" href="{{ asset('ui/assets/img/work/1.jpeg') }}"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              
                              <h4><a href="case-studies-single.html">
                                 TRABAJOS EN TECHOS</a></h4>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="{{ asset('ui/assets/img/work/2.jpeg') }}" alt="">
                           <div class="cases-hover">
                              <p>Somos especilista en trabajos confinados.</p>
                           </div>
                           <a class="popup-img cases-link" href="{{ asset('ui/assets/img/work/2.jpeg') }}"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              
                              <h4><a href="case-studies-single.html">TRABAJOS CONFINADOS</a></h4>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="{{ asset('ui/assets/img/work/3.jpeg') }}" alt="">
                           <div class="cases-hover">
                              Realizamos todo tipo de trabajos y reformas en tu hogar.
                           </div>
                           <a class="popup-img cases-link" href="{{ asset('ui/assets/img/work/3.jpeg') }}"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              
                              <h4><a href="case-studies-single.html">TRABAJO STEEL PANEL</a></h4>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="{{ asset('ui/assets/img/work/4.jpeg') }}" alt="">
                           <div class="cases-hover">
                              <p>Somos técnicos de mantenimiento eólico.</p>
                           </div>
                           <a class="popup-img cases-link" href="{{ asset('ui/assets/img/work/4.jpeg') }}"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              
                              <h4><a href="case-studies-single.html">TRABAJOS EN EÓLICOS</a></h4>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="{{ asset('ui/assets/img/work/5.jpeg') }}" alt="">
                           <div class="cases-hover">
                              <p>Aplicamos reglamentos de seguridad en operaciones verticales.</p>
                           </div>
                           <a class="popup-img cases-link" href="{{ asset('ui/assets/img/work/5.jpeg') }}"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              <h4><a href="case-studies-single.html">ACCESO VERTICAL</a></h4>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="cases-item">
                        <div class="cases-images">
                           <img class="img-fluid" src="{{ asset('ui/assets/img/work/6.jpeg') }}" alt="">
                           <div class="cases-hover">
                              <p>Contamos con capacitadores expertos de talla mundial a tu servicio.</p>
                           </div>
                           <a class="popup-img cases-link" href="{{ asset('ui/assets/img/work/6.jpeg') }}"> <i class="far fa-plus"></i>
                           </a>
                        </div>
                        <div class="cases-desc">
                           <div>
                              <h4><a href="case-studies-single.html">Capacitación</a></h4>
                           </div>
                           
                        </div>
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
                           <h6 class="title">+ Proyecto Terminado</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="counter-box mt-40">
                        <div class="icon"><i class="fal fa-mug-hot"></i></div>
                        <div class="counter-content">
                           <span class="counter" data-count="+" data-to="250" data-speed="3000">250</span>
                           <h6 class="title">+ Taza De Té con Clientes</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="counter-box">
                        <div class="icon"><i class="fal fa-user-friends"></i></div>
                        <div class="counter-content">
                           <span class="counter" data-count="+" data-to="120" data-speed="3000">120</span>
                           <h6 class="title">+ Empleados total</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="counter-box mt-40">
                        <div class="icon"><i class="fal fa-award"></i></div>
                        <div class="counter-content">
                           <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                           <h6 class="title">+  Premios</h6>
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
                        <span class="site-title-tagline">Clientes</span>
                        <h2 class="site-title">CASOS DE ÉXITO</h2>
                        <div class="heading-divider"></div>
                        <p>
                           Estos son algunos de los clientes que confían en nosotros y a los que hemos ayudado a crecer, construyendo relaciones sólidas en el largo plazo.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center align-items-center">
                  
                  <div class="col-6 col-md-4">
                     <div class="partner-item">
                        <img src="{{ asset('ui/assets/img/partner/4.png') }}" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-4">
                     <div class="partner-item">
                        <img src="{{ asset('ui/assets/img/partner/5.png') }}" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-4">
                     <div class="partner-item">
                        <img src="{{ asset('ui/assets/img/partner/6.png') }}" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-4">
                     <div class="partner-item">
                        <img src="{{ asset('ui/assets/img/partner/7.png') }}" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-4">
                     <div class="partner-item">
                        <img src="{{ asset('ui/assets/img/partner/8.png') }}" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-4">
                     <div class="partner-item">
                        <img src="{{ asset('ui/assets/img/partner/9.png') }}" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-4">
                     <div class="partner-item">
                        <img src="{{ asset('ui/assets/img/partner/1.png') }}" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-4">
                     <div class="partner-item">
                        <img src="{{ asset('ui/assets/img/partner/2.png') }}" alt="">
                     </div>
                  </div>
                  <div class="col-6 col-md-4">
                     <div class="partner-item">
                        <img src="{{ asset('ui/assets/img/partner/3.png') }}" alt="">
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
                        <span class="site-title-tagline">Testimonios</span>
                        <h2 class="site-title">Lo que dicen nuestros clientes</h2>
                        <div class="heading-divider"></div>
                        <p>
                           Sus opiniones y puntos de vista son importantes para nosotros. <br> Estamos encantados de que los comparta con nosotros y estamos orgullosos de poder darle acceso a dichos testimonios.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="testimonial-slider owl-carousel owl-theme">
                  <div class="testimonial-single">
                     <div class="testimonial-quote">
                        <p>
                           <i class="fal fa-quote-left"></i>
                           1. Hemos disfrutando de una buena relación con el personal de {{ config('app.name','') }} y encontrado respuesta a nuestras preguntas y necesidades. Yo recomendaría {{ config('app.name','') }} a cualquier compañía.
                        </p>
                     </div>
                     <div class="testimonial-content">
                        <div class="testimonial-author-img">
                           <img src="assets/img/testimonial/2.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                           <h4>V. DAVID CRIOLLO</h4>
                           <p>INGENIERO DE SOFTWWARE</p>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-single">
                     <div class="testimonial-quote">
                        <p>
                           <i class="fal fa-quote-left"></i>
                           2. Hemos disfrutando de una buena relación con el personal de {{ config('app.name','') }} y encontrado respuesta a nuestras preguntas y necesidades. Yo recomendaría {{ config('app.name','') }} a cualquier compañía.
                        </p>
                     </div>
                     <div class="testimonial-content">
                        <div class="testimonial-author-img">
                           <img src="assets/img/testimonial/2.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                           <h4>V. DAVID CRIOLLO</h4>
                           <p>INGENIERO DE SOFTWWARE</p>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-single">
                     <div class="testimonial-quote">
                        <p>
                           <i class="fal fa-quote-left"></i>
                           3. Hemos disfrutando de una buena relación con el personal de {{ config('app.name','') }} y encontrado respuesta a nuestras preguntas y necesidades. Yo recomendaría {{ config('app.name','') }} a cualquier compañía.
                        </p>
                     </div>
                     <div class="testimonial-content">
                        <div class="testimonial-author-img">
                           <img src="assets/img/testimonial/2.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                           <h4>V. DAVID CRIOLLO</h4>
                           <p>INGENIERO DE SOFTWWARE</p>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-single">
                     <div class="testimonial-quote">
                        <p>
                           <i class="fal fa-quote-left"></i>
                           4. Hemos disfrutando de una buena relación con el personal de {{ config('app.name','') }} y encontrado respuesta a nuestras preguntas y necesidades. Yo recomendaría {{ config('app.name','') }} a cualquier compañía.
                        </p>
                     </div>
                     <div class="testimonial-content">
                        <div class="testimonial-author-img">
                           <img src="assets/img/testimonial/2.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                           <h4>V. DAVID CRIOLLO</h4>
                           <p>INGENIERO DE SOFTWWARE</p>
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
                        <span class="site-title-tagline">Equipo</span>
                        <h2 class="site-title">Conozca a los expertos</h2>
                        <div class="heading-divider"></div>
                        <p>
                           Apostamos por un liderazgo inspirador y nuevas formas de trabajo para alcanzar una mayor agilidad y una gestión más eficiente
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-3">
                     <div class="team-item">
                        <div class="team-item-img">
                           <img src="{{ asset('ui/assets/img/team/team-1.jpg') }}" alt="thumb">
                        </div>
                        <div class="team-content">
                           <div class="team-bio">
                              <h5><a href="#">PATRICIO GRANDA</a></h5>
                              <span>ADMINISYTRADOR DE PROYECTOS</span>
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
                           <img src="{{ asset('ui/assets/img/team/team-2.jpg') }}" alt="thumb">
                        </div>
                        <div class="team-content">
                           <div class="team-bio">
                              <h5><a href="#">PATRICIO GRANDA</a></h5>
                              <span>ADMINISYTRADOR DE PROYECTOS</span>
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
                           <img src="{{ asset('ui/assets/img/team/team-3.jpg') }}" alt="thumb">
                        </div>
                        <div class="team-content">
                           <div class="team-bio">
                              <h5><a href="#">PATRICIO GRANDA</a></h5>
                              <span>ADMINISYTRADOR DE PROYECTOS</span>
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
                           <img src="{{ asset('ui/assets/img/team/team-4.jpg') }}" alt="thumb">
                        </div>
                        <div class="team-content">
                           <div class="team-bio">
                              <h5><a href="#">PATRICIO GRANDA</a></h5>
                              <span>ADMINISYTRADOR DE PROYECTOS</span>
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
                           <img src="{{ asset('ui/assets/img/quote/1.png') }}" alt="">
                        </div>
                     </div>
                     <div class="col-lg-6 col-12">
                        <div class="quote-content">
                           <div class="quote-header">
                              <h6>Solicitar Presupuesto</h6>
                              <h2>Si tiene alguna pregunta, póngase en contacto con nosotros.</h2>
                           </div>
                           <form action="#">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <input type="text" name="name" class="form-control" placeholder="Su nombre">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <input type="email" name="email" class="form-control" placeholder="Dirección de correo electrónico">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <input type="text" name="subject" class="form-control" placeholder="Asunto">
                              </div>
                              <div class="form-group">
                                 <textarea name="message" class="form-control" placeholder="Escriba su petición" rows="4"></textarea>
                              </div>
                              <button class="theme-btn"><i class="far fa-paper-plane"></i> Enviar ahora</button>
                           </form>
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
                              <h2 class="cta-title"> <span>¿Quieres obtener un 20% de descuento?</span>
                                 Ahorre tiempo y &amp; dinero
                              </h2>
                           </div>
                           <div class="col-xl-6 ">
                              <div class="cta-btn">
                                 <a href="#" class="theme-btn">Consiga una cotización <i class="far fa-globe"></i></a>
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
                        <a href="#" class="footer-logo bg-primary">
                        <img src="{{ asset('ui/assets/img/logo/logo-cotopaxi-vertex.png') }}" alt="">
                        </a>
                        <p class="mb-20">
                           Somos una empresa especializada en trabajos en vertical
                        </p>
                        <ul class="footer-social">
                           <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#!"><i class="fab fa-whatsapp"></i></a></li>
                           <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Enlaces rápidos</h4>
                        <ul class="footer-list">
                           <li><a href="#"><i class="far fa-angle-double-right"></i> Sobre nosotros</a></li>
                           <li><a href="#"><i class="far fa-angle-double-right"></i> Preguntas frecuentes</a></li>
                           <li><a href="#"><i class="far fa-angle-double-right"></i> Términos de servicio</a></li>
                           <li><a href="#"><i class="far fa-angle-double-right"></i> Política de privacidad</a></li>
                           <li><a href="#"><i class="far fa-angle-double-right"></i> Nuestros servicios</a></li>
                           <li><a href="#"><i class="far fa-angle-double-right"></i> Carrera</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="footer-widget-box">
                        <h4 class="footer-widget-title">Contáctenos</h4>
                        <ul class="footer-contact">
                           <li><i class="flaticon-location"></i>Quito, 9 de octubre y Eloy Alfaro</li>
                           <li><i class="flaticon-phone-call"></i><a href="#!">(+593) 987499132</a></li>
                           <li><i class="flaticon-mail-inbox-app"></i><a href="#!">info@cotopaxi-vertex.com</a></li>
                           <li><i class="flaticon-alarm-clock"></i>Lun - Vie (08AM - 17PM)</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Boletin informativo</h4>
                        <div class="footer-newsletter">
                           <p>Suscríbase a nuestro boletín para obtener las últimas actualizaciones y noticias</p>
                           <div class="subscribe-form">
                              <form action="#">
                                 <input type="email" class="form-control" placeholder="Tu correo electrónico">
                                 <button class="theme-btn" type="submit">
                                 <i class="far fa-paper-plane"></i> Suscríbase ahora
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
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Contacto</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-6 align-self-center">
                     <p class="copyright-text">
                        &copy; Copyright <span>{{ date('Y') }}</span> <a href="https://www.persontechnology.com/"> Person Technology </a> Todos los derechos reservados.
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