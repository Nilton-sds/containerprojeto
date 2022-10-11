

<?php

include 'conexao.php';

$nome = $_POST['nome'];
$numerocontainer= $_POST['numerocontainer'];
$tipo= $_POST['tipo'];
$status= $_POST['status'];
$categoria= $_POST['categoria'];

$recebendo_cadastros = "INSERT INTO cadastro1
VALUES ('','$nome','$numerocontainer','$tipo','$status','$categoria')";
$query_cadastros = mysqli_query($connx,$recebendo_cadastros);
header('location:pagina.php');


?>