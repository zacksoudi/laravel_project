@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    @foreach ($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach

    {{ Form::open()}}
         
          <input type="text" name="username" placeholder="Username" />
          <input type="password" name="password" placeholder="Password"/>

          <input type="submit" value="Connexion" class="btn btn-primary add_button"/>
          <li>{{ link_to('inscription', 'Inscription', array('class' => 'btn btn-primary')) }}</li>

    {{ Form::close() }}

@stop