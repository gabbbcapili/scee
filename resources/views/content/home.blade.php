@extends('layouts/contentLayoutMaster')

@section('title', 'Home')

@section('content')
<!-- Kick start -->
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Hello {{ request()->user()->name }}</h4>
  </div>
  <div class="card-body">
  </div>
</div>
<!--/ Kick start -->
@endsection
