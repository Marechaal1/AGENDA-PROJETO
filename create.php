<?php
    include_once("./templates/header.php");
?>
 
<div class="container">
    <?php include_once("./templates/backbtn.html");?>
    <h1 id="main-title">Adicionar contato</h1>
    <form action="<?=$BASE_URL?>config/process.php">
        <input type="hidden" name="type" value="create">
    </form>
</div>

<?php
    include_once("./templates/footer.php");
?>