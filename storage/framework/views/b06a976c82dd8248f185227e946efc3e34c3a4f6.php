
<?php $__env->startSection('title'); ?>
    Edit
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form action="../update" method="POST" class="mt-4 p-4">
    <?php echo csrf_field(); ?>
    <?php if(session()->has('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session->get('success')); ?>

    </div>
    <?php endif; ?>
    <div class="form-group m-3">
        <label for="name">Todo Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo e($todo->name); ?>">
    </div>
    <div class="form-group m-3">
        <label for="description">Todo Description</label>
        <textarea class="form-control" rows="3" name="description"><?php echo e($todo->description); ?></textarea>
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Update">
        <input type="hidden" name="id" value="<?php echo e($todo->id); ?>">
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todoapp\resources\views/edit.blade.php ENDPATH**/ ?>