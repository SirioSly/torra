<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteNovo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ClienteNovo_model', 'cliente');
        $this->load->model('Estado_model', 'estado');
        $this->load->model('Cidade_model', 'cidade');
        
    }
    

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "T";
        $dados['completo'] = "Torra";
        $dados['clienteNovo'] = $this->cliente->listar();
        $dados['estado'] = $this->estado->listar();
        $dados['cidade'] = $this->cidade->listar();
        $this->load->view('clienteNovo', $dados);
        $this->load->view('template/footer');
    }

public function inserir() {
        $data['nome'] = mb_convert_case ($this->input->post('nome'), MB_CASE_UPPER);
        $data['endereco'] = mb_convert_case ($this->input->post('endereco'), MB_CASE_UPPER);
        $data['fone'] = mb_convert_case ($this->input->post('fone'), MB_CASE_UPPER);
        $data['email'] = mb_convert_case ($this->input->post('email'), MB_CASE_UPPER);
        $data['cnpj'] = mb_convert_case ($this->input->post('cnpj'), MB_CASE_UPPER);
        $data['cpf'] = mb_convert_case ($this->input->post('cpf'), MB_CASE_UPPER);
        $data['idcidade'] = mb_convert_case ($this->input->post('idcidade'), MB_CASE_UPPER);
        $data['contato'] = mb_convert_case ($this->input->post('contato'), MB_CASE_UPPER);
        $data['ultimaCompra'] = mb_convert_case ($this->input->post('ultimaCompra'), MB_CASE_UPPER);
        $data['dataAniver'] = mb_convert_case ($this->input->post('dataAniver'), MB_CASE_UPPER);
        $data['status'] = mb_convert_case ($this->input->post('status'), MB_CASE_UPPER);
        
        
         $result = $this->cliente->inserir($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucesso', 'msg');
             redirect('cliente');
        } else{
            $this->session->set_flashdata('falha', 'msg');
            redirect('cliente');
        }
        
       
    }

    

    function editar($id) {
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['clienteEditar'] = $this->cliente->editar($id);
        $data['estado'] = $this->estado->listar();
        $data['cidade'] = $this->cidade->listar();
        $this->load->view('clienteEditar', $data);
        $this->load->view('template/footer');
        
    }

   public function atualizar(){
        $data['idcliente'] = $this->input->post('idcliente');
        $data['nome'] = mb_convert_case ($this->input->post('nome'), MB_CASE_UPPER);
        $data['endereco'] = mb_convert_case ($this->input->post('endereco'), MB_CASE_UPPER);
        $data['fone'] = mb_convert_case ($this->input->post('fone'), MB_CASE_UPPER);
        $data['email'] = mb_convert_case ($this->input->post('email'), MB_CASE_UPPER);
        $data['cnpj'] = mb_convert_case ($this->input->post('cnpj'), MB_CASE_UPPER);
        $data['cpf'] = mb_convert_case ($this->input->post('cpf'), MB_CASE_UPPER);
        $data['idcidade'] = mb_convert_case ($this->input->post('idcidade'), MB_CASE_UPPER);
        $data['contato'] = mb_convert_case ($this->input->post('contato'), MB_CASE_UPPER);
        $data['ultimaCompra'] = mb_convert_case ($this->input->post('ultimaCompra'), MB_CASE_UPPER);
        $data['dataAniver'] = mb_convert_case ($this->input->post('dataAniver'), MB_CASE_UPPER);
        $data['status'] = mb_convert_case ($this->input->post('status'), MB_CASE_UPPER);
       
        
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