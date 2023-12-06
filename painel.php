<?php 
session_start(); //Iniciando uma sessão

//Chamando um script para verificar a existencia de uma sessão
include('scriptverificalogin.php');

?>

<!--Mostrar nome do usuário logado-->

<div align="right">
    <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
</div>

<!--Link para encerrar a sessão do usuário--> 
<div align="right">
<nav> 
 <h3><a href="scriptlogout.php">Logout</h3>
</nav>
</div>
