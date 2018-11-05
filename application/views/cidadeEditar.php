<div class="container">
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Editar cidade</h2>
       
        <?php echo form_open('cidade/atualizar'); ?>
            <div class="form-group">
            <input type="hidden" name="idcidade" id="idcidade" value="<?php echo $cidadeEditar[0]->idcidade; ?>">
            <label for="nomeCidade">Nome Cidade</label>
            <input name="nomeCidade" type="text" id="nomeCidade" class="col-sm-3 col-form-label form-control" value="<?php echo $cidadeEditar[0]->nomeCidade; ?>" required/>
            </div>
            <p></p>
            
            
             <div class="form-group">
                <label for="idestado">Estado</label>
                <select class="form-control" aria-label="ngSelected demo" required="requered"
                        id="idestado" name="idestado" type="name" required/>
                <option>Selecionar estado</option>
                <?php foreach ($estado as $estado): ?>
                    <option value="<?php echo $estado->idestado; ?>"
                    <?php if ($estado->idestado === $cidadeEditar[0]->idestado) echo "selected" ?>
                            ><?php echo $estado->nomeEstado; ?></option>
                        <?php endforeach; ?>        
                </select>
            </div>
            
            
            <input class="btn btn-success" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() .  'cidade'; ?>">Cancelar</a>
       
        </div>

