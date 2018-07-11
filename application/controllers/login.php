<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Marcos Lázaro
 * Description: Login controller class
 */
class Login extends CI_Controller{
    
    function __construct(){

        parent::__construct();
        
        //$this->uri_base = "login";
        
        // Carrega  models
        $this->load->model('login_model');
        //$this->load->model('cl_cliente_model');
        $this->load->helper("html");

  
    }
    
    public $msg;

    public function index($msg = NULL){

        $data['msg'] = $this->msg;
        $data['content'] = 'welcome_message';
        $this->load->view('template_login/main', $data);  

    }


    public function process(){


        // Validate the user can login
        $result = $this->login_model->validate();

        //echo $result;
        // Now we verify the result
        if(! $result){

            //$msg = '<font color=red>Usuario e/ou senha incorretos!.</font><br />';

           $this->msg =  '<div id="error" class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <h5><strong>Erro!</strong></h5>
                        Usuario e/ou senha incorretos!
                    </div>';
           //$this->msg = $msg;
           //$this->__construct;         
           $this->index();
           //header("Location: /desafio/login");
            //redirect('login');
        }else{

            //redirect('ta_tarefas');
header("Location: /desafio/ta_tarefas");
        }        
    }

      public function do_logout(){

        $this->login_model->setLogon($this->session->userdata('id_usuario'));

        $this->session->sess_destroy();
        $this->session->unset_userdata('id_usuario');
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('nome_usuario');
        $this->session->unset_userdata('dt_acesso');
        $this->session->unset_userdata('validated');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('logged_in');


        //redirect('login/login_view');
        //redirect('login');
        header("Location: /desafio/login");
    }
  
 
}
?>