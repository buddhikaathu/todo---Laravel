
<?php $__env->startSection('title'); ?>
    My To Do App
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-3">
    <div class="col-12 align-self-center">
        <ul class="list-group">
            <?php $__currentLoopData = $todo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item"><a href="details/<?php echo e($item->id); ?>" style="color: cornflowerblue"><?php echo e($item->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todoapp\resources\views/index.blade.php ENDPATH**/ ?>