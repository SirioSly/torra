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
        $this->db->join('categoria','categoria.idCategoria = estoque.idCategoria');
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
    function ativar($idestoque) {
        $this->db->where('idestoque', $idestoque);
        $this->db->set('status', 1);
        return $this->db->update('estoque');
    }
    
    function desativar($idestoque) {
        $this->db->where('idestoque', $idestoque);
        $this->db->set('status', 0);
        return $this->db->update('estoque');
    }
    function editar($idestoque){
        $this->db->where('idestoque',$idestoque);
        $result = $this->db->get('estoque');
        return $result->result();
    }    
    function atualizar($data){
        $this->db->where('idestoque',$data['idestoque']);
        $this->db->set($data);
        return $this->db->update('estoque');
    }
    
}

