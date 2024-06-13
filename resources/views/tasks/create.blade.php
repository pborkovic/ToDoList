@extends('layouts.master')

@section('title', 'Create Task')

@section('content')
    <div>
        <h1>Create New Task</h1>
        <form wire:submit.prevent="store">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" wire:model="title" required>
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" wire:model="description"></textarea>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
    </div>

@endsection
