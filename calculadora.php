<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="resultado">
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if ($num1 === '' or $num2 === '') {
    echo "Operação Inválida";
} 
else {
    switch ($_POST['operacao']) {
        case 'soma':
            $resultado = $num1 + $num2;
            break;
        case 'subtracao':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacao':
            if($num1 == 0 or $num2 == 0){
                $resultado = 0;  
            }
            else{
                $resultado = $num1 * $num2;
            }
                break;
        case 'divisao':
            if($num2 == 0){
                $resultado = null;  
            }
            else{
                $resultado = $num1 / $num2;
            }
            break;
        case 'exponenciacao':
            $resultado = pow($num1, $num2);
            break;
        case 'raiz-quadrada':
            $resultado = sqrt($num1 + $num2);
            break;
        case 'fatorial':
            $resultado = 1;
            for($i = 1; $i <= $num1 + $num2; $i++){
                $resultado *= $i;
            }
            break;
        default:
            exit;
    }

if ($resultado === null){
    echo "Não é possível dividir por 0";
} 
else{
    echo "Resultado: " . number_format($resultado, 2, ",");
}
}
?>
</body>
<footer>
    <p>@ Lucas Gabriel Adonski @</p>
</footer>
</html>
