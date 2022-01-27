<?php
    if(isset($_GET['enviar'])) {
        $busqueda = $_GET['search'];

        $query = $conexion->query("SELECT * FROM libros WHERE titulo LIKE '%$busqueda%' OR author LIKE '%$busqueda%'");

    while ($row = $query->fetch_array()) { ?>
        <article class="book-list">
            <div class="info-container">
            <a href="book.php?id=<?php echo $row['id']?> ">
                <div class="img-content-search">
                        <img src="<?php echo $row['img_URL'];?>" alt="product" class="product-img-search">
                </div> 
                <div class="text-content-search">
                    <span class="title"><?php echo $row['titulo'];?></span>
                    <span class="price">$<?php echo $row['precio'];?> MXN</span>
                    
                    <a href="https://wa.me/525521489950" target="_blank">
                        <button type="button" class="display-button">
                        Contacta al vendedor
                        </button>
                    </a>
                </div>
            </a>
            </div>
        </article>      
<?php    }
} ?>