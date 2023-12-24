<?php

$host = "89.117.157.103";
$user = "u334258298_snehbandh";
$password = "NotifyVerse@2023";
$dbname = "u334258298_snehbandh";
$connect = mysqli_connect($host,$user,$password,$dbname);
$uri = 'https://api.snehbandh.online/storage/app/';

function baseCall($urlpoint, $data){
    $curl = curl_init();
    $url = 'https://parmartours.com:8443/parmartour/Test/'.$urlpoint.'';
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$data,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
return $response;
}
function callAPI($method, $urlpoint, $data, $token){
    if (!isset($token)) {
        $token = "";
    }
    
    $url = 'http://127.0.0.1:8000/api/'.$urlpoint.'';
    $curl = curl_init($url);
    switch ($method){
       case "POST":
          curl_setopt($curl, CURLOPT_POST, 1);
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
             
          break;
       case "PUT":
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
          break;
       default:
          if ($data)
             $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       'Content-Type: application/json',
       $token
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_BINARYTRANSFER,TRUE);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
     echo $result;
    if(!$result){echo curl_error($curl);}
    curl_close($curl);
    return $result;
 }
function callAPI1($method, $urlpoint, $data, $token){
    if (!isset($token)) {
        $token = "";
    }
    
    $url = 'http://127.0.0.1:8000/api/'.$urlpoint.'';
    $curl = curl_init($url);
    switch ($method){
       case "POST":
          curl_setopt($curl, CURLOPT_POST, 1);
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
             
          break;
       case "PUT":
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
          break;
       default:
          if ($data)
             $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       'Content-Type: multipart/form-data',
       $token
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_BINARYTRANSFER,TRUE);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
     echo $result;
    if(!$result){echo curl_error($curl);}
    curl_close($curl);
    return $result;
 }

?>