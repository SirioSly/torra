<div class="container">
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Editar estado</h2>
       
        <?php echo form_open('estado/atualizar'); ?>
            <div class="form-group">
            <input type="hidden" name="idestado" id="idestado" value="<?php echo $estadoEditar[0]->idestado; ?>">
            <label for="nomeEstado">Nome Estado</label>
            <input name="nomeEstado" type="text" id="nomeEstado" class="col-sm-3 col-form-label form-control" value="<?php echo $estadoEditar[0]->nomeEstado; ?>" required/>
            </div>
            <p></p>
            <label>UF</label>
            <input name="uf" type="text"class="col-sm-3 col-form-label form-control" value="<?php echo $estadoEditar[0]->uf; ?>" required/>
            <p></p>
            
            <input class="btn btn-success" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() .  'estado'; ?>">Cancelar</a>
       
        </div>

