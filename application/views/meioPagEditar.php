
<div class="container">

            <?php echo form_open('meioPag/atualizar'); ?>
        <br>
            <div class="form-group">
                <label for="nomemeioPag">Forma de Pagamento<h11>*</h11></label>
                <input type="hidden" name="idmeioPag" id="idmeioPag" value="<?php echo $meioPagEditar[0]->idmeioPag; ?>">
                <input name="nomemeioPag" type="text" class="col-sm-3 form-control"  id="nomemeioPag" value="<?php echo $meioPagEditar[0]->nomemeioPag; ?>"/>
            </div>
                <input class="btn btn-success" type="submit" value="Salvar"/>
                <input class="btn btn-secondary" type="reset" value="Limpar"/>
                <?php form_close(); ?>
                <p></p>
            </div>
        </div>
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    </div>
</div>
