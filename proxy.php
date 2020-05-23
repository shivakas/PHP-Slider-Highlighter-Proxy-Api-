<?php 

$data=array("username"=>"api@innosabi.com",
"password"=>"0thRuch0");

$ch = curl_init("https://demo.innosabi.com/login");//intialized the cURL session with TARGET URL
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);// Allow redirection
curl_setopt($ch, CURLOPT_POST, true);//making post request
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);// Posting user credentials
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');// storing login data in cookie
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//storing the request
$output = curl_exec($ch);
$info = curl_getinfo($ch);
$output = curl_exec($ch);
$info = curl_getinfo($ch);
curl_setopt($ch, CURLOPT_URL, 'https://demo.innosabi.com/api/v2/project/filter');
$output = curl_exec($ch);
var_dump($output); 
curl_close ($ch);

?>

