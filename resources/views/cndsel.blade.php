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
	<link rel="stylesheet" type="text/css" href="{{ asset('frontside/css/bootstrap.css')}}">
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
<body background="{{asset('frontside\images\bg.jpg')}}" style="background-repeat: no-repeat; background-size: 100%;">
	<div class="container"  style="background-color: light; width: 40%;">
	<table class="table table-bordered">
		<tr>
			<th>Name</th>
			<th>Regno</th>
			<th>Select</th>
		</tr>
		@foreach($res as $items)
		<tr>
			<td>{{ $items->name }}</td>
			<td>{{ $items->regno }}</td>
			<td><a href="/select/{{ $items->id }}">Select</a></td>
		</tr>
		@endforeach
	</table>
	</div>
</body>
</html>