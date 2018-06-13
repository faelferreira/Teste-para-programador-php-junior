<?php
  require_once"topo.php"; 
?>

<form class="form-inline" action="../controller/consultar.php" method="POST">
  <div class="form-group mb-2">
    <label for="staticEmail2" class="sr-only">  Nome Completo</label>
    <input type="text"  readonly class="form-control-plaintext" id="staticEmail2" value="Nome">
  </div>
  <div class="form-group mx-sm-3 mb-2">
 
    <input type="text" name="nome" class="form-control" id="inputPassword2" placeholder="Digite o nome para consulta">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Consultar</button>
</form>


 <?php 
      
      require_once "rodape.php";
  ?>
