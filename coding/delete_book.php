<?php 
    include("../database.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM libros WHERE id = $id";
        $result = mysqli_query($conexion, $query);

        if (!$result) {
            die("Petición fallida");
        }

        header("Location: ../edit-books.php");
    }

?>