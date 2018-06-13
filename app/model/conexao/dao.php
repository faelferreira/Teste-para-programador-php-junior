<?php
class Dao{
	public  function conexao(){
	 $conn = mysqli_connect('localhost','root','','dbTeste');
	return $conn;
	}

	public function desconectar($conn){
		 mysqli_close($conn);
	}


	public function gravar($conn,$query){
			$grava = mysqli_query($conn,$query);
		
			if(!$grava){
				return "";
			}else{

		return $grava;
		}
	}

	public function altera($con,$query){
		$update = mysqli_query($con,$query);
		if(!$update){
			return "erro ao alterar";
		}
		return $ckd = true;
	}

}
