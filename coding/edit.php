<?php 
    include '../database.php';

	if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM libros WHERE id = $id";
        $result = mysqli_query($conexion,$query);
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!--FONT OSWALD-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/homepage.css">
	<link rel="stylesheet" href="../css/book.css">
	<link rel="stylesheet" href="../css/insert.css">
    <title>Preview</title>
</head>
    <body>
    </body>
</html>    