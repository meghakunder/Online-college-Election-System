<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
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
		width:  35%;
		height: wrap-content;
		text-align: center;
		margin-top: 100px;
		font-size: 20px;
		padding-top: 15px;
		padding-bottom: 15px;
		background: rgba(211,211,211,0.5);
	}
	</style>
</head>
<body background="<?php echo e(asset('frontside\images\bgvote.jpg')); ?>" style="background-repeat: no-repeat; background-size: 100%; text-align: center; ">
	<div class="container">
	<form method= "post" action="/electqry" >
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<label>Are you sure you want to vote for the following candidate?</label><br>
			<?php $__currentLoopData = $elc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<input type="hidden" name="id" value="<?php echo e($value->id); ?>">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo e($value->name); ?>" readonly>
			<label>Regno</label>
			<input type="number" name="regno" class="form-control" value="<?php echo e($value->regno); ?>" readonly><br>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<input type="submit" name ="add" class="btn btn-info" value="Yes"><br>
		</form>
		<a href="http://localhost:8000/vote" style="color:red;">NO, Choose other candidate</a>	
	</div>
</body>
</html> <?php /**PATH C:\wamp64\www\election\resources\views/elect.blade.php ENDPATH**/ ?>