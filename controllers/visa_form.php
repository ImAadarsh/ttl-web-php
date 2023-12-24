<?php 
session_start();
include "../include/connect.php";

if(!isset($_POST['file'])){
    $data_array = array(
        "name" => $_POST['name'],
        "mobile" => $_POST['email'],
        "dob" => $_POST['dob'],
        "expiry_passport" => $_POST['expiry_passport'],
        "nationality" => $_POST['nationality'],
    );
    
    $make_call = callAPI('POST', 'visaform', json_encode($data_array), NULL);
    $response = json_decode($make_call, true);
    if ($response) {
            //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
            $output = json_encode(array('type'=>'message', 'text' => 'Sucessfully Sent.'));
            die($output);
    }else{
        $output = json_encode(array('type'=>'error', 'text' => 'Please try after some time'));
            die($output);
    }
}else{
   
        $data_array = array(
            'file'=> curl_file_create( $_FILES['visa_file']['tmp_name'], $_FILES['visa_file']['type'], $_FILES['visa_file']['name'])
        );
            
            $make_call = callAPI1('POST', 'visafile', $data_array,null);
            $response = json_decode($make_call, true);
            if ($response) {
                    //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
                    $output = json_encode(array('type'=>'message', 'text' => 'File Sucessfully Sent.'));
                    die($output);
            }else{
                $output = json_encode(array('type'=>'error', 'text' => 'Please try after some time'));
                    die($output);
            } 
}
   
?>
