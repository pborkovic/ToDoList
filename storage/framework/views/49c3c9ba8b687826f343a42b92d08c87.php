<div class="container">
    <h3>Create New Task</h3>
    <form wire:submit.prevent="storeTask">
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" class="form-control" id="title" wire:model="title" placeholder="Enter task title" required>
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="description">Task Description</label>
            <textarea class="form-control" id="description" wire:model="description" placeholder="Enter task description"></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success mt-3" role="alert">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/htmllaravel/resources/views/livewire/create-task.blade.php ENDPATH**/ ?>