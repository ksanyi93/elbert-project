@extends('layout.mainlayout')

@section('content')
    <div class="container">



        <h3 class="text-center mt-3 mb-3"> {{ $article->title }} </h3>

        <div>{!! $article->body !!}</div>



    </div>
@endsection