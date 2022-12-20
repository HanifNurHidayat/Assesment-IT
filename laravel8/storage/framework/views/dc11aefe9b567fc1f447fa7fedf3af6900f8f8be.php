<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Data Karyawan</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <main class="form-signin" style="margin-top: 100px">
                    <?php if(session()->has('success')): ?>
                    <div class="alert alert-success alert-dismissable fade show" id="success-alert" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <?php if(session()->has('loginError')): ?>
                    <div class="alert alert-success alert-dismissable fade show" id="success-alert" role="alert">
                        <?php echo e(session('loginError')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <form action="/login" method="POST">
                        <?php echo csrf_field(); ?>
                        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                        <div class="form-floating">
                            <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="floatingInput" name="email"
                            placeholder="name@example.com" value="<?php echo e(old('email')); ?>" required>
                            <label for="floatingInput">Email Address</label>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-floating mt-1">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                             <label for="floatingPassword">Password</label>
                        </div>

                        <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                    <small class="d-block mt-3">Not registered? <a href="/register">Register Now!</a></small>
                </main>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\laravel8\resources\views/login.blade.php ENDPATH**/ ?>