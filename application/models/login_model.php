<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Marcos Lázaro
 * Description: Login model class
 */
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $password = md5($password);

        $query = $this->db->query('select * from us_usuarios_sistema us
                                            where us.login_us = '."'$username'".'
                                                and us.senha_us = '."'$password'");

        if($query->num_rows() == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'id_usuario' => $row->id_us,
                    'login' => $row->login_us,
                    'status' => $row->status_us,
                    'nome_usuario' => $row->nome_us,
                    'dt_acesso' => $row->dt_acesso_us,
                    'validated' => true
                    );
         
            $this->setLogon($row->id_us);    
            
            $this->session->set_userdata($data);

             //Set Session For User

             $values = array('user_id'=>$row->id_us, 'logged_in'=>TRUE, 'username'=>$row->nome_us);
             $this->session->set_userdata($values);

             $this->session->userdata('user_id', $row->id_us);
             $this->session->userdata('user_name', $row->nome_us);

             // Seta cookies para usar se a sessao expirar e deslogar do chat

             //setcookie('id_usuario', $row->id_us);
       
            return true;
        }

        return false;
    }

    function setLogon($id_usuario){
        $query = $this->db->query('
                    update us_usuarios_sistema set dt_acesso_us = now()
                        where id_us = '.$id_usuario);
 
    }

}
?>