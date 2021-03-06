<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Estoque extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Estoque_model');
         
        $user = $this->session->userdata();  
        
     if($user==false){ 
        
            redirect('login');
        
        }
    } 

    /*
     * Listing of estoques
     */
    function index()
    {
        $data['estoques'] = $this->Estoque_model->get_all_estoques();
        
        $data['_view'] = 'estoque/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new estoque
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('quantidade','Quantidade','integer');
		$this->form_validation->set_rules('estMinimo','EstMinimo','integer');
		$this->form_validation->set_rules('estMaximo','EstMaximo','integer');
		$this->form_validation->set_rules('IDProduto','IDProduto','required');
		$this->form_validation->set_rules('IDFilial','IDFilial','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'IDProduto' => $this->input->post('IDProduto'),
				'IDFilial' => $this->input->post('IDFilial'),
				'quantidade' => $this->input->post('quantidade'),
				'movimento' => $this->input->post('movimento'),
				'estMinimo' => $this->input->post('estMinimo'),
				'estMaximo' => $this->input->post('estMaximo'),
            );
            
            $estoque_id = $this->Estoque_model->add_estoque($params);
            redirect('estoque/index');
        }
        else
        {
			$this->load->model('Produto_model');
			$data['all_produtos'] = $this->Produto_model->get_all_produtos();

			$this->load->model('Filial_model');
			$data['all_filiais'] = $this->Filial_model->get_all_filiais();
            
            $data['_view'] = 'estoque/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a estoque
     */
    function edit($IDEstoque)
    {   
        // check if the estoque exists before trying to edit it
        $data['estoque'] = $this->Estoque_model->get_estoque($IDEstoque);
        
        if(isset($data['estoque']['IDEstoque']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('quantidade','Quantidade','integer');
			$this->form_validation->set_rules('estMinimo','EstMinimo','integer');
			$this->form_validation->set_rules('estMaximo','EstMaximo','integer');
			$this->form_validation->set_rules('IDProduto','IDProduto','required');
			$this->form_validation->set_rules('IDFilial','IDFilial','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'IDProduto' => $this->input->post('IDProduto'),
					'IDFilial' => $this->input->post('IDFilial'),
					'quantidade' => $this->input->post('quantidade'),
					'movimento' => $this->input->post('movimento'),
					'estMinimo' => $this->input->post('estMinimo'),
					'estMaximo' => $this->input->post('estMaximo'),
                );

                $this->Estoque_model->update_estoque($IDEstoque,$params);            
                redirect('estoque/index');
            }
            else
            {
				$this->load->model('Produto_model');
				$data['all_produtos'] = $this->Produto_model->get_all_produtos();

				$this->load->model('Filial_model');
				$data['all_filiais'] = $this->Filial_model->get_all_filiais();

                $data['_view'] = 'estoque/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The estoque you are trying to edit does not exist.');
    } 

    /*
     * Deleting estoque
     */
    function remove($IDEstoque)
    {
        $estoque = $this->Estoque_model->get_estoque($IDEstoque);

        // check if the estoque exists before trying to delete it
        if(isset($estoque['IDEstoque']))
        {
            $this->Estoque_model->delete_estoque($IDEstoque);
            redirect('estoque/index');
        }
        else
            show_error('The estoque you are trying to delete does not exist.');
    }
    
}
