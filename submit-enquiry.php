<?php
include('admin/include/config.php');
require_once('include/config.php');
$msgFail = "";
$msgSuccess = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_SERVER['HTTP_HOST'] != 'localhost') {
		if (!empty($_POST)) {
			$recaptcha_secret = '6LeME4orAAAAAEKspGYY5ZFBX7ztEozLanNBARCm';
			$recaptcha_response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';

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

	if (empty($msgFail)) {

		$name     = trim($_REQUEST['name']);
		$company  = isset($_REQUEST['company']) ? trim($_REQUEST['company']) : '';
		$phone    = trim($_REQUEST['phone']);
		$email    = trim($_REQUEST['email']);
		$category = isset($_REQUEST['category']) ? trim($_REQUEST['category']) : '';
		$message  = isset($_REQUEST['message']) ? trim($_REQUEST['message']) : '';
		$lead_source = isset($_REQUEST['lead_source']) ? trim($_REQUEST['lead_source']) : '';
		$ad_category = isset($_REQUEST['ad_category']) ? trim($_REQUEST['ad_category']) : '';
		$page_url    = isset($_REQUEST['page_url']) ? trim($_REQUEST['page_url']) : '';

		$Errmsg = '';
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$Errmsg = "Only letters and white spaces allowed";
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$Errmsg = "Invalid email format";
		}
		if ($category == '') {
			$Errmsg = "Please select a product category";
		}

		if ($Errmsg != "") {
			$msgFail = "Please enter valid information";
		} else {
			

				// email script start
				$to = "siddharthmittal@faipl.com,manjit@rtpltech.com";
				
				$subject = "New Landing Page Enquiry from " . WEBSITE;
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
										<h2>' . WEBSITE . '</h2></div>
										<hr />
										<h3>New Enquiry from ' . WEBSITE . '</h3>
										<table style="width:70%;  margin: 0 auto;  padding:7px; text-align:left">
										 <tr>
										 <td><b>Name</b></td>
										 <td>' . $name . '</td>
										 </tr>
										 <tr>
										 <td><b>Company</b></td>
										 <td>' . $company . '</td>
										 </tr>
										 <tr>
										 <td><b>Email Address</b></td>
										 <td>' . $email . '</td>
										 </tr>
										 <tr>
										 <td><b>Phone Number</b></td>
										  <td>' . $phone . '</td>
										 </tr>
										<tr>
										 <td><b>Product Category</b></td>
										  <td>' . $category . '</td>
										 </tr>
										
										 <tr>
										 <td><b>Requirement</b></td>
										 <td>' . $message . '</td>
										 </tr>
										 <tr>
										 <td><b>Page URL</b></td>
										 <td>' . $page_url . '</td>
										 </tr>
										 </table>
									</div>
								</body>
								</html>';

				$name_db         = mysqli_real_escape_string($conn, $name);
				$company_db      = mysqli_real_escape_string($conn, $company);
				$phone_db        = mysqli_real_escape_string($conn, $phone);
				$email_db        = mysqli_real_escape_string($conn, $email);
				$category_db     = mysqli_real_escape_string($conn, $category);
				$message_db      = mysqli_real_escape_string($conn, $message);
				$lead_source_db  = mysqli_real_escape_string($conn, $lead_source);
				$ad_category_db  = mysqli_real_escape_string($conn, $ad_category);
				$page_url_db     = mysqli_real_escape_string($conn, $page_url);
				$current_timestamp = date('Y-m-d H:i:s');

				$query = "INSERT INTO landingpage_enquiries (name,company,phone,email,category,message,lead_source,ad_category,page_url,created_at)
					VALUES ('" . $name_db . "', '" . $company_db . "', '" . $phone_db . "', '" . $email_db . "', '" . $category_db . "', '" . $message_db . "', '" . $lead_source_db . "', '" . $ad_category_db . "', '" . $page_url_db . "', '" . $current_timestamp . "')";
				$conn->query($query);

				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: ' . 'failtd' . ' <' . 'info@failtd.com' . '> ' . "\r\n";
				if (@mail($to, $subject, $mail_message, $headers)) {

					$msgSuccess = 'Your enquiry has been sent';
				} else {
					//$msgFail = "Please check your internet connection";
				}
				$msgSuccess = 'Your enquiry has been sent';
			 
		}
	}

	// Determine which page to redirect back to (dynamic, works across all landing pages)
	$redirect_base = 'forge-auto-landing.php';
	if (!empty($page_url)) {
		// Use the page the form was submitted from, stripped of any existing query string/hash
		$parsed = parse_url($page_url);
		if (!empty($parsed['path'])) {
			$redirect_base = basename($parsed['path']);
		}
	} elseif (!empty($_SERVER['HTTP_REFERER'])) {
		$parsed = parse_url($_SERVER['HTTP_REFERER']);
		if (!empty($parsed['path'])) {
			$redirect_base = basename($parsed['path']);
		}
	}

	// Redirect back to the originating page with the result
	if ($msgSuccess != "") {
		header("Location: thanks.php");
	} else {
		header("Location: " . $redirect_base . "?enq=fail&msg=" . urlencode($msgFail) . "#landing-new-forge-enquiry");
	}
	exit;
}

// Not a POST request, just send back to the referring page if known, else the default landing page
$fallback = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'forge-auto-landing.php';
header("Location: " . $fallback);
exit;