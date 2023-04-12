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
                        <a href="https://www.facebook.com/profile.php?id=100076096722912" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://wa.me/593987499132?text=hola,%20estoy%20interesado%20en%20tus%20servicios" target="_blank"><i class="fab fa-whatsapp"></i></a>
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
                           <a class="nav-link {{ Route::is('welcome')?'border-bottom border-info border-3':'' }}" href="{{ url('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('nosotros')?'border-bottom border-info border-3':'' }}" href="{{ route('nosotros') }}"> Nosotros </a>
                        </li>

                      
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle {{ Route::is('servicios.*')?'border-bottom border-info border-3':'' }}" href="#" data-bs-toggle="dropdown">Servicios</a>
                           <ul class="dropdown-menu fade-up">
                              <li><a class="dropdown-item" href="{{ route('servicios.trabajos-en-techo') }}">Trabajos en techo</a></li>
                              <li><a class="dropdown-item" href="{{ route('servicios.trabajos-confinados') }}">Trabajos confinados</a></li>
                              <li><a class="dropdown-item" href="{{ route('servicios.trabajos-steel-panel') }}">Trabajos steel panel</a></li>
                              <li><a class="dropdown-item" href="{{ route('servicios.trabajos-eolicos') }}">Trabajos en eólicos</a></li>
                              <li><a class="dropdown-item" href="{{ route('servicios.acceso-vertical') }}">Acceso vertical</a></li>
                              <li><a class="dropdown-item" href="{{ route('servicios.recoleccion-muestras-chimeneas') }}"> Recolección de muestras en chimeneas</a></li>
                              <li><a class="dropdown-item" href="{{ route('servicios.supervicion-trabajos-alturas') }}"> Supervición de trabajos en alturas</a></li>
                              <li><a class="dropdown-item" href="{{ route('servicios.limpiesa-silos') }}"> Limpieza de silos</a></li>
                              <li><a class="dropdown-item" href="{{ route('servicios.capacitacion') }}">Capacitación</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('contacto')?'border-bottom border-info border-3':'' }}" href="{{ route('contacto') }}">Contacto</a>
                        </li>
                     </ul>
                     <div class="header-btn">
                        <a href="https://wa.me/593987499132?text=hola,%20estoy%20interesado%20en%20tus%20servicios" target="_blank" class="theme-btn text-success">WhatsApp <i class="fab fa-whatsapp"></i></a>
                     </div>
                  </div>
               </div>
            </nav>
         </div>
      </header>
      <main class="main">

        
         @yield('content')

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
                           <li><a href="https://www.facebook.com/profile.php?id=100076096722912" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="https://wa.me/593987499132?text=hola,%20estoy%20interesado%20en%20tus%20servicios" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Enlaces rápidos</h4>
                        <ul class="footer-list">
                           <li><a href="{{ route('servicios.trabajos-en-techo') }}"><i class="far fa-angle-double-right"></i> Trabajos En Techos</a></li>
                           <li><a href="{{ route('servicios.trabajos-confinados') }}"><i class="far fa-angle-double-right"></i> Trabajos Confinados</a></li>
                           <li><a href="{{ route('servicios.trabajos-steel-panel') }}"><i class="far fa-angle-double-right"></i> Trabajos Steel Panel</a></li>
                           <li><a href="{{ route('servicios.trabajos-eolicos') }}"><i class="far fa-angle-double-right"></i> Trabajos En Eólicos</a></li>
                           <li><a href="{{ route('servicios.acceso-vertical') }}"><i class="far fa-angle-double-right"></i> Acceso Vertical</a></li>
                        
                           
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
                                 
                                 
                                 <a href="https://wa.me/593987499132?text=hola,%20estoy%20interesado%20en%20tus%20servicios" target="_blank" class="theme-btn">WhatsApp <i class="fab fa-whatsapp"></i></a>

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
                        <li><a href="{{ route('welcome') }}">Inicio</a></li>
                        <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                        <li><a href="https://www.cotopaxi-vertex.com/webmail">Web Mail</a></li>
                        
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