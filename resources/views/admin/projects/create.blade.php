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
            <label for="type">Tipo</label>
            <select class="form-select" id="type" name="type_id">
                <option value=""></option>
                @foreach ($types as $type)
                    <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">

            @foreach ($technologies as $technology)
                <input type="checkbox" class="btn-check" id="{{ $technology->name }}" autocomplete="off"
                    name="technology_id[]" value="{{ $technology->id }}">
                <label class="btn btn-outline-primary" for="{{ $technology->name }}"> {{ $technology->name }}</label>
            @endforeach

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