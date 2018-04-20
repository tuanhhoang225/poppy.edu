<?php

namespace backend\controllers;

use Yii;
use common\models\Course;
use common\models\base\CourseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\TeacherCourse;
use common\models\Image;
use common\helpers\FunctionHelper;
/**
 * CourseController implements the CRUD actions for Course model.
 */
class CourseController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Course models.
     * @return mixed
     */
    public function actionIndex()
    {
        $courses = Course::find()->all();
        return $this->render('index', [
            'courses' => $courses
        ]);
    }

    /**
     * Displays a single Course model.
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
     * Creates a new Course model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Course();
        $teachers = new TeacherCourse();
        if ($model->load(Yii::$app->request->post()) && $teachers->load(Yii::$app->request->post())) {
            if ($model->save()) {
                foreach (json_decode($model->images) as $key => $value) {
                    if ($key == 0) {
                        $model->avatar = $value;
                    }

                    $img = new Image();
                    $img->avatar = $value;
                    $img->teacher_id = $model->id;
                    $img->save();
                }

                $model->slug = FunctionHelper::slug($model->title) . '=' . $model->id;
                $model->save();
                $teachers->course_id = $model->id;
                $teachers->save();
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'teachers'=>$teachers
        ]);
    }

    /**
     * Updates an existing Course model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $teachers = TeacherCourse::find()->where(['=','course_id',$model->id])->one();
        $images = Image::find()->where(['=', 'course_id', $id])->all();

        if ($model->load(Yii::$app->request->post()) && $teachers->load(Yii::$app->request->post())) {
            $model->save();
            $teachers->save();
            return $this->redirect(['index']);
        }
        foreach ($images as $key => $value) {
            $value->delete();
        }

        foreach (json_decode($model->images) as $key => $value) {
            $image = new Image();

            $image->avatar = $value;
            $image->course_id = $id;

            $image->save();
        }
        return $this->render('update', [
            'model' => $model,
            'teachers'=>$teachers,
            'images' => $images
        ]);
    }

    /**
     * Deletes an existing Course model.
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
     * Finds the Course model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Course the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Course::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
