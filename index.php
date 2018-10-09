<?php
/*
//$ckfile = tempnam ("/tmp", "CURLCOOKIE");

$ckfile = '_h19_session=Z3dubFVEZWdOR1pFWFBYZEZBeXZPZTlWT0NYMlBIMEZvQUhyeE91eUE3K3JoeFg1NUh0QXdpVWRjT0orRHh5NFVUd0lSRGpMcXd3RDg4S3FXMVY3RkRlb3JaNlh2aGpFUnZpZG5sSnMxeGVpbUp1NjFveTVZMTRQb2gvSGJDMm9vMmVsc0JlMVhFalNvT0RjdHROM0JmUkVtRWh2N29XYUtzTE1hT2JjMUdkOUgxR3p2UzFZZUUvbUdxN3kyeEoyZHFhLzd6MlRKRUJrb0xjSi9aNVFzbHJlWU51TEN1bUI3MUhjeDFFSkV6aGlOZ3cwb3hiTWNrdzVWQ1pkVTk1YzNLT3ZqOUUzMGxVRXhrV3QxS0JUblE9PS0tSXZRT0l6TDlibkVLVnRtb3Y0d1dJdz09--fb4245b671b228a0e60515592183f92948b1937f; __cfduid=d34284d1ef9f2e323fa43215a4e833d181538474523';

$ch = curl_init ("https://www.hole19golf.com/");
curl_setopt ($ch, CURLOPT_COOKIEJAR, $ckfile); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);

*/


//$url = "https://webws.hole19golf.com/api/v2/courses/106707/";
//$url = "https://webws.hole19golf.com/api/web/courses/search?with_images=true&count=1000&place_type=place&place%5Bslug%5D=dublin";
$url = "https://webws.hole19golf.com/api/v3/courses/home?latitude=53.3331&longitude=-6.2489";
$request_headers = array();
//$cookies = '__cfduid=d50de2dbcc36c4ccb83f2bcb910bb37191538472523; _h19_session=MWxwY1hEb0tiTTBxc1R3TmRQODUyUmkxTzdBclR5bTZPa2tiZDJldWF1Y0Zic2QwMmhSVHFkZkZXY1VQcXFpb0JyUC9YWm1sSlg1QVFSeVZaS291YmdxRUNteFB5U0NUcVQwMTRxZ04rTzhEeVBPSGloTFlzVmU4ZFRYOTdsYTBvRGVyK2dyenRUTm5zL1N4WnZpcFJTdURPKzZRR1ppa1BUWFl1MWorc2RoUW1iNml0REZkeEJNcmFURnpSOHBOLS1tOG1rbzZYVFkrTXZKL2w2aFJXZ0x3PT0%3D--36ce3d15cd4a321ba6a59aad0706ffc07e50d6cf; _ga=GA1.2.1076318970.1538472523; _gid=GA1.2.450649634.1538472523; __zlcmid=oghgZAUK13VjSN; mp_07f2490b97c8740862342e3a3f882aca_mixpanel=%7B%22distinct_id%22%3A%20%22166341bb2c69-05cef5d7853b41-143c7340-13c680-166341bb2c757%22%2C%22%24search_engine%22%3A%20%22google%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fwww.google.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22www.google.com%22%7D; _gat=1';
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

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}






?>