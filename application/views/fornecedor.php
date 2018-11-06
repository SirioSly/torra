 <!DOCTYPE html>

  <div class="signupSection">
  <div class="info">
      <br>
      <br>
      <br>
      <br>
      <br>
        <h2>Fornecedor</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>Lojão Torra-Torra</p>
  </div>
        <?php
        echo "<br>";
        echo "<p>";
        ?>
        <?php echo form_open('fornecedor/inserir'); ?>
<div class="signupForm">
            <label for="nomeForce">Nome</label>
            <input name="nomeForce" type="text" class="inputFields"  id="nomeForce"> 
        </div>

        <div class="signupForm">
            <label for="contatoForce">Contato</label>
            <input class="inputFields" id="contatoForce" name="contatoForce" type="text" required/>
        </div>
        
         <div class="signupForm">
             <label for="numero">Número</label>
            <input class="inputFields" id="numero" name="numero" type="text" required/>
        </div>

         <div class="signupForm">
             <label for="email">Email</label>
            <input class="inputFields" id="email" name="email" type="text" required/>
        </div>
      
      <div class="signupForm">
        <input class="btn btn-dark" type="submit" value="Salvar"/>
<!--        <input class="btn btn-dark" type="reset" value="Limpar"/>-->
<!--        <a class="btn btn-primary" id="btn-lista" href="#">Listar Usuário</a>-->
    <a class="btn btn-light" href="<?php echo base_url() . 'home'; ?>">Voltar</a>
    <a class="btn btn-primary" id="btn-lista" href="#">Listar Fornecedor</a> 
      </div>
        <p></p>
        <?php form_close(); ?>
        <p></p>



        <div class="hide" id="div-lista">
        <table id="fornecedor" class="table table-striped">
    


        <thead>
            <tr>
                <th class="table-dark">Nome fornecedor</th>
                <th class="table-dark">Contato</th>
                <th class="table-dark">Fone</th>
                <th class="table-dark">Email</th>
                
            </tr>

        </thead>
        <tbody>
            <?php if ($fornecedor == FALSE): ?>
                <tr><td>Nenhum fornecedor encontrado!</td></tr>
            <?php else: ?>
                <?php foreach ($fornecedor as $row): ?>
                    <tr>
                        <td><?php echo $row->nomeForce; ?></td>
                        <td><?php echo $row->contatoForce; ?></td>
                        <td><?php echo $row->numero; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php
                            echo base_url() .
                            'fornecedor/editar/' . $row->idforce;
                            ?>">Editar</a>
                            |
                            <a class="btn btn-danger" href="<?php
                               echo base_url() . ''
                               . 'fornecedor/excluir/' . $row->idforce;
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
