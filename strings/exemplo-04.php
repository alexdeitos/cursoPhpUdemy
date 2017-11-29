<?php

$frase = "Hoje estou de folga do trabalho";
$palavra = "folga";

//Pega a posição em que inicia a palavra 'folga'
$query = strrpos($frase, "folga");
echo "ande $query espaços para chegar a palavra 'folga'";
echo "<br>";

//Mostrar a frase apenas até onde começa a palavra 'folga'
$texto = substr($frase, 0, $query);
echo "$texto";
echo "<br>";

//Msotra a frase que vem depois do termino da palavra 'folga'
$texto2 = substr($frase, $query + strlen($palavra), strlen($frase));
echo "$texto2";

?>