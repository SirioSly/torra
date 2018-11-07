<!DOCTYPE html>

    <div class="container">

        <div class="row"></div>

        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
        <?php
        // put your code here
        
        echo "<br>";
    //        echo $completo;
        echo "<p>";
        ?>
         <font style="color:#000"><h2>Cliente</h2>
        <?php echo form_open('clienteNovo/inserir'); ?>
        <div class="form-group">
            <label for="nome">Nome Usuário</label>
            <input name="nome" type="text" class="col-sm-6 form-control"  id="nome"> 
        </div>

        
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input class="col-sm-6 form-control" id="endereco" name="endereco" type="text" required/>
        </div>
        
        <div class="form-group">
            <label for="fone">Fone</label>
            <input class="col-sm-6 form-control" id="fone" name="fone" type="text" required/>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input class="col-sm-6 form-control" id="email" name="email" type="text" required/>
        </div>
        
        <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input class="col-sm-6 form-control" id="cnpj" name="cnpj" type="text" />
        </div>
        
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input class="col-sm-6 form-control" id="cpf" name="cpf" type="text" />
        </div>
        
           <div class="form-group">
        <label for="idestado">Estado</label>
        <select class="form-control" aria-label="ngSelected demo" required="requered"
                id="idestado" name="idestado" type="name" required/>
        <option>Selecionar Estado... </option>
        <?php foreach ($estado as $estado): ?>
            <option value="<?php echo $estado->idestado; ?>"><?php echo $estado->nomeEstado; ?></option>
        <?php endforeach; ?>        
    </select>
    </div>
        
           <div class="form-group">
        <label for="idcidade">Cidade</label>
        <select class="form-control" aria-label="ngSelected demo" required="requered"
                id="idcidade" name="idcidade" type="name" required/>
        <option>Selecionar Estado... </option>
        <?php foreach ($cidade as $cidade): ?>
            <option value="<?php echo $cidade->idcidade; ?>"><?php echo $cidade->nomeCidade; ?></option>
        <?php endforeach; ?>        
    </select>
    </div>
        
        
        <div class="form-group">
            <label for="contato">Contato</label>
            <input class="col-sm-6 form-control" id="contato" name="contato" type="text" />
        </div>
        
        <div class="form-group">
            <label for="dataAniver">Data de Aniver</label>
            <input class="col-sm-6 form-control" id="dataAniver" name="dataAniver" type="text" />
        </div>
        
<!--        <div class="form-group">
            <label for="status">Status</label>
            <input class="col-sm-6 form-control" id="status" name="status" type="text" required/>
        </div>-->
        
        
        <input class="btn btn-success" type="submit" value="Salvar"/>
        <input class="btn btn-secondary" type="reset" value="Limpar"/>
        <a class="btn btn-primary" href="<?php echo base_url() . 'cliente'; ?>">Voltar clientes</a>
