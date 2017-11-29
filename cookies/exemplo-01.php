<?php 

$data1 = array(
	"empresa"=>"LinxPharma",
);

setcookie("cookie.txt",json_encode($data1),time() + 3600);

echo "OK";

?>