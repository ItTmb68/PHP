<?php
// Модель приложения
function Message($name)
{
    if( is_string($name) )
		$msg = 'Msr. '.$name;		
	else
		$msg = 'Sorry';
	
	return  $msg;
}

?>