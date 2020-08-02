<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
		function preventBack(){ window.history.forward(); }
		setTimeout("preventBack()",0);
		window.onunload =function () { null };
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontside/css/bootstrap.css')); ?>">
	<style>
	.container{
		
		width: 50%;
		height: wrap-content;
		text-align: center;
		margin-top: 15%;
		font-size: 20px;
		padding-right: 1;
	}
	</style>
</head>
<body background="<?php echo e(asset('frontside\images\bgvote.jpg')); ?>" style="background-repeat: no-repeat; background-size: 100%; text-align: center; ">
<div class="container">
<form method="post">	
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<table class="table table-bordered" class="css-serial" style="text-align: center;">
		<tr>
			<th>S.No</th>
			<th>Name</th>
			<th>Regno</th>
			<th>Votes</th>
		</tr>
		<?php $__currentLoopData = $fnl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
		<tr>
			<td><?php echo e($no++); ?></td>
			<td><?php echo e($items->name); ?></td>
			<td><?php echo e($items->regno); ?></td>
			<td><?php echo e($items->votes); ?></td>
		</tr>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<a href="http://localhost:8000/home" style="color: red;">Back to main menu</a>
	</form>
	</div>
</body>
</html><?php /**PATH C:\wamp64\www\election\resources\views/resulfa.blade.php ENDPATH**/ ?>