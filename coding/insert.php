<?php 

include '../database.php';
require '../vendor/autoload.php';
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
if (isset($conexion)){
    echo 'Conectado a la base de datos<br>';
} else {
    echo 'no se encontro daba base';
}

if (isset($_POST['insert-book'])) {
    
    $image = $_FILES['image-input']['name'];
    if (isset($image) && $image != "") {
        $tipo = $_FILES['image-input']['type'];
        $temp = $_FILES['image-input']['tmp_name'];

        if ( !((strpos($tipo,'jpeg') || strpos($tipo,'jpg') || strpos($tipo,'png')))) {
            $_SESSION['mesage'] = "Solo se permite archivos jpeg,jpg,png";
            header('location:../insert-books-into-the-database.php');
        } else {
            // configure globally via a JSON object
            Configuration::instance([
                'cloud' => [
                'cloud_name' => 'doz4ln6wb', 
                'api_key' => '389937251465882', 
                'api_secret' => 'jzvXNXnbg8wSrn5PW1TfO3ZP5K0'],
                'url' => [
                    'secure' => true]]);

            $imagen = (new UploadApi())->upload($temp);

            $imagen_db = $imagen['secure_url'];
        }
    }
    $title = $_POST['txtTitle'];
    $author = $_POST['txtAuthor'];
    $editorial = $_POST['txtEditorial'];
    $price = $_POST['txtPrice'];
    $pages = $_POST['txtPages'];
    $size = $_POST['txtSize'];
    $publication = $_POST['txtPublication'];
    $description = $_POST['txtDescription'];

    $query5 = "INSERT INTO libros(img_URL,titulo,author,editorial,precio,pages,size,fecha_publicacion,description) VALUES ('$imagen_db','$title','$author','$editorial','$price','$pages','$size','$publication','$description')";
    $result5 = mysqli_query($conexion,$query5);

    if (!$result5) {
        die("Query Failed <br>Error en el query database: ".mysqli_error($conexion));
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

        <article class="container-book">
            <a href="edit.php?id=<?php echo $row['id']?>">
            <input type="submit" name="insert-book" value="Editar" class="input-btn">
            </a>
            <div class="content-book">
                <div class="content-image">
                    <img src="<?php echo $imagen_db?>">
                </div>
                <div class="container-text-book">
                    <div class="content-text">
                        <h2 class="product-name"><?php echo $title?></h2>
                        <span class="product-editorial"><?php echo $editorial?></span>
                        <span class="product-price">$<?php echo $price?>MXN</span>
                    </div>
                    <div class="content-character">
                        <h5 class="product-character">Titulo: <?php echo $title?></h5>
                        <h5 class="product-character">Autor: <?php echo $author?></h5>
                        <h5 class="product-character">Año de edición: <?php echo $publication?></h5>
                        <h5 class="product-character">Páginas: <?php echo $pages?></h5>
                        <h5 class="product-character">Tamaños: <?php echo $size?> cm</h5>
                    </div>
                </div>
            </div>
            <div class="container-description">
                <h4 class="description-title">Descripción</h4>
                <div class="description-content">
                    <p class="description"><?php echo $description?></p>
                </div>
            </div>
        </article>
    </body>
</html>
<?php 
    }

    /*if (isset($conexion)){
        echo 'todo listo';
    } else {
        echo 'no se encontro daba base';
    }*/
    
?>