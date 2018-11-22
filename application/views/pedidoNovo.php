<div class="container">
    <h3><center>Lojão Torra</center></h3>   

    <h6><center>Razão social: Lojão Torra Torra LTDA</center></h6>           <h6><center>CNPJ:13.119.888/0002-00</center></h6>
    <h6><center>Endereço: Av.Dorival Jr. 458</center></h6>     <h6><center>Cidade: Gravataí</center></h6>  <h6><center>Bairro: Centro / RS</center></h6> 
</div>


<?php echo form_open('pedido/inserir'); ?>

<div class="form-group">
    <label for="data">Data<h11>*</h11></label>
    <input class="form-control" id="data" name="data" type="date" value = "<?php echo date('Y-m-d'); ?>" />
    
</div>

<div class="form-group">
    <label for="idcliente">Cliente<h11>*</h11></label>
    <select class="col-sm-3 form-control" aria-label="ngSelected demo" required="requered"
            id="idcliente" name="idcliente" type="name" required/>
    <option>Selecionar cliente... </option>
    <?php foreach ($cliente as $cliente): ?>
        <option value="<?php echo $cliente->idcliente; ?>"><?php echo $cliente->nome; ?></option>
    <?php endforeach; ?>        
</select>
</div>


<div class="form-group">
    <label for="idmeioPag">Meio de pagamento<h11>*</h11></label>
    <select class="col-sm-3 form-control" aria-label="ngSelected demo" required="requered"
            id="idmeioPag" name="idmeioPag" type="name" required/>
    <option>Selecionar forma de pagamento... </option>
    <?php foreach ($meiopag as $meiopag): ?>
        <option value="<?php echo $meiopag->idmeioPag; ?>"><?php echo $meiopag->nomemeioPag; ?></option>
    <?php endforeach; ?>        
</select>
</div>



    <input class="btn btn-primary" type="submit" value="Salvar"/>
    <input class="btn btn-danger" type="reset" value="Limpar"/>
    <a class="btn btn-light" href="<?php echo base_url() . 'pedido'; ?>">Voltar</a>
    <br>
    <br>
    <?php form_close(); ?>
  