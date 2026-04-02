<?php 
   include ('admin/include/config.php');
   include ('include/header.php');
   $counties = get_counties($conn );    
   $state_options = get_state_options($conn,'101');   
    ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.3.5/css/intlTelInput.css"/>
<style>
   .iti-phone-input {
   width: 100%;
   padding: 10px;
   box-sizing: border-box;
   margin-top: 10px;
   }
   /* Make the intl-tel-input wrapper full width */
   .iti.iti--separate-dial-code {
   width: 100%;
   }
   .error{ margin-top:10px; }
   .select2-container--default .select2-selection--single .select2-selection__rendered {
   color: #444;
   line-height: 36px;
   background-color: #fff !important;
   background-clip: padding-box !important;
   border: 1px solid #ced4da !important;
   }
   .select2-container--default .select2-selection--single .select2-selection__rendered {
   color: #444;
   line-height: 38px!important;
   }
   .select2-container--default .select2-selection--single {
   border: none!important;
   }
   .form-dropdown {
   padding: 10px 5px 10px 5px;
   width: 100%;
   border: 1px solid #ced4da;
   color: #75797d;
   }
</style>
<?php
   if(isset($_REQUEST['btnContactSubmits'])){  
   	
   	
   	$msgFail = "";
   	if($_SERVER['HTTP_HOST'] != 'localhost'){
   	if(!empty($_POST)){
   		$recaptcha_secret = '6LeME4orAAAAAEKspGYY5ZFBX7ztEozLanNBARCm';
   		$recaptcha_response = $_POST['g-recaptcha-response'];
   
   		$url = 'https://www.google.com/recaptcha/api/siteverify';
   		$res_data = [
   			'secret' => $recaptcha_secret,
   			'response' => $recaptcha_response
   		];
   
   		$options = [
   			'http' => [
   				'method' => 'POST',
   				'content' => http_build_query($res_data)
   			]
   		];
   
   		$context = stream_context_create($options);
   		$result = file_get_contents($url, false, $context);
   		$json = json_decode($result);
   
   		if ($json->success) {
   		  
   		} else { 
   		   $msgFail = "CAPTCHA is mandatory!";
   		} 
      }
      }
   	
   	 
   	if(empty($msgFail)){
   	
   	$usrnm = $_REQUEST['username'];
   	$name = $_REQUEST['txtName'];
   	$email = $_REQUEST['username']; 
   	$phone = $_REQUEST['mobile'];
   	$country_code = $_REQUEST['country_code'];
   	$message = $_REQUEST['message'];
   
   
   if(isset($_REQUEST['country']) && $_REQUEST['country'] != ''){
   $country = $_REQUEST['country'];
   }else{
   $country ='';
   }
   
   if(isset($_REQUEST['state']) && $_REQUEST['state'] != ''){
   $state = $_REQUEST['state'];
   }else{
   $state ='';
   }
   
   
   if(isset($_REQUEST['city']) && $_REQUEST['city'] != ''){
   $city = $_REQUEST['city'];
   }else{
   $city ='';
   }
   
   
   
   
   	
   	   $Errmsg = '';
       	if($usrnm!=""){
   	    	//$Errmsg = "Invalid data";
   	    }
   		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
   			$Errmsg = "Only letters and white spaces allowed";
   		}
   		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   			$Errmsg = "Invalid email format";
   		}
   		
   		if($Errmsg!=""){
   			$msgFail = "Please enter valid information";
   			
   		}
   		else{
   			if(is_numeric($phone)){
   				// email script start
   				 $to  = "sm@aint.in,sid461@hotmail.com,manjit@rtpltech.com,sumit@royalways.com"; 
   				
   				$subject = "New Contact Message from ".WEBSITE;	   
   				$mail_message = '<html>
   							  <head>
   							  <style>
   								body
   								{
   								font-family:Geneva, Arial, Helvetica, sans-serif
   								}
   								table
   								{
   								text-transform:capitalize
   								}
   								a 
   								{
   								text-decoration:none
   								}
   								h5,h6,h4,h3
   								{
   								font-weight:400
   								}
   								table td,th
   								{
   								padding:10px;
   								}
   								table td
   								{
   								color:#006600;
   								font-size:90%
   								}
   								</style>
   								</head>
   								<body>
   								<div style="width:80%; padding:10px; border:1px solid #ccc; margin:0 auto; box-shadow:0.4px 4px 5px 1px #ccc">						
   									<div style="width:95%; padding:10px; margin:0 auto" align="center">
   										<h2>'.WEBSITE.'</h2></div>			
   										<hr />							
   										<h3>New Contact Message from '.WEBSITE.'</h3>
   										<table style="width:70%;  margin: 0 auto;  padding:7px; text-align:left">
   										 <tr>
   										 <td><b>Name</b></td>
   										 <td>'.$name.'</td>
   										 </tr>
   										 <tr>
   										 <td><b>Email Address</b></td>
   										 <td>'.$email.'</td>
   										 </tr>			 
   										 <tr>
   										 <td><b>Phone Number</b></td>
   										  <td>'.$country_code.' '.$phone.'</td>
   										 </tr>
										<tr>
   										 <td><b>Country</b></td>
   										  <td>'.$country.'</td>
   										 </tr>
										<tr>
   										 <td><b>State</b></td>
   										   <td>'.$state.'</td>
   										 </tr>
										<tr>
   										 <td><b>City</b></td>
   										 <td>'.$city.'</td>
   										 </tr>
   										 <tr>
   										 <td><b>Message</b></td>
   										 <td>'.$message.'</td>
   										 </tr>		
   										 </table>				
   									</div>
   								</body>
   								</html>'; 
   							  
   							 
   							  
   					$message = mysqli_real_escape_string($conn, $message);
   					$current_timestamp = date('Y-m-d H:i:s');
   					$query ="INSERT INTO contacts (name,email,country_code,phone,country,state,city,message,created_at)
   					VALUES ('".$name."', '".$email."','".$country_code."','".$phone."','".$country."','".$state."','".$city."','".$message."','".$current_timestamp."')";
   					$conn->query($query);		  
   							  
   							  
   							 
   							  
   							  
   				$headers  = 'MIME-Version: 1.0' . "\r\n";
   				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";				
   				$headers .= 'From: '.'failtd'.' <'.'info@failtd.com'.'> ' . "\r\n";						 
   				if(@mail($to, $subject, $mail_message, $headers)){ 
   				
   					$msgSuccess = 'Your Message has been sent';
   				}
   				else{
   					$msgFail =  "Please check your internet connection";
   				}
   			}
   			else{
   				$msgFail =  "Please enter valid Phone number";
   			}
   		}
         
   }
   } 
   
   ?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area contact-map">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6848.97373418452!2d76.00764349357911!3d30.873038400000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a9e1daaaaaaab%3A0x8efae90682f76319!2sForge%20Auto%20International%20Ltd!5e0!3m2!1sen!2sin!4v1734503856836!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!--Start Contact Style1 Area-->
<section class="contact-style1-area contact-page">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-md-6 contact-bg" style="background:url(assets/images/breadcrumb/contact-bg.jpg);">
            <div class="contact-style1_map">
               <div class="sec-title">
                  <div class="sub-title">
                     <span class="border-box"></span>
                     <h5>Contact Us</h5>
                  </div>
                  <h2>Corporate Office </h2>
               </div>
               <ul>
                  <li><span><i class="fa fa-user" aria-hidden="true"></i></span> Mr. Rajan Mittal, Mr. Rohit Gupta & Mr. Siddharth Mittal</li>
                  <li><span><i class="fa fa-location-arrow" aria-hidden="true"></i></span> Near Indian Oil Jasbir Petrol Pump, Village Mangarh, Kohara – Machhiwara Road, Ludhiana, Punjab - 141112, India</li>
                  <!-- <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> <a href="tel:+91 89999-99195">+91 89999-99195</a>,&nbsp; <a href="tel:+91-76269-98999"> +91-76269-98999</a></li> -->
                  <!-- <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> <a href="tel:+91 89999-99195">+91 89999-99195</a>,<a href="tel:+91-76269-98999">+91-76269-98999</a></li> -->
                  <li><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:+91-8999999195">+91 89999-99195</a>, <a href="tel:+91-7626998999">+91-76269-98999</a></li>
                  <!-- <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:info@aint.in">info@aint.in</a>,&nbsp; <a href="mailto:siddharthmittal@faipl.com"> siddharthmittal@faipl.com</a></li> -->
                  <!-- <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:siddharthmittal@faipl.com">siddharthmittal@faipl.com</a>,&nbsp; <a href="mailto:siddharthmittal@faipl.com"> siddharthmittal@faipl.com</a></li> -->
                  <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:siddharthmittal@faipl.com">siddharthmittal@faipl.com</a></li>
                  <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:rajanmittal@faipl.com">rajanmittal@faipl.com</a></li>
                  <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:rohitguptaa@faipl.com">rohitguptaa@faipl.com</a></li>
               </ul>
            </div>
         </div>
         <div class="col-xl-6 col-md-6">
            <div class="contact-style1_form contact-style2_form">
               <div class="sec-title">
                  <div class="sub-title">
                     <span class="border-box"></span>
                     <h5>For Any Query</h5>
                  </div>
                  <h2>Fill The Form Below</h2>
                  <?php
                     if(isset($msgFail) && $msgFail!=""){ ?>
                  <div class="alert alert-danger" id="msgDiv"><?php echo $msgFail; ?></div>
                  <?php
                     }
                     if(isset($msgSuccess) && $msgSuccess!=""){ ?>
                  <div class="alert alert-success" id="msgDiv"><?php echo $msgSuccess; ?></div>
                  <?php
                     }
                     ?>
               </div>
               <div class="contact-form">
                  <form id="contactForm" name="contact_form" class="default-form2" onsubmit="setPhoneValues();"   action="" method="post">
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="input-box"> 
                              <input type="text" name="txtName" value="" placeholder="Your Name*" >
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="input-box"> 
                              <input type="email" name="username" value="" placeholder="Email*">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="input-box"> 
                              <input type="text" id="iti_phone_input"  class="iti-phone-input" name="mobile" placeholder="Phone*">
                              <input type="hidden" id="iti_country_code" name="country_code">
                              <input type="hidden" id="iti_mobile_number" name="mobile_number">
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin-top:10px">
                        <div class="col-xl-12">
                           <div class="input-box">
                              <select id="country" name="country" class="form-dropdown" onchange="get_state_city('1')">
                                 <option value="" disabled selected>Select your country</option>
                                 <?php foreach($counties as $country){ ?>
                                 <option data-id="<?php echo $country['id']; ?>" value="<?php echo $country['country']; ?>" <?php if($country['country'] == 'India') { echo 'selected'; }?>><?php echo $country['country']; ?></option>
                                 <?php } ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin-top:10px">
                        <div class="col-xl-12">
                           <div class="input-box"> 
                              <select id="state" name="state"  class="form-dropdown"  onchange="get_state_city('2')">
                              <?php echo $state_options; ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin-top:10px">
                        <div class="col-xl-12">
                           <div class="input-box">
                              <select id="city" name="city" class="form-dropdown" >
                                 <option value="" disabled selected>Select your city</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-6 contact-input mb-3 pl-0">
                     </div>
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="input-box">    
                              <textarea name="message" placeholder="Your Message" ></textarea>
                           </div>
                           <div class="input-box">
                              <div  class="g-recaptcha" data-sitekey="6LeME4orAAAAAAjubWCck5LqqjJ-YQ7IsX6Q6d-I" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
                              <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="hidden"/>
                           </div>
                           <div class="button-box text-center">
                              <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                              <button class="btn-one" type="submit" name="btnContactSubmits" data-loading-text="Please wait...">
                              <span class="txt">Send Message</span>
                              </button> 
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End Contact Style1 Area-->
<?php include ('include/footer.php') ?>
<script src="assets/js/intlTelInput.min.js"></script>
<script src="assets/js/utils.js"></script>
<script>
   const itiInput = document.getElementById("iti_phone_input");
   const countryNameDisplay = document.getElementById("country_name_display");
   
   
   // Get all country data, sort by name alphabetically
   const allCountries = window.intlTelInputGlobals.getCountryData();
   allCountries.sort((a, b) => a.name.localeCompare(b.name));
   
   // Extract ISO2 codes in sorted order
   const sortedCountryCodes = allCountries.map(c => c.iso2);
   
   
   // Initialize intl-tel-input
   const iti = window.intlTelInput(itiInput, {
       initialCountry: "in",
       separateDialCode: true,
       utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.3.5/js/utils.js",
       onlyCountries: sortedCountryCodes // this preserves alphabetical order
   });
   
   // Update hidden fields before submit
   function setPhoneValues() {
       const countryData = iti.getSelectedCountryData();
       document.getElementById("iti_country_code").value = "+" + countryData.dialCode;
       document.getElementById("iti_mobile_number").value = itiInput.value;
   }
   
   // Update country name and hidden country code dynamically on country change
   itiInput.addEventListener("countrychange", function() {
       const countryData = iti.getSelectedCountryData(); 
   var country_name = countryData.name; 
   
    $('#country').val(country_name).trigger('change');
   
       
   });
</script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script> 
   $('#country').select2();
       $('#state').select2();
   
   $.validator.addMethod("custom_desc", function(value, element) {
       return this.optional(element) || value === "NA" || 
           value.match(/^[a-zA-Z0-9\n ,\,&.:-]+$/);
   }, "Please use a-z, A-Z, '&' , ':' , '.' , '-' , ',' only");
   
   $.validator.addMethod("custom_name", function(value, element) {
       return this.optional(element) || value === "NA" || 
           value.match(/^[a-zA-Z ]+$/);
   }, "Please use a-z , A-Z only");
   jQuery(function ($) {
       "use strict";
   $("#contactForm").validate({
   	 ignore: [],
   	rules: {
   		txtName: {
   			required: true,
   			custom_name: true,
   		},
   		username: {
   			required: true,
   			email: true,
   		},
   		mobile: {
                   required: true,
      					  minlength: 8,
      					  maxlength:15,
               },
   		message: {
   			required: true,
   			custom_desc: true,
   		},
   		"hidden-grecaptcha": {
   			required: true,
   		}
   	},
   	messages: {
   		txtName: {
   			required: "Please enter name",
   			accept: "Please enter characters only",
   		},
   		username: {
   			required: "Please enter Email",
   			email: "Please enter a valid email address",
   		},
   		mobile:{
      						  required: "Enter your mobile no",
      						  minlength: "Enter 8 digits mobile number",
      						  maxlength: "Enter maximum 15 digits mobile number including country code",
      						},
   		message: {
   			required: "Please enter message",
   		},
   		"hidden-grecaptcha": {
   			required: "Please enter captcha",
   		},
   	},
   });
   });
   function recaptchaCallback() {
   	    var response = grecaptcha.getResponse(),
   		$button = jQuery(".document-btn");
   		jQuery("#hidden-grecaptcha").val(response);
   }
</script>