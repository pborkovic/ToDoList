<div class="container">
    <form wire:submit.prevent="updateTask">
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" class="form-control" id="title" wire:model="title" placeholder="Enter task title" required>
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="description">Task Description</label>
            <textarea class="form-control" id="description" wire:model="description" placeholder="Enter task description"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
    @if(session()->has('message'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('message') }}
        </div>
    @endif
</div>
