<?php
/* Require Header
===========================================*/
require_once 'includes/header.php';

?>
    <!-- background switcher -->
    
    <div class="login-wrapper">
        <a href="<?php echo $baseUrl; ?>">
            <img class="logo" src="<?php echo $baseUrl; ?>assets/admin/cssimg/logo-white.png" alt="logo" />
        </a>

        <div class="box">
            <div class="content-wrap">
                <h6>Log in</h6>
                <form id="login-form" action="<?php echo $baseUrl; ?>admin/login" method="post">
                  <input name="username" class="form-control" type="text" placeholder="Username">
                  <input name="password" class="form-control" type="password" placeholder="Password">
                  <br />
                  <input class="btn-glow primary" type="submit" value="Log in">
                </form>
            </div>
        </div>

    </div>


<?php
/* Require Footer
===========================================*/
require_once 'includes/footer.php';

?>