@extends('layout')

@section('content')
    <h1 class="title">Create a New Project</h1>

    <form method="post" action="/projects">

        {{ csrf_field() }}

        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea type="text" name="description" placeholder="project description"></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
@endsection