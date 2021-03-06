<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pessoajuridica extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pessoajuridica_model');
        
        $user = $this->session->userdata();  
        
      if($user==false){ 
        
            redirect('login');
        
        }
    } 

    /*
     * Listing of pessoajuridicas
     */
    function index()
    {
        $data['pessoajuridicas'] = $this->Pessoajuridica_model->get_all_pessoajuridicas();
        
        $data['_view'] = 'pessoajuridica/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pessoajuridica
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'cnpj' => $this->input->post('cnpj'),
				'inscricaoEstadual' => $this->input->post('inscricaoEstadual'),
				'InscricaoMunicial' => $this->input->post('InscricaoMunicial'),
				'dataAbertura' => $this->input->post('dataAbertura'),
				'tblPessoaJuridicacol' => $this->input->post('tblPessoaJuridicacol'),
            );
            
            $pessoajuridica_id = $this->Pessoajuridica_model->add_pessoajuridica($params);
            redirect('pessoajuridica/index');
        }
        else
        {            
            $data['_view'] = 'pessoajuridica/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pessoajuridica
     */
    function edit($IDPessoaJuridica)
    {   
        // check if the pessoajuridica exists before trying to edit it
        $data['pessoajuridica'] = $this->Pessoajuridica_model->get_pessoajuridica($IDPessoaJuridica);
        
        if(isset($data['pessoajuridica']['IDPessoaJuridica']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'cnpj' => $this->input->post('cnpj'),
					'inscricaoEstadual' => $this->input->post('inscricaoEstadual'),
					'InscricaoMunicial' => $this->input->post('InscricaoMunicial'),
					'dataAbertura' => $this->input->post('dataAbertura'),
					'tblPessoaJuridicacol' => $this->input->post('tblPessoaJuridicacol'),
                );

                $this->Pessoajuridica_model->update_pessoajuridica($IDPessoaJuridica,$params);            
                redirect('pessoajuridica/index');
            }
            else
            {
                $data['_view'] = 'pessoajuridica/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pessoajuridica you are trying to edit does not exist.');
    } 

    /*
     * Deleting pessoajuridica
     */
    function remove($IDPessoaJuridica)
    {
        $pessoajuridica = $this->Pessoajuridica_model->get_pessoajuridica($IDPessoaJuridica);

        // check if the pessoajuridica exists before trying to delete it
        if(isset($pessoajuridica['IDPessoaJuridica']))
        {
            $this->Pessoajuridica_model->delete_pessoajuridica($IDPessoaJuridica);
            redirect('pessoajuridica/index');
        }
        else
            show_error('The pessoajuridica you are trying to delete does not exist.');
    }
    
}
