@extends('layouts.admin')

@section('content')
    @include('admin.partials.error')

    <h1>Modifica questo progetto</h1>

    <form method="POST" action="{{ route('admin.projects.update', $project->slug) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
        </div>
       
        <div class="mb-3">
            <label for="img" class="form-label">Url immagine</label>
            <input type="text" class="form-control" id="img" name="img"
                value="{{ old('img', $project->img) }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ old('content', $project->content) }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Crea</button>
    </form>
@endsection