<div class="container">
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
       <h2>Editar cliente</h2>
       
        <?php echo form_open('clienteNovo/atualizar'); ?>
        
            <div class="form-group">
                
            <input type="hidden" name="idcliente" id="idcliente" value="<?php echo $clienteEditar[0]->idcliente; ?>">
            
            
            <label for="nome">Nome Usuário</label>
            <input name="nome" type="text" class="col-sm-6 form-control"  id="nome" value="<?php echo $clienteEditar[0]->nome; ?>"> 
        </div>

        
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input class="col-sm-6 form-control" id="endereco" name="endereco" type="text" value="<?php echo $clienteEditar[0]->endereco; ?>">
        </div>
        
        <div class="form-group">
            <label for="fone">Fone</label>
            <input class="col-sm-6 form-control" id="fone" name="fone" type="text" value="<?php echo $clienteEditar[0]->fone; ?>">
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input class="col-sm-6 form-control" id="email" name="email" type="text" value="<?php echo $clienteEditar[0]->email; ?>">
        </div>
        
        <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input class="col-sm-6 form-control" id="cnpj" name="cnpj" type="text" value="<?php echo $clienteEditar[0]->cnpj; ?>">
        </div>
        
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input class="col-sm-6 form-control" id="cpf" name="cpf" type="text" value="<?php echo $clienteEditar[0]->cpf; ?>">
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
                <option>Selecionar cidade</option>
                <?php foreach ($cidade as $cidade): ?>
                    <option value="<?php echo $cidade->idestado; ?>"
                    <?php if ($cidade->idestado === $clienteEditar[0]->idcidade) echo "selected" ?>
                            ><?php echo $cidade->nomeCidade; ?></option>
                        <?php endforeach; ?>        
                </select>
            </div>
            
        
        <div class="form-group">
            <label for="contato">Contato</label>
            <input class="col-sm-6 form-control" id="contato" name="contato" type="text" value="<?php echo $clienteEditar[0]->contato; ?>">
        </div>
        
        <div class="form-group">
            <label for="dataAniver">Data de Aniver</label>
            <input class="col-sm-6 form-control" id="dataAniver" name="dataAniver" type="text" value="<?php echo $clienteEditar[0]->dataAniver; ?>">
        </div>
            
            
            
            
            <input class="btn btn-success" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() .  'cliente'; ?>">Cancelar</a>
       
        </div>
