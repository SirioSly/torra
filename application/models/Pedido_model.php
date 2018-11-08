<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('pedido');
        $this->db->join('cliente','cliente.idcliente = pedido.idcliente');
        $this->db->join('usuario','usuario.idusuario = pedido.idusuario');
        $this->db->join('meioPag','meioPag.idmeioPag = pedido.idmeioPag');
        $query=$this->db->get();
    return $query->result();
    }
    
    function inserir($c){
        return $this->db->insert('pedido',$c);
    }
    function deletar($id){
        $this->db->where('idpedido',$id);
        return $this->db->delete('pedido');
    }
    function editar($id){
        $this->db->where('idpedido',$id);
        $result = $this->db->get('pedido');
        return $result->result();
    }
    function atualizar($data){
        $this->db->where('idpedido',$data['idpedido']);
        $this->db->set($data);
        return $this->db->update('pedido');
    }
    
}

