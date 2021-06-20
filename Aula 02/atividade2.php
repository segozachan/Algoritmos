<?php
$i = 1;
$vetor = array();
$t = 0;
while ($i <= 20) {
	$vetor[] = mt_rand(0,5);
	if($vetor[$i-1] == 3){$t++;}
	$i++;
}
var_dump ($vetor);
echo "Vezes que o três apareceu: ".$t;
?>