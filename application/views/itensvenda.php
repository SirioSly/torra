<div class="container">
    <?php
    // put your code here
//        echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>

    <?php echo form_open('itensvenda/inserir'); ?>


    <div class="form-group">
        <input type="hidden" name="idpedido" id="idpedido" value="<?php echo $pedidoSelecionado[0]->idpedido; ?>">
        <label for="nome">Nome Cliente<h11>*</h11></label>
        <input name="nome" type="text" class="form-control"  id="nome" required value="<?php echo $pedidoSelecionado[0]->nome; ?>" disabled> 
    </div>

    <div class="form-group">
        <label for="idestoque">Itens<h11>*</h11></label>
        <select class="col-sm-3 form-control" aria-label="ngSelected demo" required="requered"
                id="idestoque" name="idestoque" type="name" required/>
        <option>Selecionar itens</option>
        <?php foreach ($estoque as $estoque): ?>
            <option value="<?php echo $estoque->idestoque; ?>"><?php echo $estoque->nomeEstoque; ?></option>
        <?php endforeach; ?>        
        </select>
    </div>

    <div class="form-group">
        <label for="qntProduto">Quantidade<h11>*</h11></label>
        <input type="number" class="form-control" id="qntProduto" name="qntProduto" required/> 
    </div>




    <input class="btn btn-success" type="submit" value="Salvar"/>
    <a class="btn btn-light" href="<?php echo base_url() . 'pedido'; ?>">Voltar</a>
    <?php form_close(); ?>
    <p></p>

</div>

