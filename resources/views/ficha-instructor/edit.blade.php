@extends('layouts.layout3')
@section('content')
    <center>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Editar Ficha-Instructor</div>
                    <form action="{{url('ficha-instructor/'.$fichainstructor->id)}}" method="post" enctype="multipart/form">
                        @csrf
                        {{method_field('PATCH')}}
                      
      
                        <div class="col-sm-12">
                            <label for="id">ID</label>
                            <input class="form-control" type="text" name="id"
                                value="{{ $fichainstructor->id }}" id="id">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <label for="ficha_id">Fecha Inicio</label>
                            <input class="form-control" type="text" name="ficha_id" value="{{ $fichainstructor->ficha_id }}"
                                id="ficha_id">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <label for="instructor_id">Fecha Fin</label>
                            <input class="form-control" type="text" name="instructor_id" value="{{ $fichainstructor->instructor_id }}"
                                id="instructor_id">
                            <br>
                        </div>
                        
                       

                        <div class="col-sm-12">
                            <input type="submit" class="btn btn-primary"value="Guardar Datos">
                            <a href="{{url('ficha-instructor')}}" class="btn btn-primary me-md-2">Volver</a>
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