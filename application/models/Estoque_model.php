<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estoque_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
  
    
    function listar(){
        $this->db->select('*');
        $this->db->from('estoque');
        $this->db->order_by('nomeEstoque','ASC');
        $this->db->join('fornecedor','fornecedor.idforce = estoque.idforce');
        $this->db->order_by('nomeEstoque','ASC');
        $query=$this->db->get();
    return $query->result();
    }    
    function inserir($e){
        return $this->db->insert('estoque',$e);
    }
    function deletar($idestoque){
        $this->db->where('idestoque',$idestoque);
        return $this->db->delete('estoque');
    }    
    function editar($idestoque){
        $this->db->where('$idestoque',$$idestoque);
        $result = $this->db->get('$estoque');
        return $result->result();
    }    
    function atualizar($data){
        $this->db->where('$idestoque',$data['$idestoque']);
        $this->db->set($data);
        return $this->db->update('estoque');
    }
    
}

