@extends('layouts.app')

@section('page-title', 'project index')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="text-center">My projects</h1>
        </div>
        {{-- <div class="col-12 text-center my-3">
            <a href="" class="btn btn-primary">Create a new project</a>
        </div> --}}
        <div class="col-10">
            <ul class="row">
                @forelse ($projects as $project)
                <li class="col-4 g-3">
                    <div id="project-card" class="card pt-2">
                        <div class="card-body">
                            <h5 class="card-title">Name project: {{ $project->name }}</h5>
                            <h5>Started on: {{ $project->date }}</h5>
                            <p class="card-text">
                            Languages used: {{ $project->languages}}
                            </p>
                            <p class="card-text">
                                {{ $project->description}}
                            </p>
                        </div>
                    </div>

                    {{-- <div class="d-flex justify-content-center mt-1">
                        <a href="{{ route('admin.project.show', ['id' => $project->id]) }}" class="btn btn-primary w-100">Show more...</a>
                    </div>
                    <div class="d-flex justify-content-center mt-1">
                        <a href="{{ route('admin.project.edit', ['id' => $project->id]) }}" class="btn btn-warning w-100">Edit</a>
                    </div>
                    <form action="{{ route("admin.project.delete", ["id" => $project->id])}}" method="POST" class="w-100 mt-1 mb-5" >
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">Delete</button>
                    </form> --}}
                </li>
                @empty
                <h1>There are not projects in your collection database! </h1>
                @endforelse
            </ul>
        </div>
    </div>
</div>

@endsection
{{--
@section('additional-scripts')
    @vite("resources/js/sneakers/delete-sneaker.js")
@endsection --}}
