<?php





if(isset($_POST['submit'])){

    include 'conexao.php';
    $usuario = $_POST['login'];
    $senha = $_POST['senha'];

    $query = "select * from usuario where usuario = '$usuario' and senha = '$senha'";
    $Resultado = pg_query($conexao,$query);

    if(pg_fetch_row($Resultado) != 0){
        header("Location: menu.html");
    }else{
        header("Location: login.php");
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <div>
            <h1>Login</h1>
            <input type="text" placeholder="Nome" id = "login" name="login">
            <br><br>
            <input type="password" placeholder="Senha" id = "senha" name="senha">
            <br><br>
            <input type="submit" name="submit" id="submit" class="button">
        </div>

    </form>
   
</body>
</html>