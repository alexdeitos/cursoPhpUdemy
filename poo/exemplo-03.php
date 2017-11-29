<?php 

class Documento {

	private $numero;

	public function getNumero(){

		return $this->numero;

	}

	public function setNumero($numero){
		$resultado=Documento::validarCPF($numero);   //Antes de definir o valor do CPF o mesmo deve ser validado

		if ($resultado === false){

			//throw new Exception("CPF informado não é válido!", 1);
			echo "CPF informado não é válido! Tente novamente!";
			
		}

		$this->numero=$numero;	
	}

	public static function validarCPF($cpf){
	
		//Valida se um número foi digitado
		if(empty($cpf)) {
	        return false;
	    }
	 	
	    //Elimina possível mascara
	    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
	    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
	     
	    //Valida se o número de digitos informados é igual a 11
	    if (strlen($cpf) != 11) {
	        echo "length";
	        return false;
	    }
	    
	    //Verifica se nenhuma das sequencias invalidas abaixo
	    //foi digitada. Caso sim, retona falso.
	    else if ($cpf == '00000000000' || 
	        $cpf == '11111111111' || 
	        $cpf == '22222222222' || 
	        $cpf == '33333333333' || 
	        $cpf == '44444444444' || 
	        $cpf == '55555555555' || 
	        $cpf == '66666666666' || 
	        $cpf == '77777777777' || 
	        $cpf == '88888888888' || 
	        $cpf == '99999999999') {
	        return false;

	     //Valida se o CPF é válido pelos digitos verificadores
	     } else {   
	         
	        for ($t = 9; $t < 11; $t++) {
	             
	            for ($d = 0, $c = 0; $c < $t; $c++) {
	                $d += $cpf{$c} * (($t + 1) - $c);
	            }
	            $d = ((10 * $d) % 11) % 10;
	            if ($cpf{$c} != $d) {
	                return false;
	            }
	        }
	 
	        return true;
	    }
	}

}

$cpf = new Documento();
$cpf->setNumero('11323164654');

// var_dump($cpf->getNumero()); //isso imprime o tipo da variavel e seu valor

?>