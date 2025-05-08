<?php $__env->startSection('content'); ?>
    <div style="display: flex;justify-content: space-between;align-items: center;padding: 0 6rem;margin: 4rem 0;">
    </div>

    <div class="stats-container " style="margin: 4rem 0;">
        <div class="container position-relative">
            <section class="home-sections home-sections-swiper container find-instructor-section position-relative mb-20">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 gap-2">
                        <div class="">
                            <h2 class="font-36 font-weight-bold text-light"><?php echo e($about['title'] ?? ''); ?>

                            </h2>
                            <p class="font-16 font-weight-normal text-gray mt-10">
                                <?php echo e($about['description'] ?? ''); ?></p>

                            <div class="mt-35 d-flex align-items-center gap-2">
                                <div style="margin-top: 1.5rem;display: flex; flex-direction: column; gap: 1rem; ">
                                    <!-- Step 1 -->
                                    <div
                                        style="display: flex;gap: 1rem;align-items: center;background-color: #e6f9f3;padding: 1.5rem;border-radius: 1rem;color: #1ab69d;">
                                        <div style="background-color: white;border-radius: 50%;padding: 1rem;">
                                            <img src="/assets/default/img/custom-imgs/user-icon.png" alt="User Icon" />
                                        </div>
                                        <div>
                                            <h3 style="font-size: 1.25rem;font-weight: bold;">
                                                <?php echo e($about['section_1_title']); ?>

                                            </h3>
                                            <p>
                                                <?php echo e($about['section_1_description']); ?>

                                            </p>
                                        </div>
                                    </div>
                                    <!-- Step 2 -->
                                    <div
                                        style="display: flex;gap: 1rem;align-items: center;background-color: #f4e6ff;padding: 1.5rem;border-radius: 1rem;color: #8e56ff;">
                                        <div style="background-color: white;border-radius: 50%;padding: 1rem;">
                                            <img src="/assets/default/img/custom-imgs/file-icon.png" alt="File Icon" />
                                        </div>
                                        <div>
                                            <h3 style="font-size: 1.25rem;font-weight: bold;">
                                                <?php echo e($about['section_2_title']); ?>

                                            </h3>
                                            <p>
                                                <?php echo e($about['section_2_title']); ?>

                                            </p>
                                        </div>
                                    </div>
                                    <!-- Step 3 -->
                                    <div
                                        style="display: flex;gap: 1rem;align-items: center;background-color: #fff9e6;padding: 1.5rem;border-radius: 1rem;color: #f2b31d;">
                                        <div style="background-color: white;border-radius: 50%;padding: 1rem;">
                                            <img src="/assets/default/img/custom-imgs/degree-icon.png" alt="Degree Icon" />
                                        </div>
                                        <div>
                                            <h3 style="font-size: 1.25rem;font-weight: bold; ">
                                                <?php echo e($about['section_3_title']); ?>

                                            </h3>
                                            <p>
                                                <?php echo e($about['section_3_title']); ?>

                                            </p>
                                        </div>
                                    </div>
                                    <!-- Button -->

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mt-20 mt-lg-0 pl-4">
                        <div class="position-relative ">
                            <img src="<?php echo e($about['banner_image']); ?>" class="find-instructor-section-hero"
                                alt="<?php echo e($about['title']); ?>">
                            <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle"
                                alt="circle">
                            <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots" alt="dots">


                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>





    <!-- Section 2 -->

    <div class="stats-container  ">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mt-25 mt-lg-0">
                    <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                        <div class="stat-icon-box teacher">
                            <img src="/assets/default/img/stats/teacher.svg" alt="" class="img-fluid" />
                        </div>
                        <strong class="stat-number mt-10"><?php echo e($homeDefaultStatistics['skillfulTeachersCount']); ?></strong>
                        <h4 class="stat-title"><?php echo e(trans('home.skillful_teachers')); ?></h4>
                        <p class="stat-desc mt-10"><?php echo e(trans('home.skillful_teachers_hint')); ?></p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mt-25 mt-lg-0">
                    <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                        <div class="stat-icon-box student">
                            <img src="/assets/default/img/stats/student.svg" alt="" class="img-fluid" />
                        </div>
                        <strong class="stat-number mt-10"><?php echo e($homeDefaultStatistics['studentsCount']); ?></strong>
                        <h4 class="stat-title"><?php echo e(trans('home.happy_students')); ?></h4>
                        <p class="stat-desc mt-10"><?php echo e(trans('home.happy_students_hint')); ?></p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mt-25 mt-lg-0">
                    <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                        <div class="stat-icon-box video">
                            <img src="/assets/default/img/stats/video.svg" alt="" class="img-fluid" />
                        </div>
                        <strong class="stat-number mt-10"><?php echo e($homeDefaultStatistics['liveClassCount']); ?></strong>
                        <h4 class="stat-title"><?php echo e(trans('home.live_classes')); ?></h4>
                        <p class="stat-desc mt-10"><?php echo e(trans('home.live_classes_hint')); ?></p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mt-25 mt-lg-0">
                    <div class="stats-item d-flex flex-column align-items-center text-center py-30 px-5 w-100">
                        <div class="stat-icon-box course">
                            <img src="/assets/default/img/stats/course.svg" alt="" class="img-fluid" />
                        </div>
                        <strong class="stat-number mt-10"><?php echo e($homeDefaultStatistics['offlineCourseCount']); ?></strong>
                        <h4 class="stat-title"><?php echo e(trans('home.offline_courses')); ?></h4>
                        <p class="stat-desc mt-10"><?php echo e(trans('home.offline_courses_hint')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>




   


    <!-- Section 3 -->
    <section class="container-fluid">
        <div style=" text-align: center; position: relative; margin: 2rem 0; color:white">
            <span style="padding: 0.5rem 2rem; border: 1px solid #0073e6; color: #0073e6; border-radius: 999px;">Our
                Story</span>
            <div style="margin-top: 2rem; font-size: 2.5rem; font-weight: 600;">Our Student Journey</div>
            <div style="display: flex;justify-content: space-between;align-items: center;padding: 0 6rem;margin: 8rem 0;">
            </div>
            <div class="stats-container " style="margin: 4rem 0;">
                <div class="container position-relative">
                    <section class="home-sections home-sections-swiper container find-instructor-section position-relative mb-20">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6 mt-20 mt-lg-0 pl-4">
                                <div class="position-relative ">
                                    <img src="<?php echo e($journey['banner_image']); ?>" class="find-instructor-section-hero"
                                        alt="<?php echo e($journey['title']); ?>">
                                    <img src="/assets/default/img/home/circle-4.png" class="find-instructor-section-circle"
                                        alt="circle">
                                    <img src="/assets/default/img/home/dot.png" class="find-instructor-section-dots" alt="dots">
        
        
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 gap-2">
                                <div class="">
                                    <h2 class="font-36 font-weight-bold text-light"><?php echo e($journey['title'] ?? ''); ?>

                                    </h2>
                                    <p class="font-16 font-weight-normal text-gray mt-10">
                                        <?php echo e($journey['description'] ?? ''); ?></p>
        
        
                                </div>
                            </div>
        
        
                        </div>
                    </section>
                </div>
            </div>
            <div class="d-none d-md-block" style="margin-top: 9rem; display: flex; justify-content: center; align-items: center;">
                <img src="<?php echo e($journey['timeline_image'] ?? ''); ?>" alt="" style="width:100%" />
            </div>
            <div
                style="position: absolute; inset: 0; z-index: -10; background: radial-gradient(circle,  #141414c8 20%,
            #171717 30% /* Primary Blue */); display: flex; justify-content: center; align-items: center;">
                <img src="/assets/default/img/custom-imgs/mapPattern.png" alt="" />
            </div>
        </div>

    </section>


    <!-- Section 4 -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make(getTemplate() . '.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/akashchourasia/Downloads/__MACOSX/resources/views/web/default/home/about.blade.php ENDPATH**/ ?>