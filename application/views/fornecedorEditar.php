<div class="container">
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Editar cliente</h2>
       
        <?php echo form_open('fornecedor/atualizar'); ?>
        
            <div class="form-group">
                
            <input type="hidden" name="idforce" id="idcliente" value="<?php echo $fornecedorEditar[0]->idforce; ?>">
            
            
            <label for="nomeForce">Nome Usuário</label>
            <input name="nome" type="text" class="col-sm-6 form-control"  id="nomeForce" value="<?php echo $fornecedorEditar[0]->nomeForce; ?>"> 
        </div>

        
        <div class="form-group">
            <label for="contatoForce">Endereço</label>
            <input class="col-sm-6 form-control" id="contatoForce" name="contatoForce" type="text" value="<?php echo $fornecedorEditar[0]->contatoForce; ?>">
        </div>
        
        <div class="form-group">
            <label for="numero">Fone</label>
            <input class="col-sm-6 form-control" id="numero" name="numero" type="text" value="<?php echo $fornecedorEditar[0]->numero; ?>">
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input class="col-sm-6 form-control" id="email" name="email" type="text" value="<?php echo $fornecedorEditar[0]->email; ?>">
        </div>
        
         <input class="btn btn-success" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() .  'fornecedor'; ?>">Cancelar</a>
       
        </div>
