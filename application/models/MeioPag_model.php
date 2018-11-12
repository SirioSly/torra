<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MeioPag_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('meioPag');
        $query=$this->db->get();
    return $query->result();
    }
    
    function inserir($c){
        return $this->db->insert('meioPag',$c);
    }
    
    function ativar($idmeioPag) {
        $this->db->where('idmeioPag', $idmeioPag);
        $this->db->set('status', 1);
        return $this->db->update('meioPag');
    }
    
    function desativar($idmeioPag) {
        $this->db->where('idmeioPag', $idmeioPag);
        $this->db->set('status', 0);
        return $this->db->update('meioPag');
    }
    
    
    function deletar($id){
        $this->db->where('idmeioPag',$id);
        return $this->db->delete('meioPag');
    }
    function editar($id){
        $this->db->where('idmeioPag',$id);
        $result = $this->db->get('meioPag');
        return $result->result();
    }
    function atualizar($data){
        $this->db->where('idmeioPag',$data['idmeioPag']);
        $this->db->set($data);
        return $this->db->update('meioPag');
    }
    
}

