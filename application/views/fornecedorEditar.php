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
            
            
            <label for="nomeForce">Nome Usuário<h11>*</h11></label>
            <input name="nome" type="text" class="col-sm-4 form-control"  id="nomeForce" required value="<?php echo $fornecedorEditar[0]->nomeForce; ?>"> 
        </div>

        
        <div class="form-group">
            <label for="contatoForce">Endereço<h11>*</h11></label>
            <input class="col-sm-4 form-control" id="contatoForce" name="contatoForce" type="text" required value="<?php echo $fornecedorEditar[0]->contatoForce; ?>">
        </div>
        
        <div class="form-group">
            <label for="numero">Telefone<h11>*</h11></label>
            <input class="col-sm-4 form-control" id="numero" name="numero" type="text" required  placeholder="XX XXXXX-XXXX" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)" value="<?php echo $fornecedorEditar[0]->numero; ?>">
        </div>
        
        <div class="form-group">
            <label for="email">E-mail<h11>*</h11></label>
            <input class="col-sm-4 form-control" id="email" name="email" type="text" required  placeholder="email@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $fornecedorEditar[0]->email; ?>">
        </div>
        
         <input class="btn btn-success" type="submit" value="Salvar"/>
         <a class="btn btn-light" href="<?php echo base_url() .  'fornecedor'; ?>">Voltar</a>
        <?php form_close(); ?>
        
       
        </div>
