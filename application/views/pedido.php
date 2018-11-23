<div class="container">
    <br>
    <a class="btn btn-primary" href="<?php echo base_url() . 'pedido/pedidoNovo'; ?>">Nova venda</a>
    <br>
    <br>
    <!--<a class="btn btn-primary" id="btn-lista" href="#">Listar Cliente</a> -->
    <br>
    <p></p>
    <?php form_close(); ?>
    <p></p>
<div id="div-lista">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>N° pedido</th>
                    <th>Cliente</th>
                    <th>Fone</th>
                    <th>Endereço</th>
                    <th>Função</th>

                </tr>
            </thead>
            <tbody>
                <?php if ($pedido == FALSE): ?>
                    <tr><td>Nenhum venda encontrada!</td></tr>
                <?php else: ?>
                    <?php foreach ($pedido as $row): ?>
                                
                        <tr>
                            <td><?php echo $row->idpedido; ?></td>
                            <td><?php echo $row->nome;  ?></td>
                            <td><?php echo $row->fone; ?></td>
                            <td><?php echo $row->endereco; ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?php
                                echo base_url() .
                                'itensvenda/itensvenda_editar/' . $row->idpedido;
                                ?>">Add itens</a>
                                |
                                <?php $cli = $row->nome?>
                                <a class="btn btn-success" href="<?php
                                echo base_url() .
                                'finalizar?ped='.$row->idpedido.'&cli='.$cli;
                                ?>">Finalizar</a>
                                |
                                <a class="btn btn-danger" href="<?php
                                echo base_url() . ''
                                . 'pedido/excluir/' . $row->idpedido;
                                ?>">Cancelar</a>
                                                              
                            </td>
                        </tr>

                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <p></p>
    <a class="btn btn-light" href="<?php echo base_url() . 'home'; ?>">Voltar</a>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable({
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            },
        });
    });
//        DataTable Anterior
//       $(document).ready(function() {
//    $('#example').DataTable({
//} );
</script>