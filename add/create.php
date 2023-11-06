<?php
require '../models/User.php';
require '../db/DBHelper.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array();
    $success = false;
    if(empty($_POST['name'])) {
        $errors['name'] = 'Please enter your name';
    }
    if (empty($_POST['gender'])) {
        $errors['gender'] = 'Please enter your gender.';
    }
    if (empty($_POST['city'])) {
        $errors['city'] = 'Please enter your city.';
    }

    if(count($errors) == 0) {

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];

        $user = new \models\User($name, $gender, $city);

        $pdo = new \db\DBHelper('mysql:host=localhost;port=3307;dbname=tasks', 'root', '');



        if($pdo->insert("a_users", $user)) {
            $success = true;
        }
    }
}
?>
