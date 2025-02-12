@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
  <div class="row">
    <p class="lead">Email: {{ $email }}</p>
    <p class="lead">Address: {{ $address }}</p>
    <p class="lead">Phone: {{ $phone }}</p>
  </div>
</div>
@endsection