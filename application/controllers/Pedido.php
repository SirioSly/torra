<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('Pedido_model','pedido'); 
        $this->load->model('Cliente_model','cliente'); 
        $this->load->model('Usuario_model','usuario');
        $this->load->model('Meiopag_model','meiopag');
      
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['cidade'] = $this->cidade->listar();
        $dados['estado'] = $this->estado->listar();
        $this->load->view('cidade', $dados);
        $this->load->view('template/footer');
    }
    
    public function inserir(){
        $dados['nomecidade'] = $this->input->post('nomecidade');
        $dados['idestado'] = $this->input->post('idestado');
        
        $result = $this->cidade->inserir($dados);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('cidade');
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('cidade');
        }
    }

        public function excluir($id){
         $result = $this->cidade->deletar($id);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('cidade');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('cidade');
        }
        
    }
    
    function editar($id){
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['cidadeEditar'] = $this->cidade->editar($id);
        $data['estado'] = $this->estado->listar();
        $this->load->view('cidadeEditar', $data);
        $this->load->view('template/footer');
        
    }
    public function atualizar(){
        $data['idcidade'] = $this->input->post('idcidade');
        $data['nomeCidade'] = mb_convert_case ($this->input->post('nomeCidade'), MB_CASE_UPPER);
        $data['idestado'] = $this->input->post('idestado');
        
         $result = $this->cidade->atualizar($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucessoA', 'msg');
             redirect('cidade');
        } else{
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('cidade');
        }
    }
  }

