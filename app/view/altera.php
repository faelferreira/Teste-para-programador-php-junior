<?php
  require_once"topo.php"; 
?>

 <form action="../controller/alterar.php" method="POST">
  <div class="form-row">
  <div class="form-group">
    <label for="inputAddress">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Digite seu nome completo">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Data de nascimento</label>
    <input type="Date" name="data" class="form-control" id="inputAddress2">
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Rua</label>
      <input type="text" name="rua" class="form-control" id="Digite a rua">
    </div>

    <div class="form-group col-md-2">
      <label for="inputZip">Numero</label>
      <input type="text" name="numero" class="form-control" id="Digite o numero">
    </div>
  <div class="form-group">
    <label for="inputAddress2">Bairro</label>
    <input type="text" name="bairro" class="form-control" id="inputAddress2" placeholder=Digite o bairro">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Cep</label>
    <input type="text" name="cep" class="form-control" id="inputAddress2" placeholder="Digite o Cep">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Cidade</label>
    <input type="text" name="cidade" class="form-control" id="inputAddress2" placeholder="Digite a cidade">
  </div>
  </div>
</div>
 
  <button type="submit" class="btn btn-primary">Alterar</button>
</form>






 <?php 
      require_once "rodape.php";
  ?>
