<?php 

$filename = "usuarios.csv";

if (file_exists($filename)) {

	$file = fopen($filename, "r") ; // o r apenas le o arquivo

	$headers = explode(",",fgets($file));

	$data = array();

	while($row = fgets($file)) {

		$rowData = explode(",",$row);

		for ($i = 0 ; $i < count($headers); $i++) {

			$linha[$headers[$i]] = $rowData[$i];

		}

		array_push($data, $linha); //adiciona no array data o conteudo da variavel linha
	}

	fclose($file);

	echo json_encode($data);
}

?>