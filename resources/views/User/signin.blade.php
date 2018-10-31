@extends('layouts.master_auth')

@section('content')
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
    <h1>Sign In</h1>

        @if(count($errors) >0)         
          <div class="alert alert-danger">
              @foreach($errors->all() as $error)
              <p>{{ $errors }}</p>
              @endforeach
          </div>
        @endif
        
        <form action="{{ route('user.signin') }}" method="post">
        	<div class="form-group">
        		<label for="email">E-Mail</label>
        		<input type="text" id="email" name="email" class="form-control">
        	</div>
        	
        	<	




