
<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query4 = "SELECT * FROM libros WHERE id = $id";
        $result4 = mysqli_query($conexion,$query4);

        foreach($result4 as $row){
            $image = $row['img_URL'];
            $title = $row['titulo'];
            $editorial = $row['editorial'];
            $author = $row['author'];
            $price = $row['precio'];
            $fecha = $row['fecha_publicacion'];
            $size = $row['size'];
            $pages = $row['pages'];
            $description = $row['description'];
        } ?>   

            <div class="content-image">
                <img src="<?php echo $image?>">
            </div>
            <div class="container-text-book">
                <div class="content-text">
                    <h2 class="product-name"><?php echo $title?></h2>
                    <span class="product-editorial"><?php echo $editorial?></span>
                    <span class="product-price">$<?php echo $price?>MXN</span>
                    <a href="https://wa.me/525521489950" target="_blank">
                    <button type="button" class="display-button-book"><i class="fab fa-whatsapp"></i> Contacta al vendedor</button>
                    </a>
                </div>
                <div class="content-character">
                    <h5 class="product-character">Titulo: <?php echo $title?></h5>
                    <h5 class="product-character">Autor: <?php echo $author?></h5>
                    <h5 class="product-character">Año de edición: <?php echo $fecha?></h5>
                    <h5 class="product-character">Páginas: <?php echo $pages?></h5>
                    <h5 class="product-character">Tamaños: <?php echo $size?> cm</h5>
                </div>
            </div>

<?php    } else {
        echo "id no encontrado";
    }
?>

 


