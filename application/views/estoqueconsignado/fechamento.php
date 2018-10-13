<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">

                <div class="">
                    <h3>Fechamento Estoque</h3>

                </div>
                <div class="">

                </div>
            </div> 
        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 


            <?php echo form_open('estoqueconsignado/fecha',array("class"=>"form-horizontal")); ?>
            <div class="shadow p-3 mb-5 bg-white rounded ">Produtos
                <div class="row mt-3">
                    <p class="col-md-1"> Marcar</p>              
                    <p class="col-md-1"> ID</p>
                    <p class="col-md-2"> Codigo</p>
                    <p class="col-md-1"> Pedido</p>
                    <p class="col-md-2"> Valor Unitario</p>
                    <p class="col-md-2"> Quantidade</p>
                    <p class="col-md-2"> Valor Total</p>             
                </div>

                <?php foreach($estoqueconsignado as $E){ ?> 
                <div class="row"> 
                    <div class="form-group p-1 col-md-1">                       
                        <div class="form-control">
                            <input type="checkbox" value="<?php echo $E['IDEstoqueConsignado']?>" name="sel" id="sel" />              
                        </div> 
                    </div>
                    <div class="form-group p-1 col-md-1">                       
                        <div class="">
                            <input type="text" readonly name="IDProduto" value="<?php echo ($this->input->post('IDProduto') ? $this->input->post('IDProduto') : $E['IDProduto']); ?>" class="form-control" id="IDProduto" />
                        </div>
                    </div>
                    <div class="form-group p-1 col-md-1">                      
                        <div class="">
                            <input type="text" readonly name="codigo" value="<?php echo ($this->input->post('codigo') ? $this->input->post('codigo') : $E['codigo']); ?>" class="form-control" id="codigo" />
                        </div>
                    </div>
                    <div class="form-group p-1 col-md-2">                   
                        <div class="">
                            <input type="text" readonly name="pedido" value="<?php echo ($this->input->post('pedido') ? $this->input->post('pedido') : $E['IDPedido']); ?>" class="form-control" id="pedido" />
                        </div>
                    </div> 
                    <div class="form-group p-1 col-md-2">
                        <div class="">
                            <input type="text" readonly name="vlrun" value="<?php echo ($this->input->post('vlrun') ? $this->input->post('vlrun') : $E['valor_unitario']); ?>" class="form-control" id="vlrun" />
                        </div>
                    </div>                    
                    <div class="form-group p-1 col-md-2">               
                        <div class="">
                            <input type="number" readonly name="qtde" value="<?php echo ($this->input->post('qtde') ? $this->input->post('qtde') : $E['qtde']); ?>" class="form-control" id="qtde" />
                        </div>
                    </div>
                    <div class="form-group p-1 col-md-2">               
                        <div class="">
                            <input type="text" readonly name="vltotal" value="<?php echo ($this->input->post('vltotal') ? $this->input->post('vltotal') : ($E['valor_unitario']*$E['qtde'])); ?>" class="form-control" id="vltotal" />
                        </div>
                    </div>
                     <input hidden type="text" name="id_pessoa" value="<?php echo $E['IDPessoa']?>" class="form-control" id="id_pessoa" />

                </div>
                <?php } ?>
                
                 <input hidden type="text" name="produto" value="" class="form-control" id="produto" />
                 <input hidden type="text" name="total_fecha" value="" class="form-control" id="total_fecha" />
                
                  
            </div>

            <div>
                <div class="row">
                    <div class="table-responsive col-md-125">
                        <table id="itensPedido"class="table table-striped" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Código</th> 
                                    <th>Quantidade</th>                               
                                    <th>Preço Un</th>
                                    <th>Preço Total</th>   
                                </tr>
                            </thead>
                            <tbody id="itens">

                            </tbody>
                            <tfoot>
                                <tr>
                                 <th colspan="4">Total</th>
                                <td id="val_total_sel"></td>
                                </tr>
                                
                            </tfoot>
                        </table>

                    </div>
                </div>

                <div class="form-group float-right">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" id="fechaestoque" class="btn btn-success ">Fechar Pedido</button>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>

    </div>
</div>

<script>


    $(document).ready(function(){ 

        listprod = []
        
        var val_sel_total = 0;
        
        var qtd = $('.tdqtd').text();

        
        $("#val_total_sel").html(val_sel_total);
        
              
        $('#fechaestoque').click(function(e){

            if(listprod.length == 0){

                alert("Insira os produtos para continuar!!");

            }else{
                prod =  JSON.stringify(listprod);

                $("#produto").val(prod);
                

            }
        });



        $(document).on( "click","#sel",function(){ 

            mar = $(this).is( ":checked" );

            if(mar){

                r =  prompt("Insira a quantidade");  

                if(r==null || r==""){

                    mar = false;
                    $( this ).prop("checked",false);
                    alert("Você precisa inserir um valor valido!!");

                }else{

                    qtde = $(this).closest('.row').children().eq(5).find('#qtde').val();
                    qtdsel =  parseInt(r);

                    if( r==0 || r<0){                  
                        mar = false;
                        $( this ).prop("checked",false);
                        alert("Você precisa inserir um valor valido!!");

                    }else if(qtdsel>qtde){

                        mar = false;
                        $( this ).prop("checked",false);
                        alert("Você precisa inserir um valor menor ou igual a "+qtde+"!!");

                    }                
                    else{

                        var row = $(this).val();

                        qtdesel = r;

                        item = $(this).val();
                        IDProd = $(this).closest('.row').children().eq(1).find('#IDProduto').val();
                        vlrun = $(this).closest('.row').children().eq(4).find('#vlrun').val();
                        ped = $(this).closest('.row').children().eq(3).find('#pedido').val();
                        vlrt = parseInt(vlrun*qtdesel); 

                        produto ={item:item,IDProduto:IDProd,qtd:qtdesel,val_un:vlrun,val_tot:vlrt,ped:ped}; 
                        
                        val_sel_total = val_sel_total +  parseFloat(produto.qtd*produto.val_un);
                        $("#total_fecha").val(val_sel_total);
                        
                        AddTableRow(produto); 

                        listprod.push(produto);                    
                        

                        alert("produto inserido com sucesso");
                        
                        $("#val_total_sel").html(val_sel_total);


                    }

                }
            }
            else{

                item = $(this).val();               
                         
                
                for (i=0;i<listprod.length;i++){

                    if(item==listprod[i].item){
                        
                        val_sel_total = val_sel_total -  parseFloat(listprod[i].qtd*listprod[i].val_un);
                        ind = listprod.indexOf(listprod[i]);
                        listprod.splice(ind,1);
                    }

                }
                
                 RemoveTableRow(item); 
                
                $("#val_total_sel").html(val_sel_total);
                $("#total_fecha").val(val_sel_total);

               

            }


        });
        
        function AddTableRow(data){


        $('#itens').append(

            ' <tr id="seltr">'+           
            '<td class="item">'+produto.item+'</td>'+
            '<td class="id">'+produto.IDProduto+'</td>'+      
            '<td class="qtd">'+produto.qtd+'</td>'+            
            '<td class="qtd">'+produto.val_un+'</td>'+            
            '<td class="qtd">'+produto.val_tot+'</td>'+            
            '</td>'+                 
            ' </tr>'           
        );
       
    }
        
  function RemoveTableRow ($hander){
        
       var sele =  $("#seltr").children().eq(0).text();
       var tr =  $("#seltr");
        
       if(sele == $hander)
       {
       tr.remove();
       }
       
    }
   
});




</script>