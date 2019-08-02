<?php

	session_start();
	$_SESSION["name"] = $_GET["name"];
	$_SESSION["phone"] = $_GET["phone"];
	$_SESSION["email"] = $_GET["email"];
	$_SESSION["dob"] = $_GET["dob"];
	$_SESSION["gender"] = $_GET["optradio"];
	$_SESSION["add"] = $_GET["add"];
	
?>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
</head>
<body>
<form class="form-horizontal" action="Other.php" method="get">	
<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" align="center">
			<h3> Academic Information </h3>
		</div>
		<div class="col-md-4"></div>
	</div></br></br>
<div class="container">
	
	<div class="row">
	<div class="col-md-10">
	<div class="form-group">
		<label class="control-label col-sm-2" for="cname">Course Name:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="cname" id="cname" placeholder="Enter your course">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="year">Year:</label>
		<div class="col-sm-10">
			<select class="form-control" name="year" id="year">
				<option value=1> First Year</option>
				<option value=2> Second Year </option>
				<option value=3> Third Year </option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="clg">College:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="college" name="college" placeholder="Enter your college name">
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label col-sm-2" for="gender">Percentage:</label>
		<div class="col-sm-10"> 
			<input type="number" class="form-control" name="percentage" id="percentage" placeholder="Enter your percentage">
		</div>
	</div>
	
	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>
	</div>
	</div>
	</div>
</div>	
</form>
</body>
</html>
