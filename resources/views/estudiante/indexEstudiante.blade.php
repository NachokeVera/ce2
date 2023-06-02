@extends('layouts.masterEstudiante')

@section('nav-estudiante')
<div class="container py-5">
    <div class="row text-center">
        <div class="col">
            <div class="card">
                <div class="card-header py-3">
                    <h4 class="fw-normal">Ingrese Propuesta</h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="propuestaInput" class="form-label">Suba su propuesta</label>
                            <input class="form-control" type="file" id="propuestaInput">
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection