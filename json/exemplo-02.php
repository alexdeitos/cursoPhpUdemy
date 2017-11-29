<?php 

$json = '[{"nome":"Alexsandro","idade":20},{"nome":"Pedro","idade":50}]';

$data = json_decode($json, true);

var_dump($data);

?>