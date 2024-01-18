@extends('layout')

@section('title')
@section('content')


    <div class="jumbotron">
        <h1 class="display-4">Bienvenue sur Mon Site Vente de Poulet        <a href="http://"><img style="height: 70px" src="data:image/jpeg;base64,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" class="rounded float-end" alt="Kaay-ma-jaay-la-guinaar">
</a></h1>
        <p class="lead">Un site Web moderne et élégant.</p>
        <hr class="my-4">
        <p>Explorez notre contenu passionnant.</p>
    </div>

    <form class="bg-light">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><strong>NOM:<span style="color: red">*</span></strong></label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"@required(true)>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"><strong>PRENOM:<span
                        style="color: red">*</span></strong></label>
            <input type="text" class="form-control" id="exampleInputPassword1"@required(true)>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><strong>ADRESSE:<span
                        style="color: red">*</span></strong></label>
            <input type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp"@required(true)>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> <strong> TELEPHONE:<span
                        style="color: red">*</span></strong></label>
            <input type="number" class="form-control" id="exampleInputPassword1"@required(true)>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><strong>Email address:<span
                        style="color: red">*</span></strong></label>
            <input type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp"@required(true)>
        </div>


        <button type="submit" class="btn btn-primary">SOUSMETTRE UNE INSCRIPTION</button>
    </form>

@endsection
