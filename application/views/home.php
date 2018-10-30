<!DOCTYPE html>

<div class="container">
    <?php
    // put your code here
//    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>
    <h2>Home</h2>
    <p></p>
    <a class="btn btn-primary" href="<?php echo base_url() . 'contato'; ?>">Contato</a>
    <p></p>
    <?php if($this->session->userdata('logado')->perfilAcesso == 'ADM'){?>
          
    <a class="btn btn-primary" href="<?php echo base_url() . 'funcao'; ?>">Função</a>
    <p></p>
    <a class="btn btn-primary" href="<?php echo base_url() . 'usuario'; ?>">Usuário</a>
    <?php }?>
    <p></p>
    

</div>


