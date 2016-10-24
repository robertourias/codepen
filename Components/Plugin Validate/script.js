// Inicia o validador ao carregar a página
$(function() {
    // valida o formulário
    $('#form-signup').validate({
        // define regras para os campos
        rules: {
            nome: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            sexo: {
                required: true
            }
        },
        // define messages para cada campo
        messages: {
            nome: "Preencha o seu nome",
            email: {
                required: "Preencha seu e-mail de contato",
                email: "Informe um e-mail correto!"
            },
            sexo: "Informe seu sexo"
        }
    });
});
