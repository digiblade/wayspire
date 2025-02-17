<?php
    if (empty($authUser) and auth()->check()) {
        $authUser = auth()->user();
    }

    $navBtnUrl = null;
    $navBtnText = null;

    if (request()->is('forums*')) {
        $navBtnUrl = '/forums/create-topic';
        $navBtnText = trans('update.create_new_topic');
    } else {
        $navbarButton = getNavbarButton(!empty($authUser) ? $authUser->role_id : null, empty($authUser));

        if (!empty($navbarButton)) {
            $navBtnUrl = $navbarButton->url;
            $navBtnText = $navbarButton->title;
        }
    }
?>

<div id="navbarVacuum"></div>
<nav id="navbar" class="navbar navbar-expand-lg navbar-light" style="color:white !important">
    <div class="<?php echo e((!empty($isPanel) and $isPanel) ? 'container-fluid' : 'container-fluid'); ?>">
        <div class="d-flex align-items-center justify-content-between w-100">

            <a class="navbar-brand navbar-order d-flex align-items-center justify-content-center mr-0 <?php echo e((empty($navBtnUrl) and empty($navBtnText)) ? 'ml-auto' : ''); ?>"
                href="/">
                <?php if(!empty($generalSettings['logo'])): ?>
                    <img src="<?php echo e($generalSettings['logo']); ?>" class="img-contain w-50" alt="site logo">
                <?php endif; ?>
            </a>
            <span> <button class="navbar-toggler navbar-order" type="button" id="navbarToggle">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="mx-lg-30 d-none d-lg-flex flex-grow-1 navbar-toggle-content " id="navbarContent">
                    <div class="navbar-toggle-header text-right d-lg-none">
                        <button class="btn-transparent" id="navbarClose">
                            <i data-feather="x" width="32" height="32"></i>
                        </button>
                    </div>

                    <ul class="navbar-nav mr-auto d-flex align-items-center">
                        <?php if(!empty($categories) and count($categories)): ?>
                            <li class="mr-lg-25">
                                <div class="menu-category">
                                    <ul>
                                        <li class="cursor-pointer user-select-none d-flex xs-categories-toggle">
                                            <i data-feather="grid" width="20" height="20"
                                                class="mr-10 d-none d-lg-block"></i>
                                            <?php echo e(trans('categories.categories')); ?>


                                            <ul class="cat-dropdown-menu">
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a href="<?php echo e($category->getUrl()); ?>"
                                                            class="<?php echo e((!empty($category->subCategories) and count($category->subCategories)) ? 'js-has-subcategory' : ''); ?>">
                                                            <div class="d-flex align-items-center">
                                                                <?php if(!empty($category->icon)): ?>
                                                                    <img src="<?php echo e($category->icon); ?>"
                                                                        class="cat-dropdown-menu-icon mr-10"
                                                                        alt="<?php echo e($category->title); ?> icon">
                                                                <?php endif; ?>

                                                                <?php echo e($category->title); ?>

                                                            </div>

                                                            <?php if(!empty($category->subCategories) and count($category->subCategories)): ?>
                                                                <i data-feather="chevron-right" width="20"
                                                                    height="20"
                                                                    class="d-none d-lg-inline-block ml-10"></i>
                                                                <i data-feather="chevron-down" width="20"
                                                                    height="20" class="d-inline-block d-lg-none"></i>
                                                            <?php endif; ?>
                                                        </a>

                                                        <?php if(!empty($category->subCategories) and count($category->subCategories)): ?>
                                                            <ul class="sub-menu" data-simplebar
                                                                <?php if(!empty($isRtl) and $isRtl): ?> data-simplebar-direction="rtl" <?php endif; ?>>
                                                                <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li>
                                                                        <a href="<?php echo e($subCategory->getUrl()); ?>">
                                                                            <?php if(!empty($subCategory->icon)): ?>
                                                                                <img src="<?php echo e($subCategory->icon); ?>"
                                                                                    class="cat-dropdown-menu-icon mr-10"
                                                                                    alt="<?php echo e($subCategory->title); ?> icon">
                                                                            <?php endif; ?>

                                                                            <?php echo e($subCategory->title); ?>

                                                                        </a>
                                                                    </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>
                        
                        <li class="nav-item">
                            <a class="nav-link" style="color:white" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:white" href="/classes?sort=newest">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:white" href="/blog">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:white" href="/blog/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:white" href="/jobpost">Career</a>
                        </li>
                    </ul>
                </div>
            </span>

            <div class="xs-w-100 d-flex align-items-center justify-content-between ">
                <div class="d-flex">

                    <?php echo $__env->make(getTemplate() . '.includes.shopping-cart-dropdwon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="border-left mx-5 mx-lg-15"></div>

                    <?php echo $__env->make(getTemplate() . '.includes.notification-dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                
                <?php echo $__env->make('web.default.includes.top_nav.user_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>


            <div class="nav-icons-or-start-live navbar-order d-flex align-items-center justify-content-end">

                

                <div class="d-none nav-notify-cart-dropdown top-navbar">
                    <?php echo $__env->make('web.default.includes.shopping-cart-dropdwon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="border-left mx-15"></div>

                    <?php echo $__env->make('web.default.includes.notification-dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

            </div>
        </div>
    </div>
</nav>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/js/parts/navbar.min.js"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/akashchourasia/Downloads/__MACOSX/resources/views/web/default/includes/navbar.blade.php ENDPATH**/ ?>