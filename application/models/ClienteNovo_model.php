<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteNovo_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('cliente');
        $query=$this->db->get();
    return $query->result();
    }
    
    function inserir($c){
        return $this->db->insert('cliente',$c);
    }
    function deletar($id){
        $this->db->where('idcliente',$id);
        return $this->db->delete('cliente');
    }
    function editar($id){
        $this->db->where('idcliente',$id);
        $result = $this->db->get('cliente');
        return $result->result();
    }
    function atualizar($data){
        $this->db->where('idcliente',$data['idcliente']);
        $this->db->set($data);
        return $this->db->update('cliente');
    }
    
}


