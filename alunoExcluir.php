 <?php
session_start(); 
//Verifica o acesso.
if($_SESSION['acesso']=="Admin"){
 
//Faz a leitura do dado passado pelo link.
$campoid = $_GET["id"];
 
//Faz a conexão com o BD.
require 'conexao.php';

// Apagar da tabela usuários o registro com o id
$sql = "DELETE FROM alunos WHERE ID_aluno=$campoid";

//Executa o sql e faz tratamento de erro.
if ($conn->query($sql) === TRUE) {
  echo "Aluno excluido com sucesso";
   header('Location: alunoControlar.php'); //Redireciona para o controle  
} else {
  echo "Erro: " . $conn->error;
}

//Fecha a conexão.
$conn->close();

//Se o usuário tem acesso
} else {
   header('Location: index.html'); //Redireciona para o form
    exit; // Interrompe o Script
}
?> 