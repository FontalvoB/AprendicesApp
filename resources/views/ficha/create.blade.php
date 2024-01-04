@extends('layouts.layout2')
@section('content')

<center>

<div class="col-lg-4">
    <div class="card">
        <div class="card-body">
        <form action="{{url('ficha')}}" method="post" enctype="multipart/form">
        @csrf
        
        <div class="col-sm-12">
            <label for="id_ficha">Identificador ficha</label>
            <input class="form-control" type="text" name="id_ficha" id="id_ficha">
            <br>
        </div>

        <div class="col-sm-12">
            <label for="nombre_programa">Nombre Programa</label>
            <input class="form-control" type="text" name="nombre_programa" id="nombre_programa">
            <br>
        </div>
        <div class="col-sm-12">
            <label for="fecha_in">Fecha Inicio</label>
            <input class="form-control" type="text" name="fecha_in" id="fecha_in">
            <br>
        </div>
        <div class="col-sm-12">
            <label for="fecha_fin">Fecha Fin</label>
            <input class="form-control" type="text" name="fecha_fin" id="fecha_fin">
            <br>
        </div>
        <div class="col-sm-12">
            <label for="total_activos">Total Activos</label>
            <input class="form-control" type="text" name="total_activos" id="total_activos">
            <br>
        </div>
        <div class="col-sm-12">
            <label for="total_inscritos">Total Inscritos</label>
            <input class="form-control" type="text" name="total_inscritos" id="total_inscritos">
            <br>
        </div>
        

        <div class="col-sm-4">
            <input type="submit" value="Guardar Datos">
        </div>

        </form>

    </div>
</div>
</div>

</center>
@endsection