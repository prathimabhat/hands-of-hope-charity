
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Caveat Brush' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Red Hat Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Titan One' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <title>Hands of Hope</title>

    <style type="text/css">
        .text{
            font-size: 4vw;
        }
        .button{
            background-color:  #A9E2F3;
            border: solid #A9E2F3;
            padding: 5px 5px 5px 5px;
        }
        .quote{
            padding-top: 60px;
            text-align: center;
            font-family: Caveat Brush;
            font-size: 6vw;
        }
        .card-group
        {
            padding-top: 60px;
            padding-bottom: 100px;
        }
        .card{
            margin-right: 3px;
        }

        .cancer .image{
            position: relative;
            width:100%;
            display: block;
            margin-left: 150px;
            margin-right: 50px;
            margin-top: 80px;
            margin-bottom: 20px;
        }
        .cancer .readmore{
            padding-bottom: 12px;
        }
        .cancer .text{
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            text-align: justify;
        }
        .cancer .card-text{
            text-align: justify;
        }
        .cancer .card-text{
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            text-align: justify;
            font-family: "Aleo";
            color: #111111
        }
        .btn{
            
            font-family: "Red Hat Display";
            margin-top: 10px;
            align-items: center;
        }
        .cancer .card-title{
            font-size: 15px;
            font-style: bolder;
            font-family: 'Titan One', arial;
            color: #111111;
        }
        .cancer .causes-block{
            margin: 0px 0px 45px;
            display: block;
            float: left;
             margin: 5px;
             width: 24rem;
        }
        .cancer .card-img-top{
            padding-bottom: 12px;
        }
        .card-title{
            font-size: 17px;
            font-style: bolder;
            font-family: 'Titan One', arial;
            color: #111111;
        }
        .card-subtitle{
            font-size: 15px;
            font-family:Aleo;
            font-style: bolder;
        }
        .card-group .card .card-text{
            font-size: 14px;
            font-family: Red Hat Display;
        }
    </style>
   
</head>

<body>
    <?php include 'navbar.php';?>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/home6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div style="text-align: left;">
                        <div class="text" style="font-family: 'Caveat Brush'; text-align: left; bottom: 80px; left: 45px;">IT'S GOOD TO BE BLESSED. <br> ITS BETTER TO BE A BLESSING</div>
                        <div>
                            <a href="donation.php" class="btn btn-primary" style="color: black; border:2px solid #A9E2F3;font-family: Red Hat Display;background-color:  #A9E2F3; text-decoration: none;font-size:1.5vw;">DONATE NOW</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/home2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div style="text-align: right;">
                        <div class="text" style="font-family: 'Caveat Brush'; text-align: right; bottom: 80px; right: 45px;">THINK OF GIVIG NOT AS A DUTY <br>BUT AS A PRIVILAGE </div>
                        <div> 
                            <a href="volunteer.php" class="btn btn-primary" style="color: black; border: 2px solid #A9E2F3;font-family: Red Hat Display;background-color:  #A9E2F3; text-decoration: none;font-size: 1.5vw;">VOLUNTEER</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/home3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div style="text-align: left;">
                        <div class="text" style="font-family: 'Caveat Brush';text-align: left;">GIVING IS THE GREATEST <br> ACT OF GRACE</div>
                        <div>
                            <a href="areas_of_impact.php" class="btn btn-primary" style="color: black; border: 2px solid #A9E2F3;font-family: Red Hat Display; background-color:  #A9E2F3; text-decoration: none;font-size: 1.5vw;">SEE ALL CAUSE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/home5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div style="text-align: right;">
                        <div class="text" style="font-family: 'Caveat Brush'; text-align: right; bottom: 40px; right: 45px;">LET'S MAKE THIS WORLD <br> A HAPPY PLACE </div>
                        <div>
                            <a href="donation.php" class="btn btn-primary" style="background-color:  #A9E2F3;color: black; border: 2px solid  #A9E2F3;font-family: Red Hat Display;text-decoration: none; font-size:1.5vw;text-align: center;">DONATE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        
        <div>
            <h3 class="quote">Small Actions X Lots of People = BIG CHANGE</h3>
            <div style="font-size: 22px; margin-top: 0px;text-align: center;">Let's join hands together and bring some change in the world</div>
        </div>

        <div class="card-group">
            
            <div class="card" style="background-color: #0489B1;">
                <div class="card-body" style="padding:10%;">
                    <h5 class="card-title">MAKE A DONATION</h5>
                    <h6 class="card-subtitle mb-2">Here is magic in kindness</h6>
                    <p class="card-text">Here is your chance to give back to society and receive a whole lot of happiness in return for you may be giving money, but it is no less than a miracle for those who desperately need one!</p>
                    
                </div>
            </div>

            <div class="card" style="background-color : #CEF6E3;">
                <div class="card-body" style="padding:10%;">
                    <h5 class="card-title">FUNDRAISING</h5>
                    <h6 class="card-subtitle mb-2">Collect funds worldwide</h6>
                    <p class="card-text">Do you have a fundraising idea? An event we can be part of? An event you could help shoulder with us? </p>
                    
                </div>
            </div>
            
            <div class="card" style="background-color: #F5A9D0;">
                <div class="card-body" style="padding:10%;">
                    <h5 class="card-title">VOLUNTEER</h5>
                    <h6 class="card-subtitle mb-2">Become a volunteer</h6>
                    <p class="card-text">Help comes in many forms and one of the best ways to be of service is to give someone your time. Helping the needy is known to change perspectives and instill a sense of gratitude in every mind who has ever had the courage to lend out a hand.</p>
                    
                </div>
            </div>
        </div>
    </div>


    <div>
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="images/cristmas4.jpg" class="card-img" alt="..." style="height: 100%;">
                </div>
                <div class="col-md-6" style="background-image: url('images/blue.jpg'); padding-bottom: 2%;">
                    
                        
                        <div class="container" >
                            <div class="quote" style="font-size: 3vw; ">#COLOR IS HAPPY</div>
                            <div style="text-align: center;">Hands of Hope is overjoyed to sponsor Project 1 (October 2019) of colorishappy, an OncoHappy initiative. Aimed to add life to cancer walls, this project will bring happiness to anyone touched by cancer. If our initiative can make even one cancer ridden heart happy, we will know it was a job well done.
                            <br><a href="donation.php" class="btn btn-primary" style="background-color:  #A9E2F3;color: black; border: 2px solid  #A9E2F3;font-family: Red Hat Display;text-decoration: none; font-size:1.5vw;text-align: center;">DONATE NOW</a>
                            </div>
                        </div>
                    
                  
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="quote" style="text-align: left; ">OUR CAUSES</div>
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <h2 class="col-md-9 col-sm-9 col-xs-12" style="font-size:20px;  font-family:Archivo Black; color: #B404AE;">A hand loses nothing by holding other's hand.</h2>  
            <div class="input-group">
                
                <a href="areas_of_impact.php" class="btn btn-primary" style="background-color:  #A9E2F3;color: black; border: 2px solid  #A9E2F3;font-family: Red Hat Display;text-decoration: none; font-size:1.5vw;text-align: center; margin-bottom: 20px;">SEE ALL CAUSES</a>
            </div>
        </div>

        <div class="cancer">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="images/cancer.jpg" class="card-img-top" alt="" style="width: 100%; height: 280px;">
                        <div class="card-body">
                            <h5 class="card-title">CANCER CARE</h5>
                            <p class="card-text" style="font-size: 15px">An alarming number of cancer patients die every year due to lack of proper care. Love is a magical kind of nourishment, even if it came from strangers.</p>
                            <div>
                                <a href="cancer_care.php" class="readmore" style="font-size: 12px; color:#BDBDBD;" >READ MORE..</a>
                            </div>
                            <div>
                                <a href="donation.php" class="btn btn-primary" style="background-color: #0489B1;color: black; border: 2px solid #0489B1;">DONATE NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="images/women2.jpg" class="card-img-top" alt="" style="width:100%; height: 280px;">
                        <div class="card-body">
                            <h5 class="card-title">WOMEN EMPOWERMENT</h5>
                            <p class="card-text" style="font-size: 15px">Empower a women and will change the world. If every women is given a skill, she can give equal contribution to household.</p>
                            <div>
                                <a href="women_empowerment.php" class="readmore" style="font-size: 12px; color:#BDBDBD;" >READ MORE..</a>
                            </div>
                            <div>
                                <a href="donation.php" class="btn btn-primary" style="background-color : #CEF6E3;color: black; border: 2px solid #CEF6E3;">DONATE NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="images/rehab1.jpg" class="card-img-top" alt="" style="width: 100%; height: 280px;">
                        <div class="card-body">
                            <h5 class="card-title">REHAB RECOVERY</h5>
                            <p class="card-text" style="font-size: 15px">Anyone could be struggling with substance abuse. Addictions can be beaten and find their life's purpose, if they are given enough care.</p>
                            <div>
                                <a href="rehab_recovery.php" class="readmore" style="font-size: 12px; color:#BDBDBD;" >READ MORE..</a>
                            </div>
                            <div>
                                <a href="donation.php" class="btn btn-primary" style="background-color: #F5A9D0;color: black;border: 2px solid #F5A9D0;">DONATE NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin: 0px; padding:0px;">
        <div class="card mb-3" style="max-width: 100%; margin: 0px; padding: 0px; background-image: url('images/white.jpg');">
            <div class="row no-gutters">
                <div class="col-md-12">
                    
                    <div class="container" style="padding-bottom: 5%;">
                        <div class="quote">ABOUT US</div>
                        <div style="text-align: center;">In the spirit of giving back to society,that Happy Bubbles was born.The difference between our dreams and theirs is what jolted us to reality and what started with just one person has now become no less than a community which believesin the power of dreams. Our mission is to bring together all the hearts who wish to do something for the underprivileged but are caught in their day to day responsibilities.
                        <br><a href="donation.php" class="btn btn-primary" style="background-color:  #A9E2F3;color: black; border: 2px solid  #A9E2F3;font-family: Red Hat Display;text-decoration: none; font-size:1.5vw;text-align: center;">LEARN MORE</a>
                        </div>
                    </div>
                    
                </div>   
            </div>
        </div>
        <section class="card mb-3" style="max-width: 100%; margin: 0px; padding: 0px;">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <section class="hands" style="background-image:url('images/blue.jpg'); background-attachment: unset;height: 100%px">
                        <div class="container" style="padding-top: 40px; padding-bottom: 40px;">
                            <div id="carouselExampleCaptions" class="carousel slide" data-interval="1500" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/blue.jpg" class="d-block w-100" alt="..." style="height: 320px;">
                                        <div class="carousel-caption">
                                            <p style="font-size: 15px;">I got in touch with Hands of Hope when we were looking for a Taekwondo coach to train students of Unnatnagar Municipal School, Goregaon West, for an upcoming state level competition. Hands of Hope helped us by funding for a coach. Our students earned medals and a new-found confidence, not to mention new opportunities in the field of Taekwondo. I would like to thank Hands of Hope for their support and we are glad to be associated with them.</p>

                                            <h3 style="font-size: 2.5vw;">Madhura Jadhav (Mumbai, India)</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/blue.jpg" class="d-block w-100" alt="..." style="height: 320px;">
                                        <div class="carousel-caption">
                                            <p style="font-size: 15px;">Changing the lives of the unfortunate is a continuous process. Nothing can be done in a limited period. As individuals we must continue to give support by way of financial help, time as well as other resources. I believe in continuity and devotion without deviation. Hands of Hope is doing just that. Witnessing their unconditional love and devotion for making a better future for many less privileged, motivates me to do more.</p>

                                            <h3 style="font-size: 2.5vw;">Raina Rawat (Mumbai, India)</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/blue.jpg" class="d-block w-100" alt="..." style="height: 320px;">
                                        <div class="carousel-caption">
                                            <p style="font-size: 15px;">Hands of Hope truly inspires me to lead a different life. In world driven by success and wealth, they enable people to discover success and wealth within themselves, so it can be shared with the world!</p>
                                            <h3 style="font-size: 2.5vw;">Ronak Bhatt (Houston, USA)</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/blue.jpg" class="d-block w-100" alt="..." style="height: 320px;">
                                        <div class="carousel-caption">
                                            <p style="font-size: 15px;">Changing the lives of the unfortunate is a continuous process. Nothing can be done in a limited period. As individuals we must continue to give support by way of financial help, time as well as other resources. I believe in continuity and devotion without deviation. Hands of Hope is doing just that. Witnessing their unconditional love and devotion for making a better future for many less privileged, motivates me to do more.</p>
                                            <h3 style="font-size: 2.5vw;">Mansi Mehta (Mumbai, India)</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/blue.jpg" class="d-block w-100" alt="..." style="height: 320px;">
                                        <div class="carousel-caption">
                                           
                                            <p style="font-size: 15px;">I was honored to be part of #goldishappy event on September 23, 2019. There is an inexplicable happiness that courses through you when you see under privileged children having the time of your life. Our problems seems so tiny in the face of what these children go through, every single day of their lives. We celebrated with music and dance and had a great time! These kids made me realize the value of the present and I intend to live each moment to the fullest!</p>
                                            <h3 style="font-size: 2.5vw;">Mayur Nagarsheth (California, USA)</h3>
                                        </div>
                                    </div>
                                </div>

                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                    
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                    
                                </a>
                            </div>    
                        </div>
                    </section>
                </div>   
            </div>
        </div>
    </section>   

   <?php include 'footer.php' ?>
</body>
</html>