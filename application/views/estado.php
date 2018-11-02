   <!DOCTYPE html>

    <div class="container">

        <div class="row"></div>

        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
        <?php
        // put your code here
//        echo $acronico;
        echo "<br>";
    //        echo $completo;
        echo "<p>";
        ?>
        <h2>Estados</h2>
        <?php echo form_open('estado/inserir'); ?>
        <div class="form-group">
            <label for="nomeEstado">Nome Estado</label>
            <input name="nomeEstado" type="text" class="col-sm-3 col-form-label form-control"  id="nomeEstado">
            
        <input class="btn btn-success" type="submit" value="Salvar"/>
        <input class="btn btn-secondary" type="reset" value="Limpar"/>
        <?php form_close(); ?>
        <p></p>

        
        

        <table id="contatos" class="table table-striped">
        <caption>Contatos</caption>


        <thead>
            <tr>
                <th class="table-dark">Estado</th>
                
            </tr>

        </thead>
        <tbody>
            <?php if ($estado == FALSE): ?>
                <tr><td>Nenhum contato encontrado!</td></tr>
            <?php else: ?>
                <?php foreach ($estado as $row): ?>
                    <tr>
                        <td><?php echo $row->nomeEstado; ?></td>
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

 