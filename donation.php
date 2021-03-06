<?php

 include 'navbar.php';
?>

<html lang="en">
	<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    

    <!--Font awesome css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



	<title>Hands of Hope</title>

	<style type="text/css">
		
		body {
 
  font-family: Montesserat-Semibold, sans-serif;
}



#heading{
  
  
  padding-bottom: 30px;
  text-align: center; 
  font-size:100px;
  font-family:cursive;
  font-weight: bolder;
  color: #FFFFFF;

  }
  
  
.donateImage{
	background-image: url('images/background.jpg');
	background-attachment: unset;
       position: relative;
      background-repeat: no-repeat;
      padding-top: 50px;
      padding-bottom: 50px;
      background-size: cover;
      text-align: center;
     
      background-position: center center;

}
.required{
	color: red;
}

		
	</style>
    
  </head>
  <body>
   <section  class="donateImage">
   			
   				 	<div class="container-fluid" style="padding-top: 200px;">
   				
   						<h1 id="heading">Donate</h1>
   				
   					</div> 	
  
     </section> 
              <div class="container" style="position: relative;padding-top: 50px;">
      
         
          
            <form id="paymentSelection" action="pay.php" method="POST">
             
             <h3 style="font-family: Montserrat-SemiBold;font-size:40px;">How Much Would you like to Donate?</h3><br>
             <div class="container" style="background-color: #f3f3f3;padding-top: 15px;">

                <div class="row">
                  <div class="form-group col-lg">
                      <div class="field-label"  style="font-size:20px;">I want to donate for</div><br>
                          <select class="form-control form-control-md" id="cause" name="cause" style="background-color:#faf5f5;"required>
                              <option value="">Select</option>
                              <option value="cancer care">Cancer care</option>
                              <option value="women empowerment">Women empowerment</option>
                              <option value="rehab recovery">Rehab recovery</option>
                              <option value="spiritual healing">Spiritual holistic healing</option>
                              <option value="sports">Sports</option>
                              <option value="acid survivors">Acid survivors</option>
                              <option value="animal welfare">Animal welfare</option>
                              <option value="education">Education</option>
                              <option value="old age">Old age</option>
                              <option value="mental health">Mental health</option>
                              <option value="rural development">Rural Development</option>
                          </select>
                  </div>



                  <!--<div class="form-group col-lg">
                      <div class="field-label"  style="font-size:20px;">Currency</div><br>
                          <select class="form-control form-control-md" id="currencySelect" name="currencySelect" style="background-color:#faf5f5;" required>
                              <option value="">Select</option>
                              <option value="INR">INR</option>
                              <option value="USD">USD</option>
                              <option value="AED">AED</option>
                          </select>
                  </div>-->


                  <div class="form-group col-lg">
                      <div class="field-label" style="font-size:20px;">Amount</div><br>
                          <input class="form-control form-control-md" type="text" id="amt" name="amt" value=""style="background-color:#faf5f5;" required>&nbsp;&nbsp;
                  </div>


                  
        </div>
        <hr>
       
        
            <h3>Personal Details</h3>
           
            <div class="row" style="padding-bottom: 10px;">
              
                 
                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                  
                  <div class="field-label" style="font-size:20px;">First name<span class="required">*</span></div>
                  <input class="form-control form-control-md" type="text" name="fname" id="fname" value="" placeholder="Enter first name" required>
                </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                  <div class="field-label" style="font-size: 20px;">Last name<span class="required">*</span></div>
                  <input class="form-control form-control-md" type="text" name="lname" id="lname" value="" placeholder="Enter last name" required>
                </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                  <div class="field-label" style="font-size:20px;">Email<span class="required">*</span></div>
                  <input class="form-control form-control-md" type="text" name="email" id="email" value="" placeholder="Enter email address" required>
                </div>

                

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                  <div class="field-label" style="font-size:20px;">Phone<span class="required">*</span></div>
                  <input class="form-control form-control-md" type="text" name="phone" id="phone" value="" placeholder="Enter contact number" required>
                </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                  <div class="field-label" style="font-size:20px;">Address 1<span class="required">*</span></div>
                  <input class="form-control form-control-md" type="text" name="address1" id="address1" value="" placeholder="Enter address" required>
                </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                  <div class="field-label" style="font-size:20px;">Address 2</div>
                  <input class="form-control form-control-md" type="text" name="address2" id="address2" value="" placeholder="Enter address">
                </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                  <div class="field-label" style="font-size:20px;">Country <span class="required">*</span></div>
                    <select id="country" name="country" class="form-control" required>
                      <option value="">Select Country</option>
                      <option name="country" value="Afghanistan">Afghanistan</option>
                      <option name="country" value="Åland Islands">Åland Islands</option>
                      <option name="country" value="Albania">Albania</option>
                      <option name="country" value="Algeria">Algeria</option>
                      <option name="country" value="American Samoa">American Samoa</option>
                      <option name="country" value="Andorra">Andorra</option>
                      <option name="country" value="Angola">Angola</option>
                      <option name="country" value="Anguilla">Anguilla</option>
                      <option name="country" value="Antarctica">Antarctica</option>
                      <option name="country" value="Antigua and Barbuda">Antigua and Barbuda</option>
                      <option name="country" value="Argentina">Argentina</option>
                      <option name="country" value="Armenia">Armenia</option>
                      <option name="country" value="Aruba">Aruba</option>
                      <option name="country" value="Australia">Australia</option>
                      <option name="country" value="Austria">Austria</option>
                      <option name="country" value="Azerbaijan">Azerbaijan</option>
                      <option name="country" value="Bahamas">Bahamas</option>
                      <option name="country" value="Bahrain">Bahrain</option>
                      <option name="country" value="Bangladesh">Bangladesh</option>
                      <option name="country" value="Barbados">Barbados</option>
                      <option name="country" value="Belarus">Belarus</option>
                      <option name="country" value="Belgium">Belgium</option>
                      <option name="country" value="Belize">Belize</option>
                      <option name="country" value="Benin">Benin</option>
                      <option name="country" value="Bermuda">Bermuda</option>
                      <option name="country" value="Bhutan">Bhutan</option>
                      <option name="country" value="Bolivia">Bolivia</option>
                      <option name="country" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                      <option name="country" value="Botswana">Botswana</option>
                      <option name="country" value="Bouvet Island">Bouvet Island</option>
                      <option name="country" value="Brazil">Brazil</option>
                      <option name="country" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                      <option name="country" value="Brunei Darussalam">Brunei Darussalam</option>
                      <option name="country" value="Bulgaria">Bulgaria</option>
                      <option name="country" value="Burkina Faso">Burkina Faso</option>
                      <option name="country" value="Burundi">Burundi</option>
                      <option name="country" value="Cambodia">Cambodia</option>
                      <option name="country" value="Cameroon">Cameroon</option>
                      <option name="country" value="Canada">Canada</option>
                      <option name="country" value="Cape Verde">Cape Verde</option>
                      <option name="country" value="Cayman Islands">Cayman Islands</option>
                      <option name="country" value="Central African Republic">Central African Republic</option>
                      <option name="country" value="Chad">Chad</option>
                      <option name="country" value="Chile">Chile</option>
                      <option name="country" value="China">China</option>
                      <option name="country" value="Christmas Island">Christmas Island</option>
                      <option name="country" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                      <option name="country" value="Colombia">Colombia</option>
                      <option name="country" value="Comoros">Comoros</option>
                      <option name="country" value="Congo">Congo</option>
                      <option name="country" value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                      <option name="country" value="Cook Islands">Cook Islands</option>
                      <option name="country" value="Costa Rica">Costa Rica</option>
                      <option name="country" value="Cote D'ivoire">Cote D'ivoire</option>
                      <option name="country" value="Croatia">Croatia</option>
                      <option name="country" value="Cuba">Cuba</option>
                      <option name="country" value="Cyprus">Cyprus</option>
                      <option name="country" value="Czech Republic">Czech Republic</option>
                      <option name="country" value="Denmark">Denmark</option>
                      <option name="country" value="Djibouti">Djibouti</option>
                      <option name="country" value="Dominica">Dominica</option>
                      <option name="country" value="Dominican Republic">Dominican Republic</option>
                      <option name="country" value="Ecuador">Ecuador</option>
                      <option name="country" value="Egypt">Egypt</option>
                      <option name="country" value="El Salvador">El Salvador</option>
                      <option name="country" value="Equatorial Guinea">Equatorial Guinea</option>
                      <option name="country" value="Eritrea">Eritrea</option>
                      <option name="country" value="Estonia">Estonia</option>
                      <option name="country" value="Ethiopia">Ethiopia</option>
                      <option name="country" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                      <option name="country" value="Faroe Islands">Faroe Islands</option>
                      <option name="country" value="Fiji">Fiji</option>
                      <option name="country" value="Finland">Finland</option>
                      <option name="country" value="France">France</option>
                      <option name="country" value="French Guiana">French Guiana</option>
                      <option name="country" value="French Polynesia">French Polynesia</option>
                      <option name="country" value="French Southern Territories">French Southern Territories</option>
                      <option name="country" value="Gabon">Gabon</option>
                      <option name="country" value="Gambia">Gambia</option>
                      <option name="country" value="Georgia">Georgia</option>
                      <option name="country" value="Germany">Germany</option>
                      <option name="country" value="Ghana">Ghana</option>
                      <option name="country" value="Gibraltar">Gibraltar</option>
                      <option name="country" value="Greece">Greece</option>
                      <option name="country" value="Greenland">Greenland</option>
                      <option name="country" value="Grenada">Grenada</option>
                      <option name="country" value="Guadeloupe">Guadeloupe</option>
                      <option name="country" value="Guam">Guam</option>
                      <option name="country" value="Guatemala">Guatemala</option>
                      <option name="country" value="Guernsey">Guernsey</option>
                      <option name="country" value="Guinea">Guinea</option>
                      <option name="country" value="Guinea-bissau">Guinea-bissau</option>
                      <option name="country" value="Guyana">Guyana</option>
                      <option name="country" value="Haiti">Haiti</option>
                      <option name="country" value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                      <option name="country" value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                      <option name="country" value="Honduras">Honduras</option>
                      <option name="country" value="Hong Kong">Hong Kong</option>
                      <option name="country" value="Hungary">Hungary</option>
                      <option name="country" value="Iceland">Iceland</option>
                      <option name="country" value="India">India</option>
                      <option name="country" value="Indonesia">Indonesia</option>
                      <option name="country" value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                      <option name="country" value="Iraq">Iraq</option>
                      <option name="country" value="Ireland">Ireland</option>
                      <option name="country" value="Isle of Man">Isle of Man</option>
                      <option name="country" value="Israel">Israel</option>
                      <option name="country" value="Italy">Italy</option>
                      <option name="country" value="Jamaica">Jamaica</option>
                      <option name="country" value="Japan">Japan</option>
                      <option name="country" value="Jersey">Jersey</option>
                      <option name="country" value="Jordan">Jordan</option>
                      <option name="country" value="Kazakhstan">Kazakhstan</option>
                      <option name="country" value="Kenya">Kenya</option>
                      <option name="country" value="Kiribati">Kiribati</option>
                      <option name="country" value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                      <option name="country" value="Korea, Republic of">Korea, Republic of</option>
                      <option name="country" value="Kuwait">Kuwait</option>
                      <option name="country" value="Kyrgyzstan">Kyrgyzstan</option>
                      <option name="country" value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                      <option name="country" value="Latvia">Latvia</option>
                      <option name="country" value="Lebanon">Lebanon</option>
                      <option name="country" value="Lesotho">Lesotho</option>
                      <option name="country" value="Liberia">Liberia</option>
                      <option name="country" value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                      <option name="country" value="Liechtenstein">Liechtenstein</option>
                      <option name="country" value="Lithuania">Lithuania</option>
                      <option name="country" value="Luxembourg">Luxembourg</option>
                      <option name="country" value="Macao">Macao</option>
                      <option name="country" value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                      <option name="country" value="Madagascar">Madagascar</option>
                      <option name="country" value="Malawi">Malawi</option>
                      <option name="country" value="Malaysia">Malaysia</option>
                      <option name="country" value="Maldives">Maldives</option>
                      <option name="country" value="Mali">Mali</option>
                      <option name="country" value="Malta">Malta</option>
                      <option name="country" value="Marshall Islands">Marshall Islands</option>
                      <option name="country" value="Martinique">Martinique</option>
                      <option name="country" value="Mauritania">Mauritania</option>
                      <option name="country" value="Mauritius">Mauritius</option>
                      <option name="country" value="Mayotte">Mayotte</option>
                      <option name="country" value="Mexico">Mexico</option>
                      <option name="country" value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                      <option name="country" value="Moldova, Republic of">Moldova, Republic of</option>
                      <option name="country" value="Monaco">Monaco</option>
                      <option name="country" value="Mongolia">Mongolia</option>
                      <option name="country" value="Montenegro">Montenegro</option>
                      <option name="country" value="Montserrat">Montserrat</option>
                      <option name="country" value="Morocco">Morocco</option>
                      <option name="country" value="Mozambique">Mozambique</option>
                      <option name="country" value="Myanmar">Myanmar</option>
                      <option name="country" value="Namibia">Namibia</option>
                      <option name="country" value="Nauru">Nauru</option>
                      <option name="country" value="Nepal">Nepal</option>
                      <option name="country" value="Netherlands">Netherlands</option>
                      <option name="country" value="Netherlands Antilles">Netherlands Antilles</option>
                      <option name="country" value="New Caledonia">New Caledonia</option>
                      <option name="country" value="New Zealand">New Zealand</option>
                      <option name="country" value="Nicaragua">Nicaragua</option>
                      <option name="country" value="Niger">Niger</option>
                      <option name="country" value="Nigeria">Nigeria</option>
                      <option name="country" value="Niue">Niue</option>
                      <option name="country" value="Norfolk Island">Norfolk Island</option>
                      <option name="country" value="Northern Mariana Islands">Northern Mariana Islands</option>
                      <option name="country" value="Norway">Norway</option>
                      <option name="country" value="Oman">Oman</option>
                      <option name="country" value="Pakistan">Pakistan</option>
                      <option name="country" value="Palau">Palau</option>
                      <option name="country" value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                      <option name="country" value="Panama">Panama</option>
                      <option name="country" value="Papua New Guinea">Papua New Guinea</option>
                      <option name="country" value="Paraguay">Paraguay</option>
                      <option name="country" value="Peru">Peru</option>
                      <option name="country" value="Philippines">Philippines</option>
                      <option name="country" value="Pitcairn">Pitcairn</option>
                      <option name="country" value="Poland">Poland</option>
                      <option name="country" value="Portugal">Portugal</option>
                      <option name="country" value="Puerto Rico">Puerto Rico</option>
                      <option name="country" value="Qatar">Qatar</option>
                      <option name="country" value="Reunion">Reunion</option>
                      <option name="country" value="Romania">Romania</option>
                      <option name="country" value="Russian Federation">Russian Federation</option>
                      <option name="country" value="Rwanda">Rwanda</option>
                      <option name="country" value="Saint Helena">Saint Helena</option>
                      <option name="country" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                      <option name="country" value="Saint Lucia">Saint Lucia</option>
                      <option name="country" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                      <option name="country" value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                      <option name="country" value="Samoa">Samoa</option>
                      <option name="country" value="San Marino">San Marino</option>
                      <option name="country" value="Sao Tome and Principe">Sao Tome and Principe</option>
                      <option name="country" value="Saudi Arabia">Saudi Arabia</option>
                      <option name="country" value="Senegal">Senegal</option>
                      <option name="country" value="Serbia">Serbia</option>
                      <option name="country" value="Seychelles">Seychelles</option>
                      <option name="country" value="Sierra Leone">Sierra Leone</option>
                      <option name="country" value="Singapore">Singapore</option>
                      <option name="country" value="Slovakia">Slovakia</option>
                      <option name="country" value="Slovenia">Slovenia</option>
                      <option name="country" value="Solomon Islands">Solomon Islands</option>
                      <option name="country" value="Somalia">Somalia</option>
                      <option name="country" value="South Africa">South Africa</option>
                      <option name="country" value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                      <option name="country" value="Spain">Spain</option>
                      <option name="country" value="Sri Lanka">Sri Lanka</option>
                      <option name="country" value="Sudan">Sudan</option>
                      <option name="country" value="Suriname">Suriname</option>
                      <option name="country" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                      <option name="country" value="Swaziland">Swaziland</option>
                      <option name="country" value="Sweden">Sweden</option>
                      <option name="country" value="Switzerland">Switzerland</option>
                      <option name="country" value="Syrian Arab Republic">Syrian Arab Republic</option>
                      <option name="country" value="Taiwan, Province of China">Taiwan, Province of China</option>
                      <option name="country" value="Tajikistan">Tajikistan</option>
                      <option name="country" value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                      <option name="country" value="Thailand">Thailand</option>
                      <option name="country" value="Timor-leste">Timor-leste</option>
                      <option  name="country" value="Togo">Togo</option>
                      <option name="country" value="Tokelau">Tokelau</option>
                      <option name="country" value="Tonga">Tonga</option>
                      <option name="country" value="Trinidad and Tobago">Trinidad and Tobago</option>
                      <option name="country" value="Tunisia">Tunisia</option>
                      <option name="country" value="Turkey">Turkey</option>
                      <option name="country" value="Turkmenistan">Turkmenistan</option>
                      <option name="country" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                      <option name="country" value="Tuvalu">Tuvalu</option>
                      <option name="country" value="Uganda">Uganda</option>
                      <option name="country" value="Ukraine">Ukraine</option>
                      <option name="country" value="United Arab Emirates">United Arab Emirates</option>
                      <option name="country" value="United Kingdom">United Kingdom</option>
                      <option name="country" value="United States">United States</option>
                      <option name="country" value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                      <option name="country" value="Uruguay">Uruguay</option>
                      <option name="country" value="Uzbekistan">Uzbekistan</option>
                      <option name="country" value="Vanuatu">Vanuatu</option>
                      <option name="country" value="Venezuela">Venezuela</option>
                      <option name="country" value="Viet Nam">Viet Nam</option>
                      <option name="country" value="Virgin Islands, British">Virgin Islands, British</option>
                      <option name="country" value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                      <option name="country" value="Wallis and Futuna">Wallis and Futuna</option>
                      <option name="country" value="Western Sahara">Western Sahara</option>
                      <option name="country" value="Yemen">Yemen</option>
                      <option name="country" value="Zambia">Zambia</option>
                      <option name="country" value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                  <div class="field-label" style="font-size:20px;">Zip/Postal code<span class="required">*</span></div>
                  <input class="form-control form-control-md" type="text" name="zipcode" id="zipcode" value="" placeholder="Enter zip code" required>
                </div><br>

            <div class="form-portlet col-lg-4 col-md-4 col-xs-8" style="border-bottom-width: 0px; margin-bottom: 0px;">
              <input  type="submit" id="submitButton" value="Submit" class="col-lg" style="font-size: 30px; background-color:#A9E2F3;border-radius: 5px;">
            </div>
        </form>
    
        <br>
        <div class="col-lg-4 col-md-4 col-xs-8" >
        <div  style="display: none; text-align: center; color:red;" id="errorMessage"></div>
        </div>
    </div>
    </div>
    </div>
    </div>
     </div><br><br>

 </div>
  <!-- <footer style="padding-top: 40px;">
	 			<div class="container-fluid" style="background-color: black;color:#FFFFFF;">
            <div class="row" style="padding-top: 30px;">
                <div class="col-4 col-sm-3" >

                    <h1 style="font-family:cursive;font-size:30px; color: #A9E2F3">Hands of Hope</h1><br><br>
                    <p>Live Your Dream Foundation<br><br>Section 8, Companies Act 2013.<br> CIN: U74900MH2015NPL270511.</p>
                </div>

                <div class="col-6 col-sm-3">
                    <h5>Quick Links</h5>
                    <hr>
                    <ul class="list-unstyled">
                        <li><a href="homepage.php">Home</a></li><br>
                        <li><a href="knowusbetter.html">About Us</a></li><br>
                        <li><a href="areas_of_impact.php">Our Causes</a></li><br>
                        <li><a href="sayhello.html">Contact Us</a></li><br>
                        <li><a href="volunteer.php">Become a volunteer</a></li><br>
                        <li><a href="donation.php">Donate</a></li>
                    </ul>
                </div>

                <div class="col-6 col-sm-3">
                    <h5>Contact Us</h5>
                   
                        <hr>
                        <i class="fa fa-phone" aria-hidden="true"></i> <a target="_blank" href="tel:+91-9483434297">  +91-9483434297</a><br>
                        <i class="fa fa-whatsapp" aria-hidden="true"></i> <a target="_blank"href="https://api.whatsapp.com/send?phone=7483948651"> +91-7483948651</a><br>
                        <i class="fa fa-envelope" aria-hidden="true"></i><a target="_blank"href="mailto:handsofhope@gmail.com">  handsofhope@gmail.com</a><br><br>
                        <p>Working hours</p>
                        <p>9 am to 7 pm</p>
                </div>

                <div class="col col-sm">
                  <h5>Our NewsLetter</h5>
                    <hr>
                    <div>
                      <form  action="subscribe.php" method="POST">
                          <input type="text" name="subscribeMail" style="color: black;">
                          <button style="background-color: #A9E2F3; color: black;">Subscribe</button>
                      </form>
                    </div>
                    <br><br>

                    <div>
                      <h5>Connect with us</h5>
                      <hr>
                      <div class="social-icons">
                      <a  target="_blank" href="https://www.facebook.com/handsofhope.in"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                     <a  target="_blank" href="https://www.instagram.com/handsofhope.in/">  <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                      <a target="_blank"  href="https://twitter.com/handsofhope_in" > <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                     <a target="_blank"  href="https://www.linkedin.com/company/hands-of-hope/">  <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                      <a target="_blank" href="https://www.youtube.com/results?search_query=hands+of+hope"> <i class="fa fa-youtube-play" aria-hidden="true" ></i> </a>
                    </div>
                    </div>
                
            </div>
          </div>
                  <div class="row justify-content-center" style="background-color: darkgray; color: black;">
                    <div class="col-auto">
                        <div>Created by : <a href="http://www.newtoncreatlab.com/" target="_blank" style="color:blue;">www.newtoncreatlab.com</a></div>
                    </div>
                    <div class="col-auto">
                      <div>&copy; Copyrights @<a href="#" style="color: blue;"> Hands of Hope</a> 2018</div>
                    </div>

                     
                  </div>
        
       </div>
              
</footer>-->
	<?php include 'footer.php'; ?>

  
          <!---->
  


   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript">
      function isEmail(email){
        var regex= /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);



      }

     function isPhone(phone){

        var regex=/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        //if($.isNumeric($("#phone").val())==false){
          return regex.test(phone);

      
      }

      function isAmount(amt){
        if($.isNumeric($("#amt").val())==false){
          return false;
        }
      }
     /* function isCardName(ccname){
        var regex=/^[a-zA-Z ]+$/;
        return regex.test(ccname);
      }

      function isCardNumber(ccnum){
      
        var regex=/^(\d{4}-){3}\d{4}$|^(\d{4} ){3}\d{4}$|^\d{16}$/;
        return regex.test(ccnum);
      }

      function isExpiry(expiry){
        var regex=/^(?:0?[1-9]|1[0-2]) *\/ *[1-9][0-9]$/;
        return regex.test(expiry);
      }
      function isCvv(cvv){
        var regex=/^[0-9]{3}$/;
        return regex.test(cvv);
      }*/

      $("#submitButton").click(function(){

        // $("form").submit(function(e){
            //e.preventDefault();

        //});

        var errorMessage="";
        if(isEmail($("#email").val())==false && $("#email").val()!=""){
            errorMessage+="<strong>Please enter a valid email address</strong><br>";
         
        }

        if(isPhone($("#phone").val())==false && $("#phone").val()!=""){
            errorMessage+="<strong>Please enter a valid phone number</strong><br>";
        }

        if(isAmount($("#amt").val())==false && $("#amt").val()!=""){
            errorMessage+="<strong>Amount value entered is not numeric</strong><br>";
        }
       /* if(isCardName($("#ccname").val())==false && $("#ccname").val()!=""){
            errorMessage+="<strong>Please enter the correct name on your card</strong><br>";
        }

        if(isCardNumber($("#ccnum").val())==false && $("#ccnum").val()!=""){
            errorMessage+="<strong>Please enter the correct credit card number</strong><br>";
        }

        if(isExpiry($("#expiry").val())==false && $("#expiry").val()!=""){
            errorMessage+="<strong>Please enter the correct card expiry info</strong>";
        }
        if(isCvv($("#cvv").val())==false && $("#cvv").val()!=""){
            errorMessage+="<strong>Please enter the correct cvv</strong>";
        }*/

        if(errorMessage!="")
        {
          $("#errorMessage").html(errorMessage);
          $("#errorMessage").show();
          return false;
        }
        else{
          $("#errorMessage").hide();
          return true;
        }

        //$("form").unbind('submitButton').submit();

      });
      
   
       



      
    </script>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


