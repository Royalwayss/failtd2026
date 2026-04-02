<?php
require_once('admin/include/config.php'); 



$sql = "SELECT `id`,`title`,`blog_url`,`short_description`,`image`,`status`,`published_date`,`meta_title`,`meta_description`,`meta_keywords`,`created_at` FROM `blogs` ORDER BY `published_date` DESC ";


$result= mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
	
	   $file_name = $row['blog_url']; 
		
		
		$oldName = $file_name;
		
		$newName = 'old-'.$file_name;

		if (rename($oldName, $newName)) {
			echo "File renamed successfully!";
		} else {
			echo "Failed to rename file.";
		}
		echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>"; 
		echo $newName; echo "<br>"; 
	
	
	
	
	
	
	
}

?>