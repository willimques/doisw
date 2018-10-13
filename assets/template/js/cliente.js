$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#endereco").val("");
        $("#bairro").val("");
        $("#complemento").val("");
        $("#cidade").val("");
        $("#uf").val("");

    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#endereco").val("AGUARDE");
                $("#bairro").val("AGUARDE");
                $("#complemento").val("AGUARDE");
                $("#cidade").val("AGUARDE");
                $("#estado").val("AGUARDE");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#endereco").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#complemento").val(dados.complemento);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);

                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
  
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true,});
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('.cel_with_ddd').mask('(00) 00000-0000');
    
    $(".cep").mask('00000-000');
});








