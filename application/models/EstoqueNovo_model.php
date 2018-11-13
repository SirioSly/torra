<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EstoqueNovo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function listar() {
        $this->db->select('idestoque, nomeEstoque, estoque.idCategoria, nomeCategoria, nomeForce, qntEstoque, valorVenda, '
                . 'custo, estoque.idforce, lote, validade, estoque.status');
        $this->db->from('estoque');
        $this->db->order_by('nomeEstoque', 'ASC');
        $this->db->join('fornecedor', 'fornecedor.idforce = estoque.idforce');
        $this->db->join('categoria', 'categoria.idCategoria = estoque.idCategoria');
        $this->db->order_by('nomeEstoque', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function deletar($id) {
        $this->db->where('idestoque', $id);
        return $this->db->delete('estoqueNovo');
    }

    function ativar($idestoque) {
        $this->db->where('idestoque', $idestoque);
        $this->db->set('status', 1);
        return $this->db->update('estoque');
    }

    function desativar($idestoque) {
        $this->db->where('idestoque', $idestoque);
        $this->db->set('status', 0);
        return $this->db->update('estoque');
    }

    function editar($idestoque) {
        $this->db->where('idestoque', $idestoque);
        $result = $this->db->get('estoque');
        return $result->result();
    }

}
