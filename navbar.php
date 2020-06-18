
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Caveat Brush' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
       
        #hhh a:hover {
          background-color: #A9E2F3;
        }
        
        .active a{
          background-color: #A9E2F3;
          color: #000000;
        }
        
    </style>
</head>
<body>
    <section class="hands" style="background-image:url('images/nav.jpg'); background-attachment: unset;">
        <div class="comdiv">
            <div class="aoitxt">
                <h2 style="font-family: 'Caveat Brush';">HANDS OF HOPE</h2>
              </div>
        </div>
    </section>
   
    <div style=" padding-bottom: 0.5px;">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #0B2F3A;position: sticky">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"  aria-label="Toggle navigation" style="background-color: #FFFFFF;">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="font-size: 20px;">
                <ul class="navbar-nav" style="padding-left: 100px;">
                    <li class="nav-item active" style="text-align:center; ">
                        <a  class="nav-link" href="index.php" style="color: #FFFFFF;">HOME</a>
                    </li>

                    <li id="hhh" class="nav-item" style=" padding-right: 20px;">
                        <a  id="hhh" class="nav-link" href="knowusbetter.php" style="color: #FFFFFF">KNOW US BETTER</a>
                    </li>

                    <li id="hhh" class="nav-item" style=" padding-right: 20px;">
                        <a  id="hhh" class="nav-link" href="areas_of_impact.php" style="color: #FFFFFF">AREAS OF IMPACT</a>
                    </li>

                    <li id="hhh" class="nav-item dropdown" style=" padding-right: 20px;">
                        <a id="hhh" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" style="color: #FFFFFF;display: block;">EVENTS</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenubutton">
                                <a id="bb" class="dropdown-item" href="event.php">EVENTS</a>
                                <a id="bb" class="dropdown-item" href="upcoming_events.php">UPCOMING EVENTS</a>
              
                            </div>
                    </li>

                    <li  id="hhh" class="nav-item" style=" padding-right: 20px;">
                        <a id="hhh" class="nav-link" href="volunteer.php" style="color: #FFFFFF;">VOLUNTEER</a>
                    </li>

                    <li id="hhh" class="nav-item" style=" padding-right: 20px;">
                        <a id="hhh" class="nav-link" href="sayhello.html" style="color: #FFFFFF;">SAY HELLO</a>
                    </li>

                    <li id="hhh" class="nav-item" style="padding-right: 20px;">
                        <a id="hhh" class="nav-link" href="donation.php" style="background-color: #A9E2F3;">DONATE</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
</body>
</html>