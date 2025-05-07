<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex flex-row flex-wrap justify-start items-start max-sm:justify-center max-sm:items-center w-full h-auto  gap-8">
        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginaldba44c5fbce8d7e91fbd864c10912cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldba44c5fbce8d7e91fbd864c10912cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.video.cred','data' => ['video' => $video]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('video.cred'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['video' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($video)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldba44c5fbce8d7e91fbd864c10912cbe)): ?>
<?php $attributes = $__attributesOriginaldba44c5fbce8d7e91fbd864c10912cbe; ?>
<?php unset($__attributesOriginaldba44c5fbce8d7e91fbd864c10912cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldba44c5fbce8d7e91fbd864c10912cbe)): ?>
<?php $component = $__componentOriginaldba44c5fbce8d7e91fbd864c10912cbe; ?>
<?php unset($__componentOriginaldba44c5fbce8d7e91fbd864c10912cbe); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php if(session('success')): ?>
        <div class="end-0 fixed"
             x-data="{ show: true }"
             x-show="show"
             x-transition
             x-init="setTimeout(() => show = false, 5000)">
            <p class="text-sm text-white bg-green-600 p-4 w-auto rounded-l-full "
            ><?php echo e(session('success')); ?></p>
        </div>
    <?php endif; ?>

    <div>
        <?php echo e($videos->links()); ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\web sits\youtube\resources\views/video/index.blade.php ENDPATH**/ ?>