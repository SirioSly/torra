<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contatos_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('contatos');
        $this->db->join('funcao','funcao.idfuncao = contatos.idfuncao');
        $this->db->order_by('nomeFuncao','ASC');
        $this->db->order_by('nome','ASC');
        $query=$this->db->get();
    return $query->result();
    }
    
    function inserir($c){
        return $this->db->insert('contatos',$c);
    }
    function deletar($id){
        $this->db->where('id',$id);
        return $this->db->delete('contatos');
    }
    function editar($id){
        $this->db->where('id',$id);
        $result = $this->db->get('contatos');
        return $result->result();
    }
    function atualizar($data){
        $this->db->where('id',$data['id']);
        $this->db->set($data);
        return $this->db->update('contatos');
    }
    
}

