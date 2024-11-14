@extends('layouts.app')

@section('page-title', 'Projects')

@section('content')
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-4 mb-5">
                <a href="{{ route('admin.create') }}" class="fs-3 btn btn-success m-3 d-flex justify-content-center">
                    Crea un nuovo Progetto
                </a>
            </div>
        </div>
        <div class="row mb-2 d-flex justify-content-center ">
            <div class="col d-flex justify-content-center gap-5">
                @forelse ($projects as $project)
                    <div style="width: 18rem;">
                        <div class="card-body text-center">
                            @forelse ($project->technologies as $technology)
                                <div><span>{{ $technology->name }}</span></div>
                            @empty
                            @endforelse
                            <h1 class="card-text fw-semibold">{{ $project->name }}</h1>
                            <hr>
                            <h3 class="card-text">{{ $project->type->name }}</h3>
                            <a class="card-text" href="{{ $project->link }}">
                                <h5 class="my-3">Vai al progetto</h5>
                            </a>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-success mb-2" href="{{ route('admin.show', $project) }} ">
                                Show
                            </a>
                            <a class="btn btn-warning mb-2" href="">
                                Edit
                            </a>
                            <form class="d-inline" action="{{ route('admin.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Elimina" class="btn btn-danger mb-2">
                            </form>
                        </div>


                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
