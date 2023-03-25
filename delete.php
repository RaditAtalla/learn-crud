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
                alert('failed to delete');
                document.location.href = 'index.php';
            </script>
        ";
    }
?>