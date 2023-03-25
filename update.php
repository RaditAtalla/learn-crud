<?php 
    require 'functions.php';

    $id = $_GET["id"];
    $account = query("SELECT * FROM akun WHERE id = $id")[0];

    if (isset($_POST["submit"])) {        
        if(ubah($_POST) > 0) {
            echo "
                <script>
                    alert('Succsessfully updated');
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
    <title>update data</title>
</head>
<body>
    <h1>update data</h1>
    <form action="" method="POST">
        <ul>
            <input type="hidden" name="id" value="<?= $account["id"] ?>">
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required value="<?= $account["username"] ?>">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required value="<?= $account["password"] ?>">
            </li>
            <li>
                <label for="bio">Bio:</label>
                <input type="text" name="bio" id="bio" required value="<?= $account["bio"] ?>">
            </li>
            <li><button type="submit" name="submit">update data</button></li>
        </ul>
    </form>
</body>
</html>