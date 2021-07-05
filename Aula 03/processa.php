<html>
<head>
<meta charset="UTF-8">
<title>Dados</title>
</head>

<body>
<h1>Dados:</h1>

<?php
	if(isset($_GET["nome"]) == true){
	$nome = $_GET["nome"];
	echo "o nome é: " . $nome . "<br>";
	}
	
	if(isset($_GET["opção"]) == true){
	$opção = $_GET["opção"];
	echo "o sexo é: " . $opção . "<br>";
	}
	
	if(isset($_GET["CorOlhos"]) == true){
	$corOlhos = $_GET["CorOlhos"];
	echo "a cor dos olhos é: " . $corOlhos . "<br>";
	}
	
	if(isset($_GET["altura"]) == true){
	echo "a altura é maior que 1,83m <br>";
	}else{echo "a altura é menor que 1,83m <br>";}
	
	if(isset($_GET["peso"]) == true){
	echo "o peso é maior que 91kg <br>";
	}else{echo "o peso é menor que 91kg <br>";}
	
	if(isset($_GET["atl"]) == true){
	$fis = $_GET["atl"];
	echo $nome . " descreve a sua capacidade atlética como: " . $atl . "<br>";
	}
?>
</body>
</html>