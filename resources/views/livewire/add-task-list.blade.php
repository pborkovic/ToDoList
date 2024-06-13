<div class="container">
    <form wire:submit.prevent="addTaskList">
        <div class="form-group">
            <label for="name">Task List Name</label>
            <input type="text" class="form-control" id="name" wire:model="name" placeholder="Enter task list name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add Task List</button>
    </form>
</div>
