@extends('layout')

@section('title')

@section('content')

    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label"><strong>QUANTITE:</strong></label>
            <input type="number" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label"><strong>#IDPRODOUIT:</strong></label>
            <input type="number" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label"><strong>#IDCLIENT:</strong></label>
            <input type="number" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    CONFIRME
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
@endsection
