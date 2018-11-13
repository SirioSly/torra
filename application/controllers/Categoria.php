<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('Categoria_model','categoria');  
      
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['categoria'] = $this->categoria->listar();
        $this->load->view('categoria', $dados);
        $this->load->view('template/footer');
    }
    
    public function inserir(){
        $dados['nomeCategoria'] = mb_convert_case ($this->input->post('nomeCategoria'), MB_CASE_UPPER);
        
        $result = $this->categoria->inserir($dados);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('categoria');
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('categoria');
        }
    }

        public function excluir($id){
         $result = $this->categoria->deletar($id);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('categoria');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('categoria');
        }
        
    }
    
    function editar($id){
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['categoriaEditar'] = $this->categoria->editar($id);
        $this->load->view('categoriaEditar', $data);
        $this->load->view('template/footer');
        
    }
    public function atualizar(){
        $data['idCategoria'] = $this->input->post('idCategoria');
        $data['nomeCategoria'] = mb_convert_case ($this->input->post('nomeCategoria'), MB_CASE_UPPER);
        
         $result = $this->categoria->atualizar($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucessoA', 'msg');
             redirect('categoria');
        } else{
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('categoria');
        }
    }
  }

