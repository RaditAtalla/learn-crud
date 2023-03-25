<?php 
    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "belajarphp");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data){
        global $conn;
        $username = htmlspecialchars($data["username"]);
        $password = htmlspecialchars($data["password"]);
        $bio = htmlspecialchars($data["bio"]);

        $query = "INSERT INTO akun
                VALUES
                ('', '$username', '$password', '$bio')
                ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM akun WHERE id=$id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

        $id = $data["id"];
        $username = htmlspecialchars($data["username"]);
        $password = htmlspecialchars($data["password"]);
        $bio = htmlspecialchars($data["bio"]);

        $query = "UPDATE akun SET
                    username = '$username',
                    password = '$password',
                    bio = '$bio'
                WHERE id = $id;
                    ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>