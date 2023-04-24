<?php
    // Executa a conexao com o mysql e selecionar a base
    INCLUDE 'conect.php';
try {
    $id = $_POST['id']
    $stmt = $pdo->prepare('delete from produto where codProduto=:id');
   //Execução do array
    $stmt->execute(array(
        ':id'=>$id,
    ));
    header('Location: telaADM.html');
} 
/* Caso venha erro tras a exceção*/
catch (PDOException $e) {
 echo 'Error: ' . $e->getMessage();
}

