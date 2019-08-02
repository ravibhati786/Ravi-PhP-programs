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
<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" align="center">
			<h3> Personal Information </h3>
		</div>
		<div class="col-md-4"></div>
	</div></br></br>
<div class="container">
<form class="form-horizontal" action="Academic.php" method="get">	
	
	<div class="row">
	<div class="col-md-10">
	<div class="form-group">
		<label class="control-label col-sm-2" for="name">Full Name:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="phone">Phone:</label>
		<div class="col-sm-10">
			<input type="phone" class="form-control" name="phone" id="phone" placeholder="Enter phone number">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Email:</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="pwd">Date Of Birth:</label>
		<div class="col-sm-10"> 
			 <input type='date' class="form-control" name="dob" id='dob' />
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="gender">Gender:</label>
		<div class="col-sm-10"> 
			<label class="radio-inline"><input type="radio" name="optradio" value="Male" checked>Male</label>
			<label class="radio-inline"><input type="radio" name="optradio" value="Female">Female</label>
			<label class="radio-inline"><input type="radio" name="optradio" value="Other">Other</label>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="add">Address:</label>
		<div class="col-sm-10"> 
			<textarea rows=5 class="form-control" name="add" id="add" placeholder="Enter your address">
			</textarea>
		</div>
	</div>
	<div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>
	</div>
	</div>
	</div>
	</form>
</div>	

</body>
</html>