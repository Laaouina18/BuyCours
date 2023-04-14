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
                            <a class="nav-link active" href="{{url('maitre')}}">Ensegnants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('matiere')}}">Matières</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="{{url('formation')}}">Formations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('cours')}}">Cours</a>
                        </li>
                       
                    </ul>
                </div>
    <div class="row">
        <div class="col-md-10" style="margin:auto;padding-top:10%">
 
    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover">
        <caption>La liste des maitres</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <!-- <th>Image</th> -->
                    <th>Name</th>
                    <th>Image</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($maitre as $item)
                @if($item->name!=NULL)
                <tr>
             
                    <td>{{ $item->id }}</td>
                    <!-- <td>
                    <img class="card-img-top" src="{{ asset('storage/images/'.$item->image) }}" alt="{{$item->name }}" style="width:5%">
                    </td> -->
                    <td>{{ $item->name }}</td>
                    <td><img src="{{ asset('storage/images/'.$item->image) }}" alt="{{ $item->name }}" width="20"></td>
                    <td>{{ $item->mobile }}</td>
                    <td>{{ $item->email}}</td>
                     <td style="display:flex;justify-content:space-around">
                      
                        <form action="{{ url('/maitre/'.$item->id) }}" method="post" class="d-inline-block">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Confirm delete?')">supprimer</button>
                        </form>
<!-- 
                        <a href="{{ url('/artist/' . $item->id ) }}" class="btn btn-sm btn-secondary">Voir plus...</a> -->
                    </td>
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