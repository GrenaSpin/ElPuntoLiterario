<?php
    if(isset($_GET['enviar'])) {
        $busqueda = $_GET['search'];

        $query = $conexion->query("SELECT * FROM libros WHERE titulo LIKE '%$busqueda%' OR author LIKE '%$busqueda%'");

    while ($row = $query->fetch_array()) { ?>
        <article class="book-list">
            <div class="info-container">
                <div class="img-content">
                    <a href="book.php?id=<?php echo $row['id'];?>">
                        <img src="<?php echo $row['img_URL'];?>" alt="product" class="product-img-catalogo">
                    </a>
                </div> 
                <div class="text-content">
                    <span class="title"><?php echo $row['titulo'];?></span>
                    <span class="price">$<?php echo $row['precio'];?> MXN</span>
                    <a href="book.php?id=<?php echo $row['id'];?>">
                        <button type="button" class="display-button">
                            Ver libro
                        </button>
                    </a>
                </div>
            </div>
        </article>      
<?php    }
} ?>