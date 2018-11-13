<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedor extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Fornecedor_model', 'fornecedor');
        
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "T";
        $dados['completo'] = "Torra";
        $dados['fornecedor'] = $this->fornecedor->listar();
        $this->load->view('fornecedor', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $dados['nomeForce'] = mb_convert_case ($this->input->post('nomeForce'), MB_CASE_UPPER);
        $dados['contatoForce'] = mb_convert_case ($this->input->post('contatoForce'), MB_CASE_UPPER);
        $dados['numero'] = mb_convert_case ($this->input->post('numero'), MB_CASE_UPPER);
        $dados['email'] = $this->input->post('email');
        
         $result = $this->fornecedor->inserir($dados);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('fornecedor');
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('fornecedor');
        }
        
       
    }

    public function excluir($id) {
        $result = $this->fornecedor->deletar($id);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('fornecedor');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('fornecedor');
        }
    }

    function editar($id) {
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['fornecedorEditar'] = $this->fornecedor->editar($id);
        $this->load->view('fornecedorEditar', $data);
        $this->load->view('template/footer');
        
    }

   public function atualizar(){
        $data['idforce'] = $this->input->post('idforce');
        $dados['nomeForce'] = mb_convert_case ($this->input->post('nomeForce'), MB_CASE_UPPER);
        $dados['contatoForce'] = mb_convert_case ($this->input->post('contatoForce'), MB_CASE_UPPER);
        $dados['numero'] = mb_convert_case ($this->input->post('numero'), MB_CASE_UPPER);
        $dados['email'] = $this->input->post('email');
        
        $result = $this->fornecedor->atualizar($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucessoA', 'msg');
             redirect('fornecedor');
        } else{
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('fornecedor');
        }
    }
  }