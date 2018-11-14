<div class="container">
    <br>
    <a class="btn btn-primary" href="<?php echo base_url() . 'itensvenda/itensvendaNovo'; ?>">Nova venda</a>
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
                    <th>Numero da venda</th>
                    <th>Cliente</th>
                    <th>Total da venda</th>
                    </tr>
            </thead>
            <tbody>
                <?php if ($itensvenda == FALSE): ?>
                    <tr><td>Nenhum venda encontrada!</td></tr>
                <?php else: ?>
                    <?php foreach ($itensvenda as $row): ?>

                        <tr>
                            <td><?php echo $row->nome; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->fone; ?></td>
                            <td><?php echo $row->endereco; ?></td>
                            <td>
                                
                                <a class="btn btn-danger" href="<?php
                                echo base_url() . ''
                                . 'cliente/excluir/' . $row->idcliente;
                                ?>">Excluir</a>
                                                                
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