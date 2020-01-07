<?php

use app\widjet\currency\Currency;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/">
    <?= $this->getMeta(); ?>
    <link rel="shortcut icon" href="/public/img/favicon.ico)" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,400,300&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/elastislide.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/flexslider.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/public/megamenu/css/style.css">
    <link rel="stylesheet" href="/public/megamenu/css/ionicons.min.css">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<header>
    <div class="menu-top">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-top"
                            aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu-top">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Free Shipping Over $50</a></li>
                        <li><a href="#">Articles</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="flag"><img
                                            src="img/flag.jpg" alt=""></span>English <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">France</a></li>
                                <li><a href="#">Russia</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                        <?php new Currency(); ?>
                    </ul>


                    <ul class="nav navbar-nav navbar-right">

                        <?php if (!empty($_SESSION['user'])) : ?>
                            <li><a href="#">Здравствуйте, <?= h($_SESSION['user']['name']); ?></a></li>
                            <li><a href="user/logout">Выход</a></li>
                        <?php else: ?>
                        <li><a class="" href="user/login">Login </a>
                            <?php endif; ?>

                        </li>
                        <li><a href="user/signup">Signup</a></li>
                        <li><a href="cart/show" onclick="getCart(); return false;" class="btn-red"><span
                                        class="glyphicon glyphicon-shopping-cart"></span>
                                <?php if (!empty($_SESSION['cart'])): ?>
                                    <span class="simpleCart_total"><?= $_SESSION['cart.currency']['symbol_left'] . ' ' . $_SESSION['cart.sum'] ?></span>
                                <?php else: ?>
                                    <span class="simpleCart_total">Empty cart</span>
                                <?php endif; ?>
                            </a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div><!-- /.menu-top -->

    <section class="menu-carousel">
        <div id="carousel" class="carousel fade" data-ride="carousel">
            <div class="main-menu">
                <nav class="navbar navbar-inverse">
                    <div class="container">
                        <div class="main-menu-bg">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <!--                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"-->
                                <!--                                        data-target="#main-menu" aria-expanded="false">-->
                                <!--                                    <span class="sr-only">Toggle navigation</span>-->
                                <!--                                    <span class="icon-bar"></span>-->
                                <!--                                    <span class="icon-bar"></span>-->
                                <!--                                    <span class="icon-bar"></span>-->
                                <!--                                </button>-->
                                <a class="navbar-brand" href="<?= PATH; ?>"><img src="img/logo.png"
                                                                                 alt="StyleTour"><span>StyleTour</span></a>
                                <div class="menu-container">
                                    <div class="menu">
                                        <?php new \app\widjet\menu\Menu([
                                            'tpl' => WWW . '/menu/menu.php',
                                            'container' => 'ul',

                                        ]); ?>
                                        <i class="search glyphicon glyphicon-search"></i>
                                    </div>
                                    <div class="nav navbar-nav navbar-right">
                                        <form class="navbar-form navbar-left" role="search" method="get" action="search"
                                              autocomplete="off">
                                            <div class="input-group">
                                                <input type="text" class="form-control typeahead" id="typeahead"
                                                       name="s"
                                                       placeholder="Search">
                                                <span class="input-group-btn">
													<button type="submit" class="btn btn-default" name="go"><i
                                                                class="glyphicon glyphicon-search"></i></button>
												</span>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <!--                            <div class="collapse navbar-collapse" id="main-menu">-->


                            <!--                                <div class="nav navbar-nav navbar-right">-->
                            <!--                                    <form class="navbar-form navbar-left" role="search" method="get" action="search"-->
                            <!--                                          autocomplete="off">-->
                            <!--                                        <div class="input-group">-->
                            <!--                                            <input type="text" class="form-control typeahead" id="typeahead" name="s"-->
                            <!--                                                   placeholder="Search">-->
                            <!--                                            <span class="input-group-btn">-->
                            <!--													<button type="submit" class="btn btn-default" name="go"><i-->
                            <!--                                                                class="glyphicon glyphicon-search"></i></button>-->
                            <!--												</span>-->
                            <!--                                        </div>-->
                            <!--                                    </form>-->
                            <!--                                </div>-->
                            <!--                            </div><!-- /.navbar-collapse -->-->
                            <!--                            <i class="search glyphicon glyphicon-search"></i>-->
                        </div><!-- /.main-menu-bg -->
                    </div><!-- /.container -->
                </nav>
            </div><!-- /.main-menu -->

            <!-- Indicators -->
            <div class="carousel-indicators-wrap">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                </ol>
            </div><!-- /.carousel-indicators-wrap -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <!-- <img src="img/slider.jpg" alt=""> -->
                    <div class="bgslide" style="background-image: url(img/slider.jpg);"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Women's Apparel</h1>
                            <h3>T-Shirts, Dress Shirts, Tanks, Pants and More...</h3>
                            <a href="#" class="btn-red">Shop Women’s Apparel</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- <img src="img/slider.jpg" alt=""> -->
                    <div class="bgslide" style="background-image: url(img/slider1.jpg);"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Women's Apparel 2</h1>
                            <h3>T-Shirts, Dress Shirts, Tanks, Pants and More...</h3>
                            <a href="#" class="btn-red">Shop Women’s Apparel</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- <img src="img/slider.jpg" alt=""> -->
                    <div class="bgslide" style="background-image: url(img/slider2.jpg);"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Women's Apparel 3</h1>
                            <h3>T-Shirts, Dress Shirts, Tanks, Pants and More...</h3>
                            <a href="#" class="btn-red">Shop Women’s Apparel</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- <img src="img/slider.jpg" alt=""> -->
                    <div class="bgslide" style="background-image: url(img/slider3.jpg);"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Women's Apparel 4</h1>
                            <h3>T-Shirts, Dress Shirts, Tanks, Pants and More...</h3>
                            <a href="#" class="btn-red">Shop Women’s Apparel</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
</header>
<section class="main-slogan">
    <div class="container">
        <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h1>
    </div>
</section>
<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if (isset($_SESSION['error'])): ?>
                                    <div class="alert alert-danger">
                                        <?php echo $_SESSION['error'];
                                        unset($_SESSION['error']); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (isset($_SESSION['success'])): ?>
                                    <div class="alert alert-success">
                                        <?php echo $_SESSION['success'];
                                        unset($_SESSION['success']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?= $content; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bottom-slider">
    <div class="container">
        <ul id="elastislide" class="elastislide-list">
            <li><a href="#"><img src="img/partner1.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner5.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner6.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner4.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner5.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner6.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner1.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner4.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner1.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner6.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner5.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner4.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner1.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner4.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner1.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner6.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner5.jpg" alt="partner1"/></a></li>
            <li><a href="#"><img src="img/partner4.jpg" alt="partner1"/></a></li>
        </ul>
    </div>
</div><!-- /.bottom-slider -->

<footer>
    <div class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <h5>Help &amp; Info</h5>
                            <ul>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">Returns &amp; Refunds</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Track your Order</a></li>
                                <li><a href="#">Reglaze Service</a></li>
                                <li><a href="#">Lens Price Comparison</a></li>
                                <li><a href="#">A - Z Brands</a></li>
                                <li><a href="#">FAQ's</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h5>Brands we sell</h5>
                            <ul>
                                <li><a href="#">Noosa Amsterdam</a></li>
                                <li><a href="#">Cream Clothing</a></li>
                                <li><a href="#">Taschendieb</a></li>
                                <li><a href="#">Hermes paris</a></li>
                                <li><a href="#">D&amp;G Fashion</a></li>
                            </ul>
                        </div>
                        <div class="clearfix visible-xs-block visible-sm-block"></div>
                        <div class="col-md-3 col-xs-6">
                            <h5>Care &amp; advice</h5>
                            <ul>
                                <li><a href="#">Prescription Information</a></li>
                                <li><a href="#">Lenses &amp; Coatings</a></li>
                                <li><a href="#">PD Measurement</a></li>
                                <li><a href="#">Style Advice</a></li>
                                <li><a href="#">Size Guide</a></li>
                                <li><a href="#">Shopping Guide</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Store</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Cookies</a></li>
                                <li><a href="#">Find us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h5>Follow us</h5>
                    <div class="social-icons">
                        <a href="#"><img src="img/fb.jpg" alt=""></a>
                        <a href="#"><img src="img/tw.jpg" alt=""></a>
                        <a href="#"><img src="img/fl.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.footer-menu -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>&copy 2014 Fashion Store. All Rights Reserved.</p>
                </div>
                <div class="col-md-8 text-right pay">
                    <a href="#"><img src="img/pay1.jpg" alt=""></a>
                    <a href="#"><img src="img/pay2.jpg" alt=""></a>
                    <a href="#"><img src="img/pay3.jpg" alt=""></a>
                    <a href="#"><img src="img/pay4.jpg" alt=""></a>
                    <a href="#"><img src="img/pay5.jpg" alt=""></a>
                    <a href="#"><img src="img/pay6.jpg" alt=""></a>
                    <a href="#"><img src="img/pay7.jpg" alt=""></a>
                    <a href="#"><img src="img/pay8.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div><!-- /.footer-copyright -->
</footer>
<!--modal window-->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Корзина</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                <a href="cart/view" type="button" class="btn btn-primary">Оформить заказ</a>
                <button type="button" class="btn btn-danger del-all" onclick="clearCart()">Очистить корзину</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--end modal window-->
<div class="preloader">
    <img src="/public/img/ring.svg" alt="Loader">
</div>
<?php $curr = \dshop\App::$app->getProperty('currency'); ?>
<script>
    let path = '<?=PATH;?>',
        course = <?=$curr['value'];?>,
        symbolLeft = '<?=$curr['symbol_left'];?>',
        symbolRight = '<?=$curr['symbol_right'];?>';
</script>
<script src="/public/js/modernizr.custom.17475.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/validator.js"></script>
<script src="/public/js/jquery.elastislide.js"></script>
<script src="/public/js/imagezoom.js"></script>
<script defer src="/public/js/jquery.flexslider.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<script type="text/javascript">
    $(function () {

        let menu_ul = $('.menu_drop > li > ul'),
            menu_a = $('.menu_drop > li > a');

        menu_ul.hide();

        menu_a.click(function (e) {
            e.preventDefault();
            if (!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true, true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true, true).slideUp('normal');
            }
        });

    });
</script>
<script src="/public/megamenu/js/megamenu.js"></script>
<script src="/public/js/typeahead.bundle.js"></script>
<script src="/public/js/scripts.js"></script>
</body>
</html>

