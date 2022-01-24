
<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query4 = "SELECT * FROM libros WHERE id = $id";
        $result4 = mysqli_query($conexion,$query4);

        foreach($result4 as $row){
            $image = $row['img_URL'];
            $title = $row['titulo'];
            $author = $row['author'];
            $price = $row['precio'];
        } ?>   
    <img src="<?php echo $image?>">
	<div class="content-text">
		<h2><?php echo $title?></h2>
        <h3><?php echo $author?></h3>
        <span>$<?php echo $price?>MXN</span>
	</div>

<?php    } else {
        echo "id no encontrado";
    }
?>

 


