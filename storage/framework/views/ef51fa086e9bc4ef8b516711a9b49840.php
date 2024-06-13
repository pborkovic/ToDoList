<?php $__env->startSection('title', 'Task Details'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Task Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($task->title); ?></h5>
                <p class="card-text"><?php echo e($task->description); ?></p>
                <a href="<?php echo e(route('tasks.edit', $task)); ?>" class="btn btn-primary">Edit Task</a>
                <form action="<?php echo e(route('tasks.destroy', $task)); ?>" method="POST" style="display: inline-block;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete Task</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/htmllaravel/resources/views/tasks/show.blade.php ENDPATH**/ ?>