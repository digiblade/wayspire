<?php $__env->startPush('styles_top'); ?>
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="site-top-banner search-top-banner opacity-04 position-relative">
        <img src="<?php echo e(getPageBackgroundSettings('categories')); ?>" class="img-cover" alt="" />

        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-12 col-md-9 col-lg-7">
                    <div class="top-search-categories-form">
                        <h1 class="text-white font-30 mb-15"><?php echo e($pageTitle); ?></h1>
                        <!-- <span class="course-count-badge py-5 px-10 text-white rounded">
                                                                                                                                                                         </span> -->

                        <!-- <div class="search-input bg-white p-10 flex-grow-1">
                                                                                                                                                                            <form action="/search" method="get">
                                                                                                                                                                                <div class="form-group d-flex align-items-center m-0">
                                                                                                                                                                                    <input type="text" name="search" class="form-control border-0"
                                                                                                                                                                                        placeholder="<?php echo e(trans('home.slider_search_placeholder')); ?>" />
                                                                                                                                                                                    <button type="submit"
                                                                                                                                                                                        class="btn btn-primary rounded-pill"><?php echo e(trans('home.find')); ?></button>
                                                                                                                                                                                </div>
                                                                                                                                                                            </form>
                                                                                                                                                                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-30">



        

        <div class="row mt-20">
            <div class="col-12 " style="color:white">

                <?php if(empty(request()->get('card')) or request()->get('card') == 'grid'): ?>
                    <div class="container">

                        <div style="max-width: 960px; margin: 0 auto">
                            <h2 style="text-align: center; fontSize: 24px; font-weight: bold">Jobs You May Be Interested In
                            </h2>
                            <div class="row" style="margin-top: 24px;  gap: 24px }}">
                                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href=<?php echo e('/jobpost/description/' . $job->id); ?> class="col-4 mt-20"
                                        style="color: #4a5568 ">
                                        <div
                                            style="background-color: white; padding: 16px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-left: 4px solid #e53e3e">
                                            <h3 style="font-weight: 600"><?php echo e($job->title); ?></h3>
                                            <p style="color: #4a5568 "><?php echo e($job->company_name); ?> - <?php echo e($job->location); ?></p>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>
                        </div>

                    </div>
                <?php elseif(!empty(request()->get('card')) and request()->get('card') == 'list'): ?>
                    <?php $__currentLoopData = $webinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('web.default.includes.webinar.list-card', ['webinar' => $webinar], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>



        </div>
    </div>

    </form>
    <div class="mt-50 pt-30">
        
    </div>
    </section> -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/vendors/select2/select2.min.js"></script>
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>

    <script src="/assets/default/js/parts/categories.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(getTemplate() . '.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Datagram/__MACOSX/resources/views/web/default/pages/job_post.blade.php ENDPATH**/ ?>