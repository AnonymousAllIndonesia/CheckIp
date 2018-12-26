<?php
 // * Warna
$RR = "\033[36m";
 // Curl 
function http_request($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
return $output;
}
$data = http_request("https://api.myip.com");
$profile = json_decode($profile, TRUE);
print $RR ."Check Ip By Widhi \n";
print_r($data);
