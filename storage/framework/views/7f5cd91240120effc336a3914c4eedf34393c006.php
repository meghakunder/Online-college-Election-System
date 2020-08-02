<!DOCTYPE html>
<html>
<head>
	<title>Select Candidate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
		function preventBack(){ window.history.forward(); }
		setTimeout("preventBack()",0);
		window.onunload =function () { null };
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontside/css/bootstrap.css')); ?>">
	<style>
	.container{
		border: 2px solid black;
		margin-top: 150px;
		text-align: center;
		background: #ffffff;
		font-size: 20px;
		padding-right: 0px;
		padding-left: 0px;
		background: rgba(211,211,211,0.5);
	}
	</style>
</head>
<body background="<?php echo e(asset('frontside\images\bg.jpg')); ?>" style="background-repeat: no-repeat; background-size: 100%;">
	<div class="container"  style="background-color: light; width: 40%;">
	<table class="table table-bordered">
		<tr>
			<th>Name</th>
			<th>Regno</th>
			<th>Select</th>
		</tr>
		<?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($items->name); ?></td>
			<td><?php echo e($items->regno); ?></td>
			<td><a href="/select/<?php echo e($items->id); ?>">Select</a></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	</div>
</body>
</html><?php /**PATH C:\wamp64\www\election\resources\views/cndsel.blade.php ENDPATH**/ ?>