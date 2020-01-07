<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Редактирование группы фильтров <?=h($group->title) ;?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= ADMIN; ?>"><i class="nav-icon fas fa-tachometer-alt"></i>
                            Главная / </a></li>
                    <li><a href="<?= ADMIN; ?>/filter/attribute-group"><i class="fab fa-jedi-order"></i>Группы фильтров</a>
                    </li>
                    <li class="active"><i class="fab fa-jedi-order"></i>Редактирование группы</li>
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

                    <form action="<?= ADMIN; ?>/filter/group-edit" method="post" data-toggle="validator"
                          novalidate="true">
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование группы</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Наименование группы" required value="<?=h($group->title) ;?>">
                                <span class="glyphicon form-control-feedback glyphicon-remove"
                                      aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="hidden" name="id" value="<?=$group->id ;?>">
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->




