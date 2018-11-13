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
        <input class="col-sm-2 form-control" type="text" id="valorVenda" name="lote"  required/>
    </div>

    <!--oi-->
    <input class="btn btn-primary" type="submit" value="Salvar"/>
    <input class="btn btn-danger" type="reset" value="Limpar"/>
<!--                <input class="btn btn-primary" id="btn-lista" value="Listar Produtos"/>-->
    <a class="btn btn-light" href="<?php echo base_url() . 'estoqueNovo'; ?>">Voltar</a>


    <?php form_close(); ?>

    <div id="div-lista" class="hide">
<!--        <table class="table table-striped table-dark"  >-->
        <!--Datatables-->
      