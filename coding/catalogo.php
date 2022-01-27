<?php foreach($result as $row){ ?>
    <article class="catalogo-books">
        <div class="info-catalogo-container">
        <a href="book.php?id=<?php echo $row['id']?> ">
            <div class="img-content">
                <img src="<?php echo $row['img_URL'];?>" alt="product" class="product-img-catalogo">
            </div> 
            <div class="text-content">
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
<?php } ?>