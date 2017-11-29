<?php 

//Sete sempre para linux , windows e portuges, independente de onde rodar vai funcionar
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");

//Mostra o dia da semana e o mês - validar documentação da função strftime
echo strftime("%A %B");

?>