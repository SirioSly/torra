<div class="container">
<?php echo form_open('categoria/atualizar'); ?>
            <div class="form-group">
            <input type="hidden" name="idCategoria" id="idCategoria" value="<?php echo $categoriaEditar[0]->idCategoria; ?>">
            <label for="nomeCategoria">Nome da Categoria</label>
            <input name="nomeCategoria" type="text" id="nomeCategoria" class="col-sm-3 form-control" value="<?php echo $categoriaEditar[0]->nomeCategoria; ?>" required/>
            </div>
            <p></p>           
            <input class="btn btn-success" type="submit" value="Salvar"/>
            <a class="btn btn-light" href="<?php echo base_url() .  'categoria'; ?>">Voltar</a>
        <?php form_close(); ?>
        <p></p>
       
        </div>

