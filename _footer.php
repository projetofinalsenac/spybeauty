<footer class="roda"> 
    <nav class="p-3">
      <!-- <h2>Contatos</h2>  -->
      <div class=" d-flex justify-content-center align-items-center">
        <div class="p-3 bg-success"><a href="#"><i class="fas fa-3x fa-fw fa-envelope"></i></a></div>
        <div class="p-3 bg-dark"><a href="#"><i class="fab fa-3x fa-fw fa-twitter"></i></a></div>
        <div class="p-3 bg-warning"><a href="#"><i class="fab fa-3x fa-fw fa-facebook-f"></i></a></div>
        <div class="p-3 bg-info"><a href="#"><i class="fab fa-3x fa-fw fa-instagram"></i></a></div>
      </div>
    </nav>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2019<?php echo (intval(date('Y')) > 2019 ? ' '.date('Y') : '');  ?> <strong> SpyBeauty </strong>. Todos os direitos reservados
      </div>
    </div>
    
    </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.5.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.5.1/firebase-firestore.js"></script>

<script src="js/firebase.js"></script>
<script src="js/processa_contato.js"></script>
</body>
</html>