<form action="<?php echo site_url('account/register_process') ?>" method="POST" class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 form-login center-modul signup-modul">
    
    <div class=alert id="register-alert" style="display:none;"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    <p class=suggest id="register-alert-tulisan"></p></div>

    <div class="error-username"></div>
    <input type="text" id="register-username" name="username" placeholder="Username" data-toggle="tooltip" data-original-title="Username" data-placement="right" required >
    <div class="error-email"></div>
    <input type="email" id="register-email" name="email" placeholder="Email" data-toggle="tooltip" data-original-title="Email" data-placement="right" required >
    <div class="error-password"></div>
    <input type="password" id="register-password" name="password" placeholder="Password" data-toggle="tooltip" data-original-title="Password" data-placement="right" required>
    <div class="error-confirm-password"></div>
    <input type="password" id="register-confirm-password" name="confirm-password" placeholder="Konfirmasi Password" data-toggle="tooltip" data-original-title="Konfirmasi" data-placement="right" required>
    <input id="register-submit" type="submit" class="login" name="submit" value="Register">
    <a href="<?php echo site_url('account/login') ?>" class="pull-left forget">Mau login?</a>
    <input type="reset" class="pull-right">
</form>