@extends('layout')
@section('title','Poulet haut qualite')
@section('content')

<h1 class="lead">Kaay xool saay guinaar nga Taannn diisaay boo beug ! <a class="bnt btn-success " href="{{route('produits.create')}}">Aouter un Guinar</a> </h1>


@if (Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
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
            <td>{{$produit->image}}</td>
            <td>
                <a class="btn btn-dark btn-sm" href="{{route("produits.edit",$produit->id)}}">UPDATE</a>
                <form action="{{route('produit.destroy',$produit->id)}}"method="post"class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-primary btn-sm" type="submit" onclick="return confirm('Voulez vous vraiment supprimer ce produit pertinant')">DELETE</button>
                </form>
            </td>

          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
