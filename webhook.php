<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method = "POST"){
    $requestBody = file_get_contents('php://input');
    $json=json_decode('request_method');
    $text = $json->result->parameter->text;

 
    switch($text){
            case 'hi':
            $speech = "Hi , NIce to meet you";
            break;
            case 'bye':
            $speech = "Good BYE";
            break;
            default:
            $speech = "Sorry";
            break;
    }
    $response = new \stdClass();
    $response -> speech ="";
    $response -> displayText = "";
    $response -> source= "webhook";
    echo json_encode($response);
}else{
    echo"NO";
}
?>
