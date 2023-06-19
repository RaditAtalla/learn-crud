<?php
require "functions.php";
$accounts = query("SELECT * FROM akun");

if (isset($_POST['cari'])) {
    $accounts = cari($_POST['keyword']);
}

if (isset($_POST['reset'])) {
    $accounts = query("SELECT * FROM akun");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account management</title>
</head>

<body>
    <h1>Account Management</h1>
    <a href="add.php">Add account</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
        <button type="submit" name="reset">Reset</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID.</th>
            <th>Action</th>
            <th>Username</th>
            <th>Password</th>
            <th>Bio</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($accounts as $account) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="update.php?id=<?= $account["id"] ?>">Change</a> |
                    <a href="delete.php?id=<?= $account["id"] ?>" onclick="return confirm('Delete data?');">Delete</a>
                </td>
                <td><?= $account["username"] ?></td>
                <td><?= $account["password"]; ?></td>
                <td><?= $account["bio"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>