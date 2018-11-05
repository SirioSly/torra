<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cidade_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('cidade');
        $this->db->join('estado','estado.idestado = cidade.idestado');
        $this->db->order_by('nomeCidade','ASC');
        $query=$this->db->get();
    return $query->result();
    }
    
    function inserir($c){
        return $this->db->insert('cidade',$c);
    }
    function deletar($id){
        $this->db->where('idcidade',$id);
        return $this->db->delete('cidade');
    }
    function editar($id){
        $this->db->where('idcidade',$id);
        $result = $this->db->get('cidade');
        return $result->result();
    }
    function atualizar($data){
        $this->db->where('idcidade',$data['idcidade']);
        $this->db->set($data);
        return $this->db->update('cidade');
    }
    
}

