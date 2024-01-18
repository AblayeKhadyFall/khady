@extends('layout')

@section('title')
@section('content')

    <h1>Hello every body guys</h1>
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"><strong>NOM:<span style="color: red">*</span></strong></label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"@required(true)>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label"><strong>PRENOM:<span style="color: red">*</span></strong></label>
          <input type="text" class="form-control" id="exampleInputPassword1"@required(true)>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><strong>ADRESSE:<span style="color: red">*</span></strong></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"@required(true)>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> <strong> TELEPHONE:<span style="color: red">*</span></strong></label>
            <input type="number" class="form-control" id="exampleInputPassword1"@required(true)>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><strong>Email address:<span style="color: red">*</span></strong></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"@required(true)>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><strong> ID-PRODUITS:<span style="color: red">*</span></strong></label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"@required(true)>
          </div>



        <button type="submit" class="btn btn-primary">SOUSMETTRE UNE INSCRIPTION</button>
      </form>

@endsection
