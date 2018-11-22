
<div class="container">

    <div class="row">
            <?php echo form_open('meioPag/inserir'); ?>
        <br>
            <div class="form-group">
                <label for="nomemeioPag">Forma de Pagamento<h11>*</h11></label>
                <input name="nomemeioPag" type="text" class="col-sm-5 col-form-label form-control"  id="nomemeioPag">
                <br>
                <input class="btn btn-success" type="submit" value="Salvar"/>
                <input class="btn btn-secondary" type="reset" value="Limpar"/>
                <?php form_close(); ?>
                <p></p>
                <br>

                <table id="meiopag" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="table-light">Forma de Pagamento</th>
                            <th class="table-light">Funções</th>
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
                                        |
                                <?php
                                if ($row->status == 1) {
                                    ?>
                                    <a class="btn btn-danger btn-sm" role="button" href="<?php echo base_url() . 'meioPag/desativar/' . $row->idmeioPag; ?>">
                                        <div class="mdl-tooltip" data-mdl-for="<?php echo $row->idmeioPag . "desativar"; ?>">
                                            Desativar?
                                        </div>
                                    </a> 
                                    <?php
                                } else {
                                    ?>
                                    <a class="btn btn-success btn-sm" role="button" href="<?php echo base_url() . 'meioPag/ativar/' . $row->idmeioPag; ?>">
                                        <div class="mdl-tooltip" data-mdl-for="<?php echo $row->idmeioPag . "ativar"; ?>">
                                            Ativar
                                        </div>
                                    </a> 
                                    <?php
                                }
                                ?>
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
