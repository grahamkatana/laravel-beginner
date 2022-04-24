@extends('layouts.app')
@section('title','Customer list')
@section('content')
<h2>Customers</h2>
<p><a href="customers/create">Add new customer</a></p>
<div class="row">
<div class="col-2">
   
    <b> ID</b>
    </div>
    <div class="col-4">
  
  <b>Name</b>
    </div>
    <div class="col-4">

<b>Company</b>
    </div>
    <div class="col-2">
    <b>Status</b>
    </div>

</div>
<hr>
@foreach ($customers as $customer)
<div class="row">
    <div class="col-2">
    {{$customer->id}}
    </div>
    <div class="col-4">
  <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
    </div>
    <div class="col-4">
    {{$customer->company->name}}
    </div>
    <div class="col-2">
    {{$customer->active}}
    </div>
</div>

@endforeach
@endsection
