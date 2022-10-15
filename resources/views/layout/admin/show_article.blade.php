@extends('layout.admin.adminlayout')

@section('content')

<div class="container">
    @foreach ($show_articles as $art)
    <div class="row mb-3 border-bottom pt-3">
    <div class="col-1">
        {{ $art->id }}   
      </div>
      <div class="col-5">
        {{ $art->category->name }}
      </div>
      <div class="col-5">
        {{ $art->title }}
    </div>
    <div class="col-1">
      <a href="/admin/article/edit/{{ $art->id }}" class="btn btn-warning">Szerkesztés</a></div>
    </div>
    @endforeach
</div>
@endsection