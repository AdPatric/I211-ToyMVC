<?php

require 'vendor/autoload.php';

$toy_controller = new ToyController();

//default action is list all the toys
$action = "all";

if(isset($_GET['action']) && $_GET['action'] !=''){
    $action = $_GET['action'];
}

//invoke appropraite method
if($action == 'all') {
    $toy_controller->all();
} else if ($action == 'error'){
    //default error message
    $message = "We are sorry, but an error has occured.";
    //retrieve error message
    if(isset($_GET['message']) && $_GET['message'] !=''){
        $message = $_GET['message'];
    }
    
    $toy_controller->error($message);
} else {
    $message = "Invalid action was requested.";
    $toy_controller->error($message);
}
