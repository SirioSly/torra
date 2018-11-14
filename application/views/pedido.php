<div class="container">
    <?php echo form_open('pedido/inserir'); ?>
    <div class="form-group">
        <label for="idcliente">Cliente<h11>*</h11></label>
        <select class="col-sm-3 form-control" aria-label="ngSelected demo" required="requered"
                id="idcliente" name="idcliente" type="name" required/>
        <option>Selecionar Cliente... </option>
        <?php foreach ($cliente as $cliente): ?>
            <option value="<?php echo $cliente->idcliente; ?>"><?php echo $cliente->nome; ?></option>
        <?php endforeach; ?>        
        </select>
    </div>
    <div class="form-group">
        <label for="idmeioPag">meio de pagamento<h11>*</h11></label>
        <select class="col-sm-3 form-control" aria-label="ngSelected demo" required="requered"
                id="idmeioPag" name="idmeioPag" type="name" required/>
        <option>Selecionar meio de pagamento... </option>
        <?php foreach ($meioPag as $meioPag): ?>
            <option value="<?php echo $meioPag->idmeioPag; ?>"><?php echo $meioPag->nomemeioPag; ?></option>
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
                <th class="table-dark">Pedido</th>
                <th class="table-dark">Cliente</th>
                <th class="table-dark">Data</th>
                <th class="table-dark">Status</th>
                <th class="table-dark">Continuar</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($pedido == FALSE): ?>
                <tr><td>Nenhum cidade encontrado!</td></tr>
            <?php else: ?>
                <?php foreach ($pedido as $row): ?>
                    <tr>
                        <td><?php echo $row->idpedido; ?></td>
                        <td><?php echo $row->nome; ?></td>
                        <td><?php echo $row->data; ?></td>
                        <td><?php echo $row->status; ?></td>

                        <td>
                            <a class="btn btn-success" href="<?php
                            echo base_url() .
                            'itensvenda/?ped=' . $row->idpedido;
                            ?>">Itens</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
