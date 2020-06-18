<?php

	require_once 'configDB.php';

	$query="INSERT INTO payment_info(payment_id,order_id,signature_hash) VALUES ('".$_POST['razorpay_payment_id']."','".$_POST['razorpay_order_id']."','".$_POST['razorpay_signature']."')";

	mysqli_query($link,$query);

	//echo 'Transaction successful';


?>


<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
   
	<title>Hands of Hope</title>
		<style type="text/css">

			body{
				background-image: url('images/subback.jpg');
				background-repeat: no-repeat;
				background-size: 100% 100%;
			}
			.card{
			width: 500px;
			height: 300px;
			
			
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
					<h1 class="card-title">Transaction successful!</h1>
					<p class="card-text"><span style="font-size:90px;"> <i class="fa fa-check-circle" style="color:green;"></i></span></p>
					<a href="index.php" class="btn" style="background-color: #A9E2F3">Home</a>
				
			</div>
		</div>

	</div>
	
	
</body>
</html>

		