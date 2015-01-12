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
          <input type="text" name="email" placeholder="Email"/>
        
          <input type="submit" value="Inscription" class="btn btn-primary add_button"/>

    {{ Form::close() }}

@stop