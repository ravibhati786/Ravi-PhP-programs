<?php
	session_start();
	$_SESSION["cname"] = $_GET["cname"];
	$_SESSION["year"] = $_GET["year"];
	$_SESSION["college"] = $_GET["college"];
	$_SESSION["percentage"] = $_GET["percentage"];
	
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
<form class="form-horizontal" action="Final.php" method="get">	
<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" align="center">
			<h3> Other Information </h3>
		</div>
		<div class="col-md-4"></div>
	</div></br></br>
<div class="container">
	
	<div class="row">
	<div class="col-md-10">
	<div class="form-group">
		<label class="control-label col-sm-3" for="cname">Hobbies :</label>
		<div class="col-sm-9">
			<label class="checkbox-inline">
				<input type="checkbox" name="c1" value="Singing"> Singing
			</label>
			<label class="checkbox-inline">
				<input type="checkbox" name="c2" value="Dancing"> Dancing
			</label>
			<label class="checkbox-inline">
				<input type="checkbox" name="c3" value="Photography"> Photography
			</label>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-3" for="year">Extra Curricular :</label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="ex_achive" id="ex_achive" placeholder="Enter your extra curricular achivements">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-3" for="year">Sports Achivements :</label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="sp_achieve" id="sp_achieve" placeholder="Enter your sports achivements">
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label col-sm-3" for="gender">Emergency Contact:</label>
		<div class="col-sm-9"> 
			<input type="text" class="form-control" name="em_num" id="em_num" placeholder="Enter your emergency number">
		</div>
	</div>
	
	<div class="form-group"> 
		<div class="col-sm-offset-3 col-sm-9">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>
	</div>
	</div>
	</div>
</div>	
</form>
</body>
</html>
