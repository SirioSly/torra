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
 <div class="form-group">
            <label for="nome">Nome do Cliente<h11>*</h11></label>
            <input type="text" class="col-sm-5 form-control" id="nome" name="nome" required value="<?php echo $clienteEditar[0]->nome; ?>"> 
        </div>
    <div class="form-row">
        <div class="form-group col-md-3">
                <label for="cpf">CPF<h11>*</h11></label>
                <input class="col-sm-9 form-control" id="cpf" name="cpf" type="text" placeholder="Apenas números" required value="<?php echo $clienteEditar[0]->cpf; ?>">
        </div>
     <div class="form-group col-md-3">
                <label for="cnpj">CNPJ<h11>*</h11></label>
                <input class="col-sm-9 form-control" id="cnpj" name="cnpj" type="text" maxlength="18" minlength="18" placeholder="Apenas números" value="<?php echo $clienteEditar[0]->cnpj; ?>">
     </div>
                <div class="form-group col-md-3">
                    <label for="dataAniver">Data de Nascimento<h11>*</h11></label>
                    <input class="col-sm-9 form-control" id="dataAniver" name="dataAniver" type="date" required maxlength="10" value="<?php echo $clienteEditar[0]->dataAniver; ?>">
                </div>          
            <div class="form-group col-md-3">
                <label for="fone">Telefone<h11>*</h11></label>
                <input class="col-sm-9 form-control" id="fone" name="fone" type="text" required maxlength="15" minlength="12" value="<?php echo $clienteEditar[0]->fone; ?>">
            </div>
        </div>
    <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="email">E-mail<h11>*</h11></label>
                    <input class="col-sm-9 form-control" id="email" name="email" type="email" placeholder="email@email.com" value="<?php echo $clienteEditar[0]->email; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="contato">Contato Empresarial<h11>*</h11></label>
                    <input class="col-sm-9 form-control" id="contato" name="contato" type="text" value="<?php echo $clienteEditar[0]->contato; ?>">
                </div>        
                <div class="form-group col-md-5">
                    <label for="endereco">Endereço<h11>*</h11></label>
                    <input type="text" class="col-sm-12 form-control" id="endereco" name="endereco" required value="<?php echo $clienteEditar[0]->endereco; ?>">
                </div>
    </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                <label for="idestado">Estado<h11>*</h11></label>
                <select class="form-control" aria-label="ngSelected demo" required="requered"
                        id="idestado" name="idestado" type="name" required/>
                <option>Selecionar Estado... </option>
                <?php foreach ($estado as $estado): ?>
                    <option value="<?php echo $estado->idestado; ?>"><?php echo $estado->nomeEstado; ?></option>
                <?php endforeach; ?>        
                </select>
                </div>
                <div class="form-group col-md-3">
                <label for="idcidade">Cidade<h11>*</h11></label>
                <select class="form-control" aria-label="ngSelected demo" required="requered"
                        id="idcidade" name="idcidade" type="name" required/>
                <option>Selecionar Estado... </option>
                <?php foreach ($cidade as $cidade): ?>
                    <option value="<?php echo $cidade->idcidade; ?>"><?php echo $cidade->nomeCidade; ?></option>
                <?php endforeach; ?>        
                </select>
            </div>
    </div>
    <br>
    <input class="btn btn-success" type="submit" value="Salvar"/>
    <a class="btn btn-light" href="<?php echo base_url() . 'cliente'; ?>">Voltar</a>
    </div>
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

        var base_url = "<?php echo base_url() ?>";
        $(function () {
            $('#idestado').change(function () {
                var idestado = $('#idestado').val();
                $.post(base_url + 'index.php/ajax/Cidade/listarCidadeEstado', {
                    estado_idestado: idestado
                }, function (data) {
                    $('#idcidade').html(data);
                    $('#idcidade').removeAttr('disabled');
                });
            });
        });
</script>