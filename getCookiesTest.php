<?php
/*
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://google.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else{
	echo $result;
}
curl_close ($ch);
*/

$email = 'pmumbles@yahoo.co.uk';
$password = 'guiness';
$locale = 'en_GB';
$timezone = 'Europe/Dublin';

$myvars = 'email=' . $email . '&password=' . $password . '&locale=' . $locale . '&timezone=' . $timezone;
echo $myvars;

?>