

<?php $__env->startSection('title'); ?>
    搜索结果
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">

                    <h3 class="text-center">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> 关于"<i style="color: #9b1418;"><?php echo e($q); ?></i>"的搜索结果, 共<?php echo e($count); ?>条
                    </h3>
                    <hr>


                        <div class="empty-block">没有搜索通知！</div>


                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>