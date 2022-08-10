<?php
    include("cabecalho.php");
    include("menu.php"); 
    include("conexao2.php");
?>
<center>
<?php
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<div class='content'>";
    date_default_timezone_set('America/Sao_Paulo');
    $datac = date("d");
    echo "<div class='box'>";
    
    echo "Valores recebidos no dia: $datac";

    echo "<br>";

    $stmt = $pdo->prepare("select sum(valor) from tbFinalizar");	
    $stmt ->execute();
    $row = $stmt ->fetch(PDO::FETCH_BOTH);
    echo "R$ $row[0],00";
    
    echo "</div>";

    echo "<br>";
    
    echo "<div class='box'>";
    echo "Quantidade de carros em aberto:";

    echo "<br>";

    $stmt = $pdo->prepare("select count(*) from tbEstacionar where situacao='Em aberto'");	
    $stmt ->execute();
    $row2 = $stmt ->fetch(PDO::FETCH_BOTH);

    echo "$row2[0] veículo(s)";
    echo "</div>";    

    echo "<br>";

    echo "<div class='box'>";
    echo "Quantidade de vagas disponíveis:";

    echo "<br>";

    $vagasd = 20 - $row2[0];

    echo "$vagasd veículo(s)";
    echo "</div>";  
    
    echo "<br>";

    echo "<div class='box'>";
    echo "Quantidade de vagas ocupadas:";

    echo "<br>";

    $vagasl = 20 - $vagasd;

    echo "$vagasl veículo(s)";
    echo "</div>";
    echo "</div>";
?>   
</center>