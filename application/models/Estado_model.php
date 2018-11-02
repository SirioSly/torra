<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estado_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('estado');
        $this->db->order_by('nomeEstado','ASC');
        $this->db->order_by('nomeEstado','ASC');
        $query=$this->db->get();
    return $query->result();
    }
    
    function inserir($c){
        return $this->db->insert('estado',$c);
    }
    function deletar($id){
        $this->db->where('idestado',$id);
        return $this->db->delete('estado');
    }
    function editar($id){
        $this->db->where('idestado',$id);
        $result = $this->db->get('estado');
        return $result->result();
    }
    function atualizar($data){
        $this->db->where('idestado',$data['idestado']);
        $this->db->set($data);
        return $this->db->update('estado');
    }
    
}

