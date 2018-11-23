<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Itensvenda_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function listar(){
        $this->db->select('*');
        $this->db->from('itensvenda');
        $this->db->join('estoque','estoque.idestoque = itensvenda.idestoque');
//        $this->db->join('pedido','pedido.idpedido = itensvenda.idpedido');
//        $this->db->join('meioPag','meioPag.idmeiopag = pedido.idmeiopag');
//        $this->db->join('cliente','cliente.idcliente = pedido.idcliente');
//        $this->db->join('usuario','usuario.idusuario = pedido.idusuario');
        $query=$this->db->get();
    return $query->result();
    }
    
    function inserir($c){
        return $this->db->insert('itensvenda',$c);
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
