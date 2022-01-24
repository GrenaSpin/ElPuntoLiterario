<?php include("includes/head.php");?>
<?php include("includes/navbar.php");?>

    <main class="homepage">

        <!--CATALOGO-->
        <section class="container catalogo">
            <div class="content-products">
                <div class="title">
                    <h4>Catalogo</h4>
                    <a href="all-books.php">Ver todos<i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="products-center-catalogo">
                    <?php include 'coding/catalogo.php';?>
                </div>
            </div>
        </section>


        <!--NOVEDADES-->
        
        <section class="container novedades">
            <div class="content-products">
                <div class="title">
                    <h4>Novedades</h4>
                </div>
                <div class="products-center">
                    <?php include 'coding/novedades.php';?>
                </div>
            </div>
        </section>

        
    </main>

<?php include("includes/footer.php");?>