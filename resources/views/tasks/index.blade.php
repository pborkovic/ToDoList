@extends('layouts.master')

@section('title', 'Task List')

@section('content')
    <div class="container">
        <h1>Task List</h1>
        <div>
            @livewire('task-list')
        </div>
        <a href="{{ route('tasks.create') }}" class="btn btn-success mt-3">Create New Task</a>
    </div>
@endsection
