 <!DOCTYPE html>

  <div class="login">
      
      <br>
      <br>
      <br>
      <br>
      <br>
<!--        <h2>Cadastro de Usuários</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Lojão Torra-Torra</p>-->
  </div>
        <?php
        echo "<br>";
        echo "<p>";
        ?>
        <?php echo form_open('usuario/inserir'); ?>
<div class="signupForm">
            <label for="nomeUsuario">Nome Usuário:</label>
            <input name="nomeUsuario" type="text" class="form-group"  id="nomeUsuario"> 
        </div>

        <div class="signupForm">
            <label for="user">Usuário:</label>
            <input class="form-group" id="user" name="user" type="text" required/>
        </div>
        
         <div class="signupForm">
            <label for="senha">Senha:</label>
            <input class="text" id="senha" name="senha" required placeholder="Mínimo 8 caracteres" minlength="8" type="password" required/>
        </div>

         <div class="">
            <label for="perfilAcesso">Perfil Acesso:</label>
            <select class="inputFields" id="perfilAcesso" name="perfilAcesso" type="text"/>
            <option value=""></option>
            <option value="ADM">Administrador</option>
            <option value="USER">Usuário</option>
         </select>
        </div>
      <div class="signupForm">
        <input class="btn btn-primary btn-block btn-large" type="submit" value="Salvar"/>
<!--        <input class="btn btn-dark" type="reset" value="Limpar"/>-->
        <a class="btn btn-light" id="btn-lista" href="#">Listar Usuário</a>
    <a class="btn btn-light" href="<?php echo base_url() . 'home'; ?>">Voltar</a>
      </div>
        <p></p>
        <?php form_close(); ?>
        <p></p>



        <div class="hide" id="div-lista">
        <table id="usuario" class="table table-striped">
    


        <thead>
            <tr>
                <th class="table-dark">Usuário</th>
                <th class="table-dark">User</th>
                <th class="table-dark">Perfil Acesso</th>
                <th class="table-dark">Funções</th>
                
            </tr>

        </thead>
        <tbody>
            <?php if ($usuario == FALSE): ?>
                <tr><td>Nenhum usuario encontrado!</td></tr>
            <?php else: ?>
                <?php foreach ($usuario as $row): ?>
                    <tr>
                        <td><?php echo $row->nomeUsuario; ?></td>
                        <td><?php echo $row->user; ?></td>
                        <td><?php echo $row->perfilAcesso; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php
                            echo base_url() .
                            'usuario/editar/' . $row->idusuario;
                            ?>">Editar</a>
                            |
                            <a class="btn btn-danger" href="<?php
                               echo base_url() . ''
                               . 'usuario/excluir/' . $row->idusuario;
                               ?>">Excluir</a>
                        </td>
                    </tr>
        <?php endforeach; ?>
    <?php endif; ?>
        </tbody>
    </table>
        </div>
    <p></p>
<!--    <a class="btn btn-primary" href="<?php echo base_url() . 'home'; ?>">Voltar</a>-->
    </div>
        </div>
    
    <script type="text/javascript">
        $("#btn-lista").click(function (){
            $("#div-lista").toggleClass("hide");
            
        });
        
//        $(document).ready(function () {
//        $('#funcao').DataTable({
//            language: {
//                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
//            },
//             iDisplayLength: 10,   
//             dom: 'Bfrtip',
//    buttons: [
//        'copy',
//        'excel',
//        'print',
//        'pdf'
//    ]
//        });
//    });
</script>
