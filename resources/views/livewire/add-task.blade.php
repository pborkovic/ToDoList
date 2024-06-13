<div class="container">
    <form wire:submit.prevent="createTask">
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" class="form-control" id="title" wire:model="title" placeholder="Enter task title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="description">Task Description</label>
            <textarea class="form-control" id="description" wire:model="description" placeholder="Enter task description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Task</button>
    </form>
</div>
