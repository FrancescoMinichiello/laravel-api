@extends('layouts.app')

@section('page-title', 'Aggiungi un nuovo progetto')

@section('content')

    <section class="container py-4">
        <div class="row">
            <form class="col m-3" method="POST" action="{{ route('admin.store') }}">
                @csrf
                <h1 class="mb-3">
                    Aggiungi un nuovo progetto:
                </h1>
                <div class="mb-3">
                    <label for="projet-name" class="form-label">Titolo:</label>
                    <input type="text" class="form-control" id="project-name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="project-link" class="form-label">Link:</label>
                    <input type="text" class="form-control" id="project-link" name="link" value="{{ old('link') }}">
                    @error('link')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-success me-3">
                        Aggiungi nuovo progetto
                    </button>
                    <button type="reset" class="btn btn-danger me-3">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection
