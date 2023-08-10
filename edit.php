<?php
    include_once("./templates/header.php");
?>
 
<div class="container">
    <?php include_once("./templates/backbtn.html");?>
    <h1 id="main-title">Atualize os dados do rasta</h1>
    <form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <input type="hidden" name="id" value="<?=$contact["id"]?>">
        <div class="form-group">
            <label for="name">Atualize o nome do rasta : </label>
            <input type="text" class="form-control" id="name" name="name" value="<?=$contact["nameContact"]?> " required>
        </div>
        <div class="form-group">
            <label for="name">Atualize o telefone: </label>
            <input type="text" class="form-control" id="phone" name="phone"  value="<?=$contact["phoneContact"]?>" required>
        </div>
        <div class="form-group">
            <label for="name">Descrição : </label>
            <textarea type="text" class="form-control" id="description" name="description" rows="3"> <?=$contact["observationContact"]?> </textarea>
        </div>
        <button class="btn btn-primary">ATUALIZAR</button>
    </form>
</div>

<?php
    include_once("./templates/footer.php");
?>