<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Редактирование товара <?= $product->title; ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= ADMIN; ?>">Главная / </a></li>
                    <li><a href="<?= ADMIN; ?>/product"><i class="fab fa-jedi-order"></i>Список товаров</a></li>
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

                    <form action="<?= ADMIN; ?>/product/edit" method="post" data-toggle="validator" novalidate="true" id="add">
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование товара</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       value="<?= h($product->title); ?>"
                                       placeholder="Наименование товара" required>
                                <span class="glyphicon form-control-feedback glyphicon-remove"
                                      aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Родительская категория</label>
                                <?php new \app\widjet\menu\Menu([
                                    'tpl' => WWW . '/menu/select.php',
                                    'container' => 'select',
                                    'cache' => 0,
                                    'cacheKey' => 'admin_select',
                                    'class' => 'form-control',
                                    'attrs' => [
                                        'name' => 'category_id',
                                        'id' => 'category_id',
                                    ],
                                ]) ?>
                            </div>
                            <div class="form-group">
                                <label for="keywords">Ключевые слова</label>
                                <input type="text" name="keywords" class="form-control" id="keywords"
                                       value="<?= h($product->keywords); ?>"
                                       placeholder="Ключевые слова">

                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <input type="text" name="description" class="form-control" id="description"
                                       value="<?= h($product->description); ?>"
                                       placeholder="Описание">

                            </div>
                            <div class="form-group has-feedback">
                                <label for="price">Цена</label>
                                <input type="text" name="price" class="form-control" id="price"
                                       value="<?= h($product->price); ?>"
                                       placeholder="Цена" pattern="^[0-9]{1,}$" required
                                       data-error="Допускаются цифры и десятичноя точка">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="old_price">Старая Цена</label>
                                <input type="text" name="old_price" class="form-control" id="old_price"
                                       value="<?= h($product->old_price); ?>"
                                       placeholder="Старая Цена" pattern="^[0-9]{1,}$"
                                       data-error="Допускаются цифры и десятичноя точка">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="content">Контент</label>
                                <textarea name="content" id="editor1" cols="80"
                                          rows="10"><?= $product->content; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="status" <?= $product->status ? ' checked' : null; ?>>
                                    Статус
                                </label>

                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="hit" <?= $product->hit ? ' checked' : null; ?>> Хит
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="related">
                                    Связанные товары
                                </label>
                                <select name="related[]" class="form-control select2" id="related" multiple="">
                                    <?php if (!empty($related_product)): ?>
                                        <?php foreach ($related_product as $item): ?>
                                            <option value="<?= $item['related_id']; ?>"
                                                    selected><?= $item['title']; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <?php new \app\widjet\filter\Filter($filter, WWW . '/filter/admin_filter_tpl.php'); ?>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <div class="card card-danger file-upload">
                                        <div class="card-header">
                                            <h3 class="card-title">Базовое изображение</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="single" class="btn btn-primary" data-url="product/add-image"
                                                 data-name="single">Выбрать базовое фото
                                                <p><small>Рекомендуемые размеры: 120 x 200</small></p>


                                            </div>
                                            <div class="single">
                                                <img src="/img/<?= $product->img; ?>" class="del-single" id="del-single" alt=""
                                                     style="max-height: 150px;">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <!-- Loading (remove the following to stop the loading)-->
                                        <div class="overlay dark">
                                            <i class="fas fa-2x fa-sync-alt"></i>
                                        </div>
                                        <!-- end loading -->
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card card-info file-upload">
                                        <div class="card-header">
                                            <h3 class="card-title">Изображения галереи</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="multi" class="btn btn-primary" data-url="product/add-image"
                                                 data-name="multi">Выбрать фото галереи
                                                <p><small>Рекомендуемые размеры: 700 x 1000</small></p>


                                            </div>
                                            <div class="multi">
                                                <?php if (!empty($gallery)): ?>
                                                    <?php foreach ($gallery as $item): ?>

                                                        <img src="/img/<?= $item; ?>" class="del-item" alt=""
                                                             style="max-height: 150px; cursor: pointer;"
                                                             data-id="<?= $product->id; ?>" data-src="<?= $item; ?>">
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <!-- Loading (remove the following to stop the loading)-->
                                        <div class="overlay dark">
                                            <i class="fas fa-2x fa-sync-alt"></i>
                                        </div>
                                        <!-- end loading -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="hidden" name="id" value="<?= $product->id; ?>">
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




