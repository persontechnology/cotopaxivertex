@extends('layouts.app')
@section('content')
    
    <div class="site-breadcrumb" style="background: url({{ asset('ui/assets/img/service/techos.avif') }})">
        <div class="container">
        <h2 class="breadcrumb-title">TRABAJOS EN TECHO</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li class="active">Trabajos en techo</li>
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
                                    Limpieza de techos
                                </li>
                                <li><i class="far fa-check"></i>
                                    Limpieza de canaletas
                                </li>
                                <li><i class="far fa-check"></i>Reparación de goteras</li>
                                <li><i class="far fa-check"></i>
                                    Cambio de techos
                                </li>
                                <li><i class="far fa-check"></i>
                                    Soldadura
                                </li>
                                <li><i class="far fa-check"></i>
                                    Instalación de líneas fijas y permanentes
                                </li>
                                <li><i class="far fa-check"></i>
                                    Cambio de extractores eólicos
                                </li>
                                <li><i class="far fa-check"></i>
                                    Manejo de asbestos
                                </li>
                                <li><i class="far fa-check"></i>
                                    Colocación de traslucidos
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