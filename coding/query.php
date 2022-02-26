<?php 
    $query = "SELECT * FROM libros WHERE id<=8";
    $result = mysqli_query($conexion,$query);

    $query2 = "SELECT * FROM libros WHERE id>=20 AND id<=23";
    $result2 = mysqli_query($conexion,$query2);

    $query3 = "SELECT * FROM libros";
    $result3 = mysqli_query($conexion,$query3);

?>
