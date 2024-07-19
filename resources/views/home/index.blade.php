@extends('layouts.app-master')

@section('content')

    @auth 
    <div class="container-fluid d-flex justify-content-center align-items-center texto-responsive">
            <div class="text-center">
                <p class="titulo1 mt-5">BYTEMEX</p>
                <p class="titulo2 ">EL SABOR DE LA MEJOR COMIDA MEXICANA </p>
            </div>
        </div>
        <div class="wall "></div>
        <div class="container-fluid">
            <img src="{{ url('assets2/img/cocina.jpg')}}" alt="Imagen de fondo" class="background-image img-fluid">
            <div class="content-overlay texto-responsive2">
                <p class="conoce">CONOCE SOBRE NOSOTROS</p>
                <div class="linea"></div>
                <p class="texto2">¡Descubre los sabores auténticos de México en nuestro restaurante de comida mexicana! Platos tradicionales,
                    ingredientes frescos y un ambiente acogedor te esperan. ¡Visítanos y disfruta de una experiencia culinaria única!</p>
            </div>
        </div>
        <div class="wall2"></div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center custom-red py-5" id="location">
                    <h2>DÓNDE ESTAMOS</h2>
                    <p>San Salvador</p>
                    <p>Soyapango</p>
                    <p>Paseo Venecia, 2do Nivel</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ url('assets2/img/bebida.jpg')}}" alt="drink" class="img-fluid">
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="{{ url('assets2/img/cocina.jpg')}}" alt="tacos" class="img-fluid">
                </div>
                <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center custom-green py-5" id="order-now">
                    <h2>PIDE AHORA</h2>
                    <p>Lo mejor en comida Mexicana, pide aquí</p>
                    <button onclick="location.href='#'">
                        <span> Ver menú
                        </span>
                      </button>
                </div>
            </div>
    @endauth 

    @guest
        <div class="container-fluid d-flex justify-content-center align-items-center texto-responsive">
                <div class="text-center">
                    <p class="titulo1 mt-5">BYTEMEX</p>
                    <p class="titulo2 ">EL SABOR DE LA MEJOR COMIDA MEXICANA </p>
                </div>
            </div>
            <div class="wall "></div>
            <div class="container-fluid">
                <img src="{{ url('assets2/img/cocina.jpg')}}" alt="Imagen de fondo" class="background-image img-fluid">
                <div class="content-overlay texto-responsive2">
                    <p class="conoce">CONOCE SOBRE NOSOTROS</p>
                    <div class="linea"></div>
                    <p class="texto2">¡Descubre los sabores auténticos de México en nuestro restaurante de comida mexicana! Platos tradicionales,
                        ingredientes frescos y un ambiente acogedor te esperan. ¡Visítanos y disfruta de una experiencia culinaria única!</p>
                </div>
            </div>
            <div class="wall2"></div>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center custom-red py-5" id="location">
                        <h2>DÓNDE ESTAMOS</h2>
                        <p>San Salvador</p>
                        <p>Soyapango</p>
                        <p>Paseo Venecia, 2do Nivel</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ url('assets2/img/bebida.jpg')}}" alt="drink" class="img-fluid">
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="{{ url('assets2/img/tacos.jpg')}}" alt="tacos" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center custom-green py-5" id="order-now">
                        <h2>PIDE AHORA</h2>
                        <p>Lo mejor en comida Mexicana, pide aquí</p>
                        <button onclick="location.href='#'">
                            <span> Ver menú
                            </span>
                        </button>
                </div>
        </div>
    @endguest

@endsection 