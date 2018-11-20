<!DOCTYPE html>

<div class="container">
    <div class="row">
        <br>
    </div>
    <?php
    echo "<br>";
    echo "<p>";
    ?>
    <?php echo form_open('fornecedor/inserir'); ?>
    <div class="form-group">
        <label for="nomeForce">Nome<h11>*</h11></label>
        <input name="nomeForce" type="text" class="col-sm-4 form-control" id="nomeForce" required/> 
    </div>

    <div class="form-group">
        <label for="contatoForce">Endereço<h11>*</h11></label>
        <input class="col-sm-4 form-control" id="contatoForce" name="contatoForce" type="text" required/>
    </div>

    <div class="form-group">
        <label for="numero">Telefone<h11>*</h11></label>
        <input class="col-sm-4 form-control" id="numero" name="numero" type="text" required maxlength="15" minlength="12"/>
    </div>

    <div class="form-group">
        <label for="email">E-mail<h11>*</h11></label>
        <input class="col-sm-4 form-control" id="email" name="email" type="text" required placeholder="email@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Salvar"/>
<!--        <input class="btn btn-dark" type="reset" value="Limpar"/>-->
        <!--        <a class="btn btn-primary" id="btn-lista" href="#">Listar Usuário</a>-->
        <a class="btn btn-light" id="btn-lista" href="#">Listar Fornecedores</a> 
        <a class="btn btn-light" href="<?php echo base_url() . 'home'; ?>">Voltar</a>

    </div>
    <p></p>
    <?php form_close(); ?>
    <p></p>



    <div class="hide" id="div-lista">
        <table id="fornecedor" class="table table-striped">



            <thead>
                <tr>
                    <th class="table-dark">Fornecedores</th>
                    <th class="table-dark">Endereço</th>
                    <th class="table-dark">Fone</th>
                    <th class="table-dark">Email</th>
                    <th class="table-dark">Função</th>

                </tr>

            </thead>
            <tbody>
                <?php if ($fornecedor == FALSE): ?>
                    <tr><td>Nenhum fornecedor encontrado!</td></tr>
                <?php else: ?>
                    <?php foreach ($fornecedor as $row): ?>
                        <tr>
                            <td><?php echo $row->nomeForce; ?></td>
                            <td><?php echo $row->contatoForce; ?></td>
                            <td><?php echo $row->numero; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td>
                                <a class="btn btn-success" href="<?php
                                echo base_url() .
                                'fornecedor/editar/' . $row->idforce;
                                ?>">Editar</a>
                                |
                                <a class="btn btn-danger" href="<?php
                                   echo base_url() . ''
                                   . 'fornecedor/excluir/' . $row->idforce;
                                   ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <p></p>
<!--    <a class="btn btn-primary" href="<?php echo base_url() . 'home'; ?>">Voltar</a>-->
</div>
</div>

<script type="text/javascript">
     jQuery(function ($) {
//            $("#cpf").mask("999.999.999-99");
//            $("#cnpj").mask("99.999.999/9999-99");
//            $("#cep").mask("99999-999");
//            $("#tel").mask("(99) 9999-9999");
              $("#numero").mask("(99) 99999-9999");
    });
    
    $("#btn-lista").click(function () {
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
