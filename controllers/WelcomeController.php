<?php

namespace app\controllers;

use yii\web\Controller;

class WelcomeController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->identity->username == 'admin') {
            return $this->render('admin');
        }
        return $this->render('index');
    }
}
