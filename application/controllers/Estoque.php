<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estoque extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Estoque_model', 'estoque');
        $this->load->model('Fornecedor_model', 'fornecedor');
        $this->load->model('Categoria_model', 'categoria');
                         
    }
    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "LTT";
        $dados['completo'] = "Lojao Torra Torra";
        $dados['estoque'] = $this->estoque->listar();
        $dados['fornecedor'] = $this->fornecedor->listar();
        $dados['categoria'] = $this->categoria->listar();
//        $this->db->join('fornecedor','fornecedor.idforce = estoque.idestoque');
        $this->load->view('estoque', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $dados['nomeEstoque'] = mb_convert_case ($this->input->post('nomeEstoque'), MB_CASE_UPPER);
        $dados['idCategoria'] = $this->input->post('idCategoria');
        $dados['qntEstoque'] = $this->input->post('qntEstoque');
        $dados['valorVenda'] = $this->input->post('valorVenda');
        $dados['custo'] = $this->input->post('custo');
        $dados['idforce'] = $this->input->post('idforce');
        $dados['lote'] = mb_convert_case ($this->input->post('lote'), MB_CASE_UPPER);
        $dados['validade'] = $this->input->post('validade');
        $dados['status'] = true;
                                 
         $result = $this->estoque->inserir($dados);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('estoque');
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('estoque');
        }
        
       
    }
    
    
public function ativar($idestoque) {
        $result = $this->estoque->ativar($idestoque);
        if ($result == true) {
            redirect('estoqueNovo');
        } else {
            redirect('estoqueNovo');
        }
    }
    public function desativar($idestoque) {
        $result = $this->estoque->desativar($idestoque);
        if ($result == true) {
            redirect('estoqueNovo');
        } else {
            redirect('estoqueNovo');
        }
    }
    
    
    public function excluir($idestoque) {
        $result = $this->estoque->deletar($idestoque);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('estoqueNovo');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('estoqueNovo');
        }
    }

    function editar($idestoque) {
        $this->load->view('template/header');
        $dados['acronico'] = "LTT";
        $dados['completo'] = "Lojao Torra Torra";
        $dados['estoqueEditar'] = $this->estoque->editar($idestoque);
        $dados['fornecedor'] = $this->fornecedor->listar();
        $dados['categoria'] = $this->categoria->listar();
        $this->load->view('estoqueEditar', $dados);
        $this->load->view('template/footer');
              
        }

   public function atualizar(){
        $dados['idestoque'] = $this->input->post('idestoque');            
        $dados['nomeEstoque'] = mb_convert_case ($this->input->post('nomeEstoque'), MB_CASE_UPPER);
        $dados['idCategoria'] = $this->input->post('idCategoria');
        $dados['qntEstoque'] = $this->input->post('qntEstoque');
        $dados['valorVenda'] = $this->input->post('valorVenda');
        $dados['custo'] = $this->input->post('custo');
        $dados['idforce'] = $this->input->post('idforce');
        $dados['lote'] = mb_convert_case ($this->input->post('lote'), MB_CASE_UPPER);
        $dados['validade'] = $this->input->post('validade');
       $result = $this->estoque->atualizar($dados);
            redirect('estoqueNovo');
        }
    }
  