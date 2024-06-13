<div class="container">
    <div class="card mb-3">
        <div class="card-header">
            Tasks
            <button class="btn btn-sm btn-primary float-right" wire:click="loadTasks">Refresh</button>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?php echo e($task->title); ?>

                        <div>
                            <button class="btn btn-sm btn-danger" wire:click="deleteTask(<?php echo e($task->id); ?>)">Delete</button>
                            <a href="<?php echo e(route('tasks.show', $task)); ?>" class="btn btn-sm btn-info">Details</a>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH /var/www/htmllaravel/resources/views/livewire/task-list-tasks.blade.php ENDPATH**/ ?>