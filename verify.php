<?php
$access_token = 'aIQQs8GwpfDk16ZCvJiYSg9AY9GNnNGU0pGhvspIT+0rhHHBmm0/Gn1D3UG5G0zcQfbxotv2GxvODTr7EHcRpOWtXIsiti2FYY9ibGkrOqTDd3BtcFnEGCZjJB+Yy+hjV0pqMCc54tlTCUXVOuuypwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
