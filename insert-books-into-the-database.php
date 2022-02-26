<?php include("includes/head.php");?>
<?php include("includes/navbar.php");?>


<!--INICIO INSERT-->
    
    <div class="container-insert">
        <h2>Ingresar libro</h2>
        <div class="insert-form">
            <form action='coding/insert.php' method="POST" enctype="multipart/form-data">
                <div class="insert-content-file">
                    <label class="insert-label" for="my-input">Seleccione una imagen</label>
                    <input type="file" name="image-input" class="txt-insert">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Titulo del libro: </p>
                    <input type="text" name="txtTitle" class="txt-insert">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Autor: </p>
                    <input type="text" name="txtAuthor" class="txt-insert">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Editorial: </p>
                    <input type="text" name="txtEditorial" class="txt-insert">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Precio: </p>
                    <input type="text" name="txtPrice" class="txt-insert">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Paginas: </p>
                    <input type="text" name="txtPages" class="txt-insert">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Dimensiones: </p>
                    <input type="text" name="txtSize" class="txt-insert" placeholder="15 x 12">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Fecha de publicación: </p>
                    <input type="text" name="txtPublication" class="txt-insert">
                </div>
                <div class="insert-content">
                    <p class="insert-label">Descripción: </p>
                    <textarea name="txtDescription" rows="20" cols="60"></textarea>
                </div>
                    <input type="hidden" name="oculto" value="1">
                <div class="insert-content">
                    <input type="reset"  class="input-btn">
                    <input type="submit" name="insert-book" value="Ingresar libro" class="input-btn">
                </div>
            </form>
        </div>
    </div>

<!--FINAL INSERT-->



<?php include("includes/footer.php");?>