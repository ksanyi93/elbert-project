@extends('layout.admin.adminlayout')

@section('content')

    @if (Session::get('success_message'))
        <div class="alert alert-success text-center fs-5" role="alert">
            {{ Session::get('success_message') }}
        </div>
    @endif

    @if (Session::has('errors'))
        <div class="alert alert-danger text-center fs-5" role="alert">
            A mentés sikertelen volt!
        </div>
    @endif

    <div class="container">
        <h1 class="mt-4 mb-4">Új cikk felvétele</h1>
        <form method="post">
            <div class="mb-3">
                <label for="category" class="form-label">Kategóriák:</label>
                <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="category">
                    @foreach ($category as $cat)
                        <option @if ($cat->id == old('category_id')) selected @endif value="{{ $cat->id }}">
                            {{ $cat->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="invalid-feedback"> {{ $message }} </span>
                @enderror
            </div>
            <br>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug*</label>
                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                    aria-describedby="emailHelp" value="{{ old('slug') }}">
                @error('slug')
                    <span class="invalid-feedback"> {{ $message }} </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Cím</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    id="title" aria-describedby="emailHelp" value="{{ old('title') }}">
                @error('title')
                    <span class="invalid-feedback"> {{ $message }} </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lead" class="form-label">Bevezető</label>
                <textarea class="form-control @error('lead') is-invalid @enderror" name="lead" id="lead" rows="3">{{ old('lead') }}</textarea>
                @error('lead')
                    <span class="invalid-feedback"> {{ $message }} </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Tartalom</label>
                <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body">{{ old('body') }}</textarea>
                @error('body')
                    <span class="invalid-feedback"> {{ $message }} </span>
                @enderror
            </div>
            <span class="form-text">*URL címe</span>
            <br>
            <button class="btn btn-success mt-3">Küldés</button>
            @csrf
        </form>
        
    </div>
@endsection