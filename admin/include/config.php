<?php 
@session_start();
// date_default_timezone_set("Asia/Calcutta");
// require_once('db_config.php');
// $conn = new mysqli($_host, $_username, $_password,$_database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}	

define('BASEURL',$base_url);  
define('LOGO',$base_url.'assets/images/resources/logo-1.png');  
define('WEBSITE_NAME','Failtd');  
define('WEBSITE','Failtd');  
define('ADMIN_MAIL','info@failtd.com');  
define('FROM_MAIL','info@failtd.com'); 

 
function validateMobileNumber($mobile) {
  if (!empty($mobile)) {
    $isMobileNmberValid = TRUE;
    $mobileDigitsLength = strlen($mobile);
    if ($mobileDigitsLength < 10 || $mobileDigitsLength > 15) {
      $isMobileNmberValid = FALSE;
    } else {
      if (!preg_match("/^[+]?[1-9][0-9]{9,14}$/", $mobile)) {
        $isMobileNmberValid = FALSE;
      }
    } 
	if(strlen($mobile) == 10){
		return $isMobileNmberValid;
	}
  } else {
    return false;
  }
}


	

function get_counties($conn) {
	$counties = [];
	
	$sql = 'select id,name as country from `countries` group by name order by `countries`.`name` asc';
	
	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
            $counties[] = $row;
        }
    }

    return $counties;	
}



function get_state_options($conn,$country_id) {
	$state_options = '<option value="" disabled selected>Select your state</option>';
	
	$sql = 'select * from `states` where `country_id` = '.$country_id.' group by name order by name asc';
	
	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
		  $state_options .= '<option value="'.$row['name'].'"  data-id="'.$row['id'].'">'.$row['name'].'</option>';
			  
        }
    }

    return $state_options;	
}


function get_city_options($conn,$state_id) {
	$city_options = '<option value="" disabled selected>Select your city</option>';
	
	$sql = 'select * from `cities` where `state_id` = '.$state_id.' group by name order by name asc';
	
	$result = $conn->query($sql); 
    
    if ($result->num_rows > 0) { 
    
        while ($row = $result->fetch_assoc()) { 
        
		  $city_options .= '<option value="'.$row['name'].'">'.$row['name'].'</option>';
			  
        }
    }

    return $city_options;	
}



function get_cms_content($content=''){
	/*
	$content = str_replace("�", '"',$content);
	$content = str_replace("‘", "'",$content);
	$content = str_replace("’", "'",$content);
	$content = str_replace("’", '"',$content);
	$content = str_replace("”", '"',$content);
	$content = str_replace("�", "'",$content);
	
	*/
	
	
	return $content;
}






?>