<?php 
    require 'functions.php';
    $id = $_GET["id"];

    if(hapus($id) > 0){
        echo "
            <script>
                alert('Succsessfully deleted');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Succsessfully added');
                document.location.href = 'index.php';
            </script>
        ";
    }
?>