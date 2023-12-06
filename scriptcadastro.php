<?php 
//inicializando as sessões
session_start();

//Criar a conexão com o Banco de Dados
include("conexao.php");
$conn=conectar();

//Recuperando dados do formulário com o método POST
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$painel = $_POST['painel'];

//Preparando o INSERT INTO com pseudo-nome para cadastrar no banco de dados
$cadastro = $conn->prepare("INSERT INTO usuario(id, nome, email, senha, painel)
VALUES(:id, :nome, :email, :senha, :painel)");

//Passando os dados das variáveis para os pseudo-nomes através do método bindValue
$cadastro->bindValue(":id", $id);
$cadastro->bindValue(":nome", $nome);
$cadastro->bindValue(":email", $email);
$cadastro->bindValue(":senha", $senha);
$cadastro->bindValue(":painel", $painel);

//Verificando se já existe um email cadastrado
$verificar = $conn->prepare("SELECT *FROM USUARIO WHERE email=?");
$verificar->execute(array($email));

if($verificar->rowCount()==0):
    $cadastro->execute();
    echo "Usuário cadastrado com sucesso!";
else:
    echo "E-mail já cadastrado";
endif;

//Contagem de usuários cadastrados
$result = $cadastro->rowCount();

//Criando as SESSÕES "cadastrado" e "nao_cadastrado"
if($result == 1){
    $_SESSION['cadastrado']=true;
    header('Location: cadastro.php');
    exit();
}else{
    $_SESSION['nao_cadastrado']=true;
    header('Location: cadastro.php');
    exit();
}


?>