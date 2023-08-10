<?php 

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;
//---- MODIFICAÇÃO NO BANCO
if(!empty($data)){
    if($data["type"] === "create"){
        $name = $data["name"];
        $phone = $data["phone"];
        $observation = $data["description"];

        $query = "INSERT INTO contacts (nameContact, phoneContact, observationContact) VALUES (:nameContact, :phoneContact, :observationContact)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nameContact", $name);
        $stmt->bindParam(":phoneContact", $phone);
        $stmt->bindParam(":observationContact", $observation);

        try{ 
            $stmt->execute();
            $_SESSION["msg"] = "Adicionado com sucesso !";
        } catch(PDOException $e){
            //ERRO NA CONEXÃO
            $error = $e->getMessage();
            echo "ERROR : $error"; 
        
    }
}

    header("Location:" . $BASE_URL . "../index.php");
//SELEÇÃO DE DADOS 
} else {
    $id;

    if(!empty($_GET)){
        $id = $_GET['id'];
    }
    
    if(!empty($id)) {
        $query = "SELECT * FROM contacts WHERE id = :id";
    
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    
        $contact = $stmt->fetch();
    
    } else {
        //RETORNA TODOS OS CONTATOS 
        $contacts = [];
    
        $query = "SELECT * FROM contacts";
        $stmt = $conn->prepare($query);
        $stmt->execute();
    
        $contacts = $stmt->fetchAll();
    
    }
}
