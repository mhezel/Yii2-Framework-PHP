<?php
namespace frontend\controllers;

use yii\web\Controller;


class TestController extends Controller{
    
    public function actionServer(){
        echo "Testing the server";
    }

    public function actionTesting(){

        $number = 123456;
        $name = 'Microphone';
        $array = ['mic','test','video','testing'];
        return $this->render('testing',['number'=>$number,'name'=>$name,'array'=>$array]);
        
    }
}
