<form id="form-login" action="<?php echo site_url('account/login_process'); ?>" method="POST" class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 form-login center-modul login-login-modul">
    <div class="alert" id="login-alert" ><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    </div>
    <input id="login-username" type="text" name="username" data-toggle="tooltip" data-placement="right" placeholder="Username" data-toggle="tooltip" data-original-title="Username" data-placement="right">
    <input id="login-password" type="password" name="password" placeholder="Password" data-toggle="tooltip" data-original-title="Password" data-placement="right">
    <input id="login-submit" type="submit" class="login" name="submit" value="Login">
    <a href="<?php echo site_url('account/forgot_password'); ?>" class="pull-left forget">Lupa password?</a>
    <a href="<?php echo site_url('account/register'); ?>" class="pull-right forget">Daftar di sini!</a>
    <!--<input type="reset" class="pull-right"> -->
</form>