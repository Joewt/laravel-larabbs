<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title','BBS'); ?> - 湖工acm交流论坛</title>
    <meta name="description" content="<?php echo $__env->yieldContent('description', setting('seo_description', 'Acm爱好者。')); ?>" />
    <meta name="keyword" content="<?php echo $__env->yieldContent('keyword', setting('seo_keyword', '技术爱好者')); ?>" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>


<div id="app" class="<?php echo e(route_class()); ?>-page">
    <?php echo $__env->make('layouts._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">
        <?php echo $__env->make('layouts._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('layouts._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>


<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>