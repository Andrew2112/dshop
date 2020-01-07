<?php

namespace app\controllers;

use dshop\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $brands = \R::find('brand', 'LIMIT 3');
        $hits = \R::find('product', "hit = '1' AND status='1' LIMIT 9");

        $this->setMeta('Главная страница', 'Описание', 'ключевики');
        $this->set(compact('brands', 'hits'));
    }

}