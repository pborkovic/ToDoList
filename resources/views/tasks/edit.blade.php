@extends('layouts.master')

@section('title', 'Edit Task')

@section('content')
    <div class="container">
        <h1>Edit Task</h1>
        <livewire:edit-task :task="$task" />
    </div>
@endsection
