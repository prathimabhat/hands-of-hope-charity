<?php

require_once 'configDB.php';
require_once 'razorpay-php/Razorpay.php';
use Razorpay\Api\Api;



 if($_POST){

            $cause=mysqli_real_escape_string($link,$_POST['cause']);
            //$currency=mysqli_real_escape_string($link,$_POST['currencySelect']);
            $amount=mysqli_real_escape_string($link,$_POST['amt']);
            $fname=mysqli_real_escape_string($link,$_POST['fname']);
            $lname=mysqli_real_escape_string($link,$_POST['lname']);
            $email_id=mysqli_real_escape_string($link,$_POST['email']);
            $phone=mysqli_real_escape_string($link,$_POST['phone']);
            $address1=mysqli_real_escape_string($link,$_POST['address1']);
            $address2=mysqli_real_escape_string($link,$_POST['address2']);
            $country=mysqli_real_escape_string($link,$_POST['country']);
            $zip_code=mysqli_real_escape_string($link,$_POST['zipcode']);


            $query = "INSERT INTO donor (cause,currency,amount,fname,lname,email_id,phone,address1,address2,country,zip_code) VALUES ('$cause','INR', '$amount','$fname','$lname','$email_id','$phone','$address1','$address2','$country','$zip_code')";

             mysqli_query($link,$query);



				

				$keyId='rzp_test_RZtlSisYI1sX2E';
				$secretKey='RUzQNgPDcplfh7s2yLxqV3b3';
				$api=new Api($keyId,$secretKey);

				//$CUSTOMER_NAME=$_POST['fname'];
				//$CUSTOMER_EMAIL=$_POST['email'];
				//$PAY_AMT=$_POST['amt'];
				//$CURRENCY=$_POST['currencySelect'];

				$order=$api->order->create(array(
					'receipt' =>rand(1000,9999).'ORD' ,
					'amount'=>$amount *100,
					'payment_capture'=>1,
					'currency'=> 'INR'
					)
				);

				}

?>
<html>

<head>
	<meta name="viewport" content="width=device-width">
	<title>Hands of Hope</title>
<style type="text/css">

body{
		background-image: url('images/subback.jpg');
		background-repeat: no-repeat;
		background-size: 100% 100%;
}

.razorpay-payment-button{
	font-family: Montserrat-SemiBold;
	font-size:20px;
	text-align: center;
	background-color:black;
	color: white;
	padding:10px;

	width: 100px;
	height: 50px;
	
	
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
  	
	margin: auto;
	
}
</style>

</head>
<body>

	<div class="container" style="text-align: center;">
		<div class="card">
			<div class="card-body">
				<h1 class="card-title">THANK YOU!</h1>
				<h3 class="card-text">Please click the button to donate</h3>
				
			</div>

		</div>
	</div>

<form action="success.php" method="POST">
	<script 
		src="https://checkout.razorpay.com/v1/checkout.js"
		data-key="<?php echo $keyId ?>"
		data-amount="<?php echo $order->amount ?>"
		data-currency="INR"
		data-order_id="<?php echo $order->id ?>"
		data-buttontext="DONATE"
		data-name="Hands of Hope"
		data-description="Donation"
		data-image="<?php echo ''; ?>"
		data-prefill.name="<?php echo $fname; ?>"
		data-prefill.email="<?php echo $email_id; ?>"
		data-prefill.contact="<?php echo $phone; ?>"
		data-theme.color="#A9E2F3"></script>

	<input type="hidden" custom="Hidden Element" name="hidden">

</form>
</body>
</html>

