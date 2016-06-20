<!DOCTYPE html>
<html>
<head>
<script src="includes/js/jquery.js"></script>
<script src="includes/js/bootstrap.js"></script>
<script src="includes/js/validacaoFormAlteraSenha.js"></script>
<link type="text/css" rel="stylesheet" href="includes/css/style.css"/>
<link type="text/css" rel="stylesheet" href="includes/css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Início </title>
</head>

<body>

	<?php
	include "includes/header.php";
	include "includes/dao/mercadoria.php";
	?>
	<div id="message"></div>
	<?php
		include "includes/listaMercadoria.php";
	?>
</body>
</html>