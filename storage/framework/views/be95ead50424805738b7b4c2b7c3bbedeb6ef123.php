<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
		function preventBack(){ window.history.forward(); }
		setTimeout("preventBack()",0);
		window.onunload =function () { null };
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontside/css/bootstrap.css')); ?>">
	<style>
	/*.navbar{
		float: left;
	}*/
	.container{
		border: 2px solid black;
		width: 30%;
		height: wrap-content;
		text-align: center;
		margin-top: 120px;
		font-size: 15px;
		padding-right: 1;
		background: rgba(211,211,211,0.5);
	}
	</style>
</head>
<body background="<?php echo e(asset('frontside\images\bgvote.jpg')); ?>" style="background-repeat: no-repeat; background-size: 100%; text-align: center; ">
	<!-- <div class="nav">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  	<a class="navbar-brand" href="/home">Logout</a>
	</nav>
	</div> -->
	<div class="container" style="background-color: light; ">
		<form method= "post" action="/loginqry" style="width: wrap-content; "><br>
			<h3>User Login</h3>
			<hr>
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<label><h5>Name</h5></label>
			<input type="text" name="name" placeholder="Enter Name" class="form-control"><br>
			<label><h5>Regno</h5></label>
			<input type="number" name="regno" placeholder="Enter Regno" class="form-control"><br>
			<input type="submit" name = "login" class="btn btn-info" value="Login"><br><br>
			<!-- <a href="home" style="color: red; font-size: 20px;">Back to main menu</a><br> -->
		</form>
	</div>
</body>
</html><?php /**PATH C:\wamp64\www\election\resources\views/login.blade.php ENDPATH**/ ?>