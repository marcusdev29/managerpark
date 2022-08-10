<?php
    $placa = $_POST["txPlaca"];
    $marca = $_POST["txMarca"];
    $modelo = $_POST["txModelo"];
    $dono = $_POST["txDono"];

    $situacao = "Em aberto";

    //echo "$produto $idCategoria $valor";
    date_default_timezone_set('America/Sao_Paulo');
    $data = date("Y-m-d");
	$hora = date('H:i:s');

  

    
    include("conexao2.php");
    

    $stmt = $pdo->prepare("insert into tbEstacionar(placa, marca, modelo, dono, data, hora, situacao) values('$placa', '$marca', '$modelo', '$dono', '$data', '$hora', '$situacao')");
    $stmt->execute();

    $stmt2 = $pdo->prepare("insert into tbEstacionarS(placa, marca, modelo, dono, data, hora, situacao) values('$placa', '$marca', '$modelo', '$dono', '$data', '$hora', '$situacao')");
    $stmt2->execute();

    header("location:estacionar-exibir.php")
    
?>