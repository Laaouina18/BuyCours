@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Ajouter une matière</h1>

    <form action="{{ url('maitre') }}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nom de l'artiste">
        </div>



        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" class="form-control" id="name" name="email" placeholder="Nom de l'artiste">
        </div>
        <div class="form-group">
            <label for="name">mobile</label>
            <input type="text" class="form-control" id="name" name="mobile" placeholder="Nom de l'artiste">
        </div>
        <div class="row mb-3">
                            <label for="password" >{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"  name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

</div>

@endsection
