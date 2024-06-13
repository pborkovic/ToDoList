<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('task-list-tasks', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2046772150-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        Add New Task
                    </div>
                    <div class="card-body">
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('add-task', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2046772150-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Calendar
                    </div>
                    <div class="card-body">
                        <!-- Include FullCalendar here -->
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid'],
                events: [
                    // You can populate events dynamically here based on tasks
                ]
            });
            calendar.render();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/htmllaravel/resources/views/tasks.blade.php ENDPATH**/ ?>