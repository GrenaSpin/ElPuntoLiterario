<?php foreach($result as $row){ ?>
    <article class="catalogo-books">
        <div class="info-catalogo-container">
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
<?php } ?>