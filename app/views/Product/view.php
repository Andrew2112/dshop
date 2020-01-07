<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <?= $breadcrumbs; ?>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--start-single-->
<div class="single contact">
    <div class="container">
        <div class="single-main">
            <div class="col-md-12 single-main-left">
                <div class="sngl-top">
                    <div class="col-md-5 single-top-left gallery">

                        <?php if ($gallery): ?>
                            <div class="flexslider">
                                <ul class="slides">
                                    <?php foreach ($gallery as $item) : ?>
                                        <li data-thumb="/public/img/<?= $item->img; ?>">
                                            <div class="thumb-image"><img src="/public/img/<?= $item->img; ?>"
                                                                          data-imagezoom="true"
                                                                          class="img-responsive single-img"
                                                                          alt=""/></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                        <?php else: ?>
                            <img src="/public/img/<?= $product->img; ?>" alt="" class="single-img">
                        <?php endif; ?>

                    </div>
                    <?php
                    $curr = \dshop\App::$app->getProperty('currency');
                    $cats = \dshop\App::$app->getProperty('cats');
                    ?>
                    <div class="col-md-7 single-top-right">
                        <div class="single-para simpleCart_shelfItem">
                            <h2><?= $product->title; ?></h2>


                            <h5 class="item_price" id="base-price"
                                data-base="<?= $product->price * $curr['value']; ?>">
                                Price: <?= $curr['symbol_left']; ?> <?= $product->price * $curr['value']; ?><?= $curr['symbol_right']; ?></h5>
                            <?php if ($product->old_price): ?>
                                <small>
                                    Old Price:
                                    <del><?= $curr['symbol_left']; ?> <?= $product->old_price * $curr['value']; ?><?= $curr['symbol_right']; ?></del>
                                </small>
                            <?php endif; ?>
                            <p><?= $product->content; ?></p>
                            <?php if ($mods) : ?>
                                <div class="available">
                                    <ul>
                                        <li>Цвет
                                            <select>
                                                <option value="">Выбрать размер</option>
                                                <?php foreach ($mods as $modification): ?>
                                                    <option data-title="<?= $modification->title; ?>"
                                                            data-price="<?= $modification->price * $curr['value']; ?>"
                                                            value="<?= $modification->id; ?>"><?= $modification->title; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </li>

                                        <div class="clearfix"></div>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <ul class="tag-men">
                                <li><span>Категория</span>
                                    <span>: <a href="category/<?= $cats[$product->category_id]['alias']; ?>"><?= $cats[$product->category_id]['title']; ?></a></span>
                                </li>

                            </ul>
                            <div class="quantity">
                                <input type="number" size="4" value="1" name="quantity" min="1" step="1"
                                       class="input-text qty text">
                            </div>
                            <a id="productAdd" data-id="<?= $product->id; ?>" href="cart/add?id=<?= $product->id; ?>"
                               class="btn btn-default add-to-cart-link">Добавить в корзину</a>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <!-------------Akkordeon-->
                <div class="panel-group" id="accordion">
                    <!-- 1 панель -->
                    <div class="panel panel-default">
                        <!-- Заголовок 1 панели -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <img src="/public/img/arrow.png" alt=""> ОПИСАНИЕ</a>
                            </h4>
                        </div>
                        <!-------------Akkordeon-->
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <!-- Содержимое 1 панели -->
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">
                                    <!-- 1 панель -->
                                    <div id="collapseOne_inner" class="panel-collapse collapse in">
                                        <p><?= $product->description; ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 панель -->
                    <div class="panel panel-default">
                        <!-- Заголовок 2 панели -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <img src="/public/img/arrow.png" alt=""> ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <!-- Содержимое 2 панели -->
                            <div class="panel-body">
                                <p><?= $product->content; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- 3 панель -->
                    <div class="panel panel-default">
                        <!-- Заголовок 3 панели -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><img
                                            src="/public/img/arrow.png" alt=""> УСЛОВИЯ ОПЛАТЫ И ДОСТАВКИ</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <!-- Содержимое 3 панели -->
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi
                                    aspernatur autem culpa dignissimos dolorem ea esse id impedit, libero nemo nisi
                                    praesentium qui quidem tempore ut vero voluptatem?</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi
                                    aspernatur autem culpa dignissimos dolorem ea esse id impedit, libero nemo nisi
                                    praesentium qui quidem tempore ut vero voluptatem?</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad animi
                                    aspernatur autem culpa dignissimos dolorem ea esse id impedit, libero nemo nisi
                                    praesentium qui quidem tempore ut vero voluptatem?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if ($related): ?>
                    <div class="latestproducts">
                        <div class="product-one">
                            <h3>Вам может понравиться</h3>
                            <?php foreach ($related as $item): ?>
                                <div class="col-md-4 product-left p-left">

                                    <div class="product">
                                        <div class="product-favorites">
                                            <span class="glyphicon glyphicon-heart"></span>
                                        </div><!-- /.product-favorites -->
                                        <div class="product-img">
                                            <a href="product/<?= $item['alias']; ?>"><img src="img/<?= $item['img']; ?>"
                                                                                          alt="CREAM JANE JEANS DRESS"></a>
                                        </div><!-- /.product-img -->
                                        <p class="product-title">
                                            <a href="product/<?= $item['alias']; ?>"><?= $item['title']; ?></a>
                                        </p>
                                        <p class="product-desc">
                                            <?= $item['description']; ?>
                                        </p>
                                        <div class="product-buy">
                                            <p class="product-old-price">
                                                <?php if ($item['old_price']): ?>
                                                    Old Price:<?= $curr['symbol_left']; ?>    <small>
                                                        <del><?= $item['old_price'] * $curr['value']; ?></del><?= $curr['symbol_right']; ?>
                                                    </small>
                                                <?php endif; ?>
                                            </p>
                                            <p class="product-price">
                                                Price: <?= $curr['symbol_left']; ?> <?= $item['price'] * $curr['value']; ?><?= $curr['symbol_right']; ?>
                                            </p>

                                            <a href="cart/add?id=<?= $item['id']; ?>" data-id="<?= $item['id']; ?>"
                                               class="btn btn-default add-to-cart-link">add to
                                                cart</a>

                                        </div><!-- /.product-buy -->
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>


            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end-single-->
<div class="container">
    <?php if ($recentlyViewed): ?>
        <div class="latestproducts">
            <div class="product-one">
                <h3>Недавно просмотренные</h3>
                <?php foreach ($recentlyViewed as $item): ?>
                    <div class="col-md-4 product-left p-left">

                        <div class="product">
                            <div class="product-favorites">
                                <span class="glyphicon glyphicon-heart"></span>
                            </div><!-- /.product-favorites -->
                            <div class="product-img">
                                <a href="product/<?= $item['alias']; ?>"><img src="img/<?= $item['img']; ?>"
                                                                              alt="CREAM JANE JEANS DRESS"></a>
                            </div><!-- /.product-img -->
                            <p class="product-title">
                                <a href="product/<?= $item['alias']; ?>"><?= $item['title']; ?></a>
                            </p>
                            <p class="product-desc">
                                <?= $item['description']; ?>
                            </p>
                            <div class="product-buy">
                                <p class="product-old-price">
                                    <?php if ($item['old_price']): ?>
                                        Old Price:<?= $curr['symbol_left']; ?>    <small>
                                            <del><?= $item['old_price'] * $curr['value']; ?></del><?= $curr['symbol_right']; ?>
                                        </small>
                                    <?php endif; ?>
                                </p>
                                <p class="product-price">
                                    Price: <?= $curr['symbol_left']; ?> <?= $item['price'] * $curr['value']; ?><?= $curr['symbol_right']; ?>
                                </p>

                                <a href="cart/add?id=<?= $item['id']; ?>" data-id="<?= $item['id']; ?>"
                                   class="btn btn-default add-to-cart-link">add to
                                    cart</a>

                            </div><!-- /.product-buy -->
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    <?php endif; ?>
</div>
