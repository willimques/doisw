<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Unidade extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Unidade_model');
         $user = $this->session->userdata();  
        
         if($user==false){ 
        
            redirect('login');
        
        }
    } 

    /*
     * Listing of unidades
     */
    function index()
    {
    
        $data['unidades'] = $this->Unidade_model->get_all_unidades();
        
        $data['_view'] = 'unidade/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new unidade
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('descricao','Descricao','max_length[45]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'descricao' => $this->input->post('descricao'),
            );
            
            $unidade_id = $this->Unidade_model->add_unidade($params);
            redirect('unidade/index');
        }
        else
        {            
            $data['_view'] = 'unidade/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a unidade
     */
    function edit($IDUnidades)
    {   
        // check if the unidade exists before trying to edit it
        $data['unidade'] = $this->Unidade_model->get_unidade($IDUnidades);
        
        if(isset($data['unidade']['IDUnidades']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('descricao','Descricao','max_length[45]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'descricao' => $this->input->post('descricao'),
                );

                $this->Unidade_model->update_unidade($IDUnidades,$params);            
                redirect('unidade/index');
            }
            else
            {
                $data['_view'] = 'unidade/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The unidade you are trying to edit does not exist.');
    } 

    /*
     * Deleting unidade
     */
    function remove($IDUnidades)
    {
        $unidade = $this->Unidade_model->get_unidade($IDUnidades);

        // check if the unidade exists before trying to delete it
        if(isset($unidade['IDUnidades']))
        {
            $this->Unidade_model->delete_unidade($IDUnidades);
            redirect('unidade/index');
        }
        else
            show_error('The unidade you are trying to delete does not exist.');
    }
    
}