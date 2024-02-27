<?php
include("connct.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $sql="INSERT INTO  formulario (nome,email,senha) VALUES ('$nome','$email','$senha')";
    if($conn->query($sql) === TRUE){
        echo "Registro criado com sucesso";
    }else{
        echo "Erro ao criar registro";
    }
}

?>