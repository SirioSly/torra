<div class="container">
        <?php
        // put your code here
//        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
       
        <?php echo form_open('fornecedor/atualizar'); ?>
        
            <div class="form-group">
                
            <input type="hidden" name="idforce" id="idcliente" value="<?php echo $fornecedorEditar[0]->idforce; ?>">
            
            
            <label for="nomeForce">Nome Usuário:</label>
            <input name="nome" type="text" class="col-sm-4 form-control"  id="nomeForce" required value="<?php echo $fornecedorEditar[0]->nomeForce; ?>"> 
        </div>

        
        <div class="form-group">
            <label for="contatoForce">Endereço:</label>
            <input class="col-sm-4 form-control" id="contatoForce" name="contatoForce" type="text" required value="<?php echo $fornecedorEditar[0]->contatoForce; ?>">
        </div>
        
        <div class="form-group">
            <label for="numero">Fone:</label>
            <input class="col-sm-4 form-control" id="numero" name="numero" type="text" required value="<?php echo $fornecedorEditar[0]->numero; ?>">
        </div>
        
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input class="col-sm-4 form-control" id="email" name="email" type="text" required value="<?php echo $fornecedorEditar[0]->email; ?>">
        </div>
        
         <input class="btn btn-success" type="submit" value="Salvar"/>
         <a class="btn btn-light" href="<?php echo base_url() .  'fornecedor'; ?>">Voltar</a>
        <?php form_close(); ?>
        
       
        </div>
