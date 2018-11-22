<!DOCTYPE html>

<div class="container">
    <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    <div class="col-xs-10 col-sm-10 col-lg-6">


        <?php echo form_open('estado/inserir'); ?>
        <br>
        <div class="form-group">
            <label for="nomeEstado">Nome do Estado<h11>*</h11></label>
            <input name="nomeEstado" type="text" class="col-sm-5 col-form-label form-control"  id="nomeEstado" required/>
        </div>
        <div class="form-group">
            <label for="uf">UF<h11>*</h11></label>
            <input name="uf" type="text" class="col-sm-2 col-form-label form-control"  id="uf" required/>
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Salvar"/>
        <input class="btn btn-danger" type="reset" value="Limpar"/>
        <a class="btn btn-light" href="<?php echo base_url() . 'home'; ?>">Voltar</a>

        <?php form_close(); ?>
        <p></p>


        <br>

        <table id="contatos" class="table table-striped">
<!--        <caption>Estados</caption>-->


            <thead>
                <tr>
                    <th class="table-light">Estado</th>
                    <th class="table-light">UF</th>
                    <th class="table-light">Função</th>

                </tr>

            </thead>
            <tbody>
                <?php if ($estado == FALSE): ?>
                    <tr><td>Nenhum estado encontrado!</td></tr>
                <?php else: ?>
                    <?php foreach ($estado as $row): ?>
                        <tr>
                            <td><?php echo $row->nomeEstado; ?></td>
                            <td><?php echo $row->uf; ?></td>
                            <td>
                                <a class="btn btn-success" href="<?php
                                echo base_url() .
                                'estado/editar/' . $row->idestado;
                                ?>">Editar</a>
                                |
                                <a class="btn btn-danger" href="<?php
                                   echo base_url() . ''
                                   . 'estado/excluir/' . $row->idestado;
                                   ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
