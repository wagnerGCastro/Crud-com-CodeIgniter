<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Crud_model
 *
 * @author wagner
 */

class Crud_model extends CI_Model {
    
    public function do_insert($dados = null) {
        if($dados != null):
            $this->db->insert('ws_users', $dados);
            $this->session->set_flashdata('cadastro ok', 'Cadastro efetuado com sucesso');
            redirect('crud/create');
        endif;
    }
    
    public function get_select() {
        //$this->db->select('id, name, lastname, email, registration, level');
        return  $this->db->get('ws_users');  
    }
    
    public function get_where($table, $where, $limit = null, $offset = null  ) {
        if($limit != '' || $limit != null && $offset == null):
            $query = $this->db->get_where($table, $where , $limit);
            return  $query;
        elseif($offset != '' || $offset != null && $limit == null):
            $query = $this->db->get_where($table, $where , $offset);
            return  $query;
        else:
            $query = $this->db->get_where($table, $where , $limit, $offset);
            return  $query;
        endif;
    }
    
    public function update($table , $data = array(), $where = array()) {
        $query =$this->db->update($table, $data, $where);
        $this->session->set_flashdata('updateOk', ' Cadastro foi atualizado.' );
        return $query ;
    }

    public function delete($table, $id = array()) {
         $ws_users = $this->get_where($table, $id)->result();
         $delete = $this->db->delete($table, $id);
         if($delete == true):
             $this->session->set_flashdata('deleteOk', 'Cadastro id = '.$ws_users[0]->id .' de '. $ws_users[0]->name.' '.$ws_users[0]->lastname. ' Foi deletado com suceso' );
             return true;
         else:
             return false;
         endif;
    }
    
} // end class
