<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ><form action="dados.php" method="POST"><-->
    <form action="dados.php" method="GET">
        Nome: <input type="text" name="nome">
        Email: <input type="email" name="email">
        <button type="submit">Enviar</button>
    </form>

    <a href="dados.php?idade=25&sobrenome=Santos">Enviar dados</a>
</body>
</html>