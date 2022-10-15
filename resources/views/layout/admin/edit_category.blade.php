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
        <h1>Kategória szerkesztése</h1>
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Név</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    aria-describedby="emailHelp" value="{{ old('name', $category->name) }}">
                @error('name')
                    <span class="invalid-feedback"> {{ $message }} </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Kép</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                    id="image" aria-describedby="emailHelp" value="{{ old('image', $category->image) }}">
                @error('image')
                    <span class="invalid-feedback"> {{ $message }} </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Leírás</label>
                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description', $category->description) }}</textarea>
                @error('description')
                    <span class="invalid-feedback"> {{ $message }} </span>
                @enderror
            </div>
            <br>
            <button class="btn btn-success mt-3">Küldés</button>
            {{-- <input type="submit" formaction="/admin/category/list" value="Törlés"> --}}
            <button formaction="/admin/category/delete/{{ $category->id }}" class="btn btn-danger mt-3 ms-3">Törlés</button>
            @csrf
        </form>
    </div>
@endsection