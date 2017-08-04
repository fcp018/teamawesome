<?php


//Require Class ##############################################################
include(dirname(__FILE).'/tweets2array.class.php');

//INIT #######################################################################
$tw=new Tweets2array('json'); //use this if you want to output json
//$tw=new Tweets2array();


// CACHE (optionnal) #########################################################
// if you want to use cache , set these correctly
//$cache_file	=dirname(__FILE).'/cache/'; // absolute path to your cache directory . Be sure to set this directory writable, ie chmod 777
//$cache_time	=100; 						// store results for 1 hour
//$cache_mode ='out'; 					// 'out' = store results (faster) || 'in' = store fetched urls (usefull for debugging)

// if you want to use cache , uncomment this
//$tw->SetCache($cache_file,$cache_time,$cache_mode);


// LET'S GO ################################################################

//$user_name1	="cosmocatalano";
$q	="#WarriorDash";

// print some examples
ini_set('default_charset', 'utf-8');

//echo "<pre>\n";
//print_r($tw->GetUser($user_name1,10,TRUE));

//echo "<hr>\n";
print_r($tw->GetSearch($q,100,FALSE,TRUE));

?>
