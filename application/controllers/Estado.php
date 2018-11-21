<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estado extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Estado_model', 'estado');
         if (!$this->session->userdata ('estou_logado')) {
            redirect ('Login');
        } elseif ($this->session->userdata('logado')->perfilAcesso=="USER") {
            redirect('home');
        }

        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "E";
        $dados['completo'] = "Estado";
        $dados['estado'] = $this->estado->listar();
        $this->load->view('estado', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $dados['nomeEstado'] = $this->input->post('nomeEstado');
        $dados['uf'] = $this->input->post('uf');
        $result = $this->estado->inserir($dados);
        if ($result == TRUE) {
            $this->session->set_flashdata('sucesso', 'msg');
            redirect('estado');
        } else {
            $this->session->set_flashdata('falha', 'msg');
            redirect('estado');
        }
    }

    public function excluir($id) {
        $result = $this->estado->deletar($id);
        if ($result == TRUE) {
            $this->session->set_flashdata('excluirS', 'msg');
            redirect('estado');
        } else {
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('estado');
        }
    }

    function editar($id) {
        $this->load->view('template/header');
        $data['acronico'] = "E";
        $data['completo'] = "estado";
        $data['estadoEditar'] = $this->estado->editar($id);
        $this->load->view('estadoEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $data['idestado'] = $this->input->post('idestado');
        $data['nomeEstado'] = mb_convert_case($this->input->post('nomeEstado'), MB_CASE_UPPER);
        $data['uf'] = mb_convert_case($this->input->post('uf'), MB_CASE_UPPER);
        $result = $this->estado->atualizar($data);
        if ($result == TRUE) {
            $this->session->set_flashdata('sucessoA', 'msg');
            redirect('estado');
        } else {
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('estado');
        }
    }

}
