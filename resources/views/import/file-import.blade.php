@extends('layouts.layout')
@section('content')  
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            Laravel  Export PDF 
        </h2>
        <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import data</button>
        </form>
    </div>

    <br>
<div class="container">
  <div class="table-responsive">

    <table class="table ">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nombres</th>
            <th scope="col">apellidos</th>
            <th scope="col">email</th>
            <th scope="col">celular 1</th>
            <th scope="col">celular 2</th>
            <th scope="col">ficha</th>
            <th scope="col">observacion</th>
            <th scope="col">calificaciones</th>
            <th scope="col">fotos</th>


          </tr>
        </thead>
        @foreach ($aprendices as $aprendice)
        <tbody>
          <tr>
            <th scope="row">{{ $aprendice->id_aprendiz }}</th>
            <td>{{ $aprendice->nombres }}</td>
            <td>{{ $aprendice->apellidos }}</td>
            <td>{{ $aprendice->email }}</td>
            <td>{{ $aprendice->celular_1 }}</td>
            <td>{{ $aprendice->celular_2 }}</td>
            <td>{{ $aprendice->ficha_id }}</td>
            <td>{{ $aprendice->observacion }}</td>
            <td>{{ $aprendice->calificaciones }}</td>
            <td>{{ $aprendice->foto }}</td>
         
          </tr>
       
        
        </tbody>
        @endforeach
      </table>

    </div>
  </div>


@endsection
