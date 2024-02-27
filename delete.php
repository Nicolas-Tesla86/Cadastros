<?php
include("editar.php");
if(isset($_POST['id'])){
    $idRegistro=$_POST['id'];
    $sql="DELETE FROM formulario WHERE id = '$idRegistro' ";
    if($conn->query($sql)===TRUE){
        echo "Registro deletado com sucesso '$idRegistro'";
        echo  "id: $idRegistro ";
    }else{
        echo "Erro ao deletar registro: ".$conn->error;

    }

}


?>