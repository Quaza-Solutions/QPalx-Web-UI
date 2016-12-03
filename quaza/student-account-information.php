<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org">
   
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">


    <style>
      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 120px;
        height: 120px;
		/*
        width: 250px;
        height: 250px;*/
      }

      .cropit-preview-image-container {
        cursor: move;
      }

      .image-size-label {
        margin-top: 10px;
      }

      input {
        display: block;
      }

      button[type="submit"] {
        margin-top: 10px;
      }

      #result {
        margin-top: 10px;
        width: 900px;
      }

      #result-data {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        word-wrap: break-word;
      }
	  .round_image {
		  border-radius: 50%;
		  width: 120px;
		  height: 120px;
	  }
    </style>
  </head>
  <body>
 <header>
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 logo"></div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><img class="header-buttons" src="assets/account-button.png" /></div>
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><img id="header-button" class="header-buttons" src="assets/sign-out-button.png" /></div>
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
  </div>
  </header>

  
<div class="container" style="margin: 20px auto 20px auto;">
   <div class="row">
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
           
        
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="image-editor">
        <input type="file" class="cropit-image-input">
        
        <?php

session_start();
if(isset($_POST["submit"])){
	
$_SESSION["image-data"] = $_POST["image-data"];

$image = $_SESSION["image-data"];
}

if (empty($image)) {

?>
        <div class="cropit-preview"></div>
        <div class="image-size-label">
          Resize image
        </div>
        
<?php } else {echo "<img src=" . $image . " class='round_image' />";} ?>

        <input type="range" class="cropit-image-zoom-input">
        <input type="hidden" name="image-data" class="hidden-image-data" />
		<button type='button' style="width: 40px;" class="rotate-ccw fa fa-rotate-left btn btn-success"></button>
      <button type='button' style="width: 40px;" class="rotate-cw fa fa-rotate-right btn btn-success"></button>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
      
    <!--div id="result">
      <code>$form.serialize() =</code>
      <code id="result-data"></code>
    </div-->


      <div class="clear"></div>
     </div>
     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
     <br />
    <div class="large-font">Student Account Information</div>
<div class="large-font">Emmanuel Addy Lamptey</div>
Success ID: GH-ACC-1230037<br />
</div>
     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     
     </div>
</div>
</div>
  
<div class="container" style="margin: 20px auto 20px auto; background-color: #e6e7e9; padding: 0;">
<div class="blue-box" id="box-1"><img src="images/circled-checkmark.png" class="box-icon" /><br />View Overall <br />
Student Proficiency</div>
<div class="blue-box" id="box-2"><img src="images/lightning-arrow.png" class="box-icon" /><br />View Overall <br />
Student Progress</div>
<div class="blue-box" id="box-3"><img src="images/arrow-clock.png" class="box-icon" /><br />Your Subscription<br />
Expires in 5 Days<br />
Click <a href="#" style="color: #fff;">Here</a> to Renew</div>
</div>

<div class="container" style="margin: 20px auto 20px auto;">
<div class="row">
<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="padding-left: 50px; font-size: 29px;">
Subscription Details
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 50px; font-size: 24px;">
Subscription Type
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="font-size: 24px;">
Subscription Purchase Date
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 50px; font-size: 24px;">
Monthly
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="font-size: 24px;">
11/02/16
</div>
</div>
</div>

<div class="container" style="margin: 20px auto 20px auto;">
<form>
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left: 50px; font-size: 29px;">
Account Details
</div>
</div>
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text" style="padding-left: 50px;">
<b>First Name</b>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
<b>Last Name</b>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
<b>Email</b>
</div>
</div>
<br />
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text" style="padding-left: 50px">
Zoey
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
Johnson
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
 <input type="text" name="email" value="zoeyljohnson@gmail.com" size="35" />
</div>
</div>
<br />
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text" style="padding-left: 50px;">
<b>Password</b>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
<b>Confirm Password</b>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
<b>Phone</b>
</div>
</div>
<br />
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
 <input style="margin-left: 32px;" type="password" name="email" value="zoeyljohnson" size="32" />
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
 <input type="password" name="email" value="zoeyljohnson" size="35" />
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
 <input type="text" name="email" value="(843) 446 - 5478" size="35" />
</div>
</div>
<br />
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text" style="padding-left: 50px;">
<b>Education Level</b>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
<b>Grade Level</b>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
<b>Current School</b>
</div>
</div>
<br />
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
 
   <select name="degree" class="dropdown-3" style="margin-left: 32px;">
  <option value="High School">High School</option>
  <option value="Bachelor's">Bachelor's</option>
  <option value="Master's">Master's</option>
  <option value="Doctorate">Doctorate</option>
</select>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
   <select id="grade" name="grade" class="dropdown-2">
   <option value="SHS 1">SHS 1</option>
  <option value="Freshman">Freshman</option>
  <option value="Sophomore">Sophomore</option>
  <option value="Junior">Junior</option>
  <option value="Senior">Senior</option>
</select>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
 <input type="text" name="email" value="Accra Academy" size="35" />
</div>
</div>
<br />
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text" style="padding-left: 50px;">
<b>Country</b>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
<b>Region</b>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
</div>
</div>
<br />
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
 
 <select style="margin-left: 32px;" id="countries" name="countries" class="dropdown-3">
<option value="Afghanistan">Afghanistan</option>
<option value="Ã…land Islands">Ã…land Islands</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guernsey">Guernsey</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jersey">Jersey</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Province of China">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>

</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
 <select id="region" name="region" class="dropdown-2">
  <option value="Western Region">Western Region</option>
  <option value="Greater Accra">Greater Accra</option>
</select>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 large-text">
 
<img src="images/save-button.png" />
</div>
</div>
<br /><br /><br />
</form>
</div>
<div class="row bottom-6">
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bottom-4">
<img src="assets/Social-Icons-01.png" class="social-icons" />
<img src="assets/Social-Icons-02.png" class="social-icons" />
<img src="assets/Social-Icons-03.png" class="social-icons" />
<br /><br />
<p class="copyright">&copy; 2016 QPALX. All rights reserved</p>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bottom-5">
<p>Contact Us<br />
hello@qpalx.com<br />
Studio M, 4th Floor 8 Lower<br />
Manchester Street, M1 SQF<br />
+34 393 323 32 22</p>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 float-right">
<p>Subscribe Now<br />
Sign up to stay up to date with our<br />
latest news</p>

<input type="text" name="email" class="textbox" value="&nbsp;&nbsp;&nbsp;Enter Email Address">
<img src="assets/sign-up-button.png" class="sign-up" />
</div>
</div>
<footer>
</footer>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script-->
    <!--script type="text/javascript" src="js/jquery.Jcrop.js"></script>
    <script type="text/javascript" src="js/jquery.SimpleCropper.js"></script-->
    
	<script src="js/jquery.cropit.js"></script>
     <script src="js/hr.js"></script>
     <script src="js/hover.js"></script>
     <script src="js/modal.js"></script>
     <script src="js/progress-bar.js" type="text/javascript"></script>
     <script src="js/modernizr.js" type="text/javascript"></script>

      
    <script>
      $(function() {
        $('.image-editor').cropit();

        $('form').submit(function() {
          // Move cropped image data to hidden input
          var imageData = $('.image-editor').cropit('export');
          $('.hidden-image-data').val(imageData);

          // Print HTTP request params
          var formValue = $(this).serialize();
          $('#result-data').text(formValue);

          // Prevent the form from actually submitting
          //return false;
		  return true;
        });
		
		
        $('.rotate-cw').click(function() {
          $('.image-editor').cropit('rotateCW');
        });
        $('.rotate-ccw').click(function() {
          $('.image-editor').cropit('rotateCCW');
        });
      });
    </script>
  </body>
</html>