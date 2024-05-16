<!-- resources/views/anggota/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Anggota Form</h2>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('anggota.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <table class="table">
        <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control" name="nama" required></td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td><input type="text" class="form-control" name="no_hp" required></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="email" class="form-control" name="email" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" class="form-control" name="alamat" required></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\acern\laravelUts\resources\views/anggota/index.blade.php ENDPATH**/ ?>