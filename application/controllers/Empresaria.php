<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Empresaria extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Empresaria_model');
        
         
        $user = $this->session->userdata();  
      
        if($user==false){ 
        
            redirect('login');
        
        }
    } 

    /*
     * Listing of empresarias
     */
    function index()
    {
        $data['empresarias'] = $this->Empresaria_model->get_all_empresarias();

        $data['_view'] = 'empresaria/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new empresaria
     */
    function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('limite','Limite','numeric');
        $this->form_validation->set_rules('tabelaPreco','Tabela','required');   

        

        if($this->form_validation->run())     
        {   
             // Recebe os valores do para atualizar a tabela pessoa 
            $id = 3;
            $IDPessoa = $this->input->post('IDEmpresaria');            
            
            
            $params = array(
                'IDEmpresaria' => $this->input->post('IDEmpresaria'),
                'limite' => $this->input->post('limite'),
            );

            $empresaria_id = $this->Empresaria_model->add_empresaria($params);

            $params = array(

                'IDPreco' => $this->input->post('tabelaPreco'),
                'IDPessoa' => $this->input->post('IDEmpresaria'),

            );

            $this->load->model('Precopessoa_model');
            $precopessoa_id = $this->Precopessoa_model->add_precopessoa($params);  
            
            //atualiza a tabela pessoa com o tipo de cadastro 
            
            $params = array(

                'IDTipoCadastro' =>  $id,                 
            );


            $this->load->model('Pessoa_model');
            $this->Pessoa_model->update_pessoa($IDPessoa,$params);
            
            redirect('empresaria/index');
        }
        else
        {   
            $this->load->model('Preco_model');
            $data['all_precos'] = $this->Preco_model->get_all_precos();

            $this->load->model('Pessoa_model');
            $data['all_pessoas'] = $this->Pessoa_model->get_pessoas_semCad();   

            $data['_view'] = 'empresaria/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a empresaria
     */
    function edit($IDEmpresaria)
    {   
        // check if the empresaria exists before trying to edit it
        $data['empresaria'] = $this->Empresaria_model->get_empresaria($IDEmpresaria);

        if(isset($data['empresaria']['IDEmpresaria']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('IDExecutiva','IDExecutiva','integer');
            $this->form_validation->set_rules('limite','Limite','numeric');

            if($this->form_validation->run())     
            {   
                if(isset($_POST) && count($_POST) > 0)     
                {   
                    if(!$this->input->post('limite')==null)
                    {
                        $params = array(

                            'limite' => $this->input->post('limite'),                    

                        );

                        $this->Empresaria_model->update_empresaria($IDEmpresaria,$params);
                    }
                    if(!$this->input->post('IDPreco')==null)
                    {
                        $params = array(

                            'IDPreco' => $this->input->post('IDPreco'),

                        );  

                        $this->load->model('Precopessoa_model');

                        $precopessoa_id = $this->Precopessoa_model->update_precopessoa($IDEmpresaria,$params);
                    }

                    redirect('empresaria/index');
                }
            }
            else
            {
                 
				$this->load->model('Preco_model');
				$data['all_precos'] = $this->Preco_model->get_all_precos();
                
                $this->load->model('Precopessoa_model');
                $data['pessoapreco'] = $this->Precopessoa_model->get_precopessoa($IDEmpresaria);
              
                $data['_view'] = 'empresaria/edit';
                $this->load->view('layouts/main',$data);
            }

        }
        else
            show_error('The empresaria you are trying to edit does not exist.');
    } 


    /*
     * Deleting empresaria
     */
    function remove($IDEmpresaria)
    {
        $empresaria = $this->Empresaria_model->get_empresaria($IDEmpresaria);

        // check if the empresaria exists before trying to delete it
        if(isset($empresaria['IDEmpresaria']))
        {
            $this->load->model('Precopessoa_model');
            $this->Precopessoa_model->delete_precopessoa($IDEmpresaria);

            $this->Empresaria_model->delete_empresaria($IDEmpresaria);
            
            $params = array(

                'IDTipoCadastro' =>  $id = 0,               
            );

            $this->load->model('Pessoa_model');
            $this->Pessoa_model->update_pessoa($IDEmpresaria,$params);

            
            redirect('empresaria/index');
        }
        else
            show_error('The empresaria you are trying to delete does not exist.');
    }

}