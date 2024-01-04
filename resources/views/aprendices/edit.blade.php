@extends('layouts.layout3')
@section('content')
<center>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Editar Aprendiz</div>
                <form class="row g-3 needs-validation" novalidate
                    action="{{ url('/aprendices/' . $aprendices->id_aprendiz) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    {{ method_field('PATCH') }}

                    <label for="Id"> Identificación</label>
                    <input type="text" class="form-control form-control-rounded" name="id_aprendiz" id="id_aprendiz" value="{{ $aprendices->id_aprendiz }}" required>
                    <br>


                    <label for="Nombres"> Nombres</label>
                    <input type="text" class="form-control form-control-rounded" name="Nombres" id="Nombres" value="{{ $aprendices->nombres }}" required>
                    <br>

                    <label for="Apellidos"> Apellidos </label>
                    <input type="text" class="form-control form-control-rounded" name="Apellidos" id="Apellidos" value="{{ $aprendices->apellidos }}" required>
                    <br>

                    <label for="Email"> Email</label>
                    <input type="text" class="form-control form-control-rounded" name="Email" id="Email" value="{{ $aprendices->email }}" required>
                    <br>

                    <label for="Celular_1"> Celular 1</label>
                    <input type="text" class="form-control form-control-rounded" name="Celular_1" id="Celular_1" value="{{ $aprendices->celular_1 }}" required>
                    <br>

                    <label for="Celular_2"> Celular 2</label>
                    <input type="text" class="form-control form-control-rounded" name="Celular_2" id="Celular_2" value="{{ $aprendices->celular_2 }}" required>
                    <br>

                    <label for="Ficha_id"> Ficha</label>
                    <input type="text" class="form-control form-control-rounded" name="Ficha_id" id="Ficha_id" value="{{ $aprendices->ficha_id }}" required>
                    <br>

                    <label for="Foto"> Foto</label>
                   
                    <input type="file" class=" form-control form-control-rounded" name="Foto" id="Foto" required>
                    {{ $aprendices->foto }}
                    <br>


                    <label for="Observacion"> Observacion</label>
                    <input type="text" class="form-control form-control-rounded" name="Observacion" id="Observacion" value="{{ $aprendices->observacion }}"
                        required>
                    <br>

                    <label for="Calificaciones"> Calificaciones</label>
                    <input type="text" class="form-control form-control-rounded" name="Calificaciones" id="Calificaciones" value="{{ $aprendices->calificaciones }}"
                        required>
                    <br>
<br>
                    <input type="submit" class="btn btn-light btn-round px-5"  value=" Guardar Datos">
                    <br>
                </form>
                
            </div>
        </div>
    </div>



    <center>
@endsection
