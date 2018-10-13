<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('Pedido')?>">Pedido</a>
    </li>
    <li class="breadcrumb-item active">Adicionar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="">
                    <h3>Pedido</h3>
                </div>
                <div class="">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 
            <?php echo form_open('pedido/add',array("class"=>"form-horizontal")); ?>

            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="row"> 
                    <div class="form-group col-md-3">
                        <label> Tipo de pedido</label>
                        <div class="">
                            <select name="tipoPedido" id="tipoPedido" class="form-control">
                                <option value="">Selecione o Tipo Pedido</option>
                                <?php 
                                foreach($all_tipopedidos as $tipopedido)
                                {
                                    $selected = ($tipopedido['IDTipoPedido'] == $this->input->post('tipoPedido')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$tipopedido['IDTipoPedido'].'" '.$selected.'>'.$tipopedido['Descricao'].'</option>';
                                } 
                                ?>
                            </select>
                        </div>
                        <span class="text-danger"><?php echo form_error('tipoPedido');?></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="IDPessoa" class="col-md-12 control-label">Selecione o Cliente</label>                        
                        <select id="selPessoa" data-live-search="true" name="IDPessoa" class="form-control">
                            <option value="">Selecione um cliente </option>
                            <?php 
                            foreach($all_pessoas as $pessoa)
                            {
                                $selected = ($pessoa['IDPessoa'] == $this->input->post('IDPessoa')) ? ' selected="selected"' : "";

                                echo '<option value="'.$pessoa['IDPessoa'].'" '.$selected.'>'.$pessoa['nome'].'</option>';
                            } 
                            ?>
                        </select>
                        <span class="text-danger"><?php echo form_error('IDPessoa');?></span>

                    </div>
                   
                    <div class="form-group col-md-3">
                        <label for="data" class=" control-label">Data</label>
                        <div class="">
                            <input type="date" name="data" value="<?php echo ($this->input->post('data') ? $this->input->post('data') : $date ); ?>" class="form-control" id="data" />

                        </div>                    
                        <span class="text-danger"><?php echo form_error('data');?></span>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label class="control-label">
                        <span>Buscar Produto</span>                   
                    </label>
                    <div>
                        <input class="form-control" type="text" name="buscar" id="busca" />
                    </div>
                </div>              

                <div class="form-group col-md-6">
                    <label class="control-label">
                        <span>Selecione o Produto</span>                   
                    </label>
                    <select action="" class="form-control " method="post" enctype="multipart/form-data" id="resultado_busca">
                    </select>
                </div>
            </div>

            <div>
                <div id="listprod" class="row">
                    <input hidden type="text" name="codigo" value="" class="form-control" id="IDProduto" readonly />
                    <div class="row m-0">
                        <div class="form-group col-md-1 p-1">
                            <label for="codigo" class=" control-label">Código</label>
                            <div class="">                    
                                <input type="text" name="codigo" value="" class="form-control" id="codigo" readonly />
                            </div>
                        </div>
                        <div class="form-group col-md-3 p-1">
                            <label for="descricao" class=" control-label">Descrição</label>
                            <div class="">                    
                                <input type="text" name="descricao" value="" class="form-control" id="descricao" readonly />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="un" class=" control-label">Unidade</label>
                            <div class="">                    
                                <input type="text" name="un" value="" class="form-control" id="un" readonly />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="qtd" class=" control-label">Quantidade</label>
                            <div class="">                    
                                <input type="number" name="qtd" value="" class="form-control" id="qtd" />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="precotab" class=" control-label">Preço Tab</label>
                            <div class="">                    
                                <input type="number" name="precotab" value="" class="form-control" id="precotab" readonly />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="desc" class=" control-label">Desc %</label>
                            <div class="">                    
                                <input type="number" name="desc" value="" class="form-control" id="desc" />
                            </div>
                        </div>
                        <div class="form-group col-md-1 p-1">
                            <label for="precun" class=" control-label">Preço Un</label>
                            <div class="">                    
                                <input type="number" name="precun" value="" class="form-control" id="precun" />
                            </div>
                        </div>
                        <div class="form-group col-md-2 p-1">
                            <label for="precototal" class=" control-label">Preço total</label>
                            <div class="">                    
                                <input type="number" name="precototal" value="" class="form-control" id="precototal" readonly />
                            </div>
                        </div> 
                        <div class="form-group col-md-1 p-2 mt-1">
                            <label for="incl" class=" control-label"></label>
                            <div class="">                    
                                <a  name="incl" class="btn btn-success active" id="incl">Incluir</a>
                            </div>
                        </div>                    
                    </div>
                </div>
                <div>
                    <div class="table-responsive col-md-12">
                        <table id="itensPedido"class="table table-striped" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Código</th>
                                    <th>Descrição</th>
                                    <th>Unidade</th>
                                    <th>Quantidade</th>
                                    <th>Preço</th>
                                    <th>Desc %</th>
                                    <th>Preço Un</th>
                                    <th>Preço Total</th>                                            
                                    <th class="actions">Ações</th>
                                </tr>
                            </thead>
                            <tbody id="itens">

                            </tbody>
                        </table>

                    </div>
                </div> <!-- /#list -->
            </div>
            <div class="shadow p-3 mb-5 bg-white rounded ">Totais
                <div class="row border-top">

                    <div class="form-group col-md-2 mt-2">
                        <label for="nitens" class=" control-label">Nº Itens</label>
                        <div class="">                    
                            <input type="number" name="nitens" value="<?php echo $this->input->post('nitens'); ?>" class="form-control" id="nitens" readonly />
                        </div>
                    </div> 
                    <div class="form-group col-md-2 mt-2">
                        <label for="sqtd" class=" control-label">Soma qtdes</label>
                        <div class="">                    
                            <input type="number" name="sqtd" value="<?php echo $this->input->post('sqtd'); ?>" class="form-control" id="sqtd" readonly />
                        </div>
                    </div>
                    <div class="form-group col-md-2 mt-2">
                        <label for="subt" class=" control-label">Sub Total</label>
                        <div class="">                    
                            <input type="text" name="subt" value="<?php echo $this->input->post('subt'); ?>" class="form-control" id="subt" readonly />
                        </div>
                    </div>
                    <div class="form-group col-md-3 mt-2">
                        <label for="tdesc" class=" control-label">Total Desconto </label>
                        <div class="">                    
                            <input type="text" name="tdesc" value="<?php echo $this->input->post('tdesc'); ?>" class="form-control" id="tdesc" readonly />
                        </div>
                    </div> 
                    <div class="form-group col-md-3 mt-2">
                        <label for="total" class=" control-label">Total</label>
                        <div class="">                    
                            <input type="text" name="total" value="<?php echo $this->input->post('total'); ?>" class="form-control" id="total" readonly />
                        </div>
                    </div> 
                </div>
            </div>

            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="row ml-4"> 
                    <div class="form-group col-md-4">
                        <label for="tipoPagamento" class=" control-label">Tipo De Pagamento</label>
                        <div class="">
                            <select name="tipoPagamento" id="tipoPagamento" class="form-control">
                                <option value="">Selecione Tipo Pagamento</option>
                                <?php 
                                foreach($all_tipopagamentos as $tipopagamento)
                                {
                                    $selected = ($tipopagamento['IDTipoPagamento'] == $this->input->post('tipoPagamento')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$tipopagamento['IDTipoPagamento'].'" '.$selected.'>'.$tipopagamento['descricao'].'</option>';
                                } 
                                ?>
                            </select>
                        </div>
                        <span class="text-danger"><?php echo form_error('tipoPagamento');?></span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="prazopag" class=" control-label">Condição Pagamento</label>
                        <div class="">
                            <select name="prazopagamento" id="prazopagamento" class="form-control">
                                <option value="">Selecione o Prazo</option>
                                <?php 
                                foreach($all_prazopagamentos as $prazopagamento)
                                {
                                    $selected = ($prazopagamento['IDPrazoPag'] == $this->input->post('prazopagamento')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$prazopagamento['IDPrazoPag'].'" '.$selected.'>'.$prazopagamento['descricao'].'</option>';
                                } 
                                ?>
                            </select>                            
                        </div>
                        <span class="text-danger"><?php echo form_error('IDPrazoPag');?></span>

                    </div>

                    <div class="form-group  mt-2">
                        <label for="gerarparcela" class=" control-label"></label>
                        <div class="">
                            <button role="button" id="btngeraparc" class="btn btn-success">Gerar Parcela</button>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="data" class=" control-label">Data do Fechamento</label>
                        <div class="">                           
                            <input type="date" name="datafecha" value="<?php echo ($this->input->post('datafecha') ? $this->input->post('datafecha') : $date ); ?>" class="form-control" id="datafecha" />
                        </div>
                    </div>               

                    <input hidden type="text" name="produto" value="" class="form-control" id="produto" />
                    <span class="text-danger"><?php echo form_error('produto');?></span>



                </div>
            </div>
            <div class="row">
                <div class="table-responsive col-md-12">
                    <table id="parcela"class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>Dias</th>
                                <th>Parcela</th>
                                <th>Data</th>
                                <th>Valor</th>                               
                                <th class="actions">Ações</th>
                            </tr>
                        </thead>
                        <tbody id="parcelaitens">

                        </tbody>
                    </table>

                </div>

            </div>

            <div class="form-group float-right">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" id="fechapedido" class="btn btn-success">Fechar Pedido</button>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>


<script>

    let item = 0;
    let tqtd = 0;
    let tsubt = 0;
    let tdesc = 0;
    let total = 0;
    listprod = [];

    $('#busca').keyup(function(e){

        $('#resultado_busca').html('');

        var buscaTexto = $(this).val();

        if(buscaTexto.length >= 3){

            $.ajax({
                type:'post',               

                url: '<?php echo base_url('Produto/get_like_produto')?>/'+buscaTexto,//Definindo o arquivo onde serão buscados os dados
                success: function(data){

                    dados = JSON.parse(data);

                    quant = dados.qtd;

                    if(!dados){

                        $('#resultado_busca').html('<option value ='+null+' >Produto Não Encontrado</option>');

                    }else{

                        for(i=0;i< quant; i++){
                            $('#resultado_busca').append('<option value ='+dados[i].IDProduto+' ><a href="#" class="badge"> Codigo '+dados[i].IDProduto+' Nome '+dados[i].nome_produto+'</a></br></option>');

                        }


                    }
                }
            }); 

        }
    });

    $(document).ready(function(){   

        $('#selPessoa').selectpicker();

        $('body #busca').blur(function(){

            IDProd =  $('body #resultado_busca').val();

            busca(IDProd);

        });


        $('body #resultado_busca').change(function(){

            IDProd =  $('body #resultado_busca').val();     

            busca(IDProd);

        });

        function busca(produto){

            $.ajax({
                type:'post',
                url: '<?php echo base_url('Pedido/get_produto')?>/'+produto,//Definindo o arquivo onde serão buscados os dados            
                success: function(data){

                    dados = JSON.parse(data);

                    $('#IDProduto').val(dados.IDProduto);
                    $('#codigo').val(dados.codigo);
                    $('#descricao').val(dados.nome_produto);
                    $('#un').val(dados.IDUnidade);
                    $('#precotab').val(dados.precoVenda);                  

                }
            }); 

        }

        $('#qtd').blur(function(){            
            quant = $('#qtd').val();
            preco = $('#precotab').val();
            precototal = quant*preco;
            $('#precototal').val(precototal);
        });

        $('#desc').blur(function(){            
            desc = $('#desc').val(); 
            precotab = $('#precotab').val();
            precoun =  precotab-(precotab * (desc/100));         
            $('#precun').val(precoun);

        });

        $('#precun').blur(function(){            
            quant = $('#qtd').val();
            precotab = $('#precotab').val();
            preco =  $('#precun').val();          
            precototal = quant*preco; 
            desc =  Math.ceil((1-(preco/precotab))*100);
            $('#precototal').val(precototal);
            $('#desc').val(desc);
        });


        $('#precototal').blur(function(){



            // somasubt =  $("#subt").val();


        });


        $("#incl").click(function(e){        

            idpro =  $("#IDProduto").val();
            codigo =  $("#codigo").val();
            descricao =  $("#descricao").val();
            un =  $("#un").val();
            qtd =  $("#qtd").val();
            precotab =  $("#precotab").val();
            desc =  $("#desc").val();
            precoun =  $("#precun").val();
            precototal =  $("#precototal").val();  


            produto ={item:item,IDProduto:idpro,codigo:codigo,descricao:descricao,un:un,qtd:qtd,precotab:precotab,desc:desc,precoun:precoun,precototal:precototal};

            addProduto(produto);            

            $("#nitens").val(item);


        });

        function addProduto(produto){

            var tprod=false;

            for (i=0;i<listprod.length;i++){


                if(produto.IDProduto==listprod[i].IDProduto){

                    tprod=true; 

                }
            }

            if(tprod){

                alert("Produto ja inserido Exclua e insira novamente");

                $("#codigo").val('');
                $("#descricao").val('');
                $("#un").val('');
                $("#qtd").val('');
                $("#precotab").val('');
                $("#desc").val('');
                $("#precun").val('');
                $("#precototal").val('');
                $("#busca").val('');
                $("#resultado_busca").val('');

            }else{

                listprod.push(produto);

                AddTableRow(produto); 

                tsubt = parseFloat(produto.precotab)*parseFloat(produto.qtd) + parseFloat(tsubt);              
                total = parseFloat(produto.precototal) + parseFloat(total);

                tqtd = parseFloat(produto.qtd)+tqtd;                

                tdesc = (tsubt-total) + parseFloat(tdesc);

                $("#subt").val(accounting.formatMoney(tsubt,"R$ ", 2, ".", ","));
                $("#tdesc").val(accounting.formatMoney(tdesc,"R$ ", 2, ".", ","));
                $("#total").val(accounting.formatMoney(total,"R$ ", 2, ".", ","));
                $("#sqtd").val(tqtd);

            }    

        } 

        $("#btngeraparc").click(function(e){ 
            e.preventDefault();

            $('#parcelaitens').html('');

            tpag =  $('#tipopagamento').val();
            tpraz =  $('#prazopagamento').val();


            $.ajax({
                type:'post',
                url: '<?php echo base_url('Prazopagamento/get_prazopagamento')?>/'+tpraz,//Definindo o arquivo onde serão buscados os dados            
                success: function(data){

                    dados = JSON.parse(data);

                    if(dados==false){

                        alert("Selecione a Condição de pagamento");
                    }else if(total ==0){

                        alert("Favor inserir itens no pedido");                        

                    }else{

                        var par = (total/dados.parcela);


                        function adicionarDiasData(dias){
                            var hoje     = new Date();
                            var dataVenc = new Date(hoje.getTime() + (dias * 24 * 60 * 60 * 1000));

                            return dataVenc.getDate() + "/" + (dataVenc.getMonth() + 1) + "/" + dataVenc.getFullYear();
                        }

                        datavenc = [];

                        var dia = 0;

                        for(i=1;i<=dados.parcela;i++) {  

                            dia = parseInt(dados.periodicidade) + dia;   

                            var novaData = adicionarDiasData(dia);   

                            datavenc.push(novaData);

                        }

                        for(i=1;i<=dados.parcela;i++) {                        

                            $('#parcela').append(

                                '<tr>'+           
                                '<td >'+dados.periodicidade+'</td>'+
                                '<td>'+i+'/'+dados.parcela+'</td>'+
                                '<td>'+datavenc[i-1]+'</td>'+
                                '<td>'+Math.ceil(par)+'</td>'+                                     
                                '<td class="actions">'+
                                '<a href="#" data-toggle="modal" data-target="#delete-modal" onclick="excluirtd(this)" ><i class="fas fa-trash-alt fa-1x"></i></a>'+            
                                '</td>'+                 
                                '</tr>' 

                            );


                        }            
                    }

                }
            }); 
        });


        $('#fechapedido').click(function(e){

            if(listprod.length == 0){

                alert("Insira os produtos para continuar!!");
            }else{
                prod =  JSON.stringify(listprod);

                $("#produto").val(prod);

            }
        });



    });

    //adiciona produto na tabela

    function AddTableRow(data){


        $('#itens').append(

            ' <tr>'+           
            '<td class="id">'+produto.IDProduto+'</td>'+
            '<td class="codigo">'+produto.codigo+'</td>'+
            '<td class="descricao">'+produto.descricao+'</td>'+
            '<td class="un">'+produto.un+'</td>'+
            '<td class="qtd">'+produto.qtd+'</td>'+
            '<td class="precotab">'+produto.precotab+'</td>'+
            '<td class="desc">'+produto.desc+'</td>'+
            '<td class="precun">'+produto.precoun+'</td>'+           
            '<td class="precototal">'+produto.precototal+'</td>'+
            '<td class="actions">'+
            '<a href="#" data-toggle="modal" data-target="#delete-modal" onclick="RemoveTableRow(this)" ><i class="fas fa-trash-alt"></i></a>'+ 
            '</td>'+                 
            ' </tr>' 

        );
        //controla  quantos itens tem na tabela 

        item++;

        //        limpa os campos do input

        $("#codigo").val('');
        $("#descricao").val('');
        $("#un").val('');
        $("#qtd").val('');
        $("#precotab").val('');
        $("#desc").val('');
        $("#precun").val('');
        $("#precototal").val('');
        $("#busca").val('');
        $("#resultado_busca").val('');


    }


    // remove a linha e o produto da tabela 

    function RemoveTableRow ($hander){

        var tr =$hander.closest('tr');

        var id = tr.firstChild.innerHTML;

        remprod(id,tr);

        item--;

        $("#nitens").val(item);

    }

    function excluirtd ($hander){

        var tr =$hander.closest('tr');

        tr.remove();

    }

    function remprod(id,tr){


        for (i=0;i<listprod.length;i++){

            if(id==listprod[i].IDProduto){

                tsubt = tsubt - parseFloat(listprod[i].precotab)*parseFloat(listprod[i].qtd); 

                total =  total - parseFloat(listprod[i].precototal);

                tqtd = tqtd - parseFloat(listprod[i].qtd);                

                tdesc =  (total-tsubt) ;

                //pega o indice do array
                ind = listprod.indexOf(listprod[i])
                listprod.splice(ind,1);
                tr.remove();

                $("#subt").val(accounting.formatMoney(tsubt,"R$ ", 2, ".", ","));
                $("#tdesc").val(accounting.formatMoney(tdesc,"R$ ", 2, ".", ","));
                $("#total").val(accounting.formatMoney(total,"R$ ", 2, ".", ","));
                $("#sqtd").val(tqtd);

            }
        }

    }



</script>