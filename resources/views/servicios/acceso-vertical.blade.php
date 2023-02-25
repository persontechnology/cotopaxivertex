@extends('layouts.app')
@section('content')
    
    <div class="site-breadcrumb" style="background: url({{ asset('ui/assets/img/service/techos.avif') }})">
        <div class="container">
        <h2 class="breadcrumb-title">ACCESO VERTICAL</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li class="active">Acceso vertical</li>
        </ul>
        </div>
    </div>

    <div class="service-single-area py-120">
        <div class="container">
        <div class="service-single-wrapper">
            <div class="row">
                
                <div class="col-xl-12 col-lg-12">
                    <div class="service-details">
                    <div class="service-details">
                        <div class="my-1">
                            <div class="mb-1">
                                <h3 class="mb-1">Soluciones</h3>
                            </div>
                            <ul class="service-single-list">
                                <li><i class="far fa-check"></i>
                                    Pintura exterior de edificios
                                </li>
                                <li><i class="far fa-check"></i>
                                    Colocación de publicidad
                                </li>
                                <li><i class="far fa-check"></i>
                                    Limpieza de vidrios
                                </li>
                                <li><i class="far fa-check"></i>
                                    Soluciones en acceso vertical
                                </li>
                                <li><i class="far fa-check"></i>
                                    Capacitación
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    @include('section.oferta')
    @include('section.proceso')
@endsection