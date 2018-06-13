<?php

include_once "../model/conexao/dao.php";


$nome =isset( $_POST["nome"])?$_POST["nome"]:"erro ";

$con = new Dao();
$conn = $con->conexao();

$query = "SELECT * FROM PESSOAS WHERE nome = '".$nome."'";
	$lista = mysqli_query($conn,$query);
	$consulta = mysqli_fetch_assoc($lista);
if(isset($consunta)){
	
	foreach ($consulta as $key => $value) {
		echo"<ul class='list-group'>
  		<li class='list-group-item disabled'>".$key.": <h3>".$value."</h3></li>
		</ul>";
	}	

	echo "<center><h1><a href='../view/consulta.php'>voltar</a></h1></center>";
}else{
	echo "usuario não existe<br><center><h1><a href='../view/consulta.php'>voltar</a></h1></center>";
}

$con->desconectar($conn);
