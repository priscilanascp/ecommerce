<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/stylelogin.css">
    <title>Ecommerce HTML e CSS</title>
</head>
<body>
    <header>

    </header>

    <main class="conteudo">
        <section class="container">
          

            <h1 class="titulo1">Faça seu Login</h1>


            <?php 
            //Verificando se a sessão existe com a função ISSET
            if(isset($_SESSION['nao_autenticado'])):

            ?>

            <!--Mensagem de erro-->

            <div class="notification is-danger" align="center">
              <p style="color:red">Erro: Usuário ou senha inválidos.</p>

            </div>

            <?php 
            endif; //Fechando o IF
            
            //Destruindo a sessão nao_autenticado com a função UNSET
            unset($_SESSION['nao_autenticado']);
            
            ?>


            <!--Início do formulário-->
            <form action="scriptlogin.php" method="post" id="form_login">
                <div>
                    <label>Login <br></label>
                    <input type="email" name="email" placeholder="E-mail do usuário">
                </div>
                <div>
                    <label>Senha <br></label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <div class="botao">
                    <button type="submit">Entrar</button>
                </div>
            </form><!--Fím do formulário-->

            
        </section>

    </main>

</body>
</html>