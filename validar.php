<?php
    // Executa a conexao com o mysql e selecionar a base
    INCLUDE 'conect.php';

    session_start(); //faz o arquivo iniciar a sessao com o browser
    
    // pega dados via POST
    // Recebe o valo do email
    $login = $_POST["login"];
    // Recebe o valo do email
    $senha = $_POST["senha"];
    // Converte a senha em um hash criptografado de SHA1
    $senha = sha1($senha);

// Faz a consulta na tabela usuários
    $stmt = $pdo->prepare('SELECT * FROM login WHERE usuario = :login AND senha = :senha');
    $stmt->execute(array(
      ':login'   => $login,
      ':senha' => $senha,
    ));
  // Se encontrar uma linha entra no IF
    if(($stmt->rowCount()) ==1){

        foreach($stmt as $row):/* descarrega o statement para a variável $row */
            $_SESSION["id_user"] = $row["id_user"]; /* Cria a seção com o id do user */
            header('Location: telaADM.html');
        endforeach;
    }
    else {
      echo "<script>alert ('Login ou Senha Inválidos!'); location.href='login.html';</script>";
    }

    ?>
