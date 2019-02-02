@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
        {{ $project->description }}

        <p>
            <a href="/projects/{{ $project->id }}/edit">Edit</a>
        </p>
    </div>

    @if ($project->tasks->count())
        <div class="box">
            @foreach($project->tasks as $task)
                <div>
                    <form method="post" action="/tasks/{{ $task->id }}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    <form method="post" action="/projects/{{ $project->id }}/tasks" class="box">
        {{ csrf_field() }}

        <div class="field">
            <label for="description" class="label">New Task</label>

            <div class="control">
                <input type="text" class="input" name="description" placeholder="new task" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Add Task</button>
            </div>
        </div>

        @include('errors')
    </form>

@endsection