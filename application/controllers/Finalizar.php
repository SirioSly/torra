<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Finalizar extends CI_Controller {
    function __construct() {
        parent::__construct();
        
        $this->load->model('Finalizar_model','finalizar');  
      
        //contatos é um alias para o Contatos_model 
    }
    public function index() {
        $this->load->view('template/header');
        $ped=$this->input->get('ped');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['finalizar'] = $this->finalizar->listar($ped);
        $this->load->view('finalizar', $dados);
        $this->load->view('template/footer');
    }
    public function atualizar(){
        $data['idpedido'] = $this->input->get('ped');
        $data['statusPed'] = 'finalizado';
        
         $result = $this->finalizar->atualizar($data);
        if ($result == TRUE){
            $this->session->set_flashdata('sucessoA', 'msg');
             redirect('pedido');
        } else{
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('pedido');
        }
    }
    function editar($id){
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['itemEditar'] = $this->finalizar->editar($id);
        $this->load->view('itemEditar', $data);
        $this->load->view('template/footer');
        
    }
  }