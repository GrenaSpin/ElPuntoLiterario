<?php include '../database.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./img/ico_png.ico">
	<!-- FONT AWESOME-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!--FONT OSWALD-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/navigation.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/homepage.css">
	<link rel="stylesheet" href="../css/book.css">
	<link rel="stylesheet" href="../css/insert.css">
	<title>El Punto Literario</title>
</head>
<body>
<nav class="navbar-main">
    <div class="navbar-menu">
        <div class="navbar-menu-left">
            <div class="logo-content">
                <a href="../index.php">
                    <img src="../img/logo_png (1).png" alt="libro literario" class="navbar-logo">
                </a>
            </div>
            
            <ul class="navbar-list">
                <li>
                    <a href="../index.php"><i class="fas fa-book"></i> Pagina principal</a>
                </li>
                <li>
                   <a href="../about-us.php"><i class="fas fa-shapes"></i> Nosotros</a>
                </li>
                <li>
                    <a href="#networks"><i class="fas fa-atlas"></i> Contactanos</a>
                </li>
            </ul>
        </div>
        
        <div class="navbar-menu-right">
            <form action="book-search.php" method="GET" class="content-search">
                <input type="text" name="search" placeholder=" Buscar..." class="search">
                <button type="submit" name="enviar" value="Buscar" class="send">Buscar</button>
            </form>
            <i class="menu-btn fas fa-bars fa-1.9x"></i>
        </div>		
    </div>
</nav>
<!--INICIO INSERT-->
    
<?php 
if (isset($conexion)){
    echo 'Conectado a la base de datos<br>';
} else {
    echo 'no se encontro daba base';
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
	$query = "SELECT * FROM libros WHERE id = $id";
	$result = mysqli_query($conexion, $query);
	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_array($result);
		$imgURL = $row['img_URL'];
		$title = $row['titulo'];
		$author = $row['author'];
		$editorial = $row['editorial'];
		$price = $row['precio'];
		$pages = $row['pages'];
		$size = $row['size'];
		$publication = $row['fecha_publicacion'];
		$description = $row['description'];
	}
    if (!$result) {
        die("Query Failed <br>Error en el query database: ".mysqli_error($conexion));
    }
}
?>
<div class="container-insert">
        <h2>Edite libro</h2>
        <div class="insert-form">
            <form action='insert.php?id=<?php echo $_GET['id']; ?>' method="POST" enctype="multipart/form-data">
                <div class="insert-content-file">
                    <label class="insert-label" for="my-input">Seleccione una imagen</label>
                    <input type="file" name="image-input" class="txt-insert">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Titulo del libro: </p>
                    <input type="text" name="txtTitle" class="txt-insert" value="<?php echo $title; ?>">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Autor: </p>
                    <input type="text" name="txtAuthor" class="txt-insert" value="<?php echo $author; ?>">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Editorial: </p>
                    <input type="text" name="txtEditorial" class="txt-insert" value="<?php echo $editorial; ?>">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Precio: </p>
                    <input type="text" name="txtPrice" class="txt-insert" value="<?php echo $price; ?>">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Paginas: </p>
                    <input type="text" name="txtPages" class="txt-insert" value="<?php echo $pages; ?>">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Dimensiones: </p>
                    <input type="text" name="txtSize" class="txt-insert" placeholder="15 x 12" value="<?php echo $size; ?>">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Fecha de publicación: </p>
                    <input type="text" name="txtPublication" class="txt-insert" value="<?php echo $publication; ?>">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Descripción: </p>
                    <textarea name="txtDescription" rows="20" cols="60"><?php echo $description; ?></textarea>
                </div>
                    <input type="hidden" name="oculto" value="1">
                <div class="insert-content">
                    <input type="reset"  class="input-btn">
                    <input type="submit" name="edit-book" value="Guardar cambio" class="input-btn">
                </div>
            </form>
        </div>
    </div>

<!--FINAL INSERT-->

<?php include("../includes/footer.php");?> 