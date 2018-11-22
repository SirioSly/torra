 <!DOCTYPE html>

  <div class="container">   
      <div class="row"></div>
      
<!--        <h2>Cadastro de Usuários</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Lojão Torra-Torra</p>-->
  
        <?php
        echo "<br>";
        echo "<p>";
        ?>
        <?php echo form_open('usuario/inserir'); ?>
<div class="col">
<div class="form-group">
            <label for="nomeUsuario">Nome do Usuário<h11>*</h11></label>
            <input class="col-sm-4 form-control "  name="nomeUsuario" type="text" id="nomeUsuario"> 
        </div>

        <div class="form-group">
            <label for="user">Usuário<h11>*</h11></label>
            <input class="col-sm-4 form-control"  id="user" name="user" type="text" required/>
        </div>
        
         <div class="form-group">
            <label for="senha">Senha<h11>*</h11></label>
            <input class=" col-sm-4 form-control" class="text" id="senha" name="senha" required placeholder="Mínimo 8 caracteres" minlength="8" type="password" required/>
        </div>
            <div class="form-group">
            <label for="perfilAcesso">Perfil Acesso<h11>*</h11></label>
            <select class="col-sm-4 form-control" id="perfilAcesso" name="perfilAcesso" type="text"required/>
            <option value="">Selecionar um Perfil...</option>
            <option value="ADM">Administrador</option>
            <option value="USER">Usuário</option>
         </select>
            </div>
<br>
        <input class="btn btn-success" type="submit" value="Salvar"/>
<!--        <input class="btn btn-dark" type="reset" value="Limpar"/>-->
        <a class="btn btn-light" id="btn-lista" href="#">Listar Usuários</a>
    <a class="btn btn-light" href="<?php echo base_url() . 'home'; ?>">Voltar</a>

 </div>
</div>
        <p></p>
        <?php form_close(); ?>
        <p></p>
        <br>
        <br>


        <div class="hide" id="div-lista">
        <table id="usuario" class="table table-striped">
    


        <thead>
            <tr>
                <th class="table-light">Usuário</th>
                <th class="table-light">User</th>
                <th class="table-light">Perfil Acesso</th>
                <th class="table-light">Funções</th>
                
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
                            <?php
                                if ($row->status == 1) {
                                    ?>
                                    <a class="btn btn-danger btn-sm" role="button" href="<?php echo base_url() . 'usuario/desativar/' . $row->idusuario; ?>">
                                        <div class="mdl-tooltip" data-mdl-for="<?php echo $row->idusuario . "desativar"; ?>">
                                            Desativar?
                                        </div>
                                    </a> 
                                    <?php
                                } else {
                                    ?>
                                    <a class="btn btn-success btn-sm" role="button" href="<?php echo base_url() . 'usuario/ativar/' . $row->idusuario; ?>">
                                        <div class="mdl-tooltip" data-mdl-for="<?php echo $row->idusuario . "ativar"; ?>">
                                            Ativar
                                        </div>
                                    </a> 
                                    <?php
                                }
                                ?>
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
