<?php
 session_start();
  require_once 'banner.php';
  require_once"topo.php"; 
 
?>

<form name="login" action="../../control/processo.php" method="GET">
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">Digite seu email</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
    <a href="#">Esqueceu a senha? Clique aqui!</a><br>
  </div>
    <button  type="submit" class="btn btn-primary">Entrar</button><br>
    <a href="#">Fazer cadastro!</a>
</form>
<br><br>

 <?php 
      require_once "rodape.php";
  ?>