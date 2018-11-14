<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Itensvenda extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('Itensvenda_model','itensvenda'); 
        $this->load->model('Pedido_model','pedido'); 
        $this->load->model('Estoque_model','estoque'); 
      
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['itensvenda'] = $this->itensvenda->listar();
        $dados['pedido'] = $this->pedido->listar();
        $dados['estoque'] = $this->estoque->listar();
        $this->load->view('itensvenda', $dados);
        $this->load->view('template/footer');
    }
    
    public function inserir(){
        $dados['idpedido'] = $this->input->post('idpedido');
        $dados['idestoque'] = $this->input->post('idestoque');
        $dados['qntProduto'] = $this->input->post('qntProduto');
        $dados['status'] = 'andamento';
        
        $result = $this->itensvenda->inserir($dados);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('itensvenda/?ped='.$this->input->post('idpedido'));
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('itensvenda');
        }
    }

        public function excluir($id){
         $result = $this->itensvenda->deletar($id);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('itensvenda');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('itensvenda');
        }
        
    }
    
    function editar($id){
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['itensEditar'] = $this->itensvenda->editar($id);
        $dados['pedido'] = $this->pedido->listar();
        $dados['estoque'] = $this->estoque->listar();
        $this->load->view('itensEditar', $data);
        $this->load->view('template/footer');
        
    }
    public function atualizar(){
        $data['iditensvenda'] = $this->input->post('iditensvenda');
        $data['qntProduto'] = $this->input->post('qntProduto');
        $data['idestoque'] = $this->input->post('idestoque');
        
         $result = $this->cidade->atualizar($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucessoA', 'msg');
             redirect('');
        } else{
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('');
        }
    }
  }

