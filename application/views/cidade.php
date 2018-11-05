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
            
        
            
            <div class="form-group">
        <label for="idestado">Estado</label>
        <select class="form-control" aria-label="ngSelected demo" required="requered"
                id="idestado" name="idestado" type="name" required/>
        <option>Selecionar Estado... </option>
        <?php foreach ($estado as $estado): ?>
            <option value="<?php echo $estado->idestado; ?>"><?php echo $estado->nomeEstado; ?></option>
        <?php endforeach; ?>        
    </select>
    </div>
            
     
        <input class="btn btn-success" type="submit" value="Salvar"/>
        <input class="btn btn-secondary" type="reset" value="Limpar"/>
        <?php form_close(); ?>
        <p></p>

        
        

        <table id="contatos" class="table table-striped">
        <caption>cidades</caption>


        <thead>
            <tr>
                <th class="table-dark">Nome cidade</th>
                <th class="table-dark">UF do estado</th>
                <th class="table-dark">Função</th>
                
            </tr>

        </thead>
        <tbody>
            <?php if ($cidade == FALSE): ?>
                <tr><td>Nenhum cidade encontrado!</td></tr>
            <?php else: ?>
                <?php foreach ($cidade as $row): ?>
                    <tr>
                        <td><?php echo $row->nomeCidade; ?></td>
                        <td><?php echo $row->nomeEstado; ?></td>
                        
                        <td>
                            <a class="btn btn-success" href="<?php
                            echo base_url() .
                            'cidade/editar/' . $row->idcidade;
                            ?>">Editar</a>
                            |
                            <a class="btn btn-danger" href="<?php
                               echo base_url() . ''
                               . 'cidade/excluir/' . $row->idcidade;
                               ?>">Excluir</a>
                        </td>
                    </tr>
        <?php endforeach; ?>
    <?php endif; ?>
        </tbody>
    </table>
