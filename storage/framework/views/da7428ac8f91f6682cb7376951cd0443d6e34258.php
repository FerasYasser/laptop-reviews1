

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <br />
    <h3 align="center"> Student data</h3>
<br />
<table class="table table-bordered">

  <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

   <tr>
    <td><?php echo e($row['first_name']); ?></td>
    <td><?php echo e($row['last_name']); ?></td>

    <td></td>
   </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test1\resources\views/student/index.blade.php ENDPATH**/ ?>