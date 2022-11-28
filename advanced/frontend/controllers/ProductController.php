<?php
namespace frontend\controllers;
use yii\web\Controller;

class ProductController extends Controller{

    public function actionIndex(){
        $productview = 'category';
        return $this->render('index',['productview'=>$productview]);
    }

    public function actionDetail(){
        return $this->render('detail');
    }

}