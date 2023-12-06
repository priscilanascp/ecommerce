<?php 
//Conectando o Banco de Dados com PDO

//Criar uma função para utilizar a conexão em outros arquivos
function conectar(){
//Tratando Excessões com Try/Catch
try{
    $conn = new PDO("mysql:host=localhost; dbname=ecommerce", "root", "");
}catch(PDOException $e){
    echo $e->getMessage();
    echo $e->getCode();
}   
return $conn; //Retorna a variável de conexão
}