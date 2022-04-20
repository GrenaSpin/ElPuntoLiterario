<?php include("includes/head.php");?>
<?php include("includes/navbar.php");?>


<!--INICIO INSERT-->
    
    <div class="container-insert">
        <h2>Buscar libro</h2>
        <div class="insert-form">
            <form method="GET" class="form_search">
                <div class="insert-content">
                    <p class="insert-label">Titulo del libro: </p>
                    <input type="text" name="busqueda" id ="busqueda" class="txt-insert">
                </div>
                <div class="insert-content">
                    <input type="submit" name="edit-book" value="Buscar libro" class="btn_search input-btn">
                    <a href="insert-books-into-the-database.php" class="input-btn">Regresar</a>
                </div>
            </form>
        </div>
        <table border="1" >
		<thead>
			<th>id</th>
			<th>titulo</th>
			<th>autor</th>
			<th>editorial</th>
		</thead>
        <?php
            if(isset($_GET['edit-book'])) {
                $busqueda = $_GET['busqueda'];

                $query = $conexion->query("SELECT * FROM libros WHERE titulo LIKE '%$busqueda%'");

            while ($row = $query->fetch_array()) { ?>

		<tr height="50">
            <?php $row['img_URL'] ?>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['titulo'] ?></td>
			<td><?php echo $row['author'] ?></td>
			<td><?php echo $row['editorial'] ?></td>
            <td><a href="coding/edit.php?id=<?php echo $row['id']?>" class="input-btn">Edit</a></td>
            <td><a href="coding/delete_book.php?id=<?php echo $row['id']?>" class="input-btn">Borrar</a></td>
		</tr>
    <?php    }
    } ?>
	</table>
    </div>

<!--FINAL INSERT-->



<?php include("includes/footer.php");?>