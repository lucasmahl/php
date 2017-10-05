<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<center>
<div style="background-color: lightgreen; width: 75%; height: auto; color: darkgray">

<?php
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese");
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
    $dataLocal = date('D d/m/Y H:i:s', time());

    
    echo $dataLocal;
    echo "<br/>";
    echo date("l, d/m/Y - H:i:s");

?>
</div>

</center>
</body>
</html>