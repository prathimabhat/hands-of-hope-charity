<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Caveat Brush' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Red Hat Display' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Titan One' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Fugaz One' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	<title>Hands of Hope</title>
	<style type="text/css">
		.hands{
			position: relative;
			background-repeat: no-repeat;
			padding-top: 90px;
			padding-bottom: 100px;
			background-size: cover;
			text-align: center;
			background-attachment: fixed;
			background-position: center center;

		}
		.hands:before {
		    position: absolute;
		    content: '';
		    left: 0px;
		    top: 0px;
		    width: 100%;
		    height: 100%;
		    background-color: rgba(0, 0, 0, 0.50);
		}

		.hands .aoitxt {
		    position: relative;
		}
		.hands h2 {
		    font-size: 72px;
		    margin-bottom: 0px;
		    font-weight: 500;
		    color: #ffffff;
		    text-transform: capitalize;
		}
		.bread-crumb{
			color: white;
			margin-top: 50px;
			font-family:  Besom-free-font;
			font-size: 16px;
			text-transform: capitalize;

		}
		.event{
			margin-left: 150px;
			margin-bottom: 100px;
			margin-top: 100px;
			font-size: 20px; 
			color:#BFBFBF;
		}
		.hands .aoitxt {
		    position: relative;

		}
		.btn{
			padding: 10px 30px 10px 30px;
			color: white;

		}
	</style>
</head>
<body>
	<?php include "navbar.php"?>
	<section class="hands" style="background-image:url('images/event.jpg'); background-attachment: unset;">
        <div class="comdiv">
            <div class="aoitxt">
                <h2 style="font-family: 'Caveat Brush';">events</h2>
            	
            	<ul class="bread-crumb" style="border-top: none; border-bottom: none;list-style-type:none;">
                    <li><a href="index.php" style="color: #ffffff">HOME</a>  /  UPCOMING EVENTS</li>
                </ul>

            </div>
        </div>
    </section>

    <section class="event">
    	<div>Will be uploaded soon...</div>
    </section>

    <section class="hands" style="background-image:url('images/eventbc.jpg'); background-attachment: unset;">
        <div class="comdiv">
            <div class="aoitxt">
                <h2 style="font-family: 'Fugaz One'; font-size: 45px; color: #000000;">DONATE FOR A CAUSE</h2>
                <div style="word-spacing: 10px;font-size: 30px; color: #000000">Be the change you wish to see in the world</div>
                 <a href="donate.php" class="btn btn-style-four" style="background-color: #000000;color: black; border: 2px solid #000000;color: #ffffff;">DONATE</a>
            	</div>
        	</div>
        </div>
    </section>
    <?php include 'footer.php' ?>
</body>
</html>