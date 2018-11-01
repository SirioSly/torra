<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('Cliente_model','cliente'); 
    
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "TR";
        $dados['completo'] = "torra";
        $dados['cliente'] = $this->cliente->listar();
        $this->load->view('cliente', $dados);
        $this->load->view('template/footer');
    }
    
    public function inserir(){
        $dados['nome'] = $this->input->post('nome');
        $dados['email'] = $this->input->post('email');
        $dados['idfuncao'] = $this->input->post('idfuncao');
        
        $result = $this->contatos->inserir($dados);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('cliente');
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('cliente');
        }
    }

        public function excluir($id){
         $result = $this->contatos->deletar($id);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('cliente');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('cliente');
        }
        
    }
    
    function editar($id){
        $this->load->view('template/header');
        $data['acronico'] = "T";
        $data['completo'] = "Torra";
        $data['clienteEditar'] = $this->contatos->editar($id);
        $data['funcao'] = $this->funcao->listar();
        $this->load->view('clienteEditar', $data);
        $this->load->view('template/footer');
        
    }
    public function atualizar(){
        $data['id'] = $this->input->post('id');
        $data['nome'] = mb_convert_case ($this->input->post('nome'), MB_CASE_UPPER);
        $data['idfuncao'] = $this->input->post('idfuncao');
        $data['email'] = mb_convert_case ($this->input->post('email'),MB_CASE_LOWER) ;
        
         $result = $this->contatos->atualizar($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucessoA', 'msg');
             redirect('cliente');
        } else{
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('cliente');
        }
    }
  }

