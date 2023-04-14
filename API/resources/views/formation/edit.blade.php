
@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <h1 class="mb-4">Modifier formation</h1>
    <form action="{{ url('formation/'.$formation->id) }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    {{ method_field('PATCH') }}

  

<div class="mb-3">
    <label for="title" class="form-label">Nom</label>
    <input type="text" name="name" id="title" class="form-control" required maxlength="255"  value="{{ $formation->name }}">
</div>

<div class="mb-3">
    <label for="year" class="form-label">Description</label>
    <input type="text" name="description" id="year" class="form-control" value="{{ $formation->description }}">
</div>

<div class="mb-3">
    <label for="track" class="form-label">La date de début</label>
    <input type="date" name="date_1" id="track" class="form-control"  value="{{ $formation->date_1 }}">
</div>

<div class="mb-3">
    <label for="audio_path" class="form-label">La date de fin</label>
    <input type="text" name="date_2" id="audio" class="form-control"   value="{{ $formation->date_2 }}">
</div>

<div class="mb-3">
    <label for="audio_path" class="form-label">Image</label>
    <input type="file" name="image" id="image" class="form-control">
</div>


<div class="mb-3">
    <label for="duration" class="form-label">Niveau</label>
    <input type="text" name="niveau" id="duration" class="form-control"   value="{{ $formation->niveau }}">
</div>

<div class="mb-3">
    <label for="genre_id" class="form-label">Enseignant</label>
    <select name="maitre_id" id="genre_id" class="form-control"  >
        @foreach ($maitre as $m)
        <option value="{{ $m->id }}">{{ $m->name }}</option>
        @endforeach
    </select>
</div>





<button type="submit" class="btn btn-primary">Update </button>
</form>
</div>
@endsection
