@extends('layouts.masterAdministrador')
@section('nav-administrador')
<div class="container-fluid">
    <div class="row">
        <div class="col col-12 col-sm-4 p-3 text-center">
            <h4 class="fw-normal">Ingrese Estudiante</h4>
            <div class="card p-3">
                <form method="POST" action="{{route('administrador.store')}}">
                    @csrf
                    <div>
                        <label for="rut" class="form-label">Ingrese Rut</label>
                        <input type="text" class="form-control" id="rut" placeholder="Ej: 12345678-9">
                    </div>
                </form>
            </div>
        </div>
        <div class="col col-12 col-sm-8">

        </div>
    </div>
    
</div>
@endsection