<?php

	$url = 'http://localhost/mozart/control/api/v1';

	$classe = 'infouser';
	$metodo = 'mostrar';

	$montar = $url.'/'.$classe.'/'.$metodo;

	$retorno = file_get_contents($montar);

	var_dump(json_decode($retorno, 1));
?>