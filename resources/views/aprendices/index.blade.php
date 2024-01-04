@extends('layouts.layout')
@section('content')



  <div class="content">
    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Aprendices</h5>
			  <div class="table-responsive">
               <table class="table">
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
                    <th scope="col">Foto</th>
                    <th scope="col">boton</th>


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
                    <td> <img src="{{ asset("storage/$aprendice->foto")}}" width="50" height="50"/></td>
                    <td> <div class="dropdown">
                      <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                       <i class="icon-options"></i>
                      </a>
                       <div class="dropdown-menu dropdown-menu-right">

                       <a class="dropdown-item"> <form method="" action="{{ url('/aprendices/'.$aprendice->id_aprendiz.'/edit')}}" width="60%">

                        <input class="btn btn-primary btn-block" type="submit"
                            onclick="return confirm('¿Quieres editar este aprendiz?')" value="Editar">
                    </form>
                  </a>
                  <a class="dropdown-item"> <form method="" action="{{ url('/aprendices/'.$aprendice->id_aprendiz)}}" width="60%">

                    <input class="btn btn-primary btn-block" type="submit"
                        onclick="return confirm('¿Quieres Exportar este aprendiz?')" value="Exportar PDF">
                </form>
              </a>
                       <a class="dropdown-item"> <form method="post" action="{{url('/aprendices/'.$aprendice->id_aprendiz)}}" width="60%">
                        @csrf
                        {{method_field('DELETE')}}
                        <input class="btn btn-primary btn-block" type="submit"
                            onclick="return confirm('¿Quieres eliminar este aprendiz?')" value="Borrar">
                    </form></a>

                        </div></td>

                  </tr>


                </tbody>
                @endforeach
              </table>
            </div>
            </div>
          </div>
        </div>



    </div>
  </div>



@endsection
