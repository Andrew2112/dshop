<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Редактирование фильтра <?= h($attr->value); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= ADMIN; ?>"><i class="nav-icon fas fa-tachometer-alt"></i>
                            Главная / </a></li>
                    <li><a href="<?= ADMIN; ?>/filter/attribute"><i class="fab fa-jedi-order"></i>Список фильтров</a>
                    </li>
                    <li class="active"><i class="fab fa-jedi-order"></i>Редактирование</li>
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

                    <form action="<?= ADMIN; ?>/filter/attribute-edit" method="post" data-toggle="validator"
                          novalidate="true">
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="value">Наименование фильтра</label>
                                <input type="text" name="value" class="form-control" id="value"
                                       placeholder="Наименование фильтра" required value="<?= h($attr->value); ?>">
                                <span class="glyphicon form-control-feedback glyphicon-remove"
                                      aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Группа</label>
                                <select name="attr_group_id" id="category_id" class="form-control">

                                    <?php foreach ($attrs_group as $item): ?>
                                        <option value="<?= $item->id; ?>" <?php if ($item->id==$attr->attr_group_id) echo 'selected';?>><?= $item->title; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="hidden" name="id" value="<?= $attr->id; ?>">
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




