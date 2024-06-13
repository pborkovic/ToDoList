<div class="container">
    @foreach($tasks as $task)
        <div class="task-item d-flex align-items-center mb-3">
            <input type="checkbox" {{ $task->completed ? 'checked' : '' }} class="mr-2">
            <span>{{ $task->title }}</span>
            <a href="{{ route('tasks.show', $task) }}" class="btn btn-primary btn-sm ml-auto">View</a>
            <button wire:click="deleteTask({{ $task->id }})" class="btn btn-danger btn-sm ml-2">Delete</button>
        </div>
    @endforeach
    @if(session()->has('message'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('message') }}
        </div>
    @endif
</div>
