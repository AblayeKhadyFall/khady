@extends('layout')
@section('title','Poulet haut qualite')
@section('content')

<h1 class="lead">Kaay xool saay guinaar nga Taannn diisaay boo beug ! <a class="bnt btn-success " href="{{route('produits.create')}}">Aouter un Guinar</a> </h1>


@if (Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>

@endif
@if (Session::has('failed'))
        <div class="alert alert-danger">
            {{ Session::get('failed') }}
        </div>
    @endif
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">PRIX</th>
        <th scope="col">POIDS</th>
        <th scope="col">IMAGE</th>
        <th scope="col">ACTION</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($produits as $produit)
        <tr>
            <th scope="row">{{$produit->id}}</th>
            <td>{{$produit->prix}}</td>
            <td>{{$produit->poids}}</td>
            <td><img src="{{$produit->image}}"width="50" height="50" alt=""></td>
            <td>
                <a class="btn btn-dark btn-sm" href="{{route("produits.edit", $produit->id)}}">UPDATE</a>
                <form action="{{route("produits.destroy", $produit->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary btn-sm" type="submit" onclick="return confirm('Voulez vous vraiment supprimer ce produit pertinant')">DELETE</button>
                </form>
            </td>

          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
