<?php

// Dados de acesso ao servidor MySQL
$conectaBanco = array(
	'servidor' => 'ec2-54-163-240-101.compute-1.amazonaws.com',	// Endereço do servidor
	'usuario' => 'fsbclmqtckjrww',		// Usuário
	'senha' => 'TGikDKwLeCUYxGtV0SFYgckIUu',			// Senha
	'banco' => 'd136j1frvkopad'		// Nome do banco de dados
);

$conexao = new pg_connect($conectaBanco['servidor'], $conectaBanco['banco'], $conectaBanco['usuario'],$conectaBanco['senha']) or die('connection failed');

?>