@extends('layout.admin.adminlayout')

@section('content')

    @if (Session::get('success_message'))
        <div class="alert alert-success text-center fs-5" role="alert">
            {{ Session::get('success_message') }}
        </div>
    @endif

<div class="container">
    @foreach ($category as $cat)
    <div class="row mb-3 border-bottom pt-3">
    <div class="col-1">
        {{ $cat->name }}   
      </div>
      <div class="col-5">
        {{ $cat->description }}
      </div>
      <div class="col-5">
        {{ $cat->image }}
    </div>
    <div class="col-1">
      <a href="/admin/category/edit/{{ $cat->id }}" class="btn btn-primary">Szerkesztés</a></div>
    </div>
    @endforeach
</div>
@endsection