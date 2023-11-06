
<?php
require 'create.php'
?>


<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <a class="nav-link" href="../index.php">User list</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-5">
    <h2>User Information Form</h2>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" >
            <?php if(isset($errors['name'])) {?>
            <div class="invalid-feedback d-block"><?=$errors['name']?></div>
            <?php } ?>
        </div>

        <div class="form-group">
            <label>Gender:</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="male" name="gender" value="male">
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="female" name="gender" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
            <?php if(isset($errors['gender'])) {?>
                <div class="invalid-feedback d-block"><?=$errors['gender']?></div>
            <?php } ?>
        </div>

        <div class="form-group">
            <label for="city">City:</label>
            <select class="form-control" id="city" name="city">
                <option value="">Select a city</option>
                <option value="New York">New York</option>
                <option value="London">London</option>
                <option value="Paris">Paris</option>
                <option value="Tokyo">Tokyo</option>
                <option value="Mumbai">Mumbai</option>
            </select>
            <?php if(isset($errors['city'])) {?>
                <div class="invalid-feedback d-block"><?=$errors['city']?></div>
            <?php } ?>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Add</button>
        <?php if(isset($success) && $success) {?>
            <div class="alert alert-success mt-3">New user added!</div>
        <?php }?>
    </form>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


