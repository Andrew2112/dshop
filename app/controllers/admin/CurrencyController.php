<?php


namespace app\controllers\admin;


use app\models\admin\Currency;

class CurrencyController extends AppController
{
    public function indexAction()
    {
        $currencies = \R::findAll('currency');
        $this->setMeta('Валюты магазина');
        $this->set(compact('currencies'));

    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $currency = new Currency();
            $data = $_POST;
            $currency->load($data);
            $currency->attributes['base'] = $currency->attributes['base'] ? '1' : '0';
            if (!$currency->validate($data)) {
                $currency->getErrors();
                redirect();
            }
            if ($currency->save('currency')) {
                $_SESSION['success'] = 'Валюта добавлена';
                redirect();
            }
        }
        $this->setMeta('Новая валюта');
    }

    public function editAction()
    {
        if (!empty($_POST)) {
            $id = $this->getRequestId(false);
            $currency = new Currency();
            $data = $_POST;
            $currency->load($data);
            $currency->attributes['base'] = $currency->attributes['base'] ? '1' : '0';
            if (!$currency->validate($data)) {
                $currency->getErrors();
                redirect();
            }
            if ($currency->update('currency', $id)) {
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }
        $id = $this->getRequestId();
        $currency = \R::load('currency', $id);
        $this->set(compact('currency'));
        $this->setMeta("Редактирование валюты {$currency->title}");
    }

    public function deleteAction()
    {
        $id = $this->getRequestId();
        $currency = \R::load('currency', $id);
        \R::trash($currency);
        $_SESSION['success'] = 'Изменения сохранены';
        redirect();
    }
}
