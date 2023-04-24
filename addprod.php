<?php
    // Executa a conexao com o mysql e selecionar a base
    INCLUDE 'conect.php';
try {
    
$codProduto = $_POST['codProduto'];
$lote = $_POST['lote'];
$validade = $_POST['validade'];
$descricao = $_POST['descricao'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

 // Prepara o objeto statement e faz a execução da query
 $stmt = $pdo->prepare('INSERT INTO produto (codProduto,lote,validade,descricao,nome,quantidade,preco) 
 VALUES(:codProduto,:lote,:validade,descricao,:nome,:quantidade,:preco,)');
//Execução do array
 $stmt->execute(array(
     ':codProduto'=>$codProduto,
     ':lote'=>$lote,
     ':validade'=>$validade,
     ':descricao'=>$descricao,
     ':nome'=>$nome,
     ':quantidade'=>$quantidade,
     ':preco'=>$preco,
 ));
 header('Location: telaADM.html');
} 
/* Caso venha erro tras a exceção*/
catch (PDOException $e) {
 echo 'Error: ' . $e->getMessage();
}





