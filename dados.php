<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dados</title>
<meta http-equiv="refresh" content=5;url="index.php">

</head>

<body>

<?php
$nome = $_POST["nome"];	
$data = $_POST["data"];
$motivo = $_POST["motivo"];
?>

<?php
echo "nome: " . $_POST["nome"];
?>

<?php
echo "data: " . $_POST["data"];
?>

<?php
echo "motivo: " . $_POST["motivo"];
?>

<?php
//Criamos uma função que recebe um texto como parâmetro.
function gravar($texto){
    //Variável arquivo armazena o nome e extensão do arquivo.
    $arquivo = "dados.txt";
     
    //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
    $fp = fopen($arquivo, "a+");
 
    //Escreve no arquivo aberto.
    fwrite($fp, $texto);
     
    //Fecha o arquivo.
    fclose($fp);
}

gravar("nome: $_POST[nome] data: $_POST[data] Motivo: $_POST[motivo] <br>")
?>


</body>
</html>