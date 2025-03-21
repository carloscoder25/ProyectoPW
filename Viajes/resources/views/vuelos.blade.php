@extends('layouts.plantilla')

@section('contenido')
<div class="p-4">

    <div class="container my-5">



        <h1 class="mb-4">Búsqueda de Vuelos</h1>
    
        <form id="busqueda-form" class="row g-3 mb-4">
            <div class="col-md-6">
                <label for="origen" class="form-label">Origen</label>
                <input type="text" name="origen" class="form-control" placeholder="Ciudad de origen">
            </div>
            <div class="col-md-6">
                <label for="destino" class="form-label">Destino</label>
                <input type="text" name="destino" class="form-control" placeholder="Ciudad de destino">
            </div>
            <div class="col-md-4">
                <label for="fecha_salida" class="form-label">Fecha de salida</label>
                <input type="date" name="fecha_salida" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="precio_min" class="form-label">Precio mínimo</label>
                <input type="number" name="precio_min" class="form-control" placeholder="Precio mínimo">
            </div>
            <div class="col-md-4">
                <label for="precio_max" class="form-label">Precio máximo</label>
                <input type="number" name="precio_max" class="form-control" placeholder="Precio máximo">
            </div>
            <div class="col-md-12">
                <label for="aerolinea" class="form-label">Aerolínea</label>
                <select name="aerolinea" class="form-select">
                    <option value="">Cualquier aerolínea</option>
                    <option value="Aeroméxico">Aeroméxico</option>
                    <option value="Volaris">Volaris</option>
                </select>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary w-100">Buscar vuelos</button>
            </div>
        </form>
        
        <h2>Resultados</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Número de vuelo</th>
                    <th>Aerolínea</th>
                    <th>Hora de salida</th>
                    <th>Duración</th>
                    <th>Precio</th>
                    <th>Escalas</th>
                </tr>
            </thead>
            <tbody id="resultados">
                <tr>
                    <td colspan="6" class="text-center">No hay resultados aún.</td>
                </tr>
            </tbody>
        </table>
    
    </div>

</div>
@endsection
