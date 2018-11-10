<div class="container">
    <br>
       <a class="btn btn-primary" href="<?php echo base_url() . 'estoque'; ?>">Adicionar Produto</a>
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
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor de Venda</th>
                <th>Custo</th>
                <th>Fornecedor</th>
                <th>Lote</th>
                <th>Validade</th>
                <th>Função</th>
                
            </tr>
        </thead>
        <tbody>
                <?php if ($estoque == FALSE): ?>
                    <tr><td>Nenhum produto encontrado!</td></tr>
                <?php else: ?>
                    <?php foreach ($estoque as $row): ?>

                        <tr>
                            <td><?php echo $row->nomeEstoque; ?></td>
                                        <td><?php echo $row->qntEstoque; ?></td>
                                        <td><?php echo $row->valorVenda; ?></td>
                                        <td><?php echo $row->custo; ?></td>
                                        <td><?php echo $row->idforce; ?></td>
                                        <td><?php echo $row->valorVenda; ?></td>
                                        <td><?php echo $row->validade; ?></td>
                            <td>
                                <a class="btn btn-success" href="<?php
                                echo base_url() .
                                'estoque/editar/' . $row->idestoque;
                                ?>">Editar</a>
                                |
                                <a class="btn btn-danger" href="<?php
                                   echo base_url() . ''
                                   . 'estoqueNovo/excluir/' . $row->idestoque;
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
