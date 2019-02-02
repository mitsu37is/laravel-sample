@extends('layout')

@section('content')
    <h1 class="title">Create a New Project</h1>

    <form method="post" action="/projects">

        {{ csrf_field() }}

        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="Title" required value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>

            <div class="control">
                <textarea class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" name="description" placeholder="some description" required>{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Create Project</button>
            </div>
        </div>
    </form>

    @include('errors')
@endsection