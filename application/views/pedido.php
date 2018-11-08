<div class="container">
    <div class="row">
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
            <?php echo form_open('pedido/inserir'); ?>
            <div class="form-group">
                <label for="idcliente">Cliente</label>

                <select class="form-control" id="idcliente" name="idcliente"/>
                <option>Selecionar o cliente... </option>
                <?php foreach ($cliente as $cliente): ?>
                    <option value="<?php echo $cliente->idcliente; ?>"><?php echo $cliente->nome; ?></option>
                <?php endforeach; ?>        
                </select>
                <br>
                <select class="form-control" id="idmeioPag" name="idmeioPag"/>
                <option>Selecionar Forma de pagamento... </option>
                <?php foreach ($meioPag as $meioPag): ?>
                    <option value="<?php echo $meioPag->idmeioPag; ?>"><?php echo $meioPag->nomemeioPag; ?></option>
                <?php endforeach; ?>        
                </select>
            </div>
            <div class="form-group">
                <table id="contatos" class="table table-striped">
                    <caption>cidades</caption>


                    <thead>
                        <tr>
                            <th class="table-dark">Numero do pedido</th>
                            <th class="table-dark">Cliente</th>
                            <th class="table-dark">vendedor</th>
                            <th class="table-dark">data</th>
                            <th class="table-dark">Forma de pagamento</th>
                            <th class="table-dark">status</th>
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
                                    <td><?php echo $row->nomeUsusario; ?></td>
                                    <td><?php echo $row->data; ?></td>
                                    <td><?php echo $row->idmeiopag; ?></td>
                                    <td><?php echo $row->status; ?></td>
                                    <td> 
                                        <a class="btn btn-danger" href="<?php
                                        echo base_url() . ''
                                        . 'pedido/excluir/' . $row->idpedido;
                                        ?>">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <input class="btn btn-success" type="submit" value="continuar"/>
           <a class="btn btn-danger" href="<?php echo base_url(). 'pedido';?>">Cancelar</a>
            <?php form_close(); ?>
        </div>
    </div>
    <div class="col-xs-10 col-sm-10 col-lg-6"></div>
</div>
</div>
