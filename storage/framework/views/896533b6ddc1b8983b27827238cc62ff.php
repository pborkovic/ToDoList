<?php $__env->startSection('title', 'Task List'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Task List</h1>
        <div>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('task-list');

$__html = app('livewire')->mount($__name, $__params, 'lw-2036516294-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
        <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-success mt-3">Create New Task</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/htmllaravel/resources/views/tasks/index.blade.php ENDPATH**/ ?>