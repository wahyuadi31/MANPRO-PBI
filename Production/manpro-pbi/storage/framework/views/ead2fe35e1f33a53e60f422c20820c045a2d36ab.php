<?php $__env->startSection('title'); ?>
  <header>

      <div class="header-content">
          <div class="header-content-inner">
              <h1>Welcome to Our Site</h1>
              <hr>
              <p>English Course - Duta Wacana Christian University</p>
              <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
          </div>
      </div>

  </header>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>