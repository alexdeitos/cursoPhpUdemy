<?php 

if(isset($_COOKIE["cookie.txt"])) {

	$obj = json_decode($_COOKIE["cookie.txt"],true);
	echo $obj->empresa ;

}

?>