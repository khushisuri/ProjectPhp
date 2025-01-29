<?php
require_once('dompdf/autoload.inc.php');
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://api.websiteranking.ai/api/sites/insightsByUrl/?url=https://youtube.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER , true);

$data = curl_exec($ch);

$jsonData = json_decode($data,true);

curl_close($ch); 

?>  