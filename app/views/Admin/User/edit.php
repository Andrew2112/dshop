<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Редактирование пользователя</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= ADMIN; ?>">Главная / </a></li>
                    <li><a href="<?= ADMIN; ?>/user">Список пользователей / </a></li>
                    <li class="active"><i class="fab fa-jedi-order"></i>Редактирование пользователя</li>
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
                    <form action="<?= ADMIN; ?>/user/edit" method="post" data-toggle="validator">
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="login">Логин</label>
                                <input type="text" class="form-control" name="login" id="login"
                                       value="<?= h($user->login); ?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Введите пароль, если хотите его изменить">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="<?= h($user->name); ?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="<?= h($user->email); ?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="address">Адрес</label>
                                <input type="text" class="form-control" name="address" id="address"
                                       value="<?= h($user->address); ?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label>Роль</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="user" <?php if ($user->role == 'user') echo 'selected'; ?>>
                                        Пользователь
                                    </option>
                                    <option value="admin"<?php if ($user->role == 'admin') echo 'selected'; ?>>
                                        Администратор
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="hidden" name="id" value="<?= $user->id; ?>">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
                <h3>Заказы пользователя</h3>
                <div class="box">
                    <div class="box-body">
                        <?php if ($orders): ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Статус</th>
                                        <th>Сумма</th>
                                        <th>Дата создания</th>
                                        <th>Дата изменения</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($orders as $order): ?>
                                        <?php $class = $order['status'] ? 'bg-success' : ''; ?>
                                        <tr class="<?= $class; ?>">
                                            <td><?= $order['id']; ?></td>
                                            <td><?= $order['status'] ? 'Завершён' : 'В работе'; ?></td>
                                            <td><?= $order['sum']; ?> <?= $order['currency']; ?></td>
                                            <td><?= $order['date']; ?></td>
                                            <td><?= $order['update_at']; ?></td>
                                            <td><a href="<?= ADMIN; ?>/Order/view?id=<?= $order['id']; ?>"><i
                                                        class="fas fa-eye"></i></a> <a class="delete"
                                                                                       href="<?= ADMIN; ?>/Order/delete?id=<?= $order['id']; ?>"><i
                                                        class="fas fa-times-circle text-danger"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                            <div class="text-center">
                                <p>(<?= count($orders); ?> заказа(ов) из <?= $count; ?>)</p>
                                <?php if ($pagination->countPages > 1): ?>
                                    <?= $pagination; ?>
                                <?php endif; ?>
                            </div>
                        <?php else: ?>
                            <p class="text-danger">Пользователь пока ничего не заказал</p>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


