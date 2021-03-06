<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fechamento extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Fechamento_model');
        
        $user = $this->session->userdata();  
        
       if($user==false){ 
        
            redirect('login');
        
        }
    } 

    /*
     * Listing of fechamentos
     */
    function index()
    {
        $data['fechamentos'] = $this->Fechamento_model->get_all_fechamentos();
        
        $data['_view'] = 'fechamento/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fechamento
     */
    function add()
    {   
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-success" role="alert">','</div>');        

		$this->form_validation->set_rules('descricao','Descricao','max_length[45]','require');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'descricao' => $this->input->post('descricao'),
            );
            
            $fechamento_id = $this->Fechamento_model->add_fechamento($params);
            redirect('fechamento/index');
        }
        else
        {            
            $data['_view'] = 'fechamento/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fechamento
     */
    function edit($IDFechamento)
    {   
        // check if the fechamento exists before trying to edit it
        $data['fechamento'] = $this->Fechamento_model->get_fechamento($IDFechamento);
        
        if(isset($data['fechamento']['IDFechamento']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('descricao','Descricao','max_length[45]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'descricao' => $this->input->post('descricao'),
                );

                $this->Fechamento_model->update_fechamento($IDFechamento,$params);            
                redirect('fechamento/index');
            }
            else
            {
                $data['_view'] = 'fechamento/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fechamento you are trying to edit does not exist.');
    } 

    /*
     * Deleting fechamento
     */
    function remove($IDFechamento)
    {
        $fechamento = $this->Fechamento_model->get_fechamento($IDFechamento);

        // check if the fechamento exists before trying to delete it
        if(isset($fechamento['IDFechamento']))
        {
            $this->Fechamento_model->delete_fechamento($IDFechamento);
            redirect('fechamento/index');
        }
        else
            show_error('The fechamento you are trying to delete does not exist.');
    }
    
}
