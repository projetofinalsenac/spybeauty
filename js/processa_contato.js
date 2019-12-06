$(document).ready(function(){

    $(document).on('submit', '#formcontato', function(){
        event.preventDefault();

    var nome = email = assunto = mensagem = '';

    nome = $('#nome').val();
    email = $('#email').val();
    assunto = $('#assunto').val();
    mensagem = $('#mensagem').val();

    // console.log(nome, email, assunto, mensagem)

    db.collection("contatos").add({
        Nome: nome,
        "E-mail": email,
        Assunto: assunto,
        Mensagem: mensagem
    })
    .then(function(docRef) {
        $('#enviado').show();
        $('#formcontato').hide();
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });



});

});