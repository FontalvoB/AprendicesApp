@extends('layouts.layout')
@section('content')  
   

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <!-- <button href="{{url('ficha/create')}}" class="btn btn-primary me-md-2">Button</button> -->
                <!--  <button class="btn btn-primary" type="button">Button</button> -->
                <a href="{{url('ficha/create')}}" class="btn btn-primary me-md-2">Registrar </a>
                <a href="{{url('aprendices/create')}}" class="btn btn-primary me-md-2">Registrar aprendices </a>
                <a href="{{url('file-import-export')}}" class="btn btn-primary me-md-2">Importar aprendices </a>

            </div>

            <div class="row">
                @foreach($fichas as $ficha)
                <div class="col-sm-3">
                    <div class="card">
                        <!--  <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">{{$ficha->nombre_programa}}</h5>
                            <h6 class="card-text">{{$ficha->id_ficha}}</h6>
                           
                            <p class="card-text">Fecha Inicio: {{$ficha->fecha_in}}</p>
                            <p class="card-text">Fecha Fin: {{$ficha->fecha_fin}} </p>
                            <p class="card-text">Activos: {{$ficha->total_activos}} Inscritos:
                                {{$ficha->total_inscritos}}</p>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                
                                <a>
                                    <form method="post" action="{{url('/ficha/'.$ficha->id_ficha)}}">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <input class="btn btn-primary me-md-2" type="submit"
                                            onclick="return confirm('¿Quieres eliminar esta ficha?')" value="Borar">
                                    </form>
                                </a>

                                <a href="{{url('ficha/'.$ficha->id_ficha.'/edit')}}">
                                    Editar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection