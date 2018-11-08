 <!DOCTYPE html>

    <div class="container">

        <div class="row"></div>

        <?php
        // put your code here
//        echo $acronico;
        echo "<br>";
    //        echo $completo;
        echo "<p>";
        ?>
        <?php echo form_open('cidade/inserir'); ?>
        <div class="form-group">
            <label for="nomecidade">Nome da Cidade:</label>
            <input name="nomecidade" type="text" class="col-sm-3 form-control"  id="nomecidade" required/>    
            <br>
            <div class="form-group">
        <label for="idestado">Estado:</label>
        <select class="col-sm-3 form-control" aria-label="ngSelected demo" required="requered"
                id="idestado" name="idestado" type="name" required/>
        <option>Selecionar Estado... </option>
        <?php foreach ($estado as $estado): ?>
            <option value="<?php echo $estado->idestado; ?>"><?php echo $estado->nomeEstado; ?></option>
        <?php endforeach; ?>        
    </select>
    </div>
            
     
        <input class="btn btn-primary" type="submit" value="Salvar"/>
        <input class="btn btn-danger" type="reset" value="Limpar"/>
        <a class="btn btn-light" href="<?php echo base_url() . 'home'; ?>">Voltar</a>
        <br>
        <br>
        <?php form_close(); ?>
  

        
        

        <table id="contatos" class="table table-striped">


        <thead>
            <tr>
                <th class="table-dark">Nome da Cidade</th>
                <th class="table-dark">UF do Estado</th>
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
