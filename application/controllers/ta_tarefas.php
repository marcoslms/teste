<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ta_tarefas extends CI_Controller {

	function __construct()
    {      
    	parent::__construct();	

         $this->check_isvalidated(); 

        $this->uri_base = "ta_tarefas";
         $this->load->helper("html");
        $this->load->helper('form');
        $this->load->helper('funcoes_helper');

        //$this->load->model('config_sistema_model');
        //$this->load->model('Us_usuarios_sistema_Model');
        //$this->load->model('Pu_perfil_usuario_Model');
        $this->load->model('Ta_tarefas_Model');
    }

	public function index()
	{   
        $data['ta_tarefas'] = $this->Ta_tarefas_Model->listarById_us();
        
		$data['content'] = 'ta_tarefas/ta_tarefas_list';
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
    
        $data['ta_tarefas'] = $this->inicializaDados();

        if ($this->input->post()) 
        {   
            $dataForm = $this->input->post();

            $data = $this->Ta_tarefas_Model->cadastrar($dataForm);

            if ($data) {
                $this->session->set_flashdata ('message', 'Tarefa cadastrada com sucesso!');
            } else {
                $this->session->set_flashdata ('message_error', 'Erro ao cadastrar tarefa!');
            }
            redirect('ta_tarefas');
            //header("Location: /desafio/ta_tarefas");
        }

        $data['actionForm'] = 'cadastrar';
        $data['content'] = 'ta_tarefas/ta_tarefas_form';
        $this->load->view('template/main', $data);
    }


    public function editar($id = null)
    {   
        if ($this->input->post()) 
        {   
            $dataForm = $this->input->post();
            

            $data = $this->Ta_tarefas_Model->atualizar($dataForm);

            
            if ($data) {
                $this->session->set_flashdata ('message', 'Tarefa atualizada com sucesso!');
            } else {
                $this->session->set_flashdata ('message_error', 'Erro ao atualizar tarefa!');
            }

             redirect('ta_tarefas');

        } else {
            $data['ta_tarefas'] = $this->Ta_tarefas_Model->listarByCodigo($id);
        }


        //$data['ta_tarefas']  = $this->Ta_tarefas_Model->listarTodosAtivos();
        $data['actionForm'] = 'editar';
        
            $data['content'] = 'ta_tarefas/ta_tarefas_form';
       

        $this->load->view('template/main', $data);
    }

    public function deletar($id)
    {
        $data = $this->Ta_tarefas_Model->deletar($id);

        if ($data) {
            $this->session->set_flashdata ('message', 'Tarefa excluída com sucesso!');
        } else {
            $this->session->set_flashdata ('message_error', 'Erro ao excluir tarefa!');
        }

        //redirect('tarefa');
        header("Location: /desafio/ta_tarefas");
    }

    private function inicializaDados()
    {
        $ta_tarefas = array();

        $ta_tarefas['id_ta']       = $this->input->post('id_ta') ;
        $ta_tarefas['titulo_ta']       = $this->input->post('titulo_ta');
        $ta_tarefas['desc_ta']       = $this->input->post('desc_ta');
        $ta_tarefas['status_ta']       = $this->input->post('status_ta');
        $ta_tarefas['id_us_ta']       = $this->input->post('id_us_ta');
        $ta_tarefas['dt_cadastro']       = $this->input->post('dt_cadastro');
       
        return $ta_tarefas;
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
