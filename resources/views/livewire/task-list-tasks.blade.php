<div class="container">
    <div class="card mb-3">
        <div class="card-header">
            Tasks
            <button class="btn btn-sm btn-primary float-right" wire:click="loadTasks">Refresh</button>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($tasks as $task)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $task->title }}
                        <div>
                            <button class="btn btn-sm btn-danger" wire:click="deleteTask({{ $task->id }})">Delete</button>
                            <a href="{{ route('tasks.show', $task) }}" class="btn btn-sm btn-info">Details</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
