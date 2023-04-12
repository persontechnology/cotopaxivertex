@extends('layouts.app')
@section('content')
    
    <div class="site-breadcrumb" style="background: url({{ asset('ui/assets/img/service/techos.avif') }})">
        <div class="container">
        <h2 class="breadcrumb-title">SUPERVISIÓN DE TRABAJOS EN ALTURAS</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li class="active">Supervición de trabajos en alturas</li>
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
                                    Elaboración de procedimientos de trabajo, planes de seguridad y rescate.
                                </li>
                                <li><i class="far fa-check"></i>
                                    Análisis de riesgo específicos de cada operación
                                </li>
                                <li><i class="far fa-check"></i>
                                    Coordinación de equipos de trabajos en altura
                                </li>
                                <li><i class="far fa-check"></i>
                                    Montaje de sistemas de seguridad pasivos de evacuación
                                </li>
                                <li><i class="far fa-check"></i>
                                    Instalación de sistemas anticaídas permanentes y temporales
                                </li>
                                <li><i class="far fa-check"></i>
                                    La realización de simulacros en zonas de difícil acceso y de alto riesgo
                                </li>
                                <li><i class="far fa-check"></i>
                                    Coordinación de movimientos de carga
                                </li>
                                <li><i class="far fa-check"></i>
                                    Realización de operaciones de gran complejidad técnica
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