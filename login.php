<?php
include('_header.php');
?>


<div class="container">

<form action="/action_page.php">
  <div class="form-group">
    <label for="email">Seu Email:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Senha:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Lembrar meu e-mail
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Confirmar</button>
</form>


</div>

<!-- lembrar de criar um esqueceu sua senha -->


<?php 
include('_footer.php')
?>