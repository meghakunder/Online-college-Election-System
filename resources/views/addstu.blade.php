<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
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
			width: 30%;
			height: wrap-content;
			text-align: center;
			margin-top: 150px;
			background: rgba(211,211,211,0.5);
			font-size: 18px;
			padding-right: 1;
			padding-bottom: 20px;
			padding-top: 20px;
		}
	</style>
</head>
<body background ="{{asset('frontside\images\bg.jpg')}}" style="background-repeat: no-repeat; background-size: cover; text-align: center;  " >
	<div class="container">
	<form method= "post" action="/addqry" style="width: wrap-content">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label><h4>Name</h4></label>
		<input type="text" name="name" placeholder="Enter Name" class="form-control"><br>
		<label><h4>Regno</h4></label>
		<input type="number" name="regno" placeholder="Enter Regno" class="form-control"><br>
		<input type="submit" name = "add" class="btn btn-info" value="Insert">
	</form>
</body>
</html>