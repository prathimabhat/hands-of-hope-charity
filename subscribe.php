<?php  
require_once 'configDB.php';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_POST){
  $email_id=mysqli_real_escape_string($link,$_POST['subscribeMail']);

  $email = test_input($_POST["subscribeMail"]);
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  
    $query = "INSERT INTO subscriber (email) VALUES ('$email')";

     mysqli_query($link,$query);
   }
}
 ?>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

	<title>Hands of Hope</title>

<style type="text/css">
	body{
		background-image: url('images/subback.jpg');
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}
	.card{
	width: 400px;
	height: 200px;
	
	
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
  	
	margin: auto;
	background-color: black;
	color:white;
}
</style>
</head>
<body>
	<div class="container" style="text-align: center;">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title">THANK YOU!</h3>
				<p class="card-text">You will now receive all our latest news!</p>
				<a href="index.php" class="btn" style="background-color: #A9E2F3">Home</a>
			</div>

		</div>
	</div>
</body>

</html>