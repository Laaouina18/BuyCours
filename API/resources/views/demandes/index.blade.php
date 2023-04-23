

@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <!-- Ajouter un sous-nav pour les genres, les artistes et les chansons -->
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('maitre')}}">Ensegnants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('matiere')}}">Matières</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('formation')}}">Formations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('cours')}}">Cours</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('demandes')}}">Demandes</a>
                        </li>
                    </ul>
                </div>
               
    <div class="row">
        <div class="col-md-10" style="margin:auto;padding-top:10%">

            <h1 class="btn btn-info">Les demandes de formations</h1>
            <br><br>

            <div class="table-responsive">
                <table class="table table-striped">
                    <caption>La liste des formations</caption>
                    <thead>
                        <tr>
        <th scope="col">#</th>
          <th scope="col">Titre</th>
         
          <th scope="col">Maitre</th>
          <th scope="col">description</th>
          <th scope="col">Image</th>
         
          <th scope="col">Action
          </th>
          <!-- <th scope="col">Voir plus</th> -->
        </tr>
      </thead>
      <tbody>
        @foreach($formation as $c)
            @if($c->status=="en cours")
        
    
        <tr>
        <td>{{ $loop->iteration }}</td>
          <td>{{ $c->name }}</td>
         
  <td>{{ $c->maitre->name }}</td>



  <td>{{ $c->description }}</td>

<td><img src="{{ asset('storage/images/'.$c->image) }}" alt="{{ $c->name }}" width="20"></td>
     
          <td style="display:flex;justify-content:space-around">
                             
                            
            <a href="{{ route('demandes.editformation', $c->id) }}" class="btn btn-primary">Valider la formation</a>
            <form action="{{ route('demandes.destroyformation', $c->id) }}" method="POST"> @csrf @method('DELETE') <button type="submit" class="btn btn-danger">Supprimer</button> </form>

          <!-- <td><a  class="btn btn-secondary">Voir plus</a></td> -->
        </tr>
     @endif
        @endforeach
                        </tbody>
    </table>
  </div>
</div>
</div>
<div class="row">
    <div class="col-md-10" style="margin:auto;padding-top:10%">

        <h1 class="btn btn-info">Les demandes de cours</h1>
        <br><br>

        <div class="table-responsive">
            <table class="table table-striped">
                <caption>La liste des cours</caption>
                <thead>
                    <tr>
    <th scope="col">#</th>
      <th scope="col">Titre</th>
     
      <th scope="col">Maitre</th>
      <th scope="col">description</th>
      <th scope="col">Image</th>
     
      <th scope="col">Action
      </th>
      <!-- <th scope="col">Voir plus</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($cours as $c)
        @if($c->status=="en cours")
    

    <tr>
    <td>{{ $loop->iteration }}</td>
      <td>{{ $c->name }}</td>
     
<td>{{ $c->maitre->name }}</td>



<td>{{ $c->description }}</td>

<td><img src="{{ asset('storage/images/'.$c->image) }}" alt="{{ $c->name }}" width="20"></td>
 
      <td style="display:flex;justify-content:space-around">
                         
        <a href="{{ route('demandes.editcours', $c->id) }}" class="btn btn-primary">Valider le cours</a>
      


                        </td>
      <!-- <td><a  class="btn btn-secondary">Voir plus</a></td> -->
    </tr>
 @endif
    @endforeach
                    </tbody>
</table>
</div>
</div>
</div>
<div class="row">
    <div class="col-md-10" style="margin:auto;padding-top:10%">

        <h1 class="btn btn-info">Les demandes d'inscriptions</h1>
        <br><br>

        <div class="table-responsive">
            <table class="table table-striped">
                <caption>La liste des inscriptions</caption>
                <thead>
                    <tr>
    <th scope="col">#</th>
    
     
    <th scope="col">La matière</th>
      <th scope="col">Etudiant</th>
  
     
      <th scope="col">Action
      </th>
      <!-- <th scope="col">Voir plus</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($inscription as $c)
        @if($c->status=="en cours")
    

    <tr>
    <td>{{ $loop->iteration }}</td>
     
<td>{{ $c->cours->name }}</td>



<td>{{ $c->etudiant->name}}</td>


      <td style="display:flex;justify-content:space-around">
                         
                          
        <a href="{{ route('demandes.editinscription', ['idetudiant' => $c->idetudiant, 'idcours' => $c->idcours]) }}" class="btn btn-primary">Valider l'inscription</a>

<form action="{{ route('demandes.destroyinscription', ['idetudiant' => $c->idetudiant, 'idcours' => $c->idcours]) }}" method="POST"> @csrf @method('DELETE') <button type="submit" class="btn btn-danger">Supprimer</button> </form>


                        </td>
      <!-- <td><a  class="btn btn-secondary">Voir plus</a></td> -->
    </tr>
 @endif
    @endforeach
                    </tbody>
</table>
</div>
</div>
</div>
</div>
          
        </div>
    </div>
</div>

@endsection