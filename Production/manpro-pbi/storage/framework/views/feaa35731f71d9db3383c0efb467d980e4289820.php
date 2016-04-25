<?php $__env->startSection('content'); ?>
<div class="all-news">
  <?php $ctr =0; ?>
  <?php foreach($pubs as $content): ?>
    <?php if($ctr%2 == 0): ?>
      <section class="bg-primary">
    <?php else: ?>
      <section>
    <?php endif; ?>
      <div class="container">
        <div class="row hide-on-small-only valign-wrapper">
          <div class="col-md-6">
            <div class="mockup jarak-kiri">
              <img class="responsive-img" src="img/portfolio/1.jpg" style="width: 100%; height: 100%" alt="Discover mockup">
            </div>
          </div>
          <div></div>
          <div class="col-md-6 offset-m2 valign jarak-kanan">
            <h2><?php echo e($content->title); ?></h2>
            <p><?php echo e($content->shortDesc); ?></p>

              <a href=" <?php echo e(url('/publication', $content->slug)); ?>" class="btn btn-default btn-xl wow tada col-xs-6 col-centered col-min">Read ...</a>

            </div>

          </div>
          <!--   <div>
          <a href="#" class="btn btn-default btn-xl wow tada col-xs-6 col-centered col-min">Read ...</a>
        </div> -->


      </div>
    </section>
    <?php $ctr++; ?>
  <?php endforeach; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>