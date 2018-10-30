<div class="container">
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Editar contato</h2>
       
        <?php echo form_open('funcao/atualizar'); ?>
            <div class="form-group">
            <input type="hidden" name="idfuncao" id="idfuncao" value="<?php echo $funcaoEditar[0]->idfuncao; ?>">
            <label for="nomeFuncao">Nome</label>
            <input name="nomeFuncao" type="text" id="nomeFuncao" class="col-sm-3 col-form-label form-control" value="<?php echo $funcaoEditar[0]->nomeFuncao; ?>" required/>
            </div>
            <p></p>
            
            <input class="btn btn-success" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() .  'funcao'; ?>">Cancelar</a>
       
        </div>
