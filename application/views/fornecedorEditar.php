<div class="container">
    <?php
    // put your code here
//        echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>

    <?php echo form_open('fornecedor/atualizar'); ?>

    <div class="form-group">

        <input type="hidden" name="idforce" id="idforce" value="<?php echo $fornecedorEditar[0]->idforce; ?>">


        <label for="nomeForce">Fornecedores<h11>*</h11></label>
        <input name="nomeForce" type="text" class="col-sm-4 form-control"  id="nomeForce" required value="<?php echo $fornecedorEditar[0]->nomeForce; ?>"> 
    </div>


    <div class="form-group">
        <label for="contatoForce">Endereço<h11>*</h11></label>
        <input class="col-sm-4 form-control" id="contatoForce" name="contatoForce" type="text" required value="<?php echo $fornecedorEditar[0]->contatoForce; ?>">
    </div>

    <div class="form-group">
        <label for="numero">Telefone<h11>*</h11></label>
        <input class="col-sm-4 form-control" id="numero" name="numero" type="text" required maxlength="15" minlength="12" value="<?php echo $fornecedorEditar[0]->numero;?>">
    </div>

    <div class="form-group">
        <label for="email">E-mail<h11>*</h11></label>
        <input class="col-sm-4 form-control" id="email" name="email" type="email" required  placeholder="email@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $fornecedorEditar[0]->email; ?>">
    </div>

    <input class="btn btn-success" type="submit" value="Salvar"/>
    <a class="btn btn-light" href="<?php echo base_url() . 'fornecedor'; ?>">Voltar</a>
    <?php echo form_close(); ?>


</div>

    <script type="text/javascript">
     jQuery(function ($) {
//            $("#cpf").mask("999.999.999-99");
//            $("#cnpj").mask("99.999.999/9999-99");
//            $("#cep").mask("99999-999");
//            $("#tel").mask("(99) 9999-9999");
              $("#numero").mask("(99) 99999-9999");
    });
    $("#numero").mask("(99) 99999-9999");
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
