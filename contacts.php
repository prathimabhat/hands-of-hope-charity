<?php

$errors = "";

$myemail = 'prathimabhatm01@gmail.com';//<—–Put Your email address here. 
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))

{

	$errors .= '\n Error: all fields are required';

}

$name = $_POST['name'];

$email_address = $_POST['email'];

$message = $_POST['message'];

if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i', $email_address))

{

	$errors .= '\n Error: Invalid email address';

}

if( empty($errors))

{

	$to = $myemail;

	$email_subject = "Contact form submission: $name";

	$email_body = "You have received a new message. ".

	" Here are the details:\n Name: $name \n ".

	"Email: $email_address \n Message \n $message";

	$headers = "From: $myemail\n";

	$headers .= "Reply-To: $email_address";

	mail($to,$email_subject,$email_body,$headers);

//redirect to the ‘thank you’ page

//header(‘Location: contact-form-thank-you.html’);

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
				<p class="card-text">You will be contacted by our team soon</p>
				<a href="index.php" class="btn" style="background-color: #A9E2F3">Home</a>
			</div>

		</div>
	</div>
</body>

</html>