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
                                        <th class="text-left">Title</th>
                                        <th class="text-left">Location</th>
                                        <th class="text-left">Company</th>
                                        <th class="text-left">Status</th>
                                        <th width="120"><?php echo e(trans('admin/main.actions')); ?></th>
                                    </tr>

                                    <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-left">
                                                <?php echo e($user->id); ?>

                                            </td>
                                            

                                            <td class="text-left">
                                                <?php echo e($user->title); ?>

                                            </td>
                                            

                                            <td class="text-left">
                                                <?php echo e($user->location); ?>


                                            </td>
                                            <td class="text-left">
                                                <?php echo e($user->company->full_name); ?>

                                                </td>
                                            <td class="text-left"><?php echo e($user->status); ?></td>
                                            <td class="text-center mb-2" width="120">

                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_users_edit')): ?>
                                                    <a href="<?php echo e(getAdminPanelUrl()); ?>/custom/<?php echo e($user->id); ?>/edit"
                                                        class="btn-transparent  text-primary" data-toggle="tooltip"
                                                        data-placement="top" title="<?php echo e(trans('admin/main.edit')); ?>">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                <?php endif; ?>

                                                <a href="<?php echo e(getAdminPanelUrl()); ?>/custom/applications/<?php echo e($user->id); ?>"
                                                    class="btn-transparent  text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Applicants">
                                                    <i class="fa fa-eye"></i>
                                                </a>


                                                
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer text-center">
                            <?php echo e($users->appends(request()->input())->links()); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/akashchourasia/Downloads/__MACOSX/resources/views/admin/job_post/job_post.blade.php ENDPATH**/ ?>