<script>
    
    // gera um codigo automatico (tela Adicionar pessoa )
    function geraaut(){

        num = Math.floor(Math.random() * 65536);
        $("#btncodaut").val(num);
    }; 

   //seleciona os campos do formulario baseado no id (Tela adicionar pessoa)
    $("#TipoPessoa").on('change',function(){


        var selectValor = $(this).val();

        if (selectValor ==2){

            $('.campoPF').hide();
            $('.campoPJ').show();

        } else{

            $('.campoPF').show();
            $('.campoPJ').hide();
        }                      


    });

    $( ".ckie" ).click(function() {

        $("#inscricaoEstadual").val("ISENTO");


    });

    $( ".ckim" ).click(function() {

        $("#InscricaoMunicial").val("ISENTO");

    });
    
    //seleciona os campos do formulario baseado no id (tela profile pessoa)
    var eid = $("#edIDPessoaTipo").val();

    if(eid==1){

        $('.campoPF').show();
        $('.campoPJ').hide();

    }else{

        $('.campoPF').hide();
        $('.campoPJ').show();      
    }

</script>

