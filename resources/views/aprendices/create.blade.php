@extends('layouts.layout2')
@section('content')

<center>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Ingresar Aprendiz</div>
                <hr>
                <form class="" novalidate action="{{ url('/aprendices') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Id"> Identificación</label>
                        <input type="text" class="form-control form-control-rounded" name="id_aprendiz" id="id_aprendiz"
                            placeholder="Ingresa tu numero de Identificación" required>
                    </div>
                    <div class="form-group">
                        <label for="Nombres"> Nombres</label>
                        <input type="text" class="form-control form-control-rounded" name="Nombres" id="Nombres"
                            placeholder="Ingrese sus nombres" required>
                    </div>
                    <div class="form-group">
                        <label for="Apellidos"> Apellidos </label>
                        <input type="text" class="form-control form-control-rounded" name="Apellidos" id="Apellidos"
                            placeholder="Ingrese sus apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="Email"> Email</label>
                        <input type="text" class="form-control form-control-rounded" name="Email" id="Email"
                            placeholder="Ingrese su email" required>
                    </div>
                    <div class="form-group">
                        <label for="Celular_1"> Celular 1</label>
                        <input type="text" class="form-control form-control-rounded" name="Celular_1" id="Celular_1"
                            placeholder="Ingrese su celular" required>
                    </div>
                    <div class="form-group">
                        <label for="Celular_2"> Celular 2</label>
                        <input type="text" class="form-control form-control-rounded" name="Celular_2" id="Celular_2"
                            placeholder="Ingrese su celular" required>
                    </div>
                    <div class="form-group">
                        <label for="ficha_id"> Ficha</label>
                        <input type="text" class="form-control form-control-rounded" name="ficha_id" id="ficha_id"
                            placeholder="Ingrese su ficha" required>
                    </div>
                    <div class="form-group">
                        <label for="Foto"> Foto</label>
                        <input type="file" class="form-control form-control-rounded" name="Foto" id="Foto" required>
                    </div>
                    <div class="form-group">
                        <label for="Observacion"> Observacion</label>
                        <input type="text" class="form-control form-control-rounded" name="Observacion" id="Observacion"
                            placeholder="Ingrese su observacion" required>
                    </div>
                    <div class="form-group">
                        <label for="Calificaciones"> Calificaciones</label>
                        <input type="text" class="form-control form-control-rounded" name="Calificaciones"
                            id="Calificaciones" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>
                            Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</center>
    <!--End Row-->

@endsection
