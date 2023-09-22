@extends('layouts.admin')

@section('content')
    @include('admin.partials.error')

    <h1 class="my-3">Crea un nuovo progetto</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
       
        <div class="mb-3">
            <label for="img" class="form-label">Url immagine</label>
            <input type="text" class="form-control" id="img" name="img" value="{{ old('img') }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ old('content') }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Crea</button>
    </form>
@endsection