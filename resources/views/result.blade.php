<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontside/css/bootstrap.css') }}">
	<script type="text/javascript">
		function preventBack(){ window.history.forward(); }
		setTimeout("preventBack()",0);
		window.onunload =function () { null };
	</script>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontside/css/bootstrap.css')}}">
	<style>
	.container{
		
		width: 30%;
		height: wrap-content;
		text-align: center;
		margin-top: 150px;
		margin-right: 40%;
		font-size: 20px;
		padding-right: 1;
	}
	</style>
</head>
<body background="{{asset('frontside\images\bg.jpg')}}" style="background-repeat: no-repeat; background-size: 100%; text-align: center; ">
<div class="container">
<form method="post" style="width: wrap-content">	
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table class="table table-bordered" class="css-serial" style="text-align: center;">
		<tr>
			<th>S.No</th>
			<th>Name</th>
			<th>Regno</th>
			<th>Votes</th>
		</tr>
		@foreach($fnl as $items)
		
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $items->name }}</td>
			<td>{{ $items->regno }}</td>
			<td>{{ $items->votes }}</td>
		</tr>
		
		@endforeach
	</table>
	<a href="http://localhost:8000/admindash" style="margin-left: 20%; color: red;">Back to main menu</a>
	</form>
	</div>
</body>
</html>