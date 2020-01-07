<div class="login-box">
    <div class="login-logo">
        <b>Admin</b>LTE
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Внимание, ошибка!</h5>
                    <?=$_SESSION['error']; unset($_SESSION['error']) ;?>
                </div>
            <?php endif; ?>
            <form action="<?= ADMIN; ?>/user/login-admin" method="post">
                <div class="input-group mb-3">
                    <input name="login" type="text" class="form-control" placeholder="Login">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <!--            <div class="social-auth-links text-center mb-3">-->
            <!--                <p>- OR -</p>-->
            <!--                <a href="#" class="btn btn-block btn-primary">-->
            <!--                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook-->
            <!--                </a>-->
            <!--                <a href="#" class="btn btn-block btn-danger">-->
            <!--                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+-->
            <!--                </a>-->
            <!--            </div>-->
            <!--            /.social-auth-links -->
            <!---->
            <!--            <p class="mb-1">-->
            <!--                <a href="forgot-password.html">I forgot my password</a>-->
            <!--            </p>-->
            <!--            <p class="mb-0">-->
            <!--                <a href="register.html" class="text-center">Register a new membership</a>-->
            <!--            </p>-->
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
