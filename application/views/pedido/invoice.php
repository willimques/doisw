<div   class="container">
                    <div class="row col-12 flex-row-reverse no-print">
                        <div class=" mt-2">
                            <button id="btnprint" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</button>
                            <a href="" class="btn btn-primary pull-right" id="gerarpdf" style="margin-right: 5px;"><i class="fa fa-download"></i> Gerar PDF</a>
                        </div>
                    </div>
    <!-- this row will not appear when printing -->

    <div  class="row">
        <div class="col-12">
            <div id="invoice" class="card">                
                <div class="row"> 
                    <div class="col-8">
                        <img src ="<?php echo base_url('assets/_img/logo.png')?>">
                    </div>
                   <div class="col-4 mt-5">  
                                <div class="row">
                                    <div class="h3 font-weight-bold mb-1 col-8">Pedido Nº<?php echo $pedido['IDPedido']?></div>
                                    <div col-4>
                                        <p class="h6 font-weight-bold mb-1  text-center">Data Emissão</p>
                                        <p class="h6 text-muted text-center"><?php echo date('d/m/Y', strtotime($pedido['data']))?></p>
                                    </div>
                                </div> 
                            </div>
                    </div>  
                    <div class="card-body mt-2">
                        <hr class="my-2">
                        <div class="row p-2">
                            <div class="col-6 ">
                                <p class="font-weight-bold mb-4"><?php echo $pedido['nome']?></p>
                                <p class="mb-1"><?php echo $endereco['endereco'],$endereco['numero'] ?></p>
                                <p><?php echo $endereco['bairro']?></p> 
                                <p class="mb-1"><?php echo $endereco['cidade']?></p>
                                <p class="mb-1"><?php echo $endereco['cep']?></p>
                            </div>

                            <div class="col-6">
                                <p class="font-weight-bold mb-4">Forma de Pagamento</p>
                                <p class="mb-1"><span class="text-muted"><?php echo $pedido['tipoPagamento']?></span></p>

                            </div>
                        </div>

                        <div class="row p-5">
                            <div class="col-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Produto</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Quantidade</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Preço Tabela</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Preço Unitario</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Desconto</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Valor Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($itenspedido as $I){ ?>
                                        <tr>
                                            <td><?php echo $I['IDPedidoItens']; ?></td>
                                            <td><?php echo $I['IDProduto']; ?></td>                   
                                            <td><?php echo $I['quantidade']; ?></td>
                                            <td><?php echo $I['preco_tab']; ?></td>
                                            <td><?php echo $I['precoUnitario']; ?></td>
                                            <td><?php echo $I['descontoUnitario']; ?></td>                                           
                                            <td><?php echo $I['precoTotal']; ?></td>  
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse bg-dark text-white p-4">

                            
                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Total</div>
                                <div class="h2 font-weight-light">R$<?php echo ($I['precoTotal']); ?></div>
                            </div>
                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Desconto</div>
                                <div class="h2 font-weight-light"><?php echo  (1-($I['precoTotal']/($I['quantidade']*$I['preco_tab'])))*100; ?>%</div>
                            </div>
                            
                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">SubTotal</div>
                                <div class="h2 font-weight-light">R$<?php echo ($I['quantidade']*$I['preco_tab']); ?></div>
                            </div>



                        </div>

                        <div class="card-footer">

                            <div class="h3 font-weight-light  mb-5">Informações</div>
                            <div class="container">
                                <div class="row justify-content-center">
                               Declaro que rcebi os produtos acima, que as informacoes prestadas por mim sao verdadeiras e declaro que pagarei a ELLSY COSMETICS, CNPJ 28.668.491/0001-62, Esta nota promissoria no valor total de: R$<?php echo ($I['precoTotal']); ?> , nos vencimentos abaixo descrito, caso nao haja a devolução dos produtos na data do acerto autorizo a ELLSY COSMETICSa faturar o produto contra minha pessoa em caso de falta de pagamento na data do vencimento / acerto abaixo:
                                </div>
                                <div class="row mt-5">
                                <p class= "col-6">data de entrega:____________________________________</p>
                                <p class= "col-6">data de vencimento:_________________________________</p>
                                </div>
                                <div class="row">
                                <p class= "col-6 mt-5">____________________________________<br>
                                Assinatura Revendedor(A)</p>
                                <p class= "col-6 mt-5">____________________________________<br>
                                Assinatura ELLSY COSMETICS</p>
                                </div>
                                <div class="row justify-content-center mt-5 ">
                                ELLSY COSMETIC<br>
                                Rua ponta grossa 238 - sl 03 / Londrina-PR<br>
                                TEL 43 - 33541444|| 43-99951-1073<br><br>
                                www.elsy.store / sac@ellsy.store                                 
                                </div>
                            </div>

                        </div>
                    </div>

            </div>
        </div>
    </div>
    <script>


        $("#btnprint").click(function(){
            
            $(".no-print").hide();
            $("#invoice").printThis( {
                importStyle: true,    
                importCSS: true, 
            }/*options*/);
            
              $(".no-print").show();

        });
        
        $("#gerarpdf").click(function(){
            
            $(".no-print").hide();
           var html =  $("#invoice");
             $("#gerarpdf").attr()
            
              $(".no-print").show();

        });
        
    </script>