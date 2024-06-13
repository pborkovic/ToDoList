@extends('layouts.master')

@section('title', 'Task Details')

@section('content')
    <div class="container">
        <h1>Task Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $task->title }}</h5>
                <p class="card-text">{{ $task->description }}</p>
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary">Edit Task</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Task</button>
                </form>
            </div>
        </div>
    </div>
@endsection
