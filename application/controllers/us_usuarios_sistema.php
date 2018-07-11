<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Us_usuarios_sistema extends CI_Controller {

	function __construct()
    {      
    	parent::__construct();	

         $this->check_isvalidated(); 

        $this->uri_base = "us_usuarios_sistema";
         $this->load->helper("html");
        $this->load->helper('form');
        $this->load->helper('funcoes_helper');

        //$this->load->model('config_sistema_model');
        //$this->load->model('Us_usuarios_sistema_Model');
        //$this->load->model('Pu_perfil_usuario_Model');
        $this->load->model('Us_usuarios_sistema_Model');
    }

	public function index()
	{   
        //$data['us_usuarios_sistema'] = $this->Us_usuarios_sistema_Model->listarById_us();
        
		$data['content'] = 'us_usuarios_sistema/us_usuarios_sistema_list';
        $this->load->view('template/main', $data);
	}

    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){

            // pega o id do usuario gravado no cookie ao logar
            $dataForm['id_usuario'] = $_COOKIE['id_usuario'];
            //Deleta o cookie
            setcookie('usuario');
            // redireciona para tela de login
            redirect('login');
        }
    }

        public function cadastrar()
    {   
    
        $data['us_usuarios_sistema'] = $this->inicializaDados();

        if ($this->input->post()) 
        {   
            $dataForm = $this->input->post();

            $data = $this->Us_usuarios_sistema_Model->cadastrar($dataForm);

            if ($data) {
                $this->session->set_flashdata ('message', 'Usuario cadastrada com sucesso!');
            } else {
                $this->session->set_flashdata ('message_error', 'Erro ao cadastrar usuario!');
            }
            redirect('us_usuarios_sistema');
            //header("Location: /desafio/ta_tarefas");
        }

        $data['actionForm'] = 'cadastrar';
        $data['content'] = 'us_usuarios_sistema/us_usuarios_sistema_form';
        $this->load->view('template/main', $data);
    }


    public function editar($id = null)
    {   
        if ($this->input->post()) 
        {   
            $dataForm = $this->input->post();
            

            $data = $this->Us_usuarios_sistema_Model->atualizar($dataForm);

            
            if ($data) {
                $this->session->set_flashdata ('message', 'Usuario atualizada com sucesso!');
            } else {
                $this->session->set_flashdata ('message_error', 'Erro ao atualizar usuario!');
            }

             redirect('us_usuarios_sistema');

        } else {
            $data['us_usuarios_sistema'] = $this->Us_usuarios_sistema_Model->listarByCodigo($id);
        }


  
        $data['actionForm'] = 'editar';
        
            $data['content'] = 'us_usuarios_sistema/us_usuarios_sistema_form';
       

        $this->load->view('template/main', $data);
    }

    public function deletar($id)
    {
        $data = $this->Us_usuarios_sistema->deletar($id);
        if ($data) {
            $this->session->set_flashdata ('message', 'Usuario excluída com sucesso!');
        } else {
            $this->session->set_flashdata ('message_error', 'Erro ao excluir usuario!');
        }

        //redirect('tarefa');
        header("Location: /desafio/us_usuarios_sistema");
    }

    private function inicializaDados()
    {
        $us_usuarios_sistema = array();

        $us_usuarios_sistema['id_us']       = $this->input->post('id_us') ;
        $us_usuarios_sistema['nome_us']       = $this->input->post('nome_us');
        $us_usuarios_sistema['login_us']       = $this->input->post('login_us');
        $us_usuarios_sistema['senha_us']       = $this->input->post('senha_us');
        $us_usuarios_sistema['status_us']       = $this->input->post('status_us');
        $us_usuarios_sistema['dt_acesso']       = $this->input->post('dt_acesso');
       
        return $us_usuarios_sistema;
    }
/*
    private function obterListaCombos($id_cliente = null) 
    {
        $data = array();
    
        $data['STATUS_list'] = $this->Us_usuarios_sistema_Model->listarStatus();
        
        $data['PERFIL_list'] = $this->Pu_perfil_usuario_Model->listarTodosCombo();

        $data['CLIENTE_list'] = $this->Cl_cliente_Model->listarTodosAtivosCombo();

        return $data;
    }

        public function altera_senha($id = null)
    {   

        $data['usuarios']  = $this->Us_usuarios_sistema_Model->listarTodosAtivos();
        if ($this->input->post()) 
        {   
            $dataForm = $this->input->post();

            $dataForm['senha'] = md5($dataForm['senha']); 
            
            $data = $this->Us_usuarios_sistema_Model->atualizar($dataForm);

            if ($data) {
                $this->session->set_flashdata ('message', 'Usuario atualizado com sucesso!');
            } else {
                $this->session->set_flashdata ('message_error', 'Erro ao atualizar usuario!');
            }

            redirect('admin_chamados');

        } else {

            $data['us_usuarios_sistema'] = $this->Us_usuarios_sistema_Model->listarByCodigo($id);
            
        }

        $data['actionForm'] = 'altera_senha';
        $data['content'] = 'us_usuarios_sistema/altera_senha_form';
        // var_dump($data);
        $this->load->view('template/main', $data);
    } 
*/
}
