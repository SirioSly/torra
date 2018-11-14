<div class="container">
    <div id="div-lista">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Categoria</th>
                    <th>Disponivel</th>
                    <th>Valor de Venda</th>
                    <th>Quantidade</th>
                    <th>Adicionar</th>


                </tr>
            </thead>
            <tbody>
                <?php if ($estoque == FALSE): ?>
                    <tr><td>Nenhum produto encontrado!</td></tr>
                <?php else: ?>

                    <?php $ped = $_GET['ped']; ?>

                    <?php foreach ($estoque as $row): ?>
                        <?php echo form_open('itensvenda/inserir'); ?>
                    <input type="hidden" name="idpedido" id="idpedido" value="<?php echo $ped; ?>">
                    <input type="hidden" name="idestoque" id="idestoque" value="<?php echo $row->idestoque; ?>">
                    <tr>
                        <td><?php echo $row->nomeEstoque; ?></td>
                        <td><?php echo $row->nomeCategoria; ?></td>
                        <td><?php echo $row->qntEstoque; ?></td>
                        <td><?php echo $row->valorVenda; ?></td>
                        <td><input name="qntProduto" type="text" class="col-sm-3 form-control"  id="qntProduto" > </td>
                        <td><input class="btn btn-primary" type="submit" value="ADD"/></td>
                    </tr>
                    <?php echo form_close(); ?>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        <a class="btn btn-success" href="<?php
           echo base_url() .
           'finish/?ped=' . $ped;
           ?>">Finalizar Compra</a>                     
    </div>
</div>

