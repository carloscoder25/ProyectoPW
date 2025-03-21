@extends('layouts.plantilla')
@section('titulo','SPM')
@section('contenido')

<div id="Portada" class="d-flex justify-content-center align-items-center" style="height: 100vh; width:100vw; position:relative; overflow:hidden">
    <img src="{{ asset('images/Portada.jpg') }}" alt="Imagen de Portada" style="height: 100%; width: 100%; border-radius: 2px; object-fit:cover">
    <div class="text-center" style="position: absolute; top: 50%; font-family:'Noto Sans JP', sans-serif">
        <h1 class="display-1">Bienvenido a Travell</h1>
    </div>
</div>

<div class="p-4" style="background-color: lightslategray; border:1px solid #ddd; border_radius: 10px;">


   <!-- Sección: Proposito -->
    <div id="proposito" class="container my-5" style="background-color: rgb(0, 13, 255); color:white">
        
        <div class="d-flex flex-column justify-content-center align-items-center text-center full-height" style="height: 50vh" >
            <h1 class="display-3" style="font-family: 'Noto Sans JP', sans-serif; ">{{__('Proposito') }}</h1>
            <p>{{ __('Nuestra misión es promover la cultura del deporte, incrementar el rendimiento de los atletas promedio y contagiar de ganas de hacer deporte a atletas casuales') }}</p>
            <p>{{__('Esto lo logramos en base de nuestro producto y servicio que es la banda de SPM, que brinda medicion de metricas especificas en tiempo real, que incluyen frecuencia cardiaca, oxigenacion, y temperatura')}}</p>

        </div>


    </div>



</div>

@endsection

