<?php 

 require("config.php");

 	echo session_save_path();

	echo "<br>";

 	var_dump(session_status());
 	
 	echo "<br>";

 	switch (session_status()) {
		case PHP_SESSION_DISABLE:
		echo "as sessões estão desabilitadas"; 		
		break;
		case PHP_SESSION_NONE:
		echo "as sessões estão habilitadas mas nao iniciada"; 		
		break;
		case PHP_SESSION_ACTIVE:
		echo "as sessões estão habilitadas e uma existe"; 		
		break;
 	}
?>