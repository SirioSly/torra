<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Cliente_model', 'cliente');
        $this->load->model('Estado_model', 'estado');
        $this->load->model('Cidade_model', 'cidade');
        
    }
    

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "T";
        $dados['completo'] = "Torra";
        $dados['cliente'] = $this->cliente->listar();
        $dados['estado'] = $this->estado->listar();
        $dados['cidade'] = $this->cidade->listar();
        $this->load->view('cliente', $dados);
        $this->load->view('template/footer');
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
}