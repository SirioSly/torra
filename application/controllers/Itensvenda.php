<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Itensvenda extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Pedido_model', 'pedido');
        $this->load->model('Itensvenda_model', 'itensvenda');
        $this->load->model('Estoque_model', 'estoque');
        //contatos é um alias para o Contatos_model 
    }
    public function index($idpedido) {
        $dados['itensvenda'] = $this->itensvenda->editar($idpedido);
        $dados['pedidoSelecionado'] = $idpedido;
        $dados['estoque'] = $this->estoque->listar();
        $this->load->view('template/header');
        $this->load->view('itensvenda', $dados);
        $this->load->view('template/footer');
    }
    public function itensvenda_editar($idpedido) {
        $dados['itensvenda'] = $this->itensvenda->editar($idpedido);
        $dados['pedidoSelecionado'] = $this->pedido->selecionarPedido($idpedido);
        $dados['estoque'] = $this->estoque->listar();
        $this->load->view('template/header');
        $this->load->view('itensvenda', $dados);
        $this->load->view('template/footer');
    }
    public function inserir() {
        $dados['iditensvenda'] = NULL;
        $dados['idpedido'] = $this->input->post('idpedido');
        $dados['idestoque'] = $this->input->post('idestoque');
        $dados['qntProduto'] = $this->input->post('qntProduto');
        $this->itensvenda->inserir($dados);
        
//        $idvenda = $this->input->post('iditensvenda');
//        $idquantidade = $this->input->post('idqntProduto');
//        
//        $dados ['iditensvenda'] = $idvenda;
//        $dados ['idqntProduto'] = $idquantidade;
        redirect('pedido');
    }
    function editar($id){
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['itensvendaEditar'] = $this->itensvenda->editar($id);
        $this->load->view('itensvendaEditar', $data);
        $this->load->view('template/footer');
        
    }
    public function atualizar(){
        $data['iditensvenda'] = $this->input->post('iditensvenda');
        $data['qntProduto'] = $this->input->post('qntProduto');
        $id=$this->input->post('id');
        $cli=$this->input->post('cli');
        
         $result = $this->itensvenda->atualizar($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucessoA', 'msg');
             redirect('finalizar?ped='.$id.'&cli='.$cli);
        } else{
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('finalizar?ped='.$id.'cli='.$cli);
        }
    }
    
}