<?php
require 'models/User.php';
require 'db/DBHelper.php';

$pdo = new \db\DBHelper('mysql:host=localhost;port=3307;dbname=tasks', 'root', '');
$users = $pdo->getData("a_users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            margin-top: 50px;
        }
        h2 {
            text-align: center;
        }
        .user-card {
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .user-card h3 {
            color: #007BFF;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">User App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="add/">Add user</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <h2>User List</h2>
    <?php if(empty($users)) {?>
        No users yet!
    <?php } else {?>

    <?php foreach ($users as $user) {?>
    <div class="user-card">
        <h3>Name: <?=$user['name'] ?></h3>
        <p>Gender: <?=$user['gender'] ?></p>
        <p>City: <?=$user['city'] ?></p>
    </div>
    <?php }}?>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

