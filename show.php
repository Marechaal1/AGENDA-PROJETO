<?php
include_once("./templates/header.php");
?>

<div class="container" id="view-contact-container">
<?php include_once("./templates/backbtn.html");?>
<h1 id="main-title"><?=$contact['nameContact']?></h1>
<p class="bold"> Telefone :</p>
<p><?=$contact['phoneContact']?></p>
<p class="bold"> Observações :</p>
<p><?=$contact['observationContact']?></p>
</div>

<?php
include_once("./templates/footer.php");
?>