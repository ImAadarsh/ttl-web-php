<?php 
session_start();
include "../include/connect.php";


    $data_array = array(
        "email" => $_POST['email'],
    );
    
    $make_call = callAPI('POST', 'email', json_encode($data_array), NULL);
    $response = json_decode($make_call, true);
    if ($response) {
        echo "<script>alert('Response Added Successfully.');
        window.history.back();
        </script>";
    }else{
        $output = json_encode(array('type'=>'error', 'text' => 'Please try after some time'));
            die($output);
    }
?>
