<?php
/*
//$ckfile = tempnam ("/tmp", "CURLCOOKIE");

$ckfile = '_h19_session=Z3dubFVEZWdOR1pFWFBYZEZBeXZPZTlWT0NYMlBIMEZvQUhyeE91eUE3K3JoeFg1NUh0QXdpVWRjT0orRHh5NFVUd0lSRGpMcXd3RDg4S3FXMVY3RkRlb3JaNlh2aGpFUnZpZG5sSnMxeGVpbUp1NjFveTVZMTRQb2gvSGJDMm9vMmVsc0JlMVhFalNvT0RjdHROM0JmUkVtRWh2N29XYUtzTE1hT2JjMUdkOUgxR3p2UzFZZUUvbUdxN3kyeEoyZHFhLzd6MlRKRUJrb0xjSi9aNVFzbHJlWU51TEN1bUI3MUhjeDFFSkV6aGlOZ3cwb3hiTWNrdzVWQ1pkVTk1YzNLT3ZqOUUzMGxVRXhrV3QxS0JUblE9PS0tSXZRT0l6TDlibkVLVnRtb3Y0d1dJdz09--fb4245b671b228a0e60515592183f92948b1937f; __cfduid=d34284d1ef9f2e323fa43215a4e833d181538474523';

$ch = curl_init ("https://www.hole19golf.com/");
curl_setopt ($ch, CURLOPT_COOKIEJAR, $ckfile); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);

*/


$url = "https://webws.hole19golf.com/api/v2/courses/106720/";
//$url = "https://webws.hole19golf.com/api/v3/activities/home";
//$url = "https://webws.hole19golf.com/api/v2/notifications/all";
//$url = "https://webws.hole19golf.com/api/v2/courses/search?q=grange%20castl"; // ??
//$url = "https://webws.hole19golf.com/api/web/courses/search?with_images=true&count=24&place_type=place&place%5Bslug%5D=dublin";
$request_headers = array();
$cookies = '_h19_session=dlYxNWNXN1MvT0lGU1Q5ei90WW93MWRMeDFmekM4emxWcDVrU1JCS1Z3d3BSdEpjTHZna0c5b2NhY3Z6VFJQbHhoVVd1Yk5nMWFKOVBxVjBOYUN2bzZ4TUJnTlhDWTNqTTFSN1AzVHhjQTlpNTVJOEFxQ3A1eEdFN0QvK3I2emsyZ01mU3h4Tmhxck42bkM1SlRuZzJLb1lNKzlVdkthb21FMURPUmpvV3RvMXorUXNmRHJBOGIyeWxRaUxDZjIzYm81cnVEemdxbVlaYk5iVGw4TC80dzl0NEZ4WmhUZ0dubVYvMVlQQ2l1YUNRTXZwZlBnOHhLeTllMUh4YjA4cW1KM3JPMFJtTEx4WnhiaGlOWXV1bWc9PS0tdFQ4bjN2SVNwaXZ6OFVmVjlBejVydz09--bffbb530980e64ee3c2d8ff95553e0e2646c6e91; __cfduid=deb24d0e3ce1ac2f40be82b4f81479bde1538586041';

$request_headers[] = 'X-App-Version: 4.7.6';
$request_headers[] = 'X-Device-Model: CUBOT RAINBOW';
$request_headers[] = 'X-Os-Version: 6.0';
$request_headers[] = 'X-Platform: android';
$request_headers[] = 'Host: appws.hole19golf.com';
$request_headers[] = 'Connection: Keep-Alive';
//$request_headers[] = 'Accept-Encoding: gzip';
$request_headers[] = 'Cookie: '. $cookies;
$request_headers[] = 'User-Agent: okhttp/3.8.0';





// Performing the HTTP request
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // this should get cookies

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else{
	echo $result;
}





?>