@extends('layout')

@section('styles')
@guest
<style>
  body {
    background-color: #f8f9fa;
    min-height: 100vh;
  }
</style>
@endguest
@endsection
@section('content')
<div id="app" class="row mr-0">
  @auth
  <sidebar-component></sidebar-component>
  @endauth
  <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-3">
    <router-view></router-view>
  </div>
</div>
@endsection