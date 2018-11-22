<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Pedido_model','pedido'); 
//        $this->load->model('Estoque_model','estoque'); 
        $this->load->model('Cliente_model','cliente'); 
        $this->load->model('Meiopag_model','meiopag'); 
        $this->load->model('Usuario_model','usuario'); 
      
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['pedido'] = $this->pedido->listar();
//        $dados['estoque'] = $this->estoque->listar();
        $dados['cliente'] = $this->cliente->listar();
        $dados['meiopag'] = $this->meiopag->listar();
        $dados['usuario'] = $this->usuario->listar();
        $this->load->view('pedido', $dados);
        $this->load->view('template/footer');
    }
    
    public function inserir(){
        $dados['idcliente'] = $this->input->post('idcliente');
        $dados['idmeioPag'] = $this->input->post('idmeioPag');
        $dados['data'] = $this->input->post('data');
        $dados['idusuario'] = 4; //pegar da seção
       
        
        $result = $this->pedido->inserir($dados);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('pedido/?ped='.$this->input->post('idpedido'));
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('pedido');
        }
    }

        public function excluir($id){
         $result = $this->pedido->deletar($id);
        if ($result == TRUE){
            $this->session->set_flashdata('excluirS', 'msg');
             redirect('pedido');
        } else{
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('pedido');
        }
        
    }
    
    function pedidoNovo(){
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['pedidoNovo'] = $this->pedido->listar();
        
        $dados['cliente'] = $this->cliente->listar();
        
        $dados['meiopag'] = $this->meiopag->listar();
        $dados['usuario'] = $this->usuario->listar();
        $this->load->view('pedidoNovo', $dados);
        $this->load->view('template/footer');
        
    }
   
      
    function editar($id){
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['itensvenda'] = $this->itensvenda->editar($id);
        $dados['pedido'] = $this->pedido->listar();
        $dados['estoque'] = $this->estoque->listar();
        $this->load->view('itensEditar', $dados);
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