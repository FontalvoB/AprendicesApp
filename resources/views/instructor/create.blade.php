@extends('layouts.layout2')
@section('content')
    <center>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('instructor') }}" method="post" enctype="multipart/form">
                        @csrf

                        <div class="col-sm-12">
                            <label for="id_instructor">Identificador instructor</label>
                            <input class="form-control" type="text" name="id_instructor" id="id_instructor">
                            <br>
                        </div>

                        <div class="col-sm-12">
                            <label for="nombres">Nombres</label>
                            <input class="form-control" type="text" name="nombres" id="nombres">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <label for="apellidos">Apellidos</label>
                            <input class="form-control" type="text" name="apellidos" id="apellidos">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <label for="coordinacion">Coordinacion</label>
                            <input class="form-control" type="text" name="coordinacion" id="coordinacion">
                            <br>
                        </div>



                        <div class="col-sm-12">
                            <input type="submit" value="Guardar Datos">
                        </div>

                    </form>


                </div>
            </div>
        </div>
        </div>
    </center>
@endsection
