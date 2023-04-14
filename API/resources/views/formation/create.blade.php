@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">Ajouter un formation</h1>
    <form action="{{ url('formation') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <div class="mb-3">
            <label for="title" class="form-label">Nom</label>
            <input type="text" name="name" id="title" class="form-control" required maxlength="255">
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Description</label>
            <input type="text" name="description" id="year" class="form-control" required min="1900">
        </div>

        <div class="mb-3">
            <label for="track" class="form-label">Date de début</label>
            <input type="date" name="date_1" id="track" class="form-control" required maxlength="255">
        </div>

        <div class="mb-3">
            <label for="audio_path" class="form-label"> Date de fin</label>
            <input type="date" name="date_2" id="audio" class="form-control" required>
        </div>
   
        <div class="mb-3">
            <label for="audio_path" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>
       

        <div class="mb-3">
            <label for="duration" class="form-label">Niveau</label>
            <input type="text" name="niveau" id="duration" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="genre_id" class="form-label">Enseignant</label>
            <select name="maitre_id" id="genre_id" class="form-control" required>
                @foreach ($maitre as $m)
                <option value="{{ $m->id }}">{{ $m->name }}</option>
                @endforeach
            </select>
        </div>

    
       

        <button type="submit" class="btn btn-primary">Create </button>
    </form>
</div>
@endsection
