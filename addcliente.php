<?php
    // Executa a conexao com o mysql e selecionar a base
    INCLUDE 'conect.php';
try {
    
$cliente_nome = $_POST['cliente_nome'];
$data_nasc = $_POST['data_nasc'];
$cliente_cpf = $_POST['cliente_cpf'];
$cliente_email = $_POST['cliente_email'];
$cliente_tel = $_POST['cliente_tel'];
$cliente_bairro = $_POST['cliente_bairro'];
$cliente_rua = $_POST['cliente_rua'];
$cliente_num = $_POST['cliente_num'];
$cliente_city = $_POST['cliente_city'];

 // Prepara o objeto statement e faz a execução da query
 $stmt = $pdo->prepare('INSERT INTO cliente (nome,dataNasc,cpf,tel,email,bairro,rua,num,cidade) 
 VALUES(:nome,:dataNasc,:cpf,tel,:email,:bairro,:rua,:num,:cidade)');
//Execução do array
 $stmt->execute(array(
     ':nome'=>$cliente_nome,
     ':dataNasc'=>$data_nasc,
     ':cpf'=>$cliente_cpf,
     ':tel'=>$client_tel,
     ':email'=>$cliente_email,
     ':bairro'=>$cliente_bairro,
     ':rua'=>$cliente_rua,
     ':num'=>$cliente_num,
     ':cidade'=>$cliente_city,
 ));
 header('Location: telaADM.html');
} 
/* Caso venha erro tras a exceção*/
catch (PDOException $e) {
 echo 'Error: ' . $e->getMessage();
}





