<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 2/2/2018
 * Time: 6:02 PM
 */

namespace backend\controllers;

use common\helpers\FunctionHelper;
use common\models\Album;
use common\models\Category;
use common\models\Image;
use common\models\Post;
use common\models\Product;
use common\models\Supporter;
use Yii;
use yii\web\Response;
use yii\web\Controller;
use common\models\PhotoLocation;
use common\models\Setting;
use common\models\Page;
use common\models\Course;
/**
 * AjaxController
 */
class AjaxController extends Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    /**
     * @param id
     * @param table
     * @param api
     * @return bool
     */
    public function actionRelease()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id']) && isset($post['table']) && isset($post['api'])) {
            $model = null;

            switch ($post['table']) {
                case 'page':
                    $model = Page::findOne($post['id']);

                    break;
                case 'photo-location':
                    $model = PhotoLocation::findOne($post['id']);

                    break;
                case 'setting':
                    $model = Setting::findOne($post['id']);

                    break;
                default:
                    break;
            }

            if ($model) {
                $model->released = $model->released ? 0 : 1;
                return $model->save();
            }

        }

        return false;
    }

    /**
     * @param id
     * @param table
     * @param api
     * @return bool
     */
    public function actionEnableColumn()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id']) && isset($post['table']) && isset($post['api']) && isset($post['column'])) {
            $model = null;

            switch ($post['table']) {
                case 'category':
                    $model = Category::findOne($post['id']);

                    break;
                case 'post':
                    $model = Post::findOne($post['id']);

                    break;
                case 'setting':
                    $model = Setting::findOne($post['id']);

                    break;
                case 'product':
                    $model = Product::findOne($post['id']);
                    break;
                case 'supporter':
                    $model = Supporter::findOne($post['id']);
                    break;
                case 'course':
                    $model = Course::findOne($post['id']);
                    break;
                default:
                    break;
            }

            if ($model) {
                $model[$post['column']] = $model[$post['column']] ? 0 : 1;
                return $model->save();
            }
        }

        return false;
    }

    public function actionUploadImage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['images']) && isset($post['id']) && isset($post['column_parent_id'])) {
            $images = json_decode($post['images']);

            foreach ($images as $key => $value) {
                $image = new Image();

                $image->title = $value;
                $image->avatar = '/uploads/advertises/' . $value;
                $image->status = 1;
                $image[$post['column_parent_id']] = $post['id'];

                $image->save();
            }

            return true;

        }

        return false;

    }

    public function actionDeleteImage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id'])) {
            $image = Image::findOne($post['id']);

            return $image->delete();

        }

        return false;

    }

    /**
     * @return bool
     */
    public function actionSerial()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['serialize'])) {
            $serialize = json_decode($post['serialize']);

            foreach ($serialize as $key => $item) {
                $this->save_serial($item, $key + 1, null);
            }

            return true;
        }

        return false;
    }

    private function save_serial($item, $serial, $parent)
    {
        $array = get_object_vars($item);

        $category = Category::findOne($array['id']);

        $category->serial = $serial;

        $category->parent_id = $parent;

        $category->save();

        if (count($array) == 2) {
            foreach ($array['children'] as $key_c => $item_c) {
                $this->save_serial($item_c, $key_c + 1, $array['id']);
            }
        }
    }

    /**
     * @param $page_id
     */
    public function actionGetCategoriesByPageId($page_id)
    {
        $categories = Category::find()
            ->where(['page_id' => $page_id])
            ->orderBy('id DESC')
            ->all();

        echo "<option value=''>" . Yii::t('backend', '-- Select category --') . "</option>";

        if (!empty($categories)) {
            FunctionHelper::show_categories_select($categories);
        }
    }

    public function actionEditColumn()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['name']) && isset($post['pk']) && isset($post['value'])) {

            $table_column = explode('#', $post['name']);

            if (count($table_column) === 2) {
                $table = $table_column[0];
                $column = $table_column[1];

                $model = null;

                switch ($table) {
                    case 'category':
                        $model = Category::findOne($post['pk']);
                        break;
                    case 'post':
                        $model = Post::findOne($post['pk']);
                        break;
                    case 'setting':
                        $model = Setting::findOne($post['pk']);
                        break;
                    case 'image':
                        $model = Image::findOne($post['pk']);
                        break;
                    case 'supporter':
                        $model = Supporter::findOne($post['pk']);
                        break;
                    default:
                        break;
                }

                if ($model) {
                    $model[$column] = $post['value'];
                    return $model->save();
                }

            }
        }

        return $post;
    }

    /**
     * @return array|bool
     */
    public function actionGetProductById()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id'])) {
            $product = Product::find()->joinWith('images0')->where(['=', 'product.id', $post['id']])->asArray()->one();

            if ($product) {
                $albums = Album::find()->joinWith('images')->where(['=', 'album.product_id', $post['id']])->asArray()->all();

                return [$product, $albums];
            }
        }

        return false;
    }

    public function actionGetContentImage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id'])) {
            $image = Image::findOne($post['id']);

            return $image;
        }

        return false;
    }

    public function actionEditContentImage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii:: $app->request->post();

        if (isset($post['id']) && isset($post['content'])) {
            $image = Image::findOne($post['id']);

            $image->content = $post['content'];

            return $image->save();
        }

        return false;
    }

}