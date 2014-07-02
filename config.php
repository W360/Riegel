<?php 
 $base_url = "Riegel/";  
 $base_url = str_replace($base_url,"",$_SERVER['REQUEST_URI']); 
 $current_uri = explode("/",$base_url); 

 if(empty($current_uri[1])){
   define('CURRENT_PAGE','Page/home'); 
   define('CURRENT_FILE','Page/home.php'); 
 }else{
   define('CURRENT_PAGE',"Page/".$current_uri[1]);	 
   define('CURRENT_FILE',"Page/".$current_uri[1].".php");
 }
?>