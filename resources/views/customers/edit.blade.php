@extends('layouts.app')
@section('title','Edit details for'.$customer->name)
@section('content')
<h2>Edit details for {{$customer->name}}</h2>
<p></p>

<form action="/customers/{{$customer->id}}" method="POST" enctype="multipart/form-data">
@method('PATCH')
@include('customers.form')

<button type="submit" class="btn btn-primary">Save</button>
</form>
<hr>

@endsection
