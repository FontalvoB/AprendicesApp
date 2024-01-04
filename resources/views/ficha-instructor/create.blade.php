@extends('layouts.layout2')
@section('content')
    <div class="row">
        <div class="col-lg-4">

            <div class="card">
                <center>
                <div class="card-body">
                    <form action="{{ url('ficha-instructor') }}" method="post" enctype="multipart/form">
                        @csrf

                        {{-- <div class="col-sm-12">
                    <label for="id">Identificador </label>
                    <input class="form-control" type="text" name="id" id="id">
                    <br>
                </div> --}}

                        <div class="col-sm-12">
                            <label for="ficha_id">ficha_id</label>
                            <input class="form-control" type="text" name="ficha_id" id="ficha_id">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <label for="instructor_id">instructor_id</label>
                            <input class="form-control" type="text" name="instructor_id" id="instructor_id">
                            <br>
                        </div>



                        <div class="col-sm-8">
                            <input type="submit" value="Guardar Datos">
                        </div>

                    </form>
                </div>
                </center>
            </div>
        </div>

        <div class="col-lg-3">

            <div>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">ID Instructor</th>
                            <th scope="col">Nombre y Apellidos</th>

                    </thead>
                    @foreach ($instructor as $ins)
                        <tbody>
                            <tr>
                                <td class="table-primary">{{ $ins->id_instructor }}</td>
                                <td class="table-primary">{{ $ins->nombres }} {{ $ins->apellidos }}</td>

                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>

        </div>

        <div class="col-lg-4">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">ID Ficha</th>
                        <th scope="col">Nombre del Programa</th>

                </thead>
                @foreach ($ficha as $fich)
                    <tbody>
                        <tr>
                            <td class="table-danger">{{ $fich->id_ficha }}</td>
                            <td class="table-danger">{{ $fich->nombre_programa }} </td>

                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
