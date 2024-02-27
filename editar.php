<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<script>

function deletar(id){
 var idRegistro=id;
 console.log(idRegistro);
 $.ajax({
        url:'http://localhost/Cadastros/delete.php?',
        method:'POST',
        data:{id:idRegistro},
        success:function(response){
            console.log(response);
            alert("Registro deletado com sucesso");
            
        },
        error:function(xhr,status,error){
            console.log(error);
            alert("erro ao deletar registro");
        }
    });
    
    }
</script>
<body>
    <form action="delete.php">
<?php
include("processar_cadastro.php");
$sql = "SELECT *FROM formulario";
$result = $conn->query($sql);
$cont=1;
if ($result->num_rows > 0) {
    ;
    while($row = $result->fetch_assoc()) {
        $x=$row['nome']!=NULL || $row['email']!=NULL || $row['senha']!=NULL ;
        if($x == TRUE){
          echo "<div>ID: " .$row['id']. " - Nome: " .$row["nome"]. "</div> <button type="." 'button'  " ." id=".$row["id"]." onclick="."deletar(".$row["id"].") ".">Delete</button> <br>";
        }
    }
    
} else {
    echo "0 resultados";
}
?>
</form>
</body>
</html>