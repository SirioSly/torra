<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('usuario');
        $query=$this->db->get();
    return $query->result();
    }
    
    function inserir($c){
        return $this->db->insert('usuario',$c);
    }
    function deletar($id){
        $this->db->where('idusuario',$id);
        return $this->db->delete('usuario');
    }
    function editar($id){
        $this->db->where('idusuario',$id);
        $result = $this->db->get('usuario');
        return $result->result();
    }
    function atualizar($data){
        $this->db->where('idusuario',$data['idusuario']);
        $this->db->set($data);
        return $this->db->update('usuario');
    }
    
}

