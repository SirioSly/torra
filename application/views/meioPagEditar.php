
<div class="container">

    <div class="row">

        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
            <?php echo form_open('meioPag/atualizar'); ?>
            <div class="form-group">
                <label for="nomemeioPag">Cadastrar Forma de Pagamento</label>
                <input type="hidden" name="idmeioPag" id="idmeioPag" value="<?php echo $meioPagEditar[0]->idmeioPag; ?>">
                <input name="nomemeioPag" type="text" class="col-sm-3 col-form-label form-control"  id="nomemeioPag">
                <br>
                <input class="btn btn-success" type="submit" value="Salvar"/>
                <input class="btn btn-secondary" type="reset" value="Limpar"/>
                <?php form_close(); ?>
                <p></p>
            </div>
        </div>
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    </div>
</div>
