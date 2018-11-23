<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categoria_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('categoria');
        $query=$this->db->get();
    return $query->result();
    }
    
    function inserir($c){
        return $this->db->insert('categoria',$c);
    }
    function deletar($id){
        $this->db->where('idCategoria',$id);
        return $this->db->delete('categoria');
    }
    function editar($id){
        $this->db->where('idCategoria',$id);
        $result = $this->db->get('categoria');
        return $result->result();
    }
    function atualizar($data){
        $this->db->where('idCategoria',$data['idCategoria']);
        $this->db->set($data);
        return $this->db->update('categoria');
    }
}