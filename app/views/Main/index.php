<!--about-starts-->
<?php if ($brands): ?>
    <div class="about">
        <div class="container">
            <div class="about-top grid-1">
                <?php foreach ($brands as $brand) : ?>
                    <div class="col-sm-4 ">
                        <figure class="effect-bubba">
                            <img class="img-responsive front " src="public/img/<?= $brand->img; ?>"
                                 alt="Responsive image"/>
                            <span class="back text-center"><h2><?= $brand->title; ?></h2><br> <p><?= $brand->description; ?></p></i></span>
                        </figure>
                    </div>
                <?php endforeach; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!--about-end-->
<div class="content">
    <h3>Items on Demand</h3>
    <?php if ($hits): ?>
    <?php $curr = \dshop\App::$app->getProperty('currency');?>

        <div class="products-row clearfix">
            <?php foreach ($hits as $hit): ?>
                <div class="col-sm-4">
                    <div class="product">
                        <div class="product-favorites">
                            <span class="glyphicon glyphicon-heart"></span>
                        </div><!-- /.product-favorites -->
                        <div class="product-img">
                            <a href="product/<?= $hit->alias; ?>"><img src="img/<?= $hit->img; ?>"
                                                                       alt="CREAM JANE JEANS DRESS"></a>
                        </div><!-- /.product-img -->
                        <p class="product-title">
                            <a href="product/<?= $hit->alias; ?>"><?= $hit->title; ?></a>
                        </p>
                        <p class="product-desc">
                            <?= $hit->description; ?>
                        </p>
                        <div class="product-buy">
                            <p class="product-old-price">
                                <?php if ($hit->old_price): ?>
                                    Old Price:<?=$curr['symbol_left'];?>    <small>
                                        <del><?= $hit->old_price*$curr['value']; ?></del><?=$curr['symbol_right'];?>
                                    </small>
                                <?php endif; ?>
                            </p>
                            <p class="product-price">
                                Price: <?=$curr['symbol_left'];?> <?= $hit->price*$curr['value']; ?><?=$curr['symbol_right'];?>
                            </p>

                            <a href="cart/add?id=<?= $hit->id; ?>" class="btn btn-default add-to-cart-link " data-id="<?=$hit->id;?>">add to
                                cart</a>

                        </div><!-- /.product-buy -->
                    </div><!-- /.product -->
                </div>
            <?php endforeach; ?>

        </div><!-- /.products-row -->

        <h3>Featured Items</h3>
    <?php endif; ?>
    <!-- .products-row -->
    <div class="banner-row clearfix">
        <div class="col-sm-4">
            <a href=""><img src="img/content-banner1.jpg"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/content-banner2.jpg"></a>
        </div>
        <div class="col-sm-4">
            <a href=""><img src="img/content-banner3.jpg"></a>
        </div>
    </div><!-- .banner-row -->

</div> <!-- /.content -->
