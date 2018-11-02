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
        <h2>Cadastro de cidade</h2>
        <?php echo form_open('cidade/inserir'); ?>
        <div class="form-group">
            <label for="nomecidade">Nome da cidade</label>
            <input name="nomecidade" type="text" class="col-sm-3 col-form-label form-control"  id="nomecidade">
            
        
            
            <option>Selecionar estado...</option>
            <?php foreach ($estado as $estado): ?>
            <option value="<?php echo $estado->idestado; ?>"><?php echo $estado->nomeEstado; ?></option>
            <?php endforeach; ?>
            
     
        <input class="btn btn-success" type="submit" value="Salvar"/>
        <input class="btn btn-secondary" type="reset" value="Limpar"/>
        <?php form_close(); ?>
        <p></p>

        
        

        <table id="contatos" class="table table-striped">
        <caption>Contatos</caption>


        <thead>
            <tr>
                <th class="table-dark">Nome</th>
                <th class="table-dark">e-mail</th>
                <th class="table-dark">Função</th>
                <th class="table-dark">Função</th>
            </tr>

        </thead>
        <tbody>
            <?php if ($contatos == FALSE): ?>
                <tr><td>Nenhum contato encontrado!</td></tr>
            <?php else: ?>
                <?php foreach ($contatos as $row): ?>
                    <tr>
                        <td><?php echo $row->nome; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->nomeFuncao; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php
                            echo base_url() .
                            'cidade/editar/' . $row->idCidade;
                            ?>">Editar</a>
                            |
                            <a class="btn btn-danger" href="<?php
                               echo base_url() . ''
                               . 'cidade/excluir/' . $row->idCidade;
                               ?>">Excluir</a>
                        </td>
                    </tr>
        <?php endforeach; ?>
    <?php endif; ?>
        </tbody>
    </table>
