<?php
require_once 'header.php';
require_once 'footer.php';
?>

<?php echo "Olá Pessoal"; 
/**
 * A diferença entre include e require é a forma como um erro é tratado. require produz um erro E_COMPILE_ERROR, 
 * o que encerra a execução do script. O include apenas produz um warning que pode ser "abafado" com @.
 * include_once tem a garantia que o arquivo não será incluído novamente se ele já foi incluído antes.
 * require_once é análogo ao include_once
 * require_once é um statement portanto a sintaxe com parenteses pode confundir um pouco. No primeiro olhar pode parecer que é uma função. 
 * Por isso não aconselho seu uso, apesar de não trazer consequências prejudiciais ao programa.
 */