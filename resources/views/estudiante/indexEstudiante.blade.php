@extends('layouts.masterEstudiante')

@section('nav-estudiante')
<div class="container py-5">
    <div class="row text-center">
        <div class="col">
            <div class="card d-inline-flex">
                <div class="card-header py-3">
                    <h4 class="fw-normal">Ingrese Propuesta</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="propuestaInput" class="form-label">Suba su propuesta</label>
                            <input class="form-control" type="file" id="propuestaInput">
                        </div>
                        <div class="d-flex justify-content-between">            
                            <button class="btn btn-secondary mx-3" type="reset">Limpiar</button>
                            <button class="btn btn-primary mx-3" type="submit">Subir</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
