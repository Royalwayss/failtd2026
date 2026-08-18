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

		$usrnm  = $_REQUEST['username'];
		$name   = $_REQUEST['txtName'];
		$email  = $_REQUEST['username'];
		$phone  = $_REQUEST['mobile'];
		$message = $_REQUEST['message'];
		$page_url = isset($_REQUEST['page_url']) ? trim($_REQUEST['page_url']) : '';

		$Errmsg = '';
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$Errmsg = "Only letters and white spaces allowed";
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$Errmsg = "Invalid email format";
		}

		if ($Errmsg != "") {
			$msgFail = "Please enter valid information";
		} else {
			if (is_numeric($phone)) {
				
				$to = "siddharthmittal@faipl.com,manjit@rtpltech.com";
                
				$subject = "New Contact Message from " . WEBSITE;
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
										<h3>New Contact Message from ' . WEBSITE . '</h3>
										<table style="width:70%;  margin: 0 auto;  padding:7px; text-align:left">
										 <tr>
										 <td><b>Name</b></td>
										 <td>' . $name . '</td>
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
										 <td><b>Message</b></td>
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

				$name_db    = mysqli_real_escape_string($conn, $name);
				$email_db   = mysqli_real_escape_string($conn, $email);
				$phone_db   = mysqli_real_escape_string($conn, $phone);
				$message_db = mysqli_real_escape_string($conn, $message);
				$page_url_db = mysqli_real_escape_string($conn, $page_url);
				$current_timestamp = date('Y-m-d H:i:s');

				$query = "INSERT INTO contacts (name,email,country_code,phone,country,state,city,message,created_at)
					VALUES ('" . $name_db . "', '" . $email_db . "', '', '" . $phone_db . "', '', '', '', '" . $message_db . "', '" . $current_timestamp . "')";
				$conn->query($query);

				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: ' . 'failtd' . ' <' . 'info@failtd.com' . '> ' . "\r\n";
				if (@mail($to, $subject, $mail_message, $headers)) {

					$msgSuccess = 'Your Message has been sent';
				} else {
					//$msgFail = "Please check your internet connection";
				}
				$msgSuccess = 'Your Message has been sent';
			} else {
				$msgFail = "Please enter valid Phone number";
			}
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
		header("Location: " . $redirect_base . "?contact=success#landing-new-forge-contact");
	} else {
		header("Location: " . $redirect_base . "?contact=fail&msg=" . urlencode($msgFail) . "#landing-new-forge-contact");
	}
	exit;
}

// Not a POST request, just send back to the referring page if known, else the default landing page
$fallback = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'forge-auto-landing.php';
header("Location: " . $fallback);
exit;