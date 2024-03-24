<?php
if ($_POST["cxnome"] != "") {
    include_once "factory/conexao.php";
    $nome = $_POST ["cxnome"];
    $cidade = $_POST ["cxcidade"];
    $idade = $_POST ["cxidade"];
    $artista = $_POST ["cxartista"];
    $genero = $_POST ["cxgenero"];
    $cep = $_POST ["cxcep"];
    $cor = $_POST ["cxcor"];
    
    $sql = "insert into tbnicki(nome,cidade,idade,artista,genero,cep,cor)
    values('$nome' , '$cidade' , '$idade' , '$artista' , '$genero' , '$cep' , '$cor')";
    $result = mysqli_query($conn, $sql);

    echo "Dados cadastrado com sucesso!";


    } else
       {
        echo "Dados não cadastrado";

       }
   

?>