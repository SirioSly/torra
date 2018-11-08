<div class="container">
    
    
        <!responsivo para smartphone, tablet e pc-->

                <?php
                echo "<br>";
//        echo $completo;
                echo "<p>";
                ?>
                <?php echo form_open('estoque/inserir'); ?>
                <div class="form-group">
                    <label for="nomeEstoque">Nome do Produto:</label>
                    <input class="col-sm-5 form-control" type="text" id="nomeProduto" name="Produto"  required/>
                </div>    
                <div class="form-group">
                    <label for="qntEstoque">Quantidade:</label>
                    <input class="col-sm-1 form-control" type="text" id="qntEstoque" name="quantidadeEstoque"  required/>
                </div>    
                <div class="form-group">
                    <label for="valorVenda">Valor de Venda:</label>
                    <input class="col-sm-2 form-control" type="text" id="valorVenda" name="valorVenda"  required/>
                </div>    
                <div class="form-group">
                    <label for="custo">Custo:</label>
                    <input class="col-sm-2 form-control" type="text" id="custo" name="custo"  required/>
                </div>    
                <div class="form-group">
                    <label for="force">Fornecedor:</label>
                    <select class="col-sm-3 form-control" required="required" name="idforce" id="idforce"required/>
                    <option value="" >Selecionar Fornecedor ...</option>
                    <?php foreach ($fornecedor as $fornecedor): ?>
                        <option value="<?php echo $fornecedor->idforce; ?>"><?php echo $fornecedor->nomeForce; ?></option>
                    <?php endforeach; ?>        
                    </select>
                </div>    
                <div class="form-group">
                    <label for="lote">Lote:</label>
                    <input class="col-sm-2 form-control" type="text" id="valorVenda" name="lote"  required/>
                </div>    
                <div class="form-group">
                    <label for="validade">Validade:</label>
                    <input class="col-sm-2 form-control" type="date" id="validade" name="validade"  required/>
                </div> 
                <div class="form-group">
                    <label for="prodComp">Produto Composto:</label>
                    <input class="col-sm-4 form-control" type="text" id="prodComp" name="validade"  required/>
                </div>    
                <div class="form-group form-check">
                    <input type="checkbox"  class="form-check-input" id="status">
                    <label class="form-check-label" for="exampleCheck1">Status</label>
                </div> 


                <input class="btn btn-primary" type="submit" value="Salvar"/>
                <input class="btn btn-danger" type="reset" value="Limpar"/>
                <input class="btn btn-light" id="btn-lista" value="Listar Produtos"/>
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