<?php

require_once 'configDB.php';




if($_POST){
			$fname=mysqli_real_escape_string($link,$_POST['fname']);
            $lname=mysqli_real_escape_string($link,$_POST['lname']);
            $email_id=mysqli_real_escape_string($link,$_POST['email']);
            $phone=mysqli_real_escape_string($link,$_POST['phone']);
            $msg=mysqli_real_escape_string($link,$_POST['message']);

            $query = "INSERT INTO volunteer (fname,lname,email_id,phone,message) VALUES ('$fname','$lname','$email_id','$phone','$msg')";

            mysqli_query($link,$query);
}
          /* if(isset($_POST['submit'])){
           		$file=$_FILES['file'];
           		$fileName=$_FILES["file"]["name"];
           		$fileTmpName=$_FILES['file']['tmp_name'];
           		$fileSize=$_FILES['file']['size'];
           		$fileError=$_FILES['file']['error'];
           		$fileType=$_FILES['file']['type'];
           		//$targetFilePath=$targetDir.$fileName;
           		//$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
           		$fileExt=explode('.', $fileName);
           		$fileActualExt=strtolower(end($fileExt));
				$allowTypes = array('pdf');
		    	if(in_array($fileActualExt, $allowTypes)){
		        // Upload file to server
		    		if($fileError===0){
		    			$fileNameNew=uniqid('',true).".".$fileActualExt;//stores the uploaded time in microseconds as the unique id
		    			$fileDestination='/uploads'.$fileNameNew;
		    			move_uploaded_file($fileTmpName, $fileDestination);
		    			//$query="INSERT into volunteer (file_name, uploaded_on) VALUES ('$fileNameNew', NOW())";
		            	//mysqli_query($link,$query);

		    		
		    		}
		        //if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
		            // Insert image file name into database
		            
		        }
		        
		    }*/
		
    
?>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    
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
				<p class="card-text">Our team will soon get in touch with you!</p>
				<a href="volunteer.php" class="btn" style="background-color: #A9E2F3">Home</a>
			</div>

		</div>
	</div>
</body>


</html>