.
<?php $__env->startSection('content'); ?>

<div class="all-news">
      <section class="bg-primary">

      <div class="container">
        <div class="row hide-on-small-only valign-wrapper">
          <div class="col-md-6">
            <div class="mockup jarak-kiri">
              <img class="responsive-img" src="img/portfolio/1.jpg" style="width: 100%; height: 100%" alt="Discover mockup">
            </div>
          </div>
          <div></div>
          <div class="col-md-6 offset-m2 valign jarak-kanan">
            <h2><?php echo e($pub->title); ?></h2>
            <p><?php echo e($pub->shortDesc); ?></p>
            </div>

          </div>
          <!--   <div>
          <a href="#" class="btn btn-default btn-xl wow tada col-xs-6 col-centered col-min">Read ...</a>
        </div> -->


      </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>