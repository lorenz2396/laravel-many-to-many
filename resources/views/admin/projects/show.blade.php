@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h1>
                            Progetto {{ $project->title }}
                        </h1>
                        <p>
                            {{ $project->content }}
                        </p>

                        <h3>
                            Tecnologie:
                        </h3>
                        <p>
                            @forelse ($project->technologies as $technology)
                                {{ $technology->name }} {{ $loop->last ? '' : ',' }}
                            @empty
                                <span>Nessuna tecnologia usata</span>
                            @endforelse
                        </p>

                        <div>

                            <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}" class="btn btn-warning">
                                Modifica
                            </a>
                            <form class="d-inline-block" action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}" method="post" onsubmit="return confirm('Sei sicuro di voler eliminare questo post?');">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    Elimina
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
