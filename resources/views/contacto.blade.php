@extends('layouts.app')
@section('content')
<div class="site-breadcrumb" style="background: url({{ asset('ui/assets/img/bg/breadcrumb.jpg') }})">
    <div class="container">
       <h2 class="breadcrumb-title">Contáctenos</h2>
       <ul class="breadcrumb-menu">
          <li><a href="{{ route('welcome') }}">Inicio</a></li>
          <li class="active">Contacto</li>
       </ul>
    </div>
 </div>
 <div class="contact-area py-120">
    <div class="container">
       <div class="contact-content">
          <div class="row">
             <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                   <i class="flaticon-location"></i>
                   <h5>Dirección de la oficina</h5>
                   <p>Quito, 9 de octubre y Eloy Alfaro</p>
                </div>
             </div>
             <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                   <i class="flaticon-phone-call"></i>
                   <h5>Llámenos</h5>
                   <p>(+593) 987499132</p>
                </div>
             </div>
             <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                   <i class="flaticon-mail-inbox-app"></i>
                   <h5>Envíanos un correo electrónico</h5>
                   <p><a href="#!" class="__cf_email__">info@cotopaxi-vertex.com</a></p>
                </div>
             </div>
             <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                   <i class="flaticon-alarm-clock"></i>
                   <h5>Oficina abierta</h5>
                   <p>Dom - Vie (10AM - 08PM)</p>
                </div>
             </div>
          </div>
       </div>
       <div class="contact-wrapper">
          <div class="row">
             <div class="col-md-6">
                <div class="contact-map">
                   
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.547390638191!2d-78.49354345067769!3d-0.194417662311835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a6f2d4ee229%3A0x1d30ed8d812de1e!2s9%20de%20Octubre%20%26%20Avenida%20Eloy%20Alfaro%2C%20Quito%20170102!5e0!3m2!1ses!2sec!4v1677358605818!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
             </div>
             <div class="col-md-6 align-self-center">
                <div class="contact-form">
                   <div class="contact-form-header">
                      <h2>Ponerse en contacto</h2>
                      <p>Nuestro equipo regresará a usted en cuestión de horas para ayudarlo.</p>
                   </div>
                   @include('section.form-contacto')
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection