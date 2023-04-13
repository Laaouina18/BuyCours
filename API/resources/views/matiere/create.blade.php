@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Ajouter une matière</h1>

    <form action="{{ url('matiere') }}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nom de l'artiste">
        </div>



        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

      

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

</div>

@endsection
