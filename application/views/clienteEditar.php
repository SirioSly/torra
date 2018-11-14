<!DOCTYPE html>

<!--
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">-->
<?php
// put your code here

echo "<br>";
//        echo $completo;
echo "<p>";
?>
<?php echo form_open('clienteNovo/atualizar'); ?>
<div class="col">

    <div class="form-group">
        <input type="hidden" name="idcliente" id="idcliente" value="<?php echo $clienteEditar[0]->idcliente; ?>">
        <label for="nome">Nome Cliente<h11>*</h11></label>
        <input name="nome" type="text" class="form-control"  id="nome" required value="<?php echo $clienteEditar[0]->nome; ?>"> 
    </div>

    <div class="form-row">
        <div class="col">
            <label for="cpf">CPF<h11>*</h11></label>
            <input class="form-control" id="cpf" name="cpf" type="text" placeholder="Apenas números" maxlength="14" minlength="14" required value="<?php echo $clienteEditar[0]->cpf; ?>"/>
        </div>



        <div class="col">
            <label for="cnpj">CNPJ<h11>*</h11></label>
            <input class="form-control" id="cnpj" name="cnpj" type="text" maxlength="18" minlength="18" placeholder="Apenas números" value="<?php echo $clienteEditar[0]->cnpj; ?>"/>
        </div>

        <div class="col">
            <div class="form-group">
                <label for="dataAniver">Data de Nascimento<h11>*</h11></label>
                <input class="form-control" id="dataAniver" name="dataAniver" type="date" required maxlength="10" value="<?php echo $clienteEditar[0]->dataAniver; ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="fone">Telefone<h11>*</h11></label>
            <input class="form-control" id="fone" name="fone" type="text" required maxlength="15" minlength="12" value="<?php echo $clienteEditar[0]->fone; ?>"/>
        </div>

        <div class="col">  
            <div class="form-group">
                <label for="email">E-mail<h11>*</h11></label>
                <input class="form-control" id="email" name="email" type="email" placeholder="email@email.com" value="<?php echo $clienteEditar[0]->email; ?>"/>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <div class="form-group">
                <label for="contato">Contato Empresarial<h11>*</h11></label>
                <input class="form-control" id="contato" name="contato" type="text" value="<?php echo $clienteEditar[0]->contato; ?>"/>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="endereco">Endereço:<h11>*</h11></label>
                <input type="text" class="form-control" id="endereco" name="endereco" required value="<?php echo $clienteEditar[0]->endereco; ?>"/>
            </div>
        </div>
    </div>


    <div class="form-row">


        <div class="col">
            <label for="idcidade">Cidade<h11>*</h11></label>
            <select class="form-control" aria-label="ngSelected demo" required="requered"
                    id="idcidade" name="idcidade" required/>
                    <?php foreach ($cidade as $cidade): ?>
                <option name="idcidade" value="<?php echo $cidade->idcidade; ?>"
                <?php if ($cidade->idcidade === $clienteEditar[0]->idcidade) echo "selected" ?>
                        ><?php echo $cidade->nomeCidade; ?></option>
                    <?php endforeach; ?>        
            </select>
        </div>
    </div>
    <br>
    <input class="btn btn-success" type="submit" value="Salvar"/>
    <a class="btn btn-light" href="<?php echo base_url() . 'cliente'; ?>">Voltar</a>
    <?php echo form_close(); ?>
</div>

<script type="text/javascript">
    jQuery(function ($) {
        $("#cpf").mask("999.999.999-99");
        $("#cnpj").mask("99.999.999/9999-99");
        //            $("#cep").mask("99999-999");
        //            $("#telFixo").mask("(99) 9999-9999");
        $("#fone").mask("(99) 99999-9999");
    });

  
</script>