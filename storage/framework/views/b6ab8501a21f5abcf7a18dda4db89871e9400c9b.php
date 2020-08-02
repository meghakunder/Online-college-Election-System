<!DOCTYPE html>
<html>
<head>
	<title>Voting</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontside/css/bootstrap.css')); ?>">
	<script type="text/javascript">
		function preventBack(){ window.history.forward(); }
		setTimeout("preventBack()",0);
		window.onunload =function () { null };
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontside/css/bootstrap.css')); ?>">
	<style>
	.container{
		border: 2px solid black;
		margin-top: 15%; 
		margin-left: 30%;
		font-size: 20px;
		color: black;
		background: rgba(211,211,211,0.5);
		width: 40%;
		padding-top: 10px;
	}
	</style>
</head>
<body background="<?php echo e(asset('frontside\images\bgvote.jpg')); ?>" style="background-repeat: no-repeat; background-size: 100%; text-align: center;">
	<div class="container" style="background-color: light;">
	<table class="table table-bordered" class="css-serial" style="text-align: center; ">
		<tr>
			<th>S.No</th>
			<th>Name</th>
			<th>Regno</th>
			<th>Elect</th>
		</tr>
		<?php $__currentLoopData = $shw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if($items->date == date("Y-m-d") ): ?>
		<tr>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($items->name); ?></td>
			<td><?php echo e($items->regno); ?></td>
			<td><a href="/elect/<?php echo e($items->id); ?>" style="color: red;">Elect</a></td>
		</tr>
		<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	</div>
</body>
</html><?php /**PATH C:\wamp64\www\election\resources\views/vote.blade.php ENDPATH**/ ?>