<?php $__env->startSection('title', 'Edit Task'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Task</h1>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('edit-task', ['task' => $task]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2121723605-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/htmllaravel/resources/views/tasks/edit.blade.php ENDPATH**/ ?>