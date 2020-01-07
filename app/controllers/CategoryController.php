<?php

namespace app\controllers;


use app\models\Breadcrumbs;
use app\models\Category;
use app\widjet\filter\Filter;
use dshop\App;
use dshop\libs\Pagination;
use mysql_xdevapi\Exception;

class CategoryController extends AppController
{
    public $layout = 'category';
    public function viewAction()
    {
        $alias = $this->route['alias'];
        $category = \R::findOne('category', 'alias=?', [$alias]);
        if (!$category) {
            throw new Exception('Страница не найдена', 404);
        }


        //breadcrumbs
        $breadcrumbs = Breadcrumbs::getBreadcrumbs($category->id);

        $cat_model = new Category();
        $ids = $cat_model->getIds($category->id);
        $ids = !$ids ? $category->id : $ids . $category->id;

        //pagination
        $page=isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage=App::$app->getProperty('pagination');

        //find filters ajax
        $sql_part='';
        if (!empty($_GET['filter'])){
            $filter=Filter::getFilter();
            if ($filter){
                $cnt=Filter::getCountGroups($filter);
                $sql_part="AND id IN (SELECT product_id FROM attribute_product WHERE attr_id IN($filter)GROUP BY product_id HAVING COUNT(product_id)=$cnt) ";
            }

        }


        $total=\R::count('product', "category_id IN ($ids)  $sql_part");
        $pagination=new Pagination($page, $perpage, $total);
        $start=$pagination->getStart();


        $products = \R::find('product', "status='1' AND category_id IN ($ids)  $sql_part LIMIT $start, $perpage");

        if ($this->isAjax()){
            $this->loadView('filter', compact('products','pagination', 'total'));
            die;
        }

        $this->setMeta($category->title, $category->description, $category->keywords);
        $this->set(compact('products', 'breadcrumbs', 'pagination', 'total'));


    }

}