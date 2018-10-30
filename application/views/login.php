<!DOCTYPE html>

<div class="limiter">
    
<div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
					<img src="images/principal.png" alt="IMG">
				</div>
    <?php echo form_open('login/autenticar'); ?> 
        <span class="login100-form-title">
						Login
					</span>
    <center>
    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
<!--        <label for="nomeusuario">Nome Usuario:</label>-->
        <input name="usuario" type="text" class="input100"  id="nomeusuario" placeholder="Usuario">
        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>

    </div>
        </center>

    <center>
    <div class="wrap-input100 validate-input m-b-16">
<!--        <label for="senha">Senha:</label>-->
        <input name="senha" type="password" class="input100"  id="senha" placeholder="Senha">
        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>

    </div>
        
    </center>


    <p></p>

        <div class="container-login100-form-btn">
    <input class="login100-form-btn" type="submit" value="Entrar"/>
        </div>
    <br>
    <input class="login100-form-btn" type="reset" value="Redefinir"/>
    </br>
    <br>
    </br>
    <br>
    </br>
    <?php form_close(); ?>
        </div>
    </div>
    <p></p>
    
    <br>
     </br>






<p></p>
</div>

</div>