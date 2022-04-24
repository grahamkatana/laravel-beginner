@extends('layouts.app')
@section('title','Add new customer')
@section('content')
<h2>Customers</h2>
<p></p>

<form action="/customers" method="POST" enctype="multipart/form-data">
@include('customers.form')

<button type="submit" class="btn btn-primary">Submit</button>
</form> 
<hr>

@endsection
