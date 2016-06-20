<?php
	function buscaMercadoria() {
		//CHAMA O ARQUIVO PARA ABRIR CONEXÃO COM O BANCO;
    	include "db.php";
    	//MONTA O CAMNDO SQL QUE BUSCA NO BANCO;
    	$sql = "SELECT * FROM `mercadorias` ORDER BY `ID` DESC";
    	//EXECUTAR O COMANDO:
    	$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);
    	//FECHAR A CONEXÃO:
    	mysqli_close($MySQLi);
    	//LER AS INFORMAÇÕES BUSCADAS NO BANCO:
    	while($mercadoria = $resultado->fetch_object()) {
    		echo "<tr>";
    		echo "<td>".$mercadoria->ID."</td>";
    		echo "<td>".$mercadoria->nome."</td>";
    		echo "<td>".$mercadoria->tipo."</td>";
    		echo "<td>".$mercadoria->quantidade."</td>";
    		echo "<td>".$mercadoria->preco."</td>";
            echo "<td>".$mercadoria->tipoNegocio."</td>";
    		echo "</tr>";
    	}
	}

	function insereMercadoria($nome,$quantidade,$tipo,$preco,$tipoNegocio) {
		//CHAMA O ARQUIVO PARA ABRIR CONEXÃO COM O BANCO;
    	include "db.php";
    	//MONTA O CAMNDO SQL QUE BUSCA NO BANCO;
    	$sql = "INSERT INTO mercadorias (`nome`, `quantidade`, `tipo`, `preco`, `tipoNegocio`) VALUES ('".$nome."','".$quantidade."','".$tipo."','".$preco."','".$tipoNegocio."')";
    	//EXECUTAR O COMANDO:
    	$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);
    	//FECHAR A CONEXÃO:
    	mysqli_close($MySQLi);
		
        echo "<script> alert('Mercadoria cadastrada com sucesso!'); window.location.href = 'index.php'</script>";
	}
?>