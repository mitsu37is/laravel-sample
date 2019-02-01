@extends('layout')

@section('content')

    <h1 class="title">Edit Project</h1>

    <form method="post" action="/projects/{{ $project->id }}" style="margin-bottom: 1rem;">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>

            <div class="control">
                <textarea class="textarea" name="description">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Update Project</button>
            </div>
        </div>
    </form>

    <form method="post" action="/projects/{{ $project->id }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <div class="field">
            <div class="control">
                <button class="button" type="submit">Delete Project</button>
            </div>
        </div>
    </form>
@endsection