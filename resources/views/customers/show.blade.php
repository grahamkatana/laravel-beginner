@extends('layouts.app')
@section('title','Details for'.$customer->name)
@section('content')
<h2>Customers</h2>
<h3>Details for:{{$customer->name}}</h3>

<p></p>
<hr>
<a href="/customers/{{$customer->id}}/edit">Edit</a>
<form action="/customers/{{$customer->id}}" method ="POST">
@method('DELETE')
@csrf
<p></p>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
<hr>
<div class="row">
    <div class="col-12">
        <p><strong>Name:</strong>{{$customer->name}}</p>
        <p><strong>Email:</strong>{{$customer->email}}</p>
        <p><strong>Company:</strong>{{$customer->company->name}}</p>
    </div>
</div>

@if($customer->image)
<div class="row">
<div class="div-col-12">
<img src="{{asset('storage/'.$customer->image)}}" alt="image not found" class="img-thumbnail">
</div>
</div>
@endif

@endsection
