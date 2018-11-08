
<div class="container">

    <div class="row">

        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
            <?php echo form_open('meioPag/inserir'); ?>
            <div class="form-group">
                <label for="nomemeioPag">Forma de Pagamento</label>
                <input name="nomemeioPag" type="text" class="col-sm-3 col-form-label form-control"  id="nomemeioPag">
                <br>
                <input class="btn btn-success" type="submit" value="Salvar"/>
                <input class="btn btn-secondary" type="reset" value="Limpar"/>
                <?php form_close(); ?>
                <p></p>

                <table id="meiopag" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="table-dark">Forma de Pagamento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($meioPag == FALSE): ?>
                            <tr><td>Nenhum cidade encontrado!</td></tr>
                        <?php else: ?>
                            <?php foreach ($meioPag as $row): ?>
                                <tr>
                                    <td><?php echo $row->nomemeioPag; ?></td>
                                    <td>
                                        <a class="btn btn-success" href="<?php
                                        echo base_url() .
                                        'meioPag/editar/' . $row->idmeioPag;
                                        ?>">Editar</a>
                                        |
                                        <a class="btn btn-danger" href="<?php
                                        echo base_url() . ''
                                        . 'meioPag/excluir/' . $row->idmeioPag;
                                        ?>">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    </div>
</div>
