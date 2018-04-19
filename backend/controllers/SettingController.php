<?php

namespace backend\controllers;

use common\helpers\FunctionHelper;
use common\models\Image;
use common\models\User;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use backend\controllers\base\MiddleController;
use common\models\Setting;

/**
 * SettingController implements the CRUD actions for Setting model.
 */
class SettingController extends MiddleController
{
    /**
     * Lists all Setting models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Setting::find();

        $render = 'index-senior';

        if ($this->user['permission'] != User::ROLE_SENIOR) {
            $query->where(['>', 'released', 0]);
            $render = 'index';
        }

        $settings = $query->all();

        return $this->render($render, [
            'settings' => $settings,
            'user' => $this->user
        ]);
    }

    /**
     * Displays a single Setting model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Setting model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Setting();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Setting model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $images = Image::find()->where(['=', 'setting_id', $id])->all();

        if ($model->load(Yii::$app->request->post())) {

            $model->slug = FunctionHelper::slug($model->title) . '-' . $model->id;

            foreach ($images as $key => $value) {
                if (!in_array($value['avatar'], json_decode($model->images))) {
                    $value->delete();
                }
            }

            $images_old = ArrayHelper::map($images, 'id', 'avatar');

            foreach (json_decode($model->images) as $key => $value) {

                if (!in_array($value, $images_old)) {
                    if ($key == 0) {
                        $model->avatar = $value;
                    }

                    $image = new Image();

                    $image->avatar = $value;
                    $image->setting_id = $model->id;

                    $image->save();
                }
            }

            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        $render = 'update-senior';

        if ($this->user['permission'] != User::ROLE_SENIOR) {
            $render = 'update';
        }

        return $this->render($render, [
            'model' => $model,
            'images' => $images
        ]);
    }

    /**
     * Deletes an existing Setting model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Setting model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Setting the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Setting::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('backend', 'The requested page does not exist.'));
    }
}
