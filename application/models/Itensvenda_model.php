<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Itensvenda_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('estoque');
        $this->db->join('fornecedor','fornecedor.idforce = estoque.idforce');
        $this->db->join('categoria','categoria.idCategoria = estoque.idCategoria');
        $this->db->order_by('nomeEstoque','ASC');
        $query=$this->db->get();
    return $query->result();
    }
    
    function inserir($c){
        return $this->db->insert('itensveda',$c);
    }
    function deletar($id){
        $this->db->where('itensvenda',$id);
        return $this->db->delete('itensvenda');
    }
    function editar($id){
        $this->db->where('iditensvenda',$id);
        $result = $this->db->get('itensvenda');
        return $result->result();
    }
    function atualizar($data){
        $this->db->where('iditensvenda',$data['iditensvenda']);
        $this->db->set($data);
        return $this->db->update('itensvenda');
    }

}

