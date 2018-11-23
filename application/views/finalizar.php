<div class="container">
    <?php
    $id = $_GET['ped'];
    $cli = $_GET['cli'];
    ?>
    <table id="categoria" class="table table-striped">
        <thead>
            <?php $n = 1; ?>
            <?php $valor = 0; ?>
            <?php $vlrqnt = 0; ?>
            <tr>
                <th class="table-dark">#</th>
                <th class="table-dark">Item</th>
                <th class="table-dark">Quantidade</th>
                <th class="table-dark">Valor</th>
                <th class="table-dark">Função</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($finalizar == FALSE): ?>
                <tr><td>Nenhum cidade encontrado!</td></tr>
            <?php else: ?>
                <?php foreach ($finalizar as $row): ?>
                    <tr>
                        <td><?php echo $n ?></td>
                        <td><?php echo $row->nomeEstoque; ?></td>
                        <td><?php echo $row->qntProduto; ?></td>
                        <td><?php echo 'R$ '.$vlrqnt=$row->valorVenda*$row->qntProduto; ?></td>
                        <td><a class="btn btn-success" href="<?php
                            echo base_url() .
                            'itensvenda/editar/' . $row->iditensvenda.'?item='.$row->nomeEstoque.'&ped='.$id.'&cli='.$cli;
                            ?>">Editar</a></td>
                    </tr>
                    <?php $valor = $valor + $vlrqnt ?>
                    <?php $n++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <br>
    <br>
    <table id="ped" class="table table-striped">
        <thead>
            <tr>
                <th class="table-dark">Vendedor</th>
                <th class="table-dark">Cliente</th>
                <th class="table-dark">Pedido</th>
                <th class="table-dark">Total</th>
                <th class="table-dark">Função</th>
            </tr>
        </thead>
        <tr>
            <td><label for="nomeCategoria"><?php echo $this->session->userdata('logado')->nomeUsuario; ?></label> </td>
            <td><label for="nomeCategoria"><?php echo $cli; ?></label></td>
            <td><label for="nomeCategoria"><?php echo $id; ?></label></td>
            <td><label for="nomeCategoria">R$ <?php echo $valor; ?></label></td>
            <td>
                <a class="btn btn-primary" href="<?php echo base_url() . 'itensvenda/itensvenda_editar/' . $id; ?>">Add itens</a>
                <a class="btn btn-success" href="<?php echo base_url() . 'finalizar/atualizar?ped='.$id; ?>">Finalizar</a>
            </td>
        </tr>
    </table>
</div>
</div>