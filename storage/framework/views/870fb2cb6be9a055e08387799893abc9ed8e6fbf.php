<!DOCTYPE html>
<head>
	<title>Dashboard</title>
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
		margin-top: 8%;
		font-size: 18px;
		padding-top: 15px;
		padding-bottom: 15px;
		background: rgba(211,211,211,0.5);
	}
	.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 13px 10px;
  text-decoration: none;
  font-size: 15px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media  screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media  screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
	</style>
</head>
<body background ="<?php echo e(asset('frontside\images\bg.jpg')); ?>" style="background-repeat: no-repeat; background-size: cover; text-align: center;  ">
	<!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  	<a class="navbar-brand" href="/home">Home</a>
		  	<ul class="navbar-nav">
		  	<li class="nav-item">
		<a class="nav-link" href="addstu">Add new Student</a>
		    </li>
		    <li class="nav-item">
		<a class="nav-link" href="cndsel">Select Candidate</a>
		    </li>
		   	<li class="nav-item">
		<a class="nav-link" href="/result">Check Result</a>
		   	</li>
		    <li class="nav-item">
		<a class="nav-link" href="/home">Logout</a>
		    </li>
	  		</ul>
	</nav> -->
	<div class="topnav" id="myTopnav">
		<a href="/home">Home</a>
		
		<a href="addstu">Add new student</a>
		<a href="cndsel">Select Candidate</a>
		<a href="/result">Check Result</a>
		<a href="/home">Logout</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</div>
	<div class="container">
		<h3>Operations</h3>
		<hr>
		    <form method= "post" action="/voteqry">
		     	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		      	<input type="submit" name = "vote" class="btn btn-info" value="Check Vote Percentage">
		    </form>
		    	<li>
		    <form method= "post" action="/lineqry">
		      	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		      	<input type="submit" name = "vote" class="btn btn-info" value="Open Voting lines">
		    </form>
		    	</li><li>
		    <form method= "post" action="/closeqry">
		      	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		      	<input type="submit" name = "vote" class="btn btn-info" value="Close Voting lines">
		    </form>
		    	</li><li>
		    <form method= "post" action="/openqry">
		    	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		      	<input type="submit" name = "vote" class="btn btn-info" value="Open Result view for all">
		    </form>
		    	</li><li>
		    <form method= "post" action="/deleteqry">
		      	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		      	<input type="submit" name = "vote" class="btn btn-info" value="Delete all candidates">
		    </form>
		    	</li>
	</div>
</body>
</html><?php /**PATH C:\wamp64\www\election\resources\views/admindash.blade.php ENDPATH**/ ?>