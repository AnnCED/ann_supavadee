<?php
$access_token = 'uBkKWn4wwFhF06oIXJTFe8W75rjjrOBGmG/MtMqHiTCoj7S7VBRd8AP1WqCK1KGmOcl0NOA+i54yYc+dBCnSdosXuCiUoKFnle2A2PeAaGFLPZOSdBV/LrA3GFxYWFZUyqDnKo1+VWhQEFzNdeeBygdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>