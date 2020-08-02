<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontside/css/bootstrap.css')); ?>">
	<script type="text/javascript">
		function preventBack(){ window.history.forward(); }
		setTimeout("preventBack()",0);
		window.onunload =function () { null };
	</script>
	<style>
	.container{
		text-align: center;
		padding-top: 10%;
	}
	header {
  background-color: #666;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
  font-size: 18px;
  color: white;
  margin-bottom: 10px;
  margin-top: 10px;

}

	</style>
</head>
<body background="<?php echo e(asset('frontside\images\logbg.png')); ?>">
	<div class="container">
		<img src="<?php echo e(asset('frontside\images\vote.png')); ?>" style="width: 25%;">
		<header>
		<h1>Online Election System</h1>
		</header>
		<a href="login"><img src="<?php echo e(asset('frontside\images\student.png')); ?>"style="width: 15%;"></a>
		<a href="admin"><img src="<?php echo e(asset('frontside\images\admin.png')); ?>" style="width: 15%;"></a><br><br>
			<form method= "post" action="/resultqry">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<input type="submit" name = "vote" class="btn btn-info" value="View Result" style="background-color: #f44336;">
			</form>
	</div>
</body>
</html><?php /**PATH C:\wamp64\www\election\resources\views//home.blade.php ENDPATH**/ ?>