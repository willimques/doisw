<?php 
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    } 

    public function index(){

        if(isset($_POST) && count($_POST) > 0)  {

            $email = $this->input->post('email');            
            $senha = md5($this->input->post('senha')); 
            $usuario_id = $this->Login_model->get_user($email,$senha); 
           
            
            if($usuario_id) { 
                $user = $this->session->set_userdata("usuario",$usuario_id);
                $this->session->set_flashdata("sucess","logado com sucesso");
                              
                redirect('dashboard');                  

            }else{
               
            $this->session->set_flashdata("danger","Usuario ou senha Inválido");
            redirect('login');
                
            }


        }else{ 
            
            $this->load->view('layouts/header');
            $this->load->view('layouts/login');  

        }

    }  



    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>