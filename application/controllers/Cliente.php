<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Cliente_model', 'cliente');
        
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "T";
        $dados['completo'] = "Torra";
        $dados['cliente'] = $this->cliente->listar();
        $this->load->view('cliente', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $data['nomeUsuario'] = mb_convert_case ($this->input->post('nomeUsuario'), MB_CASE_UPPER);
        $data['user'] = mb_convert_case ($this->input->post('user'), MB_CASE_LOWER);
        $data['senha'] = md5($this->input->post('senha'));
        $data['perfilAcesso']= mb_convert_case($this->input->post('perfilAcesso'),MB_CASE_UPPER);
        
         $result = $this->cliente->inserir($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('cliente');
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('cliente');
        }
        
       
    }

    public function excluir($id) {
        $result = $this->cliente->deletar($id);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('cliente');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('cliente');
        }
    }

    function editar($id) {
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['clienteEditar'] = $this->cliente->editar($id);
        $this->load->view('clienteEditar', $data);
        $this->load->view('template/footer');
        
    }

   public function atualizar(){
        $data['idcliente'] = $this->input->post('idcliente');
        $data['nome'] = mb_convert_case ($this->input->post('nome'), MB_CASE_UPPER);
        $data['user'] = mb_convert_case ($this->input->post('user'), MB_CASE_LOWER);
        $data['senha'] = md5($this->input->post('senha'));
        $data['perfilAcesso']= mb_convert_case($this->input->post('perfilAcesso'),MB_CASE_UPPER);
        
        $result = $this->cliente->atualizar($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucessoA', 'msg');
             redirect('cliente');
        } else{
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('cleinte');
        }
    }
  }