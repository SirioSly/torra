<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedor_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('fornecedor');
        $query=$this->db->get();
    return $query->result();
    }
    
    function inserir($c){
        return $this->db->insert('fornecedor',$c);
    }
    function deletar($id){
        $this->db->where('idforce',$id);
        return $this->db->delete('fornecedor');
    }
    function editar($id){
        $this->db->where('idforce',$id);
        $result = $this->db->get('fornecedor');
        return $result->result();
    }
    function atualizar($data){
        $this->db->where('idforce',$data['idforce']);
        $this->db->set($data);
        return $this->db->update('fornecedor');
    }
    
}

