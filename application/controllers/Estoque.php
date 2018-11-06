<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estoque extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Estoque_model', 'estoque');
        $this->load->model('Fornecedor_model', 'fornecedor');
//        if(!$this->session->userdata('estou_logado')){
//            redirect('login');
//        } else if($this->session->userdata('logado')->perfilAcesso == 'USER'){
//            redirect('home');
//        }
//        contatos é um alias para o Contatos_model 
    }
    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "LTT";
        $dados['completo'] = "Lojao Torra Torra";
        $dados['estoque'] = $this->estoque->listar();
//        $this->db->join('fornecedor','fornecedor.idforce = estoque.idestoque');
        $this->load->view('estoque', $dados);
        $this->load->view('template/footer');
    }

    public function inserir($e) {
        $data['nomeEstoque'] = mb_convert_case ($this->input->post('nomeEstoque'), MB_CASE_UPPER);
        $data['qnt'] = mb_convert_case ($this->input->post('qntEstoque'), MB_CASE_UPPER);
        $data['valorVenda'] = mb_convert_case ($this->input->post('valorVenda'), MB_CASE_UPPER);
        $data['custo'] = mb_convert_case ($this->input->post('custo'), MB_CASE_UPPER);
        $data['fornecedor'] = mb_convert_case ($this->input->post('custo'), MB_CASE_UPPER);
        $data['lote'] = mb_convert_case ($this->input->post('lote'), MB_CASE_UPPER);
        $data['validade'] = mb_convert_case ($this->input->post('validade'), MB_CASE_UPPER);
        $data['produtocomposto'] = mb_convert_case ($this->input->post('validade'), MB_CASE_UPPER);
        $data['status'] = mb_convert_case ($this->input->post('validade'), MB_CASE_UPPER);
                                 
         $result = $this->estoque->inserir($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('estoque');
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('estoque');
        }
        
       
    }

    public function excluir($idestoque) {
        $result = $this->estoque->deletar($idestoque);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('estoque');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('estoque');
        }
    }

    function editar($idestoque) {
        $this->load->view('template/header');
        $dados['acronico'] = "LTT";
        $dados['completo'] = "Lojao Torra Torra";
        $data['estoqueEditar'] = $this->estoque->editar($idestoque);
        $this->load->view('estoqueEditar', $data);
        $this->load->view('template/footer');
              
        }

   public function atualizar($data){
        $data['idestoque'] = $this->input->post('idestoque');            
        $data['nomeEstoque'] = mb_convert_case ($this->input->post('nomeEstoque'), MB_CASE_UPPER);
        $data['qnt'] = mb_convert_case ($this->input->post('qntEstoque'), MB_CASE_UPPER);
        $data['valorVenda'] = mb_convert_case ($this->input->post('valorVenda'), MB_CASE_UPPER);
        $data['custo'] = mb_convert_case ($this->input->post('custo'), MB_CASE_UPPER);
        $data['lote'] = mb_convert_case ($this->input->post('lote'), MB_CASE_UPPER);
        $data['validade'] = mb_convert_case ($this->input->post('validade'), MB_CASE_UPPER);          
        $result = $this->estoque->atualizar($data);
        if ($result == TRUE){
            $this->estoque->set_flashdata('sucessoA', 'msg');
             redirect('estoque');
        } else{
            $this->estoque->set_flashdata('falhaA', 'msg');
            redirect('estoque');
        }
    }
  }