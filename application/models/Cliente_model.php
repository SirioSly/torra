<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->order_by('status','ASC');
        $query=$this->db->get();
    return $query->result();
    }
    
    function ativar($idcliente) {
        $this->db->where('idcliente', $idcliente);
        $this->db->set('status', 1);
        return $this->db->update('cliente');
    }
    
    function desativar($idcliente) {
        $this->db->where('idcliente', $idcliente);
        $this->db->set('status', 0);
        return $this->db->update('cliente');
    }
    
    
    function deletar($id){
        $this->db->where('idcliente',$id);
        return $this->db->delete('cliente');
    }
     
}

