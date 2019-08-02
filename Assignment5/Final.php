<?php
	session_start();
	
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
	<div class="container">
	<br>
		<div class="row">
			<div class="col-md-4">
				<table class="table">
					<tr>
						<th colspan="2"> Personal Information </th>
					</tr>
					<tr>
						<td> Name </td>
						<td> <?php echo $_SESSION["name"];?></td>
					</tr>
					<tr>
						<td> Phone </td>
						<td> <?php echo $_SESSION["phone"];?> </td>
					</tr>
					<tr>
						<td> Email </td>
						<td> <?php echo $_SESSION["email"];?> </td>
					</tr>
					<tr>
						<td> DOB </td>
						<td> <?php echo $_SESSION["dob"];?> </td>
					</tr>
					<tr>
						<td> Gender </td>
						<td> <?php echo $_SESSION["gender"];?> </td>
					</tr>
					<tr>
						<td> Address </td>
						<td> <?php echo $_SESSION["add"];?> </td>
					</tr>
				</table>
			</div>
			<div class="col-md-4">
				<table class="table">
					<tr>
						<th colspan="2"> Academic Information </th>
					</tr>
					<tr>
						<td> Course Name </td>
						<td> <?php echo $_SESSION["cname"];?></td>
					</tr>
					<tr>
						<td> College Year </td>
						<td> <?php echo $_SESSION["year"];?> </td>
					</tr>
					<tr>
						<td> College Year </td>
						<td> <?php echo $_SESSION["college"];?> </td>
					</tr>
					<tr>
						<td> Percentage </td>
						<td> <?php echo $_SESSION["percentage"];?> </td>
					</tr>
					
				</table>
			</div>
			<div class="col-md-4">
				<table class="table">
					<tr>
						<th colspan="2"> Other Information </th>
					</tr>
					<tr>
						<td> Hobbies </td>
						<td> <?php
						$str = "";
						if(isset($_GET['c1']))
							$str = $str.$_GET['c1'].", ";
						if(isset($_GET['c2']))
							$str = $str.$_GET['c2'].", ";
						if(isset($_GET['c3']))
							$str = $str.$_GET['c3'].", ";
						echo $str;?></td>
					</tr>
					<tr>
						<td> Extra Achieve </td>
						<td> <?php echo $_GET["ex_achive"];?> </td>
					</tr>
					<tr>
						<td> Sports Achieve </td>
						<td> <?php echo $_GET["sp_achieve"];?> </td>
					</tr>
					<tr>
						<td> Emergency Cont. </td>
						<td> <?php echo $_GET["em_num"];?> </td>
					</tr>
					
				</table>
			</div>
		</div>
	</div>
</body>
</html>
