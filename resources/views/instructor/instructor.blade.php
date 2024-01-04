@extends('layouts.layout')
@section('content')  
    <div class="container-fluid">

        <div class="row">

            <!-- <div class="col-sm-6">
                <button href="{{url('ficha/create')}}" class="btn btn-primary me-md-2">Button</button>
                 <button class="btn btn-primary" type="button">Button</button>
                <a href="{{url('instructor/create')}}" class="btn btn-primary me-md-2">Registrar </a>
                <a href="{{url('ficha')}}" class="btn btn-primary me-md-2">Registrar fichas </a>

            </div> -->

            <div class="col-lg-12">
                @foreach($instructores as $instructor)
                <div class="col-sm-3">
                    <div class="card">
                        <!--  <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">Nombres: {{$instructor->nombres}} </h5>
                            <h5 class="card-text">Apellidos: {{$instructor->apellidos}}</h5>
                            <p class="card-text">Instructor: {{$instructor->id_instructor}} </p>
                            <p class="card-text">Coordinacion: {{$instructor->coordinacion}}</p>
                            

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a>
                                    <form method="post" action="{{url('/instructor/'.$instructor->id_instructor)}}">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <input class="btn btn-primary me-md-2" type="submit"
                                            onclick="return confirm('¿Quieres eliminar esta ficha?')" value="Borar">
                                    </form>
                                </a>

                                <a href="{{url('instructor/'.$instructor->id_instructor.'/edit')}}">
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
