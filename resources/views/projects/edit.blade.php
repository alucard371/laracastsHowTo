@extends('layout')

@section('content')

    <h1 class="title">Edit project<h1>

        <form action="/projects/{{ $project->id }}" method="POST">

            {{ method_field('PATCH') }}
            {{ @csrf_field() }}

            <div class="field">
                <label for="title" class="label">title</label>
                <div class="control">
                    <input type="text" class="input" name="title" placeholder="title" value="{{ $project->title }}">
                </div>
            </div>

            <div class="class">
            <textarea name="description" class="textarea" id="" cols="30" rows="10">{{ $project->description }}</textarea>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Update project</button>
                </div>
            </div>
        </form>

        <form action="/projects/{{ $project->id }}" method="post">
            {{ method_field('Delete') }}
            {{ @csrf_field() }}
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Delete project</button>
                </div>
            </div>
        </form>

@endsection
