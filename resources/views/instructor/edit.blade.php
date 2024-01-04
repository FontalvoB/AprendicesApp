@extends('layouts.layout3')
@section('content')
    <center>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Editar Instructor</div>

                <form action="{{url('instructor/'.$instructor->id_instructor)}}" method="post" enctype="multipart/form">
                    @csrf
                    {{method_field('PATCH')}}
                   

                    <div class="col-sm-12">
                        <label for="nombres">Nombres</label>
                        <input class="form-control" type="text" name="nombres" value="{{ $instructor->nombres }}"
                            id="nombres">
                        <br>
                    </div>
                    <div class="col-sm-12">
                        <label for="apellidos">apellidos</label>
                        <input class="form-control" type="text" name="apellidos" value="{{ $instructor->apellidos }}"
                            id="apellidos">
                        <br>
                    </div>
                    <div class="col-sm-12">
                        <label for="coordinacion">coordinacion</label>
                        <input class="form-control" type="text" name="coordinacion"
                            value="{{ $instructor->coordinacion }}" id="coordinacion">
                        <br>
                    </div>



                    <div class="col-sm-12">
                        <input type="submit" Class="btn btn-primary"value="Guardar Datos">
                        <a href="{{url('instructor')}}" class="btn btn-primary me-md-2">Volver</a>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>
</div>
</div>




<center>

@endsection