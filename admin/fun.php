<?php
require_once('include/config.php'); 





$sql = "SELECT `id`,`title`,`blog_url`,`blog_content` FROM `blogs` where id = 7 ORDER BY `published_date` DESC ";


$result= mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    
    
    
    $blog_content = $row['blog_content'];
    
   // $blog_content = mysqli_real_escape_string($conn, $blog_content); 
    
                $blog_content = get_cms_content($row['blog_content']);



/*
    $blog_content1 = str_replace(
    ["“","”","‘","’"],
    ['"','"',"'", "'"],
    $blog_content
);
    
    */
    
    
    
        //$update_query  = "UPDATE  blogs SET blog_content = '".$blog_content."', WHERE id = ".$row['id']." "; 
	//	mysqli_query($conn,$update_query);
		
		
    
    echo $blog_content; echo '<br><br><br><br><br><br>';
}


exit;










$sql = "SELECT `id`,`title`,`blog_url`,`short_description`,`image`,`status`,`published_date`,`meta_title`,`meta_description`,`meta_keywords`,`created_at` FROM `blogs` where meta_title IS NULL ORDER BY `published_date` DESC ";


$result= mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
        $url = 'http://localhost/failtdnew/'.$row['blog_url'].'.php'; 
		
		$data = getBlogDetails('http://localhost/failtdnew/'.$row['blog_url'].'.php');

         $data['url'] = $row['blog_url'];
		 
		 
		
		 if( !empty($data['meta_title']) &&   !empty($data['meta_description']) && !empty($data['blog_content']) ){
		         //
		       pd($data);
			    $blog_content = trim($data['blog_content']);
				$blog_content = mysqli_real_escape_string($conn, $blog_content); 
				$meta_title =$data['meta_title'];
				$meta_title = mysqli_real_escape_string($conn, $meta_title); 
				$meta_description =$data['meta_description'];
				$meta_description = mysqli_real_escape_string($conn, $meta_description); 
			    
				
				//$blog_content = str_replace('src="assets/images/new-blogs/', 'src="https://www.failtd.com/assets/images/new-blogs/', $blog_content);

				    $update_query  = "UPDATE  blogs SET blog_content = '".$blog_content."',meta_title = '".$meta_title."',meta_description = '".$meta_description."' WHERE id = ".$row['id']." "; 
		           mysqli_query($conn,$update_query); 
				
				
				
				
				
				
				
				echo $blog_content; exit;
			   
		 }else{
			 echo 'not okkk'; exit; die();
		 }
		 
		 
		 
		 
		 
		 pd($data);
}







function getPublishedDate($url){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');

    $html = curl_exec($ch);
    curl_close($ch);

    if(!$html){
        return '';
    }

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    // Target the paragraph containing "Published on:"
    $dateNode = $xpath->query("//p[contains(text(),'Published on:')]")->item(0);

    if($dateNode){

        $fullText = trim($dateNode->textContent);
        // Example: Published on: 15 Jan, 2026 | 22 min read

        // Remove "Published on:"
        $fullText = str_replace('Published on:', '', $fullText);

        // Split by "|"
        $parts = explode('|', $fullText);

        // First part is date
        $old_date = trim($parts[0]);
		
		
		$new_date = date("Y-m-d", strtotime($old_date));

		return $new_date;
		
		
    }

    return '';
}








function getBlogDetails($url) {

    // -------- FETCH PAGE USING CURL --------
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
    $html = curl_exec($ch);
    curl_close($ch);

    if (!$html) {
        return false;
    }

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    // -------- META TITLE --------
    $titleNode = $xpath->query("//title")->item(0);
    $meta_title = $titleNode ? trim($titleNode->textContent) : '';

    // -------- META DESCRIPTION --------
    $metaDescNode = $xpath->query("//meta[@name='description']")->item(0);

    // also check og:description (backup)
    if (!$metaDescNode) {
        $metaDescNode = $xpath->query("//meta[@property='og:description']")->item(0);
    }

    $meta_description = $metaDescNode 
        ? trim($metaDescNode->getAttribute("content")) 
        : '';

    // -------- BLOG CONTENT --------
    // IMPORTANT: Adjust class based on actual wrapper
    $contentNode = $xpath->query("//div[contains(@class,'blog-body')]")->item(0);
    //$contentNode = $xpath->query("//div[contains(@class,'blog-content')]")->item(0);

    $blog_content = '';
    if ($contentNode) {
        $blog_content = $dom->saveHTML($contentNode);
    }

    return [
        'meta_title' => $meta_title,
        'meta_description' => $meta_description,
        'blog_content' => $blog_content
    ];
}














exit;




$url = "https://www.failtd.com/blog";
$blogs = scrapeFailtdBlog($url);

foreach($blogs as $blog){
	
	
	$title = $blog['title'];
	$short_description = $blog['description'];
	$blog_url = $blog['link'];
	     
		 
		$title = mysqli_real_escape_string($conn, $title);  
		$short_description = mysqli_real_escape_string($conn, $short_description);  
		 
		 
		 $insert_query = "INSERT INTO blogs (title,blog_url,short_description) VALUES ('".$title."','".$blog_url."','".$short_description."')";
		mysqli_query($conn,$insert_query); 
		$inser_id = mysqli_insert_id($conn);
	
	
	
	
	
	
}
exit;

function scrapeFailtdBlog($url) {
    // fetch HTML
    $html = file_get_contents($url);
    if (!$html) {
        return false;
    }

    // load HTML into DOM
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    $results = [];

    // adjust this selector to the blog item structure on the page
    // example assumes articles have a class .blog_block
    $nodes = $xpath->query("//div[contains(@class, 'blog-row')]");

    foreach ($nodes as $node) {
        // title
        $titleNode = $xpath->query(".//h3", $node)->item(0);
        $title = $titleNode ? trim($titleNode->textContent) : '';

        // link: inside <a> on title
        $linkNode = $xpath->query(".//a", $node)->item(0);
        $link = $linkNode ? $linkNode->getAttribute("href") : '';

        // short description, adjust selector to match actual description element
        $descNode = $xpath->query(".//p", $node)->item(0);
        $description = $descNode ? trim($descNode->textContent) : '';

        if ($title || $description || $link) {
            $results[] = [
                'title' => $title,
                'description' => $description,
                'link' => $link,
            ];
        }
    }

    return $results;
}

function pd($data){
	echo "<pre>"; print_r($data); exit;
}
?>