<?php $__env->startPush('libraries_top'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e($pageTitle); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(getAdminPanelUrl()); ?>"><?php echo e(trans('admin/main.dashboard')); ?></a>
                </div>
                <div class="breadcrumb-item"><?php echo e($pageTitle); ?></div>
            </div>
        </div>

        <div class="section-body">

            

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">

                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14">
                                    <tr>
                                        <th>Id</th>
                                        <th class="text-left">Name</th>
                                        <th class="text-left">Email</th>
                                        <th class="text-left">Mobile</th>
                                        <th class="text-left">Resume</th>
                                    </tr>

                                    <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-left">
                                                <?php echo e($application->id); ?>

                                            </td>
                                            <td class="text-left">
                                                <?php echo e($application->name); ?>

                                            </td>
                                            

                                            <td class="text-left">
                                                <?php echo e($application->email); ?>

                                            </td>
                                            
                                            
                                            
                                            

                                            <td class="text-left">
                                                <?php echo e($application->mobile); ?>


                                            </td>
                                            <td class="text-center mb-2" width="120">

                                                <a href="/store/<?php echo e($application->resume); ?>" download
                                                    class="btn-transparent  text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="download">
                                                    <i class="fa fa-download"></i>
                                                </a>


                                                
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/akashchourasia/Downloads/__MACOSX/resources/views/admin/job_post/application.blade.php ENDPATH**/ ?>