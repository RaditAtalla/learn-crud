<?php 
    require 'functions.php';
    if (isset($_POST["submit"])) {        
        if(tambah($_POST) > 0) {
            echo "
                <script>
                    alert('Succsessfully added');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('Error');
            </script>
            ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new account</title>
</head>
<body>
    <h1>Add New Account</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </li>
            <li>
                <label for="bio">Bio:</label>
                <input type="text" name="bio" id="bio" required>
            </li>
            <li><button type="submit" name="submit">Add account</button></li>
        </ul>
    </form>
</body>
</html>