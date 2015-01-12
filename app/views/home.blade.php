@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <h1>Vos Taches <small> <a href="{{ URL::route('new') }}" class="btn btn-primary add_button">Nouvelle Tache</a></small></h1>

   <ul>
    @foreach ($items as $item)
         <li>
            {{ Form::open(array('url' => ' ')) }}
              <input type="checkbox" 

                     onClick="this.form.submit()" 
                     {{ $item->done ? 'checked' : '' }} 
                     />

                   <input type="hidden" name="id" value="{{ $item->id }}" />
              {{ $item->name}} <small>(<a href="{{ URL::route('delete',$item->id) }}">supprimer</a>) </small>
                            
            {{ Form::close() }}
         </li>


    @endforeach
    <small><a href="{{ URL::route('logout') }}" class="btn btn-primary add_button">DECONNEXION</a> </small>
    </ul>
@stop