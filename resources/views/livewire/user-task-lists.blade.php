<div class="container">
    @foreach($taskLists as $taskList)
        <div class="card mb-3">
            <div class="card-header">{{ $taskList->name }}</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($taskList->tasks as $task)
                        <li class="list-group-item">{{ $task->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
