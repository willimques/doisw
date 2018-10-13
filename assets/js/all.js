$(function () {


            // Executa assim que o botão de salvar for clicado
            $('#btnAdicionarCliente').submit(function (e) {

                e.preventDefault();

                var formulario = $("#frmClientes");

                var retorno = inserirFormulario(formulario);

            });

            function inserirFormulario(dados) {

                $.ajax({

                    type: "POST",

                    data: dados.serialize(),

                    url: "../procedimentos/adicionarClientes.php",

                    async: false

                }).then(sucesso,falha);

                function sucesso(data) {

                    console.log(data);

                }

                function falha (){
                    
                    console.log("erro ao inserir");

                }

            }

        });
