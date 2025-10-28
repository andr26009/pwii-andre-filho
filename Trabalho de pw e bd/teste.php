<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>teste</title>
    </head>
    <body>
        <form action="teste.php" method="post">
            Nome: <input type="text" name="nome"> <br><br>
            Idade: <input type="number" name="idade"> <br><br>
            CPF: <input type="text" name="cpf"> <br><br>
            Telefone Fixo: <input type="text" name="TF"><br><br>
            Telefone Celular: <input type="text" name="TC"><br><br>
            endereco: <input type="text" name="endereco"><br><br>
            Email: <input type="text" name="Email"><br><br>
            <input type="submit" value="Roubar dados">
        </form>
    </body>
</html>


<?php

    
    

    
    
    
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $TF = $_POST['TF'];
    $TC = $_POST['TC'];
    $endereco = $_POST['endereco'];
    $Email = $_POST['Email'];

    $username = "root";
    $password = "";
    
    $conn = new PDO("mysql:host=localhost;dbname=roubardados", $username, $password);
    
    $inserir = $conn->prepare("insert into dadosroubados (nome, idade, cpf, TelefoneFixo, telefoneCelular, endereco, Email) values ('$nome', $idade, '$cpf', '$TF', '$TC', '$endereco', '$Email')");

    $inserir->execute();
    

    echo "<br> Nome: ${nome} <br><br>";
    echo "Idade: ${idade} <br><br>";
    echo "CPF: ${cpf} <br><br>";
    echo "Telefone Fixo: ${TF} <br><br>";
    echo "Telefone Celular: ${TC} <br><br>";
    echo "endereco: ${endereco} <br><br>";
    echo "Email: ${Email} <br><br>"; 

    


?>