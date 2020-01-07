<?php if (!empty($_SESSION['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Наименование</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($_SESSION['cart'] as $id => $item) : ?>
            <tr>
                <td><a href="product/<?= $item['alias']; ?>"><img src="img/<?= $item['img']; ?>" alt=""></a></td>

                <td><a class="cart-title" href="product/<?= $item['alias']; ?>"><?= $item['title']; ?></a></td>

                <td><?= $item['qty']; ?></td>

                <td><?= $_SESSION['cart.currency']['symbol_left'] . ' ' . $item['price']; ?></td>

                <td><span class="glyphicon glyphicon-remove text-danger del-item" data-id="<?= $id; ?>"
                          aria-hidden="true"></span></td>
                <?php endforeach; ?>
            </tr>

            <tr>
                <td>ИТОГО:</td>
                <td colspan="4" class="text-right cart-qty"><?= $_SESSION['cart.qty']; ?></td>
            </tr>
            <tr>
                <td>НА СУММУ:</td>
                <td colspan="4"
                    class="text-right cart-sum"><?= $_SESSION['cart.currency']['symbol_left'] . ' ' . $_SESSION['cart.sum'] . ' ' . $_SESSION['cart.currency']['symbol_right']; ?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif; ?>
