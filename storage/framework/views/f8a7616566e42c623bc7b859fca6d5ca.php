<div class="container">
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="task-item d-flex align-items-center mb-3">
            <input type="checkbox" <?php echo e($task->completed ? 'checked' : ''); ?> class="mr-2">
            <span><?php echo e($task->title); ?></span>
            <a href="<?php echo e(route('tasks.show', $task)); ?>" class="btn btn-primary btn-sm ml-auto">View</a>
            <button wire:click="deleteTask(<?php echo e($task->id); ?>)" class="btn btn-danger btn-sm ml-2">Delete</button>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success mt-3" role="alert">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/htmllaravel/resources/views/livewire/task-list.blade.php ENDPATH**/ ?>