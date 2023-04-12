@extends('layouts.app')
@section('content')
    
    <div class="site-breadcrumb" style="background: url({{ asset('ui/assets/img/service/techos.avif') }})">
        <div class="container">
        <h2 class="breadcrumb-title">RECOLECCIÓN DE MUESTRAS EN CHIMENEAS</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li class="active">Recolección de muestras en chimeneas</li>
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
                                    Selección del punto de ubicación de puerto para tomar muestras.
                                </li>
                                <li><i class="far fa-check"></i>
                                    Definición del número de puntos de muestreo y su distribución.
                                </li>
                                <li><i class="far fa-check"></i>
                                    Determinación de metodologías (técnicas de muestreo).
                                </li>
                                <li><i class="far fa-check"></i>
                                    Especificación de equipos o componentes que conformaran el monitoreo.
                                </li>
                                <li><i class="far fa-check"></i>
                                    Estimación del costo del proyecto.
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