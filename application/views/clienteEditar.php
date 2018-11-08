<div class="container">
        <?php
        // put your code here
//        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
<!--       <h2>Editar cliente</h2>-->
       
        <?php echo form_open('clienteNovo/atualizar'); ?>
        
            <div class="form-group">
                
            <input type="hidden" name="idcliente" id="idcliente" value="<?php echo $clienteEditar[0]->idcliente; ?>">
            
            
            <label for="nome">Nome Usuário<h11>*</h11></label>
            <input name="nome" type="text" class="col-sm-4 form-control"  id="nome" required value="<?php echo $clienteEditar[0]->nome; ?>"> 
        </div>

        
        <div class="form-group">
            <label for="endereco">Endereço<h11>*</h11></label>
            <input class="col-sm-4 form-control" id="endereco" name="endereco" type="text" required value="<?php echo $clienteEditar[0]->endereco; ?>">
        </div>
        
        <div class="form-group">
            <label for="fone">Telefone<h11>*</h11></label>
            <input class="col-sm-4 form-control" id="fone" name="fone" type="text" required placeholder="XX XXXXX-XXXX" required= maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)" value="<?php echo $clienteEditar[0]->fone; ?>">
        </div>
        
        <div class="form-group">
            <label for="email">E-mail<h11>*</h11></label>
            <input class="col-sm-4 form-control" id="email" name="email" type="text" required placeholder="email@email.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $clienteEditar[0]->email; ?>">
        </div>
        
        <div class="form-group">
            <label for="cnpj">CNPJ<h11>*</h11></label>
            <input class="col-sm-4 form-control" id="cnpj" name="cnpj" type="text" maxlength="14" placeholder="Apenas números" value="<?php echo $clienteEditar[0]->cnpj; ?>">
        </div>
        
        <div class="form-group">
            <label for="cpf">CPF<h11>*</h11></label>
            <input class="col-sm-4 form-control" id="cpf" name="cpf" type="text" required placeholder="Apenas números" maxlength="11" value="<?php echo $clienteEditar[0]->cpf; ?>">
        </div>
        
          <div class="form-group">
        <label for="idestado">Estado<h11>*</h11></label>
        <select class="col-sm-4 form-control" aria-label="ngSelected demo" required="requered"
                id="idestado" name="idestado" type="name" required/>
        <option>Selecionar Estado... </option>
        <?php foreach ($estado as $estado): ?>
            <option value="<?php echo $estado->idestado; ?>"><?php echo $estado->nomeEstado; ?></option>
        <?php endforeach; ?>        
    </select>
    </div>
        
            <div class="form-group">
                <label for="idcidade">Cidade<h11>*</h11></label>
                <select class="col-sm-4 form-control" aria-label="ngSelected demo" required="requered"
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
            <label for="contato">Contato Empresarial<h11>*</h11></label>
            <input class="col-sm-4 form-control" id="contato" name="contato" type="text" value="<?php echo $clienteEditar[0]->contato; ?>">
        </div>
        
        <div class="form-group">
            <label for="dataAniver">Data de Nascimento:<h11>*</h11></label>
            <input class="col-sm-4 form-control" id="dataAniver" name="dataAniver" type="date" required maxlength="10" value="<?php echo $clienteEditar[0]->dataAniver; ?>">
        </div>
            
            
            
            
            <input class="btn btn-success" type="submit" value="Salvar"/>
            <a class="btn btn-light" href="<?php echo base_url() .  'cliente'; ?>">Voltar</a>
        <?php form_close(); ?>
        
       
        </div>
