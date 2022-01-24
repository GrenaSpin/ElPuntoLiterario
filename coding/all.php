<?php while($row1 = mysqli_fetch_array($result3)){ ?>
    <article class="catalogo-books">
        <div class="info-catalogo-container">
            <div class="img-content">
                <a href="book.php?id=<?php echo $row1['id']?> ">
                    <img src="<?php echo $row1['img_URL']?>" alt="product" class="product-img-catalogo">
                </a>
            </div> 
            <div class="text-content">
                <span class="title"><?php echo $row1['titulo']?></span>
                <span class="price">$<?php echo $row1['precio']?> MXN</span>
                <a href="book.php?id=<?php echo $row1['id']?>">
                    <button type="button" class="display-button">
                        Ver libro
                    </button>
                </a>
            </div>
        </div>
    </article>
<?php } ?>                                                                                                                                  