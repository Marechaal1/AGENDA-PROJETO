<?php
    include_once("./templates/header.php");
?>
 
<div class="container">
    <?php include_once("./templates/backbtn.html");?>
    <h1 id="main-title">Cadastrar um rasta</h1>
    <form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name">Nome do rasta : </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Insira o nome do contato ! " required>
        </div>
        <div class="form-group">
            <label for="name">Telefone : </label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Insira um numero para contato" required>
        </div>
        <div class="form-group">
            <label for="name">Descrição : </label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Comente mais sobre o candidato" rows="3"> </textarea>
        </div>
        <button class="btn btn-primary">C A D A S T R A R</button>
    </form>
</div>

<?php
    include_once("./templates/footer.php");
?>