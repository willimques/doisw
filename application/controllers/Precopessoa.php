<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Precopessoa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Precopessoa_model');
        $user = $this->session->userdata();  
        
      if($user==false){ 
        
            redirect('login');
        
        }

    /*
     * Listing of precopessoas
     */
    function index()
    {
        $data['precopessoas'] = $this->Precopessoa_model->get_all_precopessoas();
        
        $data['_view'] = 'precopessoa/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new precopessoa
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
            );
            
            $precopessoa_id = $this->Precopessoa_model->add_precopessoa($params);
            redirect('precopessoa/index');
        }
        else
        {            
            $data['_view'] = 'precopessoa/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a precopessoa
     */
    function edit($IDPreco)
    {   
        // check if the precopessoa exists before trying to edit it
        $data['precopessoa'] = $this->Precopessoa_model->get_precopessoa($IDPreco);
        
        if(isset($data['precopessoa']['IDPreco']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                );

                $this->Precopessoa_model->update_precopessoa($IDPreco,$params);            
                redirect('precopessoa/index');
            }
            else
            {
                $data['_view'] = 'precopessoa/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The precopessoa you are trying to edit does not exist.');
    } 

    /*
     * Deleting precopessoa
     */
    function remove($IDPreco)
    {
        $precopessoa = $this->Precopessoa_model->get_precopessoa($IDPreco);

        // check if the precopessoa exists before trying to delete it
        if(isset($precopessoa['IDPreco']))
        {
            $this->Precopessoa_model->delete_precopessoa($IDPreco);
            redirect('precopessoa/index');
        }
        else
            show_error('The precopessoa you are trying to delete does not exist.');
    }
    
}
