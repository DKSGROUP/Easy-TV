<?php

namespace app\controllers;

use app\models\RegisterForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
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
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionRegister()
    {
        echo '<script>alert("Register");</script>';
        $model = new RegisterForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            try {
                // Получение экземпляра модели для работы с аккаунтом
                $amo = Yii::$app->amocrm->getClient();
                $name = $model->name;//'ФИОкастом';
                $login = $model->login;//'someLogin2';
                $email = $model->email;//'test@email.com';
                $phone = $model->phone;//'+71234567890';
                $address = $model->address;//'KPI st.';

                $account = $amo->account;

                // или прямо
                $account = Yii::$app->amocrm->account;

                // Вывод информации об аккаунте
                //print_r($account->apiCurrent());

                // Получение экземпляра модели для работы с контактами
                $contact = $amo->contact;

                // Заполнение полей модели
                $contact['name'] = $name;
                $contact['request_id'] = '123456789';
                //$contact['date_create'] = '-2 DAYS';
                $contact['responsible_user_id'] = $amo->fields['ResponsibleUserId'];
                $contact->addCustomField(473325, [
                    [$login, 'WORK'],
                ]);
                $contact->addCustomField(473327, [
                    [$email, 'WORK'],
                ]);
                $contact->addCustomField(473305, [
                    [$phone, 'WORK'],
                ]);
                $contact->addCustomField(473307, [
                    [$address, 'WORK'],
                ]);
                // Добавление нового контакта и получение его ID
                $id = 0;
                $unique = true;
                foreach ($amo->contact->apiList(['query' => '']) as $item) {
                    $fields = $item['custom_fields'];
                    foreach ($fields as $field) {
                        if ($field['name'] == 'Login' && $field['values'][0]['value'] == $login) {
                            $unique = false;
                            $id = $item['id'];
                            break;
                        }
                    }
                }
                if ($unique) {
                    //echo 'UNIQUE';
                    $contact->apiAdd();
                } else {
                    //echo 'NOT UNIQUE';
                    $contact->apiUpdate((int)$id, 'now');
                }
                //print_r($amo->contact->apiList(['query' => '']));

            } catch (\AmoCRM\Exception $e) {
                printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
            }
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('register', ['model' => $model]);
        }
    }
}
