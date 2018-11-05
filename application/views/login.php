<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">                           
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/imgteste.png" alt="IMG">
            </div>
            <?php echo form_open('login/autenticar'); ?> 
            <span class="login100-form-title" style="color: #fff">
                Login
            </span>
            <div class="wrap-input100 validate-input" data-validate = "O usuario é exigido">
                <input name="usuario" type="text" class="input100"  id="nomeusuario" placeholder="Usuario">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "A senha é exigida">
                <input name="senha" type="password" class="input100"  id="senha" placeholder="Senha">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>

            <div class="container-login100-form-btn">
                <input class="login100-form-btn" type="submit" value="Entrar"/>
            </div>

            <div class="text-center p-t-12">
                <span class="txt1">
                    Esqueceu
                </span>
                <a class="txt2" href="#">
                    Usuario / Senha?
                </a>
            </div>
            <?php form_close(); ?>
            <div class="text-center p-t-136">
                <a class="txt2" href="#">
                    <!--							Create your Account-->
                    <!--							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>-->
                </a>
            </div>
            </form>
        </div>
    </div>
</div>


