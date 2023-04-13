

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
                            <a class="nav-link " href="{{url('')}}">Formations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('cours')}}">Cours</a>
                        </li>
                       
                    </ul>
                </div>
               
    <div class="row">
        <div class="col-md-10" style="margin:auto;padding-top:10%">

            <a href="{{ url('/cours/create') }}" class="btn btn-info">Ajouter cours</a>
            <br><br>

            <div class="table-responsive">
                <table class="table table-striped">
                    <caption>La liste des cours</caption>
                    <thead>
                        <tr>
        <th scope="col">#</th>
          <th scope="col">Titre</th>
         
          <th scope="col">Maitre</th>
          <th scope="col">Matière</th>
          <th scope="col">Image</th>
         
          <th scope="col">Action
          </th>
          <!-- <th scope="col">Voir plus</th> -->
        </tr>
      </thead>
      <tbody>
        @foreach($cours as $c)
    
        <tr>
        <td>{{ $loop->iteration }}</td>
          <td>{{ $c->name }}</td>
         
  <td>{{ $c->maitre->name }}</td>



  <td>{{ $c->matiere->name }}</td>

<td><img src="{{ asset('storage/images/'.$c->image) }}" alt="{{ $c->name }}" width="20"></td>
     
          <td style="display:flex;justify-content:space-around">
                             
                                <a class="btn btn-sm btn-info"  href=" {{ url('/cours/'.$c->id.'/edit') }}" >Modifier</a>
                                @if($c->status != 'archived')
    <form action="{{ url('/cours/'.$c->id) }}" method="post" style="display:inline-block;">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
                                
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this song?')">Archiver</button>
    </form>
    @else  
    <button type="submit" class="btn btn-sm btn-success">Archive</button>
@endif

                            </td>
          <!-- <td><a  class="btn btn-secondary">Voir plus</a></td> -->
        </tr>
     
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