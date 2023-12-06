<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/stylecad.css">
    <title>Ecommerce</title>
</head>
<body>

  <!--Verificando se a sessão "cadastrado" existe-->
  <?php 
    if(isset($_SESSION['cadastrado'])):
    
    ?>
    <!--Mensagem de usuário cadastrado-->

    <div class="notification is-danger" align="center">
    <p style="color:#fff">Usuário cadastrado com sucesso!</p>
    </div>

    <?php 
    endif;
    unset($_SESSION['cadastrado']);
    ?>


    <!--Verificando se a sessão "nao_cadastrado" existe-->
    <?php 
    if(isset($_SESSION['nao_cadastrado'])):
    
    ?>
    <!--Mensagem de Usuário não cadastrado-->

    <div class="notification is-danger" align="center">
    <p style="color:#f00">Erro: e-mail já cadastrado!</p>
    </div>

    <!--Fechando o IF e destruindo a SESSÃO-->
    <?php 
    endif;
    unset($_SESSION['nao_cadastrado']);
    ?>

    <h2 id="titcad">Formulário de Cadastro</h2>
       
    <main class="conteudo">
    <section class="bloco">
    <form action="scriptcadastro.php" method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <select name="painel">
            <option value="cliente">Cliente</option>
            <option value="funcionario">Funcionário</option>
            <option value="administrador">Administrador</option>
        </select>
        <button type="submit">Entrar</button>
        </section>
    </form>
    </main>
</body>
</html>