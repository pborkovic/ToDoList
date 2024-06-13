<div class="container">
    <?php $__currentLoopData = $taskLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taskList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-3">
            <div class="card-header"><?php echo e($taskList->name); ?></div>
            <div class="card-body">
                <ul class="list-group">
                    <?php $__currentLoopData = $taskList->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item"><?php echo e($task->title); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/htmllaravel/resources/views/livewire/user-task-lists.blade.php ENDPATH**/ ?>