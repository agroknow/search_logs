<?php

//searched string
static $ss_terms, $gl_str;
 $str = urldecode($_SERVER['REQUEST_URI']);
$str = str_replace("solr-search","",$str);
$str = str_replace("/","",$str);
 $full_url = $str; 
$gl_str = $str;


if ($str != "" ){
//////echo " not null ";

  global $user;
  if ($user->uid ) {
    // echo "<p>" . $user->uid . "</p>";

watchdog('search_log', $str );
    
  }//end  if ($user->uid ) {

}
?>

