<?php

namespace backend\controllers;

use backend\controllers\base\AdminController;
use backend\models\InformationForm;

class UserController extends AdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     */
    public function actionInformation()
    {
        $model = new InformationForm();
        $model->username = $this->user['username'];
        $model->last_name = $this->user['last_name'];
        $model->first_name = $this->user['first_name'];
        $model->phone = $this->user['phone'];

        return $this->render('information', [
            'model' => $model
        ]);
    }

}
