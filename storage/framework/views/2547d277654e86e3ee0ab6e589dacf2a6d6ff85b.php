<?php echo $__env->make('common.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="reply-box">
    <form action="<?php echo e(route('replies.store')); ?>" method="POST" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="hidden" name="topic_id" value="<?php echo e($topic->id); ?>">
        <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="分享你的想法" name="content" id="reply_editor"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-share"></i>回复</button>
    </form>
</div>
<hr>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/simditor.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript"  src="<?php echo e(asset('js/module.js')); ?>"></script>
    <script type="text/javascript"  src="<?php echo e(asset('js/hotkeys.js')); ?>"></script>
    <script type="text/javascript"  src="<?php echo e(asset('js/uploader.js')); ?>"></script>
    <script type="text/javascript"  src="<?php echo e(asset('js/simditor.js')); ?>"></script>
    <script>
        $(document).ready(function(){
            var editor = new Simditor({
                textarea: $('#reply_editor'),
                tabIndent: true,
                toolbar: [
                    'code',
                    'link']
            });
        });
    </script>

<?php $__env->stopSection(); ?>