<?php 
//php must be compiled with curl support

//$url = 'http://localhost:8080/springwebapp/rest/contact/jsonlist';
$url = 'http://192.168.11.17:8080/springwebapp/rest/contact/jsonlist';
$curl = curl_init();

// Optional Authentication:
//curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//curl_setopt($curl, CURLOPT_USERPWD, "username:password");

//GET request
curl_setopt($curl, CURLOPT_URL, $url);
//return the transfer as a string 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

//POST request
//curl_setopt($curl, CURLOPT_POST, 1);
//curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$result = curl_exec($curl);
curl_close($curl);

print $result . "\n";

$obj = json_decode($result);
//print $obj;
print $obj->{'contact'}[0]->{'email'}; // list is returned, retrieve first element, email field

?>