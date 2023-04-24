<?php
    // Executa a conexao com o mysql e selecionar a base
    INCLUDE 'conect.php';
try {
    
$func_nome = $_POST['func_nome'];
$data_nasc = $_POST['data_nasc'];
$func_cpf = $_POST['func_cpf'];
$func_email = $_POST['func_email'];
$func_bairro = $_POST['func_bairro'];
$func_rua = $_POST['func_rua'];
$func_num = $_POST['func_num'];
$func_city = $_POST['func_city'];

 // Prepara o objeto statement e faz a execução da query
 $stmt = $pdo->prepare('INSERT INTO funcionario (nome,dataNasc,cpf,email,bairro,rua,num,cidade) 
 VALUES(:nome,:dataNasc,:cpf,:email,:bairro,:rua,:num,:cidade)');
//Execução do array
 $stmt->execute(array(
     ':nome'=>$func_nome,
     ':dataNasc'=>$data_nasc,
     ':cpf'=>$func_cpf,
     ':email'=>$func_email,
     ':bairro'=>$func_bairro,
     ':rua'=>$func_rua,
     ':num'=>$func_num,
     ':cidade'=>$func_city,
 ));
 header('Location: telaADM.html');
} 
/* Caso venha erro tras a exceção*/
catch (PDOException $e) {
 echo 'Error: ' . $e->getMessage();
}









