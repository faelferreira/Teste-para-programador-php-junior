<?php
 require_once "../model/conexao/dao.php";

 $nome = isset($_POST["nome"])?$_POST["nome"]: erro;
 	
 $query = "delete from pessoas where nome='".$nome."'";


 $conn = new Dao();

 $con = $conn->conexao();


 	$delete = mysqli_query($con,$query);
 
 		echo "<h1>apagado com sucesso!<center></h1><br><a href='../view/excluir.php'>Voltar</a></center>";


 $conn->desconectar($con);