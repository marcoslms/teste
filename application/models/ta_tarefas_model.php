<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ta_tarefas_Model extends CI_Model {

	function __construct()
    {      
    	parent::__construct();	
    }

	public function listarTodos()
    {        
        
        $query = $this->db->query('
                select * from ta_tarefas ta 
            ');
        return $query->result_array();
    }

    public function listarByCodigo($id)
    {        
        $this->db->where('id_ta', $id);

        $query = $this->db->get('ta_tarefas');

        return $query->row_array();
    }

    public function listarById_us()
    {        
        $this->db->where('id_us_ta', $this->session->userdata('id_usuario'));

        $query = $this->db->get('ta_tarefas');

        return $query->result_array();
        //return $query->row_array();
    }

    public function cadastrar($array = array())
    {       
        $data = $this->db->insert('ta_tarefas', $array);

        return $this->db->insert_id();
    }

    public function atualizar($array = array())
    {        
        $this->db->where('id_ta', $array['id_ta']);

        $data = $this->db->update('ta_tarefas', $array);

        
        if ($data) {
            return true;
        }
        return false;
    }

    public function deletar($id_ta)
    {        
        $this->db->where('id_ta', $id_ta);

        $data = $this->db->delete('ta_tarefas');

        if ($data) {

            return true;
        }
        
        return false;
    }

}
