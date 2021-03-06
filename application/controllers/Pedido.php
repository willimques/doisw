<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Pedido extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pedido_model');
          
        $user = $this->session->userdata();  
      if($user==false){ 
        
            redirect('login');
        
        }
        
    } 

    /*
     * Listing of pedidos
     */
    function index()
    {
        $data['pedidos'] = $this->Pedido_model->get_all_pedidos();

        $data['_view'] = 'pedido/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pedido
     */
    function add()
    {   

        $this->load->library('form_validation');
        $this->form_validation->set_rules('tipoPedido','Tipo Pedido','required');        
        $this->form_validation->set_rules('IDPessoa','Cliente','required');        
        $this->form_validation->set_rules('tipoPagamento','Tipo Pagamento','required');        


        if($this->form_validation->run())
        {   
          
            $params = array(
                'tipoPedido' => $this->input->post('tipoPedido'),
                'IDPessoa' => $this->input->post('IDPessoa'),
                'tipoPagamento' => $this->input->post('tipoPagamento'),				
                'data' => $this->input->post('data'),				
                'Valor_Pedido' => $this->input->post('total'),				
            );

            $pedido_id = $this->Pedido_model->add_pedido($params);

            $prod = $this->input->post('produto');

            $produto = (json_decode($prod));
            $tam = count($produto);

            for($i=0;$i<$tam;$i++){

                $params = array(
                    'IDPedidoItens' => $pedido_id,
                    'IDProduto' => $produto[$i]->IDProduto,
                    'dataVenda' => $this->input->post('data'),
                    'quantidade' => $produto[$i]->qtd,
                    'preco_tab' => $produto[$i]->precotab,
                    'precoUnitario' => $produto[$i]->precoun,
                    'precoTotal' =>$produto[$i]->precototal,
                    'descontoUnitario' => $produto[$i]->desc,

                );

                $this->load->model('Pedidoitem_model');

                $pedidoitem_id = $this->Pedidoitem_model->add_pedidoitem($params);               


                $params = array(
                    'IDPedido' => $pedido_id,
                    'id_produto' => $produto[$i]->IDProduto,				
                    'qtde' => $produto[$i]->qtd,
                    'data_saida' =>$this->input->post('data'),
                    'valor_unitario' => $produto[$i]->precoun,
                    'tipomovimento' => $this->input->post('tipoPedido'),

                );

                $this->load->model('Estoque_model');
                $estoque_id = $this->Estoque_model->add_estoque($params);

                $tipped = $this->input->post('tipoPedido');

                if($tipped == 2){

                    $params = array(

                        'IDProduto' => $produto[$i]->IDProduto,
                        'IDPedido' => $pedido_id,				
                        'qtde' => $produto[$i]->qtd,
                        'valor_unitario' => $produto[$i]->precoun,
                        'IDPessoa' => $this->input->post('IDPessoa'),
                    );

                    $this->load->model('Estoqueconsignado_model');
                    $estoqueconsignado_id = $this->Estoqueconsignado_model->add_estoqueconsignado($params);
                }   

            }

          redirect('pedido/index');
        }
        else
        {

            $this->load->model('Pessoa_model');
            $data['all_pessoas'] = $this->Pessoa_model->get_all_pessoas();

            $this->load->model('Tipopedido_model');
            $data['all_tipopedidos'] = $this->Tipopedido_model->get_all_tipopedidos();

            $this->load->model('Tipopagamento_model');
            $data['all_tipopagamentos'] = $this->Tipopagamento_model->get_all_tipopagamentos();

            $this->load->model('Prazopagamento_model');
            $data['all_prazopagamentos'] = $this->Prazopagamento_model->get_all_prazopagamentos();

            $this->load->model('Situacaopedido_model');
            $data['all_situacaopedidos'] = $this->Situacaopedido_model->get_all_situacaopedidos();            

            $data['date'] = date('Y-m-d'); 

            $data['_view'] = 'pedido/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pedido
     */
    function edit($IDPedido)
    {   
        // check if the pedido exists before trying to edit it
        $data['pedido'] = $this->Pedido_model->get_pedido($IDPedido);

        if(isset($data['pedido']['IDPedido']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'IDPessoa' => $this->input->post('IDPessoa'),
                    'tipoPedido' => $this->input->post('tipoPedido'),
                    'tipoPagamento' => $this->input->post('tipoPagamento'),
                    'situacaoPedido' => $this->input->post('situacaoPedido'),
                    'data' => $this->input->post('data'),
                    'comissao' => $this->input->post('comissao'),
                );

                $this->Pedido_model->update_pedido($IDPedido,$params);            
                redirect('pedido/index');
            }
            else
            {
                $this->load->model('Pessoa_model');
                $data['all_pessoas'] = $this->Pessoa_model->get_all_pessoas();

                $this->load->model('Tipopedido_model');
                $data['all_tipopedidos'] = $this->Tipopedido_model->get_all_tipopedidos();

                $this->load->model('Tipopagamento_model');
                $data['all_tipopagamentos'] = $this->Tipopagamento_model->get_all_tipopagamentos();

                $this->load->model('Situacaopedido_model');
                $data['all_situacaopedidos'] = $this->Situacaopedido_model->get_all_situacaopedidos();

                $data['_view'] = 'pedido/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Esse pedido não existe');
    } 

    /*
     * Deleting pedido
     */
    function remove($IDPedido)
    {
        $pedido = $this->Pedido_model->get_pedido($IDPedido);

        // check if the pedido exists before trying to delete it
        if(isset($pedido['IDPedido']))
        {
            
            $this->load->model('Estoqueconsignado_model');
            $this->Estoqueconsignado_model->delete_estoqueconsignado($IDPedido);
            
            $this->load->model('Pedidoitem_model');
            $this->Pedidoitem_model->delete_pedidoitem($IDPedido);

            $this->load->model('Estoque_model');
            $this->Estoque_model->delete_estoque($IDPedido);

            $this->Pedido_model->delete_pedido($IDPedido);
            
           

            redirect('pedido/index');
        }
        else
            show_error('The pedido you are trying to delete does not exist.');
    }



    function get_produto($IDProduto){

        $this->load->model('Produto_model');
        $produto = $this->Produto_model->get_produto($IDProduto); 

        echo json_encode($produto);

    }
    
    function invoice($IDPedido){
        
        $data['pedido'] = $this->Pedido_model->get_pedido($IDPedido);     
        
        $this->load->model('Pedidoitem_model');
        
        $data['itenspedido'] = $this->Pedidoitem_model->get_pedidoitem($IDPedido);
        
        $IDPessoa =   $data['pedido']['IDPessoa'];
        
        $this->load->model('Endereco_model');
        $data['endereco'] = $this->Endereco_model->get_endereco($IDPessoa);
          
        $data['_view'] = 'pedido/invoice';
        $this->load->view('layouts/main',$data);
    }


}
