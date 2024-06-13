<div class="container">
    <form wire:submit.prevent="addTaskList">
        <div class="form-group">
            <label for="name">Task List Name</label>
            <input type="text" class="form-control" id="name" wire:model="name" placeholder="Enter task list name">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="btn btn-primary">Add Task List</button>
    </form>
</div>
<?php /**PATH /var/www/htmllaravel/resources/views/livewire/add-task-list.blade.php ENDPATH**/ ?>