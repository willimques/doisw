<?php


class GeraPDF extends CI_Controller{
    function __construct()
    {
        parent::__construct();

     
    
        $user = $this->session->userdata(); 

      if($user==false){ 
        
            redirect('login');
        
        }
    } 
    public function index($html)
    {
        $mpdf = new \Mpdf\Mpdf();
        //$html = $this->load->view('assets/pdf',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
    }
    
}