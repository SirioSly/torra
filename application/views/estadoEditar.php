<div class="container">
        <?php
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
       
        <?php echo form_open('estado/atualizar'); ?>
            <div class="form-group">
            <input type="hidden" name="idestado" id="idestado" value="<?php echo $estadoEditar[0]->idestado; ?>">
            <label for="nomeEstado">Nome do Estado<h11>*</h11></label>
            <input name="nomeEstado" type="text" id="nomeEstado" class="col-sm-5 form-control" required value="<?php echo $estadoEditar[0]->nomeEstado; ?>" required/>
            </div>
            <p></p>
            <label>UF<h11>*</h11></label>
            <input name="uf" type="text"class="col-sm-1 form-control" value="<?php echo $estadoEditar[0]->uf; ?>" required/>
            <p></p>
            
            <input class="btn btn-success" type="submit" value="Salvar"/>
                    <a class="btn btn-light" href="<?php echo base_url() .  'estado'; ?>">Voltar</a>
        <?php form_close(); ?>
        <p></p>

       
        </div>

