<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Новая валюта</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= ADMIN; ?>"><i class="nav-icon fas fa-tachometer-alt"></i>
                            Главная / </a></li>
                    <li><a href="<?= ADMIN; ?>/currency"><i class="fab fa-jedi-order"></i>Список валют</a>
                    </li>
                    <li class="active"><i class="fab fa-jedi-order"></i>Новая валюта</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">

                    <form action="<?= ADMIN; ?>/currency/add" method="post" data-toggle="validator"
                          novalidate="true">
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование валюты</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Наименование валюты" required data-error="Заполните поле">
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="code">Код валюты</label>
                                <input type="text" name="code" class="form-control" id="code"
                                       placeholder="Код валюты" required data-error="Заполните поле">
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="form-group ">
                                <label for="symbol_left">Символ слева</label>
                                <input type="text" name="symbol_left" class="form-control" id="symbol_left"
                                       placeholder="Символ слева">
                            </div>
                            <div class="form-group ">
                                <label for="symbol_right">Символ справа</label>
                                <input type="text" name="symbol_right" class="form-control" id="symbol_right"
                                       placeholder="Символ справа">
                            </div>
                            <div class="form-group has-feedback">
                                <label for="value">Значение</label>
                                <input type="text" name="value" class="form-control" id="value"
                                       placeholder="Значение" required data-error="Допускаются цифры и десятичная точка" pattern="^[0-9.]{1,}$">
                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="value">
                                    <input type="checkbox" name="base">
                                    Базовая валюта</label>

                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Добавить</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->




