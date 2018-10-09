<?php

$url = "https://webws.hole19golf.com/api/v2/users/sign_in";
$email = 'pmumbles@yahoo.co.uk';
$password = 'guiness';
$locale = 'en_GB';
$timezone = 'Europe/Dublin';
$myvars = 'email=' . $email . '&password=' . $password . '&locale=' . $locale . '&timezone=' . $timezone;
//echo $myvars;

 $post_data = array(
        'email' => 'pmumbles@yahoo.co.uk',
		'password' => 'guiness',
		'locale' => 'en_GB',
        'timezone' => 'Europe/Dublin'
    );


$post_headers = array();
$cookies = '_h19_session=T1FyNWxqUmdZcjhhZXVON2diMVR0aEVTV2QzZUlwcVBIYWxJWDV4djJ0ZTVDNlZ1NHl4WHVVYXVXa2Uvb0NjR0tKQU5vc1hVakJCU3JZc0JaTjdGUUE9PS0tTVFtUUFQaisyOGJxdDlhT21tVHREdz09--107a38991a2d811c8fa4be3c2615bd82dfae29cc; __cfduid=deb24d0e3ce1ac2f40be82b4f81479bde1538586041';
$post_headers[] = 'X-App-Version: 4.7.6';
$post_headers[] = 'X-Device-Model: CUBOT RAINBOW';
$post_headers[] = 'X-Os-Version: 6.0';
$post_headers[] = 'X-Platform: android';
$post_headers[] = 'Content-Type: application/x-www-form-urlencoded';
$post_headers[] = 'Content-Length: 83';
$post_headers[] = 'Host: appws.hole19golf.com';
$post_headers[] = 'Connection: Keep-Alive';
//$post_headers[] = 'Accept-Encoding: gzip';
$post_headers[] = 'Cookie: '. $cookies;
$post_headers[] = 'User-Agent: okhttp/3.8.0';



$ch = curl_init( $url );
$postString = http_build_query($post_data, '', '&');
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $postString);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1); // follows redirects
curl_setopt( $ch, CURLOPT_HTTPHEADER, $post_headers);
curl_setopt( $ch, CURLOPT_HEADER, 1);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else{
	echo $response;
}



?>