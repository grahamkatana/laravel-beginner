@extends('layouts.app')
@section('title','Contact Us')
@section('content')
<h2>Contact us</h2>
<p>Graham's company</p>
<p>Tel number:0772 967 556</p>
@if(! session()->has('message'))

<form action="/contact" method="POST">

<div class ="form-group">
<label for="name">Name:</label>
<input type="text" name="name" placeholder="Enter name here" value="{{old('name')}}" class="form-control">
<div>{{$errors->first('name')}}</div>
</div>

<div class="form-group">
<label for="email">Email:</label>
<input type="text" name="email" placeholder="Enter email here" value="{{old('email')}}" class="form-control"> 
<div>{{$errors->first('email')}}</div>
</div>

<div class="form-group">
<label for="message">Compose Message:</label>
<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Type your message here">{{old('message')}}</textarea>
<div>{{$errors->first('message')}}</div>
</div>
@csrf
<button type="submit" class="btn btn-primary">Submit</button>



</form>

@endif
@endsection