<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\controllers\base\AdminController;
use common\models\GeneralInformation;

/**
 * GeneralInformationController implements the CRUD actions for GeneralInformation model.
 */
class GeneralInformationController extends AdminController
{
    /**
     * Lists all GeneralInformation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $general = GeneralInformation::findOne(1);

        if ($general->load(Yii::$app->request->post()) && $general->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('index', [
            'general' => $general
        ]);
    }

    /**
     * Finds the GeneralInformation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return GeneralInformation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = GeneralInformation::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('backend', 'The requested page does not exist.'));
    }
}
