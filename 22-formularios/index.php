<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* Validações
Funções (filter_input - filter_var)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL
*/
?>

<?php
if(isset($_POST['enviar-formulario'])):
    //Array de erros
    $erros = array(); 
    
    //Validações
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = "Idade precisa ser um numero inteiro";
    endif;

    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[] = "Email invalido";
    endif;

    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = "Peso precisa ser float";
    endif;

    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[] = "IP invalido";
    endif;

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[] = "URL invalida";
    endif;

    //Exibindo mensagens de erro
    if(!empty($erros)):
        foreach($erros as $erro):
            echo "<li> $erro";
        endforeach;
    else:
        echo "Dados Corretos";
    endif;
endif;

?>
    <form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <!-- ><form action="dados.php" method="GET"><-->
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        Peso: <input type="text" name="peso"><br>
        IP: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button><br>
    </form>

    <!-- ><a href="dados.php?idade=25&sobrenome=Santos">Enviar dados</a><-->
</body>
</html>