<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tipopagamento extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tipopagamento_model');
      
         
        $user = $this->session->userdata();  
        
     if($user==false){ 
        
            redirect('login');
        
        }
    } 

    /*
     * Listing of tipopagamentos
     */
    function index()
    {
        $data['tipopagamentos'] = $this->Tipopagamento_model->get_all_tipopagamentos();
        
        $data['_view'] = 'tipopagamento/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tipopagamento
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'descricao' => $this->input->post('descricao'),
            );
            
            $tipopagamento_id = $this->Tipopagamento_model->add_tipopagamento($params);
            redirect('tipopagamento/index');
        }
        else
        {            
            $data['_view'] = 'tipopagamento/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tipopagamento
     */
    function edit($IDTipoPagamento)
    {   
        // check if the tipopagamento exists before trying to edit it
        $data['tipopagamento'] = $this->Tipopagamento_model->get_tipopagamento($IDTipoPagamento);
        
        if(isset($data['tipopagamento']['IDTipoPagamento']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'descricao' => $this->input->post('descricao'),
                );

                $this->Tipopagamento_model->update_tipopagamento($IDTipoPagamento,$params);            
                redirect('tipopagamento/index');
            }
            else
            {
                $data['_view'] = 'tipopagamento/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tipopagamento you are trying to edit does not exist.');
    } 

    /*
     * Deleting tipopagamento
     */
    function remove($IDTipoPagamento)
    {
        $tipopagamento = $this->Tipopagamento_model->get_tipopagamento($IDTipoPagamento);

        // check if the tipopagamento exists before trying to delete it
        if(isset($tipopagamento['IDTipoPagamento']))
        {
            $this->Tipopagamento_model->delete_tipopagamento($IDTipoPagamento);
            redirect('tipopagamento/index');
        }
        else
            show_error('The tipopagamento you are trying to delete does not exist.');
    }
    
}