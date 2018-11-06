<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('cliente');
        $query=$this->db->get();
    return $query->result();
    }
    function deletar($id){
        $this->db->where('idcliente',$id);
        return $this->db->delete('cliente');
    }
     
}

