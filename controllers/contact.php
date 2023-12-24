<?php 
session_start();
include "../include/connect.php";


    $data_array = array(
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "message" => $_POST['message'],
        "mobile" => $_POST['mobile'],
        "subject" => $_POST['subject'],
    );
    
    $make_call = callAPI('POST', 'contactForm', json_encode($data_array), NULL);
    $response = json_decode($make_call, true);
    if ($response) {
            //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
            $output = json_encode(array('type'=>'message', 'text' => 'Sucessfully Sent.'));
            die($output);
    }else{
        $output = json_encode(array('type'=>'error', 'text' => 'Please try after some time'));
            die($output);
    }
?>
