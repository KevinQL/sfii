<!--iNGRESO-->
<div class="login-wrap cover">
    <div class="container-login">
        <p class="text-center" style="font-size: 80px;">
            <i class="zmdi zmdi-account-circle"></i>
        </p>
        <p class="text-center text-condensedLight">Sign in with your Account</p>
        <form action="" method="post"  >
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="userName" name="usuarioIngreso" >
                <label class="mdl-textfield__label" for="userName">User Name</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="password" id="pass" name="passwordIngreso" >
                <label class="mdl-textfield__label" for="pass">Password</label>
            </div>
            <?php
            if (isset($_POST['usuarioIngreso'])&& isset($_POST['passwordIngreso'])){
                $log = new IngresoControllersB();
                $log->ingresoController();
            }



            ?>

            <input class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; margin: 0 auto; display: block;" type="submit" value="Ingresar">


        </form>
    </div>
</div>