<div class="container">
    <?php
    // put your code here
//        echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>

    <?php echo form_open('estoque/atualizar'); ?>

    <div class="form-group">

        <input type="hidden" name="idestoque" id="idestoque" value="<?php echo $estoqueEditar[0]->idestoque; ?>">

        <label for="nomeEstoque">Nome do Produto<h11>*</h11></label>

        <input class="col-sm-5 form-control" type="text" id="nomeEstoque" name="nomeEstoque"  required value="<?php echo $estoqueEditar[0]->nomeEstoque; ?>"/>
    </div>    
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="qntEstoque">Quantidade<h11>*</h11></label>
            <input class="col-sm-9 form-control" type="text" id="qntEstoque" name="qntEstoque"  required value="<?php echo $estoqueEditar[0]->qntEstoque; ?>"/>
        </div>    

        <div class="form-group col-md-2">
            <label for="valorVenda">Valor de Venda<h11>*</h11></label>
            <input class="col-sm-9 form-control" type="text" id="valorVenda" name="valorVenda"  required value="<?php echo $estoqueEditar[0]->valorVenda; ?>"/>
        </div>  

        <div class="form-group col-md-2">
            <label for="custo">Custo<h11>*</h11></label>
            <input class="col-sm-9 form-control" type="text" id="custo" name="custo"  required value="<?php echo $estoqueEditar[0]->custo; ?>"/>
        </div>

        <div class="form-group col-md-2">
            <label for="validade">Data de Validade<h11>*</h11></label>
            <input class="col-sm-12 form-control" type="date" id="validade" name="validade"  required value="<?php echo $estoqueEditar[0]->validade; ?>"/>
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
    <div class="form-row">            
        <div class="form-group col-md-3">
            <label for="categoria">Categoria<h11>*</h11></label>
            <select class="col-sm-11 form-control" required="required" name="idCategoria" id="idCategoria"required/>
            <option value="" >Selecionar Categoria ...</option>
            <?php foreach ($categoria as $categoria): ?>
                <option value="<?php echo $categoria->idCategoria; ?>"><?php echo $categoria->nomeCategoria; ?></option>
            <?php endforeach; ?>        
            </select>
        </div>    

    </div>
    <div class="form-group">
        <label for="lote">Lote<h11>*</h11></label>
        <input class="col-sm-2 form-control" type="text" id="valorVenda" name="lote"  required value="<?php echo $estoqueEditar[0]->lote; ?>"/>
    </div>

    <input class="btn btn-success" type="submit" value="Salvar"/>
    <a class="btn btn-light" href="<?php echo base_url() . 'estoqueNovo'; ?>">Voltar</a>
    <?php form_close(); ?>
    <p></p>

</div>