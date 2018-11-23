<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Finalizar_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function listar($ped) {
        $this->db->select('*');
        $this->db->from('finalizar');
  
        if ($ped == 00) {     
        } else {
            $this->db->where('idpedido', $ped);
        }
        $query = $this->db->get();
        return $query->result();
    }
    function atualizar($data) {
        $this->db->where('idpedido', $data['idpedido']);
        $this->db->set($data);
        return $this->db->update('pedido');
    }
        function editar($id){
        $this->db->where('iditensvenda',$id);
        $result = $this->db->get('itensvenda');
        return $result->result();
        }
}