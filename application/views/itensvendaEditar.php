<div class="container">
<?php echo form_open('itensvenda/atualizar'); ?>
    <?php $item=$_GET['item']?>
    <?php
    $ped = $_GET['ped'];
    $cli = $_GET['cli'];
    ?>
    <input type="hidden" name="id" id="id" value="<?php echo $ped; ?>">
    <input type="hidden" name="cli" id="cli" value="<?php echo $cli; ?>">
    <input type="hidden" name="iditensvenda" id="iditensvenda" value="<?php echo $itensvendaEditar[0]->iditensvenda; ?>">
    <div class="form-group">
        <label for="idestoque">Itens<h11>*</h11></label>
        <input name="nome" type="text" class="form-control"  id="nome" required value="<?php echo $item; ?>" disabled>
    </div>

    <div class="form-group">
        <label for="qntProduto">Quantidade<h11>*</h11></label>
        <input type="number" class="form-control" id="qntProduto" name="qntProduto" required/> 
    </div>

    <input class="btn btn-success" type="submit" value="Salvar"/>
    <?php form_close(); ?>
    <p></p>

</div>
