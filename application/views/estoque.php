<div class="container">


    <!responsivo para smartphone, tablet e pc-->

    <?php
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>
    <?php echo form_open('estoque/inserir'); ?>
    <div class="form-group">
        <label for="nomeEstoque">Nome do Produto<h11>*</h11></label>
        <input class="col-sm-5 form-control" type="text" id="nomeProduto" name="nomeEstoque"  required/>
    </div>    
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="qntEstoque">Quantidade<h11>*</h11></label>
            <input class="col-sm-9 form-control" type="text" id="qntEstoque" name="qntEstoque"  required/>
        </div>    

        <div class="form-group col-md-2">
            <label for="valorVenda">Valor de Venda<h11>*</h11></label>
            <input class="col-sm-9 form-control" type="text" id="valorVenda" name="valorVenda"  required/>
        </div>  

        <div class="form-group col-md-2">
            <label for="custo">Custo<h11>*</h11></label>
            <input class="col-sm-9 form-control" type="text" id="custo" name="custo"  required/>
        </div>

        <div class="form-group col-md-2">
            <label for="validade">Data de Validade<h11>*</h11></label>
            <input class="col-sm-12 form-control" type="date" id="validade" name="validade"  required/>
        </div>
    </div>
    <div class="form-row">            
        <div class="form-group col-md-3">
            <label for="force">Fornecedor<h11>*</h11></label>
            <select class="col-sm-11 form-control" required="required" name="idforce" id="idforce"required/>
            <option value="" >Selecionar Fornecedor ...</option>
            <?php foreach ($fornecedor as $fornecedor): ?>
                <option value="<?php echo $fornecedor->idforce; ?>"><?php echo $fornecedor->nomeForce; ?></option>
            <?php endforeach; ?>        
            </select>
        </div>    

    </div>
    <div class="form-group">
        <label for="lote">Lote<h11>*</h11></label>
        <input class="col-sm-2 form-control" type="text" id="valorVenda" name="lote"  required/>
    </div>

    <!--oi-->
    <input class="btn btn-primary" type="submit" value="Salvar"/>
    <input class="btn btn-danger" type="reset" value="Limpar"/>
<!--                <input class="btn btn-primary" id="btn-lista" value="Listar Produtos"/>-->
    <a class="btn btn-light" href="<?php echo base_url() . 'home'; ?>">Voltar</a>


    <?php form_close(); ?>

    <div id="div-lista" class="hide">
<!--        <table class="table table-striped table-dark"  >-->
        <!--Datatables-->
        <table id="estoque" class="table table-striped table-bordered" style="width:100%">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor de Venda</th>
                    <th scope="col">Custo</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Lote</th>
                    <th scope="col">Validade</th>

                    <th scope="col">Função</th>
                </tr>

            </thead>
            <tbody>


                <?php if ($estoque == FALSE): ?>
                    <tr>
                        <td>Nenhum Produto Encontrado!</td></tr>
                <?php else: ?>
                    <?php foreach ($estoque as $row): ?>
                        <tr>
                            <td><?php echo $row->nomeEstoque; ?></td>
                            <td><?php echo $row->qntEstoque; ?></td>
                            <td><?php echo $row->valorVenda; ?></td>
                            <td><?php echo $row->custo; ?></td>
                            <td><?php echo $row->nomeForce; ?></td>
                            <td><?php echo $row->lote; ?></td>
                            <td><?php echo $row->validade; ?></td>


                            <td>

                                <a class="btn btn-success" href="<?php echo base_url() . 'estoque/editar/' . $row->idestoque; ?>">Editar</a>
                                | 
                                <a class="btn btn-danger" href="<?php echo base_url() . 'estoque/excluir/' . $row->idestoque; ?>">Excluir</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <p></p>

</div> 
<div class="col-xs-1 col-sm-1 col-lg-3"></div>
</div>
</div>
<script type="text/javascript">

    $("#btn-lista").click(function () {
        $("#div-lista").toggleClass("hide");
    });
    $(document).ready(function () {
        $('#estoque').DataTable({
//                language: {
//                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
//                },
//                iDisplayLength: 10,
//                dom: 'Bfrtip',
//                buttons: [
//                    'copy',
//                    'excel',
//                    'print'
//                ]
        });
    });




</script>