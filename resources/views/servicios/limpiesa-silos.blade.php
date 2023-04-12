@extends('layouts.app')
@section('content')
    
    <div class="site-breadcrumb" style="background: url({{ asset('ui/assets/img/service/techos.avif') }})">
        <div class="container">
        <h2 class="breadcrumb-title">LIMPIEZA DE SILOS</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li class="active">Limpieza de silos</li>
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
                            <p>
                                Limpieza de silos, limpieza de tanques y limpieza de mangas hornos industriales Limpieza de silos, limpieza de tanques y limpieza de mangas Limpieza de silos, limpieza de tanques y limpieza de mangas
                            </p>
                            <p>
                                <strong>
                                    La limpieza periódica del silo es importante por varias razones:
                                </strong>
                            </p>
                            <ul class="service-single-list">
                                <li><i class="far fa-check"></i> La limpieza de la acumulación de residuos</li>
                                <li><i class="far fa-check"></i> La reducción de la coagulación de producto que puede obstruir las líneas de producción</li>
                                <li><i class="far fa-check"></i> Extracción de contaminantes de los alimentos y la minimización de la responsabilidad potencial</li>
                                <li><i class="far fa-check"></i> Prevenir o eliminar la contaminación microbiana</li>
                                <li><i class="far fa-check"></i> La protección contra la infestación de insectos</li>
                                <li><i class="far fa-check"></i> El mantenimiento de la frescura del producto</li>
                                <li><i class="far fa-check"></i> Maximizar la capacidad de almacenamiento y la eficiencia del silo</li>
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