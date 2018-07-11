<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Us_usuarios_sistema_Model extends CI_Model {

	function __construct()
    {      
    	parent::__construct();	
    }

	public function listarTodos()
    {        
        
        $query = $this->db->query('
                select * from us_usuarios_sistema us 
            ');
        return $query->result_array();
    }

    public function listarByCodigo($id)
    {        
        $this->db->where('id_us', $id);

        $query = $this->db->get('us_usuarios_sistema');

        return $query->row_array();
    }



    public function cadastrar($array = array())
    {       
        $data = $this->db->insert('us_usuarios_sistema', $array);

        return $this->db->insert_id();
    }

    public function atualizar($array = array())
    {        
        $this->db->where('id_us', $array['id_us']);

        $data = $this->db->update('us_usuarios_sistema', $array);

        
        if ($data) {
            return true;
        }
        return false;
    }

    public function deletar($id_ta)
    {        
        $this->db->where('id_us', $id_us);

        $data = $this->db->delete('us_usuarios_sistema');

        if ($data) {

            return true;
        }
        
        return false;
    }

}
