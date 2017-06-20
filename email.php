<?php
 //$url = 'https://api.hunter.io/v2/email-verifier?email=steli@close.io'
$email_array = ["Emails"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
foreach ($email_array as $id) {
	curl_setopt($ch, CURLOPT_URL, 'https://api.hunter.io/v2/email-verifier?email='.$id.'&api_key=66aee57fd0dc7e47a24b8b2ad2bc26931b3d015c');
	$content = curl_exec($ch);
	echo $content;
}
//$data = $_GET[$url];
//print_r($data);
?>