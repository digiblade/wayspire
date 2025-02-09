<?php
    $socials = getSocials();
    if (!empty($socials) and count($socials)) {
        $socials = collect($socials)->sortBy('order')->toArray();
    }

    $footerColumns = getFooterColumns();
?>

<footer class="footer  position-relative user-select-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class=" footer-subscribe d-block d-md-flex align-items-center justify-content-between">
                    <div class="flex-grow-1">
                        <strong><?php echo e(trans('footer.join_us_today')); ?></strong>
                        <span class="d-block mt-5 text-white"><?php echo e(trans('footer.subscribe_content')); ?></span>
                    </div>
                    <div class="subscribe-input bg-white p-10 flex-grow-1 mt-30 mt-md-0">
                        <form action="/newsletters" method="post">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group d-flex align-items-center m-0">
                                <div class="w-100">
                                    <input type="text" name="newsletter_email"
                                        class="form-control border-0 <?php $__errorArgs = ['newsletter_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        placeholder="<?php echo e(trans('footer.enter_email_here')); ?>" />
                                    <?php $__errorArgs = ['newsletter_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary rounded-pill"><?php echo e(trans('footer.join')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $columns = ['first_column', 'second_column'];
    ?>

    <div class="container">
        <div class="row">

            

            <div class="container">
                <div class="row text-light">
                    <div class="col-5">
                        <div class="footer-logo">
                            <a href="/">
                                <?php if(!empty($generalSettings['footer_logo'])): ?>
                                    <img src="<?php echo e($generalSettings['footer_logo']); ?>" class="img-contain w-50"
                                        alt="footer logo">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="text-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error ducimus
                            unde alias illum
                            quod velit ea tempora sit delectus natus sequi nostrum id, obcaecati sint iure quisquam ut
                            iusto sunt?</div>
                        <div class="footer-social my-4">
                            <?php if(!empty($socials) and count($socials)): ?>
                                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e($social['link']); ?>" target="_blank">
                                        <img src="<?php echo e($social['image']); ?>" alt="<?php echo e($social['title']); ?>" class="mr-15">
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2">
                        <a class="text-light " style="font-weight: bold">Resource</a>
                        <ul>
                            <li style="margin:  10px 0;">Article</li>
                            <li>Blog</li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <a class="text-light " style="font-weight: bold">Plans</a>
                        <ul>
                            <li style="margin:  10px 0;">For Individuals</li>
                            <li>For Students</li>
                            <li style="margin:  10px 0;">For Teams</li>
                            <li>Discounts</li>

                        </ul>
                    </div>
                    <div class="col-2">
                        <a class="text-light " style="font-weight: bold">Support</a>
                        <ul>
                            <li style="margin:  10px 0;">24X7 Call</li>
                            <li>Report</li>
                            <li style="margin:  10px 0;">Help Centre</li>
                            <li>Terms & Conditions</li>

                        </ul>
                    </div>


                </div>

            </div>

        </div>

        
    </div>

    <?php if(getOthersPersonalizationSettings('platform_phone_and_email_position') == 'footer'): ?>
        <div class="footer-copyright-card">
            <div class="container d-flex align-items-center justify-content-between py-15">
                <div class="font-14 text-white"><?php echo e(trans('update.platform_copyright_hint')); ?></div>

                <div class="d-flex align-items-center justify-content-center">
                    <?php if(!empty($generalSettings['site_phone'])): ?>
                        <div class="d-flex align-items-center text-white font-14">
                            <i data-feather="phone" width="20" height="20" class="mr-10"></i>
                            <?php echo e($generalSettings['site_phone']); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(!empty($generalSettings['site_email'])): ?>
                        <div class="border-left mx-5 mx-lg-15 h-100"></div>

                        <div class="d-flex align-items-center text-white font-14">
                            <i data-feather="mail" width="20" height="20" class="mr-10"></i>
                            <?php echo e($generalSettings['site_email']); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

</footer>
<?php /**PATH /home/oxlircor/wayspire-dev.oxlide.co.in/resources/views/web/default/includes/footer.blade.php ENDPATH**/ ?>