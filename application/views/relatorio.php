<div class="container">
    <?php echo form_open('categoria/inserir'); ?>
    <div class="form-group">
        <label for="nomeCategoria">Nome da Categoria</label>
        <input name="nomeCategoria" type="text" class="col-sm-3 form-control"  id="nomeCategoria" required/>    
        <br>

        <input class="btn btn-primary" type="submit" value="Salvar"/>
        <input class="btn btn-danger" type="reset" value="Limpar"/>
        <a class="btn btn-light" href="<?php echo base_url() . 'home'; ?>">Voltar</a>
        <br>
        <br>
        <?php form_close(); ?>

        <table id="categoria" class="table table-striped">
            <thead>
                <tr>
                    <th class="table-dark">Nome Categoria</th>
                    <th class="table-dark">Função</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php if ($categoria == FALSE): ?>
                    <tr><td>Nenhum cidade encontrado!</td></tr>
                <?php else: ?>
                    <?php foreach ($categoria as $row): ?>
                        <tr>
                            
                            <td><?php echo $row->nomeCategoria; ?></td>
                            <td>
                                <a class="btn btn-success" href="<?php
                                echo base_url() .
                                'categoria/editar/' . $row->idCategoria;
                                ?>">Editar</a>
                                |
                                <a class="btn btn-danger" href="<?php
                                   echo base_url() . ''
                                   . 'categoria/excluir/' . $row->idCategoria;
                                   ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>