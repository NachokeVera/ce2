@extends('layouts.masterEstudiante')

@section('nav-estudiante')
<div class="container py-5">
    <div class="row text-center">
        <div class="col">            
            <h4 class="fw-normal">Ingrese Propuesta</h4>
            <div class="card p-3 d-flex d-sm-inline-flex ">
                <form action="">
                    <div class="mb-3">
                        <label for="alumnosInput" class="form-label">Quien es usted</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Rut - Nombre</option>
                            <option value="1">20.805.198-9 Ignacio Vera</option>
                            <option value="2">20.805.198-9 Ignacio Vera</option>
                            <option value="3">20.805.198-9 Ignacio Vera</option>
                          </select>
                    </div>
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
@endsection
