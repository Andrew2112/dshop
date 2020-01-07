<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
               <li><a href="<?=PATH;?>">Home</a></li>
                <li>Search "<?=h($query)?>"</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--start-single-->
<?php if ($products): ?>
    <?php $curr = \dshop\App::$app->getProperty('currency');?>

    <div class="products-row clearfix">
        <?php foreach ($products as $product): ?>
            <div class="col-sm-4">
                <div class="product">
                    <div class="product-favorites">
                        <span class="glyphicon glyphicon-heart"></span>
                    </div><!-- /.product-favorites -->
                    <div class="product-img">
                        <a href="product/<?= $product->alias; ?>"><img src="img/<?= $product->img; ?>"
                                                                   alt="CREAM JANE JEANS DRESS"></a>
                    </div><!-- /.product-img -->
                    <p class="product-title">
                        <a href="product/<?= $product->alias; ?>"><?= $product->title; ?></a>
                    </p>
                    <p class="product-desc">
                        <?= $product->description; ?>
                    </p>
                    <div class="product-buy">
                        <p class="product-old-price">
                            <?php if ($product->old_price): ?>
                                Old Price:<?=$curr['symbol_left'];?>    <small>
                                    <del><?= $product->old_price*$curr['value']; ?></del><?=$curr['symbol_right'];?>
                                </small>
                            <?php endif; ?>
                        </p>
                        <p class="product-price">
                            Price: <?=$curr['symbol_left'];?> <?= $product->price*$curr['value']; ?><?=$curr['symbol_right'];?>
                        </p>

                        <a href="cart/add?id=<?= $product->id; ?>" class="btn btn-default add-to-cart-link " data-id="<?=$product->id;?>">add to
                            cart</a>

                    </div><!-- /.product-buy -->
                </div><!-- /.product -->
            </div>
        <?php endforeach; ?>

    </div><!-- /.products-row -->


<?php endif; ?>
