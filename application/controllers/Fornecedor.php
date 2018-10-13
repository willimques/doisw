<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Fornecedor extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fornecedor_model');
         
        $user = $this->session->userdata();  
        
     if($user==false){ 
        
            redirect('login');
        
        }
        
    } 

    /*
     * Listing of fornecedores
     */
    function index()
    {
        $data['fornecedores'] = $this->Fornecedor_model->get_all_fornecedores();

        $data['_view'] = 'fornecedor/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fornecedor
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   

            // Recebe os valores do para atualizar a tabela pessoa 

            $id = 5;
            $IDPessoa = $this->input->post('IDFornecedor');            


            $params = array(
                'IDFornecedor' => $this->input->post('IDFornecedor'),

            );
            
            $fornecedor_id = $this->Fornecedor_model->add_fornecedor($params);
            
            //atualiza a tabela pessoa com o tipo de cadastro 

            $params = array(

                'IDTipoCadastro' =>  $id,                 
            );


            $this->load->model('Pessoa_model');
            $this->Pessoa_model->update_pessoa($IDPessoa,$params);


            redirect('fornecedor/index');
        }
        else
        {   
            $this->load->model('Pessoa_model');
            $data['all_pessoas'] = $this->Pessoa_model->get_pessoas_semCad();   

            $data['_view'] = 'fornecedor/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fornecedor
     */
    function edit($IDFornecedor)
    {   
        // check if the fornecedor exists before trying to edit it
        $data['fornecedor'] = $this->Fornecedor_model->get_fornecedor($IDFornecedor);

        if(isset($data['fornecedor']['IDFornecedor']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                );

                $this->Fornecedor_model->update_fornecedor($IDFornecedor,$params);            
                redirect('fornecedor/index');
            }
            else
            {
                $data['_view'] = 'fornecedor/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fornecedor you are trying to edit does not exist.');
    } 

    /*
     * Deleting fornecedor
     */
    function remove($IDFornecedor)
    {
        $fornecedor = $this->Fornecedor_model->get_fornecedor($IDFornecedor);

        // check if the fornecedor exists before trying to delete it
        if(isset($fornecedor['IDFornecedor']))
        {
            $this->Fornecedor_model->delete_fornecedor($IDFornecedor);
            
            $params = array(

                'IDTipoCadastro' =>  $id = 0,               
            );

            $this->load->model('Pessoa_model');
            $this->Pessoa_model->update_pessoa($IDFornecedor,$params);

            
            redirect('fornecedor/index');
        }
        else
            show_error('The fornecedor you are trying to delete does not exist.');
    }

}