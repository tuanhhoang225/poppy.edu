<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\controllers\base\AdminController;
use common\models\Category;
use common\models\Post;
use common\helpers\FunctionHelper;
use common\models\SeoTool;
use common\models\Image;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends AdminController
{
    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $posts = Post::find()->joinWith('category')->orderBy('post.id DESC')->all();
        $categories = Category::find()->all();

        return $this->render('index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    /**
     * @param $category_slug
     * @return string
     */
    public function actionPostOfCategory($category_slug)
    {
        $category = Category::find()->where(['=', 'slug', $category_slug])->one();

        $posts = Post::find()->where(['=', 'category_id', $category['id']])->all();

        return $this->render('post-of-category', [
            'posts' => $posts,
            'category' => $category
        ]);
    }

    /**
     * Displays a single Post model.
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
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();
        $seo = new SeoTool();

        if ($model->load(Yii::$app->request->post()) && $seo->load(Yii::$app->request->post())) {

            $seo->save();
            $model->seo_tool_id = $seo->id;

            if ($model->save()) {
                foreach (json_decode($model->images) as $key => $value) {
                    if ($key == 0) {
                        $model->avatar = $value;
                    }

                    $image = new Image();
                    $image->avatar = $value;
                    $image->post_id = $model->id;
                    $image->save();
                }

                $model->slug = FunctionHelper::slug($model->title) . '=' . $model->id;
                $model->save();

                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'seo' => $seo
        ]);
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $seo = SeoTool::findOne($model->seo_tool_id);
        $images = Image::find()->where(['=', 'post_id', $id])->all();

        if ($model->load(Yii::$app->request->post()) && $seo->load(Yii::$app->request->post())) {

            $model->slug = FunctionHelper::slug($model->title) . '=' . $model->id;

            foreach ($images as $key => $value) {
                $value->delete();
            }

            foreach (json_decode($model->images) as $key => $value) {
                if ($key == 0) {
                    $model->avatar = $value;
                }

                $image = new Image();
                $image->avatar = $value;
                $image->post_id = $model->id;
                $image->save();
            }

            $seo->save();

            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'seo' => $seo,
            'images' => $images
        ]);
    }

    /**
     * Deletes an existing Post model.
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
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('backend', 'The requested page does not exist.'));
    }
}
