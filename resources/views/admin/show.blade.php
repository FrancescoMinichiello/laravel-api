@extends('layouts.app')

@section('page-title', "{{ $project->name }}")

@section('content')
    <h1 class="text-center text-white mb-4">{{ $project['name'] }}</h1>
    <div class="container">
        <div class="row mb-2">
            <div>
                <div class="card-body">
                    <h1 class="card-text">{{ $project['name'] }}</h1>
                    <p class="card-text"> <a href="{{ $project['link'] }}">
                            <h4> Vai al progetto</h4>
                        </a> </p>
                </div>
            </div>
            <div class="col-4 my-5">

                <a class="btn btn-primary mb-2" href="{{ route('admin.index') }}">
                    <h2 class="m-0"> Torna indietro</h2>
                </a>
            </div>
        </div>
    </div>
@endsection
