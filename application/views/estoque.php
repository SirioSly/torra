<div class="container">
    <div class="info"></div>
    
    
        <!responsivo para smartphone, tablet e pc-->
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
            <div class="test">

                <?php
                // put your code here
//                echo $acronico;
                echo "<br>";
//        echo $completo;
                echo "<p>";
                ?>
                <font style="color:#000"><h2>Estoque</h2> 
                <?php echo form_open('estoque/inserir'); ?>
                <div class="form-group">
                    <label for="nomeEstoque">Nome do Produto</label>
                    <input class="form-control" type="text" id="nomeProduto" name="Produto"  required/>
                </div>    
                <div class="form-group">
                    <label for="qntEstoque">Quantidade</label>
                    <input class="form-control" type="text" id="qntEstoque" name="quantidadeEstoque"  required/>
                </div>    
                <div class="form-group">
                    <label for="valorVenda">Valor de Venda</label>
                    <input class="form-control" type="text" id="valorVenda" name="valorVenda"  required/>
                </div>    
                <div class="form-group">
                    <label for="custo">Custo</label>
                    <input class="form-control" type="text" id="custo" name="custo"  required/>
                </div>    
                <div class="form-group">
                    <label for="force">Fornecedor</label>
                    <select class="form-control" required="required" name="idforce" id="idforce"required/>
                    <option value="" >Selecionar Fornecedor ...</option>
                    <?php foreach ($fornecedor as $fornecedor): ?>
                        <option value="<?php echo $fornecedor->idforce; ?>"><?php echo $fornecedor->nomeForce; ?></option>
                    <?php endforeach; ?>        
                    </select>
                </div>    
                <div class="form-group">
                    <label for="lote">Lote</label>
                    <input class="form-control" type="text" id="valorVenda" name="lote"  required/>
                </div>    
                <div class="form-group">
                    <label for="validade">Validade</label>
                    <input class="form-control" type="date" id="validade" name="validade"  required/>
                </div> 
                <div class="form-group">
                    <label for="prodComp">Produto Composto</label>
                    <input class="form-control" type="text" id="prodComp" name="validade"  required/>
                </div>    
                <div class="form-group form-check">
                    <input type="checkbox"  class="form-check-input" id="status">
                    <label class="form-check-label" for="exampleCheck1">Status</label>
                </div> 


                <input class="btn btn-success" type="submit" value="Salvar"/>
                <input class="btn btn-danger" type="reset" value="Limpar"/>
                <input class="btn btn-dark" id="btn-lista" value="Mostrar lista"/>

                <?php form_close(); ?>

                <div id="div-lista" class="hide">
            <!--        <table class="table table-striped table-dark"  >-->
                    <!--Datatables-->
                    <table id="estoque" class="table table-striped table-bordered" style="width:100%">

                        <caption>Estoque</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Produto</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Valor de Venda</th>
                                <th scope="col">Custo</th>
                                <th scope="col">Fornecedor</th>
                                <th scope="col">Lote</th>
                                <th scope="col">Validade</th>
                                <th scope="col">Produto Composto</th>
                                <th scope="col">Status</th>
                            </tr>

                        </thead>
                        <tbody>


                            <?php if ($estoque == FALSE): ?>
                                <tr>
                                    <td>Nenhum Produto Encontrado!</td></tr>
                            <?php else: ?>
                                <?php foreach ($estoque as $row): ?>
                                    <tr>
                                        <td><?php echo $row->nomeProduto; ?></td>
                                        <td><?php echo $row->qntEstoque; ?></td>
                                        <td><?php echo $row->valorVenda; ?></td>
                                        <td><?php echo $row->custo; ?></td>
                                        <td><?php echo $row->fornecedor; ?></td>
                                        <td><?php echo $row->lote; ?></td>
                                        <td><?php echo $row->validade; ?></td>
                                        <td><?php echo $row->prodComp; ?></td>
                                        <td><?php echo $row->status; ?></td>
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
                <a class="btn btn-success" href="<?php echo base_url() . 'home'; ?>">Voltar</a>

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
                language: {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                },
                iDisplayLength: 10,
                dom: 'Bfrtip',
                buttons: [
                    'copy',
                    'excel',
                    'print'
                ]
            });
        });




    </script>