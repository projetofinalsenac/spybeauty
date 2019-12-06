<?php
include('_header.php');
?>

<div class="container">


<form action="_processa_cadastro.php" method="post">

  <div class="form-group">
    <label for="nome">Seu nome:</label>
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo">
  </div>

  <div class="form-group">
    <label for="email">Seu e-mail:</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="usuario@provedor.com">
  </div>
  <div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" name="senha" class="form-control" id="senha">
  </div>
  <div class="form-group">
    <label for="senha">:</label>
    <input type="password" name="senha" class="form-control" id="senha">
  </div>
  <div class="form-group">
    <label for="senha2">Confirme a senha:</label>
    <input type="password" name="senha2" class="form-control" id="senha2">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>

<?php 
include('_footer.php')
?>