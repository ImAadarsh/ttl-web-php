<?php 
include "../include/connect.php";
session_start();
if (isset($_POST['login'])) {
        $data_array = array(
            "phone" => $_POST['phone'],
            "email" => $_POST['email'],
            "name" => $_POST['name'],
        );
    $make_call = callAPI('POST', 'getstarted', json_encode($data_array),NULL);
    $response = json_decode($make_call, true);
    print_r($response);
    if($response['user']['token']){
        echo "<script>alert('".$response['message']."')
        </script>
        ";
    }

if ($response['status']==true&&$response['user']['token']) {
    $_SESSION['email'] =  $response['user']['email'];
    $_SESSION['name'] = $response['user']['name'];
    $_SESSION['mobile'] = $response['user']['mobile'];
    $_SESSION['token'] = $response['user']['token'];
    $_SESSION['userid'] = $response['user']['id'];
    
    if(isset($_SESSION['token'])){
        header('location: ../booking-2.php');
    }else{
       echo "Request Not Found";
    }
        
}
}

?>