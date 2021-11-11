@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
        <!--Mensaje flash -->
        @if(session('usuarioGuardado'))
        <div class="alert alert-success">
            {{ session('usuarioGuardado') }}
        </div>
        @endif

        <!--Validación de errores -->
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


            <div class="card">
            <form action="{{ url ('/save')}}" method="POST">
            @csrf
                    <div class="card-header text-center">AGREGAR USUARIO</div>

                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2">Name</label>
                            <input type="text" name="name" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Email</label>
                            <input type="email" name="email" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Password</label>
                            <input type="password" name="password" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                        <label for="" class="col-2">Birthday</label>
                            <input type="date" id="date" name="date" value="2000-07-22" min="1900-01-01" max="2021-12-31">
                        </div>

                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-9 offset-2">Guardar</button>

                        </div>



                    </div>

                </form>


            </div>

        </div>

    </div>

<a class="btn btn-light btn-xs mt-5" href="{{ url ('/')}}">&laquo volver</a>


</div>
@endsection
