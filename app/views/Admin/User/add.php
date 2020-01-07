<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Новый пользователь</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= ADMIN; ?>">Главная / </a></li>
                    <li><a href="<?= ADMIN; ?>/user">Список пользователей / </a></li>
                    <li class="active"><i class="fab fa-jedi-order"></i>Новый пользователь</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <form action="/user/signup" method="post" data-toggle="validator" role="form">
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="login">Логин</label>
                                <input type="text" class="form-control" name="login" id="login"
                                       value="<?= isset($_SESSION['form_data']['login']) ? $_SESSION['form_data']['login'] : ''; ?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control" name="password" id="password" data-minlength="6" data-error="Пароль должен включать не менее 6-ти символов" required>
                               <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="<?= isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : ''; ?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="<?= isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : ''; ?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="address">Адрес</label>
                                <input type="text" class="form-control" name="address" id="address"
                                       value="<?= isset($_SESSION['form_data']['address']) ? $_SESSION['form_data']['address'] : ''; ?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label>Роль</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="user" >Пользователь</option>
                                    <option value="admin">Администратор</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">

                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                    <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']);?>
                </div>

            </div>
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->



