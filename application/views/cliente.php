     
       <a class="btn btn-primary" href="<?php echo base_url() . 'clienteNovo'; ?>">Adicionar Cliente</a>

<a class="btn btn-primary" id="btn-lista" href="#">Listar Cliente</a>
        <p></p>
        <?php form_close(); ?>
        <p></p>



        <div class="hide" id="div-lista">
        <table id="usuario" class="table table-striped">
    


        <thead>
            <tr>
                <th class="table-dark">Usuário</th>
                <th class="table-dark">User</th>
                <th class="table-dark">Perfil Acesso</th>
                <th class="table-dark">Funções</th>
                
            </tr>

        </thead>
        <tbody>
            <?php if ($cliente == FALSE): ?>
                <tr><td>Nenhum cliente encontrado!</td></tr>
            <?php else: ?>
                <?php foreach ($cliente as $row): ?>
                    <tr>
                        <td><?php echo $row->nomeUsuario; ?></td>
                        <td><?php echo $row->user; ?></td>
                        <td><?php echo $row->perfilAcesso; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php
                            echo base_url() .
                            'cliente/editar/' . $row->idcliente;
                            ?>">Editar</a>
                            |
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
    <a class="btn btn-primary" href="<?php echo base_url() . 'home'; ?>">Voltar</a>
    </div>
        </div>
    
    <script type="text/javascript">
        $("#btn-lista").click(function (){
            $("#div-lista").toggleClass("hide");
            
        });
        
//        $(document).ready(function () {
//        $('#funcao').DataTable({
//            language: {
//                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
//            },
//             iDisplayLength: 10,   
//             dom: 'Bfrtip',
//    buttons: [
//        'copy',
//        'excel',
//        'print',
//        'pdf'
//    ]
//        });
//    });
</script>
