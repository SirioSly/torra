<div class="container">
        <?php
        // put your code here
//        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
       
        <?php echo form_open('cidade/atualizar'); ?>
            <div class="form-group">
            <input type="hidden" name="idcidade" id="idcidade" value="<?php echo $cidadeEditar[0]->idcidade; ?>">
            <label for="nomeCidade">Nome da Cidade:</label>
            <input name="nomeCidade" type="text" id="nomeCidade" class="col-sm-3 form-control" required value="<?php echo $cidadeEditar[0]->nomeCidade; ?>" required/>
            </div>
            <p></p>
            
            
             <div class="form-group">
                <label for="idestado">Estado:</label>
                <select class="col-sm-3 form-control" aria-label="ngSelected demo" required="requered"
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
            <a class="btn btn-light" href="<?php echo base_url() .  'cidade'; ?>">Voltar</a>
        <?php form_close(); ?>
        <p></p>
       
        </div>

