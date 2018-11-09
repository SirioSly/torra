<?php
class Cidade extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function listarCidadeEstado() {
        $estado_idestado = $this->input->post('estado_idestado');
        echo $this->Cidade_model->selectCidade($estado_idestado);
        
    }
}
