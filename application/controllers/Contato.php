<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('estou_logado')){
            redirect('login');
        }
        $this->load->model('Contatos_model','contatos'); 
        $this->load->model('Funcao_model','funcao'); 
      
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['contatos'] = $this->contatos->listar();
        $dados['funcao'] = $this->funcao->listar();
        $this->load->view('contato', $dados);
        $this->load->view('template/footer');
    }
    
    public function inserir(){
        $dados['nome'] = $this->input->post('nome');
        $dados['email'] = $this->input->post('email');
        $dados['idfuncao'] = $this->input->post('idfuncao');
        
        $result = $this->contatos->inserir($dados);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('contato');
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('contato');
        }
    }

        public function excluir($id){
         $result = $this->contatos->deletar($id);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('contato');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('contato');
        }
        
    }
    
    function editar($id){
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['contatoEditar'] = $this->contatos->editar($id);
        $data['funcao'] = $this->funcao->listar();
        $this->load->view('contatoEditar', $data);
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
             redirect('contato');
        } else{
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('contato');
        }
    }
  }

