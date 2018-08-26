<div class="panel panel-default">
    <div class="panel-body">
        <a href="<?php echo e(route('topics.create')); ?>" class="btn btn-success btn-block" aria-label="Left Align">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>新建帖子
        </a>
    </div>
</div>


<?php if(count($links)): ?>

    <div class="panel panel-default">
        <div class="panel-body active-users">
            <div class="text-center">资源推荐</div>
            <hr>
            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($link->link); ?>" class="meta">
                    <div class="media-body">
                        <span class="media-heading"><?php echo e($link->title); ?></span>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php endif; ?>