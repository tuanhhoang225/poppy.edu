<?php
namespace frontend\controllers;

use common\helpers\FunctionHelper;
use common\models\Product;
use Yii;
use yii\base\InvalidParamException;
use yii\data\Pagination;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @param $ct
     * @param $category_id
     * @return array
     */
    protected function search($ct, $category_id)
    {
        $query = null;
        if ($ct) {
            $query = Product::find();

            $ct = explode(',', $ct);

            foreach ($ct as $key => $value) {
                $query->orWhere(['category_id' => $value]);
            }
        } else {

            $fun = new FunctionHelper;
            $categories_id = $fun->get_all_categories_id_children(FunctionHelper::get_categories(), $category_id);

            $query = Product::find()->orWhere(['category_id' => $category_id]);
            foreach ($categories_id as $key => $value) {
                $query->orWhere(['category_id' => $value]);
            }
        }

        $pagination = new Pagination([
            'defaultPageSize' => 9,
            'totalCount' => $query->count(),
        ]);

        $search = $query->offset($pagination->offset)->limit($pagination->limit)
            ->orderBy('product.id DESC')
            ->orderBy('product.featured DESC')
            ->asArray()->all();

        return [
            'search' => $search,
            'pages' => $pagination,
            'ct' => $ct
        ];

    }

    /**
     * @param null $category_slug
     * @param null $content_slug
     * @param null $ct
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionView($category_slug = null, $content_slug = null, $ct = null)
    {

        $this->layout = 'base';

        $category = FunctionHelper::get_category_by_slug($category_slug);

        if (!$category) {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }

        $post = FunctionHelper::get_post_by_slug($content_slug);

        $page = '';


        $search = $this->search($ct, $category['id']);


        switch ($category['page']['key']) {
            case 'news-page':
                if (!$post && $content_slug) {
                    throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
                }

                $page = !$post ? 'news-page' : 'detail-news-page';
                break;
            case 'single-page':
                $page = 'single-page';
                break;
            case 'posting-page':
                $page = 'posting-page';
                break;
            case 'project-page':
                break;
            case 'ad-page':
                break;
            case 'contact-page':
                $page = 'contact-page';
                break;
            case 'product-page':

                $page = 'product-page';
                break;
            default;
                return $this->redirect(['site/index']);
                break;
        }

        return $this->render($page, [
            'category' => $category,
            'post' => $post,
            'products' => $search['search'],
            'pages' => $search['pages'],
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact-page', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
