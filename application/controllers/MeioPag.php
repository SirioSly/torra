<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MeioPag extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('MeioPag_model','meioPag'); 
      
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['meioPag'] = $this->meioPag->listar();
        $this->load->view('meioPag', $dados);
        $this->load->view('template/footer');
    }
    
    public function inserir(){
        $dados['nomemeioPag'] = mb_convert_case ($this->input->post('nomemeioPag'), MB_CASE_UPPER);
        
        $result = $this->meioPag->inserir($dados);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('meioPag');
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('meioPag');
        }
    }
    
    public function ativar($idmeioPag) {
        $result = $this->meioPag->ativar($idmeioPag);
        if ($result == true) {
            redirect('meioPag');
        } else {
            redirect('meioPag');
        }
    }
    public function desativar($idmeioPag) {
        $result = $this->meioPag->desativar($idmeioPag);
        if ($result == true) {
            redirect('meioPag');
        } else {
            redirect('meioPag');
        }
    }

        public function excluir($id){
         $result = $this->meioPag->deletar($id);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('meioPag');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('meioPag');
        }
        
    }
    
    function editar($id){
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['meioPagEditar'] = $this->meioPag->editar($id);
        $this->load->view('meioPagEditar', $data);
        $this->load->view('template/footer');
        
    }
    public function atualizar(){
        $data['idmeioPag'] = $this->input->post('idmeioPag');
        $data['nomemeioPag'] = mb_convert_case ($this->input->post('nomemeioPag'), MB_CASE_UPPER);
        
         $result = $this->meioPag->atualizar($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucessoA', 'msg');
             redirect('meioPag');
        } else{
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('meioPag');
        }
    }
  }

