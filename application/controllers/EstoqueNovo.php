<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EstoqueNovo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('EstoqueNovo_model', 'estoqueNovo');
        $this->load->model('Fornecedor_model', 'fornecedor');
        $this->load->model('Categoria_model', 'categoria');
         if (!$this->session->userdata ('estou_logado')) {
            redirect ('Login');
        } 
        
    }
    

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "T";
        $dados['completo'] = "Torra";
        $dados['estoque'] = $this->estoqueNovo->listar();
        $dados['fornecedor'] = $this->fornecedor->listar();
        $dados['categoria'] = $this->categoria->listar();
        $this->load->view('estoqueNovo', $dados);
        $this->load->view('template/footer');
    }

    public function excluir($id) {
        $result = $this->estoqueNovo->deletar($id);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('estoqueNovo');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('estoqueNovo');
        }
    }
    
    
   
}