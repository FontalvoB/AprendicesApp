@extends('layouts.layout')
@section('content')
    <div class="col-lg-12">
        <div class="row">

            <div class="col-sm-6">
                <!-- <button href="{{ url('ficha/create') }}" class="btn btn-primary me-md-2">Button</button> -->
                <!--  <button class="btn btn-primary" type="button">Button</button> -->
                <a href="{{ url('ficha-instructor/create') }}" class="btn btn-primary me-md-2">Registrar </a>
                <a href="{{ url('ficha') }}" class="btn btn-primary me-md-2">Registrar fichas </a>
                <a href="{{ url('instructor') }}" class="btn btn-primary me-md-2">Registrar Instructor </a>

            </div>

            <div class="col-lg-12">
            @foreach ($FI as $fichainstructor)
                <div class="col-sm-3">
                    <div class="card">
                        <!--  <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">ID: {{ $fichainstructor->id }} </h5>
                            <h5 class="card-text">Id Ficha: {{ $fichainstructor->ficha_id }}</h5>
                            <p class="card-text">Id Instructor: {{ $fichainstructor->instructor_id }} </p>



                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a>
                                    <form method="post" action="{{ url('/ficha-instructor/' . $fichainstructor->id) }}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input class="btn btn-primary me-md-2" type="submit"
                                            onclick="return confirm('¿Quieres eliminar esta ficha?')" value="Borar">
                                    </form>
                                </a>

                                <a href="{{ url('ficha-instructor/' . $fichainstructor->id . '/edit') }}">
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
    </div>
@endsection
