<?php
include('_header.php');
?>

<div class="m-3">

<div id="enviado" style="display:none">Oba!<p>Seu contato foi enviado</p></div>

<form method="post" action="#contato" id="formcontato" class="was-validated">
<div class="form-group">
    <label for="nome">Nome:</label>
    <input value="joca" type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome completo" required>
    <div class="invalid-feedback">Preencha seu nome.</div>
  </div>

<div class="form-group">
    <label for="email">E-mail:</label>
    <input value="joca@joca.com" type="email" class="form-control" id="email" name="email" placeholder="Ex.: seunome@provedor.com" required>
    <div class="invalid-feedback">Preencha seu e-mail corretamente.</div>
  </div>

<div class="form-group">
    <label for="assunto">Assunto:</label>
    <input value="teste de joca" type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto do contato." required>
    <div class="invalid-feedback">Preencha o assunto da mensagem.</div>
  </div>

<div class="form-group">
    <label for="mensagem">Mensagem:</label>
    <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Mensagem do contato." required>Bla bla bla</textarea>
    <div class="invalid-feedback">escreva a mensagem.</div>
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>

<?php 
include('_footer.php')
?>