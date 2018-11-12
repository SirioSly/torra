<!DOCTYPE html>

    <div class="container">

        <div class="row"></div>
<!--
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">-->
        <?php
        // put your code here
        
        echo "<br>";
    //        echo $completo;
        echo "<p>";
        ?>
        <?php echo form_open('clienteNovo/inserir'); ?>
        <div class="col">
            <div class="form-group">
                <label for="nome">Nome do Cliente<h11>*</h11></label>
                <input type="text" class="form-control" id="nome" name="nome" required/> 
            </div>

            <div class="form-row">
                <div class="col">
                    <label for="cpf">CPF<h11>*</h11></label>
                    <input class="form-control" id="cpf" name="cpf" type="text" placeholder="Apenas números" maxlength="11" required/>
                </div>


                
                    <div class="col">
                        <label for="cnpj">CNPJ<h11>*</h11></label>
                        <input class="form-control" id="cnpj" name="cnpj" type="text" maxlength="14" placeholder="Apenas números"/>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="dataAniver">Data de Nascimento<h11>*</h11></label>
                            <input class="form-control" id="dataAniver" name="dataAniver" type="date" required maxlength="10">
                        </div>
                    </div>
                
                 <div class="form-group">
            <label for="fone">Telefone<h11>*</h11></label>
            <input class="form-control" id="fone" name="fone" type="text" placeholder="XX XXXXX-XXXX" required maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)"/>
        </div>

                    <div class="col">  
                        <div class="form-group">
                            <label for="email">E-mail<h11>*</h11></label>
                            <input class="form-control" id="email" name="email" type="text" placeholder="email@email.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                        </div>
                    </div>
                </div>





                <div class="form-row">
                    <div class="col">
                <div class="form-group">
                    <label for="contato">Contato Empresarial<h11>*</h11></label>
                    <input class="form-control" id="contato" name="contato" type="text"/>
                </div>
            </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="endereco">Endereço:<h11>*</h11></label>
                            <input type="text" class="form-control" id="endereco" name="endereco" required/>
                        </div>
                    </div>
                </div>
            <div class="form-row">
                <div class="col">
                    <label for="idestado">Estado<h11>*</h11></label>
                    <select class="form-control" aria-label="ngSelected demo" required="requered"
                            id="idestado" name="idestado" type="name" required/>
                    <option>Selecionar Estado... </option>
                    <?php foreach ($estado as $estado): ?>
                        <option value="<?php echo $estado->idestado; ?>"><?php echo $estado->nomeEstado; ?></option>
                    <?php endforeach; ?>        
                    </select>
                </div>



                <div class="col">

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
                <input class="btn btn-primary" type="reset" value="Limpar"/>
                <a class="btn btn-light" href="<?php echo base_url() . 'cliente'; ?>">Voltar</a>

        <?php                form_close();?>
        
    </div>
        <script type="text/javascript">
            
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

