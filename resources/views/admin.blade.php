<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
		function preventBack(){ window.history.forward(); }
		setTimeout("preventBack()",0);
		window.onunload =function () { null };
	</script>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontside/css/bootstrap.css')}}">
	<style>
	.container{
		border: 2px solid black;
		width: 35%;
		height: wrap-content;
		text-align: center;
		margin-top: 120px;
		background: rgba(211,211,211,0.5);
		font-size: 15px;
		padding-right: 1;
		padding-bottom: 10px;
	}
	</style>
</head>
<body background ="{{asset('frontside\images\bg.jpg')}}" style="background-repeat: no-repeat; background-size: cover; text-align: center;  " >
	<div class="container">
	<form method= "post" action="/adminlog" style="width: wrap-content">
		<br>
		<h3>Admin Login</h3>
		<hr>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label><h5>Name</h5></label>
		<input type="text" name="name" placeholder="Enter Name" class="form-control"><br>
		<label><h5>Password</h5></label>
		<input type="number" name="password" placeholder="Enter Password" class="form-control"><br>
		<input type="submit" name = "login" class="btn btn-info" value="Login"><br>
	</form>
	<br>
	<a href="home" style="color: red; font-size: 20px;">Back to main menu</a>
	<br>
	</div>
</body>
</html>