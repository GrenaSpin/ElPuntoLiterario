<?php include("includes/head.php");?>
<?php include("includes/navbar.php");?>

<article class="container-book">
    <div class="content-book">
        
	    	<?php include 'coding/book-id.php';?>
        
    </div>
    <div class="container-description">
        <h4 class="description-title">Descripción</h4>
        <div class="description-content">
            <p class="description"><?php echo $description?></p>
        </div>
    </div>
</article>

<?php include("includes/footer.php");?>