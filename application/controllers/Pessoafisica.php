<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pessoafisica extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pessoafisica_model');
        
         
        $user = $this->session->userdata();  
        
        if($user==false){ 
        
            redirect('login');
        
        }
    } 

    /*
     * Listing of pessoafisicas
     */
    function index()
    {
        $data['pessoafisicas'] = $this->Pessoafisica_model->get_all_pessoafisicas();
        
        $data['_view'] = 'pessoafisica/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pessoafisica
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'cpf' => $this->input->post('cpf'),
				'rg' => $this->input->post('rg'),
				'dataNascimento' => $this->input->post('dataNascimento'),
            );
            
            $pessoafisica_id = $this->Pessoafisica_model->add_pessoafisica($params);
            redirect('pessoafisica/index');
        }
        else
        {            
            $data['_view'] = 'pessoafisica/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pessoafisica
     */
    function edit($IDPessoaFisica)
    {   
        // check if the pessoafisica exists before trying to edit it
        $data['pessoafisica'] = $this->Pessoafisica_model->get_pessoafisica($IDPessoaFisica);
        
        if(isset($data['pessoafisica']['IDPessoaFisica']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'cpf' => $this->input->post('cpf'),
					'rg' => $this->input->post('rg'),
					'dataNascimento' => $this->input->post('dataNascimento'),
                );

                $this->Pessoafisica_model->update_pessoafisica($IDPessoaFisica,$params);            
                redirect('pessoafisica/index');
            }
            else
            {
                $data['_view'] = 'pessoafisica/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pessoafisica you are trying to edit does not exist.');
    } 

    /*
     * Deleting pessoafisica
     */
    function remove($IDPessoaFisica)
    {
        $pessoafisica = $this->Pessoafisica_model->get_pessoafisica($IDPessoaFisica);

        // check if the pessoafisica exists before trying to delete it
        if(isset($pessoafisica['IDPessoaFisica']))
        {
            $this->Pessoafisica_model->delete_pessoafisica($IDPessoaFisica);
            redirect('pessoafisica/index');
        }
        else
            show_error('The pessoafisica you are trying to delete does not exist.');
    }
    
}