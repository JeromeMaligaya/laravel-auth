@extends('layouts.app')

@section('page-title', 'project create')

@section('content')
<main>
    <section class="container my-4" id="form-project">
        <div class="row justify-content-center">
            <div class="col-5">
                <form action="@yield("form-action")" method="POST">
                    @yield("form-method")
                    @csrf
                    <div class="mb-3">
                        <h1 class="text-center fw-bold">
                            @yield("form-title")
                        </h1>
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">Name project:</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                      <label for="date" class="form-label">Date started:</label>
                      <input type="text" class="form-control" id="date" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="languages" class="form-label">Languages used:</label>
                      <input type="text" class="form-control" id="languages" name="languages">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-success">Back to home</a>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
