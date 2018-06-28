<?php

namespace app\controllers;

use app\models\RegisterForm;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionRegister()
    {
        echo '<script>alert("Register");</script>';
        $model = new RegisterForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            try {
                // Получение экземпляра модели для работы с аккаунтом
                $amo = Yii::$app->amocrm->getClient();
                $name = $model->name;
                $login = $model->login;
                $email = $model->email;
                $phone = $model->phone;
                $address = $model->address;
                $price = $model->price;
                $box = $model->box;
                $months = $model->months;

                /*$name = 'ФИО';
                $login = 'someLogin';
                $email = 'test@email.com';
                $phone = '+71234567890';
                $address = 'KPI st.';
                $price = 3000;
                $box = 1;
                $months = 1;*/

                /*$account = $amo->account;

                // или прямо
                $account = Yii::$app->amocrm->account;

                // Вывод информации об аккаунте
                print_r($account->apiCurrent());*/

                // Получение экземпляра модели для работы с контактами
                $contact = $amo->contact;

                // Заполнение полей модели
                $contact['name'] = $name;
                $contact['request_id'] = '123456789';
                //$contact['date_create'] = '-2 DAYS';
                $contact['responsible_user_id'] = $amo->fields['ResponsibleUserId'];
                $contact->addCustomField(518493, [
                    [$login, 'WORK'],
                ]);
                $contact->addCustomField(518495, [
                    [$email, 'WORK'],
                ]);
                $contact->addCustomField(518497, [
                    [$phone, 'WORK'],
                ]);
                $contact->addCustomField(518499, [
                    [$address, 'WORK'],
                ]);
                $contact->addCustomField(518501, [
                    [$box, 'WORK'],
                ]);

                // Добавление нового контакта и получение его ID
                $id = 0;
                $unique = true;
                foreach ($amo->contact->apiList(['query' => '']) as $item) {
                    $fields = $item['custom_fields'];
                    foreach ($fields as $field) {
                        if ($field['name'] == 'Логин' && $field['values'][0]['value'] == $login) {
                            $unique = false;
                            $id = $item['id'];
                            break;
                        }
                    }
                }

                $lead = $amo->lead;

                if ($unique) {
                    //echo 'UNIQUE';
                    $lead['name'] = 'Покупка на '.$months.' месяц.';
                    $id = $contact->apiAdd();
                } else {
                    //echo 'NOT UNIQUE';
                    $lead['name'] = 'Продление на '.$months.' месяц.';
                    $contact->apiUpdate((int)$id, 'now');
                }


                /*status id:
                Первичный контакт - 20312239*/
                $lead['status_id'] = '20312239';
                $lead['price'] = $price;
                $lead['responsible_user_id'] = $id;

                $leadId = $lead->apiAdd();

                $contact['linked_leads_id'] = $leadId;
                $contact->apiUpdate((int)$id, 'now');

            } catch (\AmoCRM\Exception $e) {
                printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
            }
        } else {
            // either the page is initially displayed or there is some validation error
            return 'Error';
        }
    }
}
