@extends('layouts.layout3')
@section('content')
    <center>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Editar Ficha</div>

                    <form action="{{ url('ficha/' . $ficha->id_ficha) }}" method="post" enctype="multipart/form">
                        @csrf
                        {{ method_field('PATCH') }}
                        <!--
                <div>
                    <label for="id_ficha">Identificador ficha</label>
                    <input class="form-control" type="text" name="id_ficha" value="{{ $ficha->id_ficha }}" id="id_ficha">
                    <br>
                </div> -->

                        <div class="col-sm-12">
                            <label for="nombre_programa">Nombre Programa</label>
                            <input class="form-control" type="text" name="nombre_programa"
                                value="{{ $ficha->nombre_programa }}" id="nombre_programa">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <label for="fecha_in">Fecha Inicio</label>
                            <input class="form-control" type="text" name="fecha_in" value="{{ $ficha->fecha_in }}"
                                id="fecha_in">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <label for="fecha_fin">Fecha Fin</label>
                            <input class="form-control" type="text" name="fecha_fin" value="{{ $ficha->fecha_fin }}"
                                id="fecha_fin">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <label for="total_activos">Total Activos</label>
                            <input class="form-control" type="text" name="total_activos"
                                value="{{ $ficha->total_activos }}" id="total_activos">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <label for="total_inscritos">Total Inscritos</label>
                            <input class="form-control" type="text" name="total_inscritos"
                                value="{{ $ficha->total_inscritos }}" id="total_inscritos">
                            <br>
                        </div>


                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-primary me-md-2"value="Guardar Datos">
                            <a href="{{ url('ficha') }}" class="btn btn-primary me-md-2">Volver</a>
                        </div>
                </div>
                </form>

            </div>
        </div>
        </div>
        </div>




        <center>
        
@endsection