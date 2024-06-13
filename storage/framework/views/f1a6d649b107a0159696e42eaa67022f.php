<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
        <style>
            .task-list {
                margin-top: 20px;
            }
            .task-item {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }
            .task-item input[type="checkbox"] {
                margin-right: 10px;
            }
            .footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: #f8f9fa;
                padding: 10px 0;
                text-align: center;
            }
        </style>
    </head>

    <body>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <span class="text-muted">Todo List App &copy; 2024</span>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-6 text-center">
                <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-dark">
                        <span>Login</span>
                        <i class="fa fa-sign-in ml-2" aria-hidden="true"></i>
                    </a>
                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>" class="btn btn-dark">
                            <span>Register</span>
                            <i class="fa fa-user-plus ml-2" aria-hidden="true"></i>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if(auth()->guard()->check()): ?>
                    <div class="btn-group">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Welcome, <?php echo e(Auth::user()->name); ?></span>
                            <i class="fa fa-user ml-2" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>
                            </li>
                        </ul>
                    </div>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /var/www/htmllaravel/resources/views/layouts/master.blade.php ENDPATH**/ ?>