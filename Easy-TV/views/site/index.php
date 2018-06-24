<?php

/* @var $this yii\web\View */


use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use borales\extensions\phoneInput\PhoneInput;


AppAsset::register($this);
$this->title = 'Easy-TV';
?>
<?php
/*try {
    $amo = Yii::$app->amocrm->getClient();

    // Добавление дополнительных полей

    $field = $amo->custom_field;
    echo 'FIRST';
    $field->debug(true); // Режим отладки
    $field['name'] = 'Login';
    $field['type'] = \AmoCRM\Models\CustomField::TYPE_TEXT;
    $field['element_type'] = \AmoCRM\Models\CustomField::ENTITY_CONTACT;
    $field['origin'] = '528d0285c1f9180911159a9dc6f759b3_zendesk_widget';
    $id = $field->apiAdd();
    print_r($id);

    $field = $amo->custom_field;
    echo 'SECOND';
    $field->debug(true); // Режим отладки
    $field['name'] = 'E-mail';
    $field['type'] = \AmoCRM\Models\CustomField::TYPE_TEXT;
    $field['element_type'] = \AmoCRM\Models\CustomField::ENTITY_CONTACT;
    $field['origin'] = '528d0285c1f9180911159a9dc6f759b3_zendesk_widget';
    $id = $field->apiAdd();
    print_r($id);

    $field = $amo->custom_field;
    echo 'THIRD';
    $field->debug(true); // Режим отладки
    $field['name'] = 'Phone';
    $field['type'] = \AmoCRM\Models\CustomField::TYPE_TEXT;
    $field['element_type'] = \AmoCRM\Models\CustomField::ENTITY_CONTACT;
    $field['origin'] = '528d0285c1f9180911159a9dc6f759b3_zendesk_widget';
    $id = $field->apiAdd();
    print_r($id);

    $field = $amo->custom_field;
    echo 'FOURTH';
    $field->debug(true); // Режим отладки
    $field['name'] = 'Address';
    $field['type'] = \AmoCRM\Models\CustomField::TYPE_TEXT;
    $field['element_type'] = \AmoCRM\Models\CustomField::ENTITY_CONTACT;
    $field['origin'] = '528d0285c1f9180911159a9dc6f759b3_zendesk_widget';
    $id = $field->apiAdd();
    print_r($id);



} catch (\AmoCRM\Exception $e) {
    printf('Error (%d): %s', $e->getCode(), $e->getMessage());
}*/

/*
function addUser($name, $login, $email, $phone, $address)
{
    try {
        // Получение экземпляра модели для работы с аккаунтом
        $amo = Yii::$app->amocrm->getClient();
        $name = 'ФИОкастом';
        $login = 'someLogin2';
        $email = 'test@email.com';
        $phone = '+71234567890';
        $address = 'KPI st.';

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
}
*/
?>

<!-- Modal step1_1-->
<div class="modal fade" id="step1_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container" style="height: 80vh; overflow-y: scroll; overflow-x: hidden;">
                    <div class="row justify-content-center">
                        <div class="col-md-11 col-sm-10 prices">                    
                            <div class="row text-center">
                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Я — новый клиент</div>
                                    <a href="#step1_1">
                                        <button type="button" class="btn button join-btn-act join-btn"
                                                data-toggle="modal" data-target="#step1_1" data-dismiss="modal">
                                            Присоедениться к сервису
                                        </button>
                                    </a>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Уже использую EasyTV</div>
                                    <a href="#step2_1">
                                        <button type="button" class="btn button join-btn" data-toggle="modal"
                                                data-target="#step2_1" data-dismiss="modal">Продлить подписку
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10 col-sm-12 step1">
                            <p class="text-center caption">Шаг 1 из 4: Выберите товар</p>
                            <p style="text-align: center; margin-bottom: 40px;">Пробные 2 дня можно использовать через Smart-TV или при существующей приставке.</p>
        
                                <button type="button" class="step1-btn mounth" id="oneMonth" value="999" onclick="one(oneMonth.value);sum(); oneMonth.style.backgroundColor='rgba(85, 164, 98,0.4)'; threeMonth.style.backgroundColor='';twelweMonth.style.backgroundColor=''; counpMN.innerHTML = 1; priceNew.innerHTML =oneMonth.value; ">
                                    <div class="t1">Подписка на 1 месяц</div>
                                    <div class="t2">999 руб</div>
                                </button>
                                <button type="button" class="step1-btn mounth" id="threeMonth" value="2997" onclick="one(threeMonth.value);sum();threeMonth.style.backgroundColor='rgba(85, 164, 98,0.4)';oneMonth.style.backgroundColor='';twelweMonth.style.backgroundColor='';counpMN.innerHTML = 3; priceNew.innerHTML =threeMonth.value;  ">
                                    <div class="t1">Подписка на 3 месяца</div>
                                    <div class="t2">2997 руб</div>
                                </button>
                                <button type="button" class="step1-btn mounth" id="twelweMonth" value="11988" onclick="one(twelweMonth.value);sum();oneMonth.style.backgroundColor=''; threeMonth.style.backgroundColor='';twelweMonth.style.backgroundColor='rgba(85, 164, 98,0.4)';counpMN.innerHTML = 12; priceNew.innerHTML =twelweMonth.value; ">
                                    <div class="t1">Подписка на 12 месяцев</div>
                                    <div class="t2">11988 руб</div>
                                </button>
                            <div class="col-md-12 col-sm-12"
                                 style="text-align: left; font-size: 14px; color: #828282;clear: both; margin-left: 10px;">
                                <input type="checkbox" class="form-check-input" id="autosubs">
                                <label class="form-check-label" for="autosubs" style="font-size: 16px;">Автоподписка</label>
                            </div>

                            <p class="plus"><img src="img/images/plus.png"></p>

                            <div class="row">
                                <div class="col-md-12 col-sm-12 ">
                                    
                                        <button type="button" id="equipment" class="step1-btn2" value="4999" onclick="enbl();two(equipment.value);sum(); equipment.style.backgroundColor='rgba(85, 164, 98,0.4)'; sale.style.backgroundColor=''; checkThreeNew.style.display = 'none';checkTwoNew.style.display = 'block';">
                                            <div class="col-md-12 col-sm-12 ">

                                                <div class="col-md-6 text-left " style="padding: 0;float: left;">Оборудование</div>
                                                <div class="col-md-6 text-right" style="float:right; padding: 0;">4999 руб</div>
                                            </div>
                                            
                                            <p class="t5" style="clear: both;" style="font-size: 0;"><b>Комплект поставки:</b></p>


                                                    <ul style="padding: 0;">
                                                    <div class="col-md-6 col-sm-12 t5"
                                                         style="min-width: 150px; float: left; padding-bottom: 20px;">

                                                        <li>- сетевой мультимедийный медиаплеер.</li>
                                                        <li>- кабель HDMI</li>
                                                        <li>- кабель 3.5mm Mini Jack to ЗRСА composite AV.</li>
                                                        <li>- адаптер питания 5V 1.5А.</li>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 t5"
                                                         style="min-width: 150px; float: left; padding-bottom: 20px;">
                                                        <li>- программируемый пульт ДУ.</li>
                                                        <li>- элементы питания АА - 2шт.</li>
                                                        <li>- кабель Ethernet.</li>
                                                        <li>- руководство по быстрой установке</li>
                                                    </div>

                                            </ul>
                                        </button>
                                    
                                </div>
                            </div>
                                <button type="button" class="step1-btn smart" id="sale" value="0" onclick="disenbl();two(sale.value);sum();equipment.style.backgroundColor=''; sale.style.backgroundColor='rgba(85, 164, 98,0.4)';checkTwoNew.style.display = 'none'; checkThreeNew.style.display='block'; ">
                                    <div class="t1 col-md-6 text-left" style="margin-top: 10px; float: left;">Подключиться через SmartTV
                                        
                                        
                                    </div>
                                    <div class="t2 col-md-6 text-right" style="float: right; margin-top: 10px;">бесплатно</div>
                                    <br>
                                        <a href="Инструкция.txt" download style="color: #55A462;">
                                        <p style="clear: both;font-size: 14px; padding-left: 15px;
     text-align: left !important;"><b>Скачать инструкцию</b></p></a>

                                </button>
                        </div>
                    </div>

           


                <div class="row justify-content-center log">
                    <div class="col-md-5 col-sm-10">
                        <p>Вас пригласил друг? Введите его логин:
                            <input type="text" class="form-control" required="" placeholder="login" style="width: 100%;"></p>
                    </div>
                    <div class="col-md-5 col-sm-10"
                         style="text-align: right; font-size: 30px; font-weight: bold; color: #55A462;">Сумма: <label id="lab">0</label> руб</div>

                    <div class="col-md-12 col-sm-12 further"><a href="#step1_2">
                            <button type="button" class="btn button further-btn" data-toggle="modal"
                                    data-target="#step1_2" data-dismiss="modal" >Далее
                            </button>
                            
                        </a></div>

                </div>
            </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
<!-- Modal  step1_2-->
<div class="modal fade" id="step1_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container"  style="height: 80vh; overflow-y: scroll;overflow-x: hidden;">
                    <div class="row justify-content-center">
                        <div class="col-md-11 col-sm-10 prices">                    
                            <div class="row text-center">
                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Я — новый клиент</div>
                                    <a href="#step1_1">
                                        <button type="button" class="btn button join-btn-act join-btn"
                                                data-toggle="modal" data-target="#step1_1" data-dismiss="modal">
                                            Присоедениться к сервису
                                        </button>
                                    </a>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Уже использую EasyTV</div>
                                    <a href="#step2_1">
                                        <button type="button" class="btn button join-btn" data-toggle="modal"
                                                data-target="#step2_1" data-dismiss="modal">Продлить подписку
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" >
                        <div class="col-md-12 col-sm-12 step2">
                            <p class="text-center caption">Шаг 2 из 4: Введите личную информацию</p>
                            <?php $form = ActiveForm::begin([
                                'id' => 'register-form',
                            ]) ?>
                            <?php $model = new \app\models\RegisterForm(); ?>
                                <div class="row justify-content-center ">
                                    <div class="col-md-12 " style="min-width: 150px;">

                                        
                                        <div class="row">
                                            
                                            <div class="col-md-12 col-sm-12">
                                                <!--input  type="text" class="form-control " required="" placeholder="Фмилия Имя Отчество" width="100%"-->
                                                <?= $form->field($model, 'name')->textInput(['width' => '100%', 'class' => 'form-control','placeholder'=>'Фамилия Имя Отчество'])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <!--input  type="text" class="form-control " required=""
                                                       placeholder="login"-->
                                                       <?= $form->field($model, 'login')->textInput(['width' => '100%', 'class' => 'form-control','placeholder'=>"Login"])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-sm-12">
                                                <!--input type="text" class="form-control " required=""
                                                       placeholder="email@example.com"-->
                                                       <?= $form->field($model, 'email')->textInput(['width' => '100%', 'class' => 'form-control', 'placeholder'=>"email@example.com"])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                
                                            <?= $form->field($model, 'phone')->textInput(['width' => '100%', 'class' => 'form-control','style' => 'min-width = 300%;'])->label(false)->widget(
                                                        PhoneInput::className(), [
                                                    'jsOptions' => [
                                                        'onlyCountries' => ['ru', 'ua'],
                                                    ]
                                                ]) ?>
                                            </div>
                                        </div>
                                        
                                    </div>


                                    <div class="col-md-12" style="min-width: 150px;">
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-sm-12">
                                                <!--name - country-->
                                                <?= $form->field($model, 'name')->textInput(['width' => '100%', 'class' => 'form-control','placeholder'=>'Страна'])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-6 ">

                                                <div class="row justify-content-center">
                                                    <div class="col-md-12 col-sm-12">
                                                        <!--name - town-->
                                                <?= $form->field($model, 'name')->textInput(['width' => '100%', 'class' => 'form-control','placeholder'=>'Город'])->label(false) ?>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6 col-sm-6 ">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12 col-sm-12">
                                                        <!--name - index-->
                                                               <?= $form->field($model, 'name')->textInput(['width' => '100%', 'class' => 'form-control','placeholder'=>'Индекс: хххххх'])->label(false) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-sm-12">
                                                <!--addres-->
                                                <?= $form->field($model, 'name')->textInput(['width' => '100%', 'class' => 'form-control','placeholder'=>'Адрес: улица, дом, квартира'])->label(false) ?>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            <?php ActiveForm::end() ?>
                            </div>
                            <div class="col-md-12 col-sm-12 further"><a href="#step1_3">
                                    <button type="button" id="cl" class="btn button further-btn back-btn" data-toggle="modal" data-target="#step1_1" data-dismiss="modal" >Назад
                                    </button>
                                    <button type="button" class="btn button further-btn" data-toggle="modal"
                                            data-target="#step1_3" data-dismiss="modal">Далее
                                    </button>
                                    
                                </a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal step1_3-->
<div class="modal fade" id="step1_3" " tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" onload=" document.getElementsByTagName('body').setAttribute('class', 'modal-open');">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container" style="height: 80vh; overflow-y: scroll;overflow-x: hidden;">
                    <div class="row justify-content-center">

                        <div class="col-md-11 col-sm-10 prices">
                            
                            <div class="row text-center">
                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Я — новый клиент</div>
                                    <a href="#step1_1">
                                        <button type="button" class="btn button join-btn-act join-btn"
                                                data-toggle="modal" data-target="#step1_1" data-dismiss="modal">
                                            Присоедениться к сервису
                                        </button>
                                    </a>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Уже использую EasyTV</div>
                                    <a href="#step2_1">
                                        <button type="button" class="btn button join-btn" data-toggle="modal"
                                                data-target="#step2_1" data-dismiss="modal">Продлить подписку
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <div class="col-md-12 col-sm-10">
                            <p class="text-center caption">Шаг 3 из 4: Выберите способ доставки</p>

                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-10"
                                     style="text-align: center; max-width: 400px; font-size: 20px; font-weight: 500;">
                                        <button type="button" class="step1-btn" style="height: auto;">
                                            <div style="padding: 20px; " onclick="deliver.style.display='block'; ">  Бесплатная доставка любой почтовой службой</div>
                                        </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-sm-12 further"><a href="#step1_4">
                            <button type="button" class="btn button further-btn back-btn" data-toggle="modal" data-target="#step1_2" data-dismiss="modal" >Назад
                                    </button>
                            <button type="button" class="btn button further-btn" data-toggle="modal"                                     data-target="#step1_4" data-dismiss="modal">Далее
                            </button>
                        </a></div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal step1_4-->
<div class="modal fade" id="step1_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container" style="height: 80vh; overflow-y: scroll;overflow-x: hidden;">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-10 prices">
                            
                            <div class="row text-center">
                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Я — новый клиент</div>
                                    <a href="#step1_1">
                                        <button type="button" class="btn button join-btn-act join-btn"
                                                data-toggle="modal" data-target="#step1_1" data-dismiss="modal">
                                            Присоедениться к сервису
                                        </button>
                                    </a>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Уже использую EasyTV</div>
                                    <a href="#step2_1">
                                        <button type="button" class="btn button join-btn" data-toggle="modal"
                                                data-target="#step2_1" data-dismiss="modal">Продлить подписку
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <div class="col-md-12 col-sm-10" >
                            <p class="text-center caption">Шаг 4 из 4: Подтверждение заказа</p>

                            <div class="row ">
                                <div class="col-md-6 col-sm-12 bord">
                                    <p style="font-weight: bold; font-size: 20px; line-height: 24px; padding-bottom: 15px;" >Товар</p>
                                    <p id="checkOneNew">Подписка на <label id="counpMN"> </label> месяц - <label id="priceNew">1</label> руб</p>
                                    <p id="checkTwoNew" style="display: none;"> Оборудование - 4999 руб</p>
                                    <p id="checkThreeNew" style="display: none;"> Smart - TV - 0 руб</p>
                                    <p style="font-size: 20px !important; margin-top: 15px;"><b>Сумма - <label id="lab2" style="font-size: 22px;color: #55A462;">0</label> руб</b></p>
                                </div>
                                <div class="col-md-6 col-sm-12 bord">
                                    <p  style="font-weight: bold; font-size: 20px; line-height: 24px; padding-bottom: 15px;" >Личная информация</p>
                                    <p>ФИО, Логин, </p>
                                    <p>Почта, Номер,</p>
                                    <p>Страна, Город, Индекс,</p>
                                    <p>Улица, Дом, Квартира</p>

                                </div>
                                <div class="col-md-12 col-sm-12 ">

                                    <p  style="font-weight: bold; font-size: 20px; line-height: 24px; padding-bottom: 15px; padding-top: 20px;" >Способ доставки:</p>
                                    <p id="deliver" style="display: block; "><b>Новая почта:</b> отделение №36, ул. Виноградная 72a</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 further">
                            <button type="button" class="btn button further-btn back-btn" data-toggle="modal" data-target="#step1_3" data-dismiss="modal" >Назад</button>
                            <button type="button" class="btn button further-btn">Перейти к оплате</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Modal step2_1-->
<div class="modal fade" id="step2_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container" style="height: 80vh; overflow-y: scroll;overflow-x: hidden;">
                    <div class="row justify-content-center">

                        <div class="col-md-11 col-sm-10 prices">
                            
                            <div class="row text-center">
                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Я — новый клиент</div>
                                    <a href="#step1_1">
                                        <button type="button" class="btn button join-btn" data-toggle="modal"
                                                data-target="#step1_1" data-dismiss="modal">Присоедениться к сервису
                                        </button>
                                    </a>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Уже использую EasyTV</div>
                                    <a href="#step2_1">
                                        <button type="button" class="btn button join-btn-act join-btn"
                                                data-toggle="modal" data-target="#step2_1" data-dismiss="modal">Продлить
                                            подписку
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-sm-10 step1_2">
                            <p class="text-center caption">Шаг 1 из 3: Выберите товар</p>


                                <button type="button" class="step1-btn" id="st1" value ="999" onclick="price2.innerHTML = st1.value;
                                price3.innerHTML = st1.value;

                                countM.innerHTML = 1; st1.style.backgroundColor='rgba(85, 164, 98,0.4)';st2.style.backgroundColor='';st3.style.backgroundColor='';">
                                    <div class="t1">Подписка на 1 месяц</div>
                                    <div class="t2">999 руб</div>
                                </button>
                                <button type="button" class="step1-btn" id="st2" value="2997" onclick="price2.innerHTML = st2.value;
                                price3.innerHTML = st2.value; 
                                price4.innerHTML = st2.value; 
                                countM.innerHTML = 3;st1.style.backgroundColor='';st2.style.backgroundColor='rgba(85, 164, 98,0.4)';st3.style.backgroundColor='';">
                                    <div class="t1">Подписка на 3 месяца</div>
                                    <div class="t2">2997 руб</div>
                                </button>
                                <button type="button" class="step1-btn" id="st3" value="11988" onclick="price2.innerHTML = st3.value;
                                price3.innerHTML = st3.value;
                                price4.innerHTML = st3.value; 

                                countM.innerHTML = 12;st1.style.backgroundColor='';st2.style.backgroundColor='';st3.style.backgroundColor='rgba(85, 164, 98,0.4)';">
                                    <div class="t1">Подписка на 12 месяцев</div>
                                    <div class="t2">11988 руб</div>
                                </button>

                            <div class="col-md-12 col-sm-12"
                                 style="text-align: left; font-size: 14px; color: #828282;clear: both; margin-left: 10px;">
                                <input type="checkbox" class="form-check-input" id="autosubs">
                                <label class="form-check-label" for="autosubs" style="font-size: 16px;">Автоподписка</label>
                            </div>


                            <div class="row ">
                                <div class="col-md-6 col-sm-12 further" style="text-align: left;"><a href="#step2_2">
                                        
                                        <button type="button" class="btn button further-btn" data-toggle="modal"
                                                data-target="#step2_2" data-dismiss="modal">Далее
                                        </button>
                                    </a></div>

                                <div class="col-md-6 col-sm-12"
                                     style="text-align: right; font-size: 30px; font-weight: bold; color: #55A462;">Сумма: <label id="price2">0</label> руб</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal step2_2-->
<div class="modal fade" id="step2_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container" style="height: 80vh; overflow-y: scroll;overflow-x: hidden;">
                    <div class="row justify-content-center">

                        <div class="col-md-11 col-sm-10 prices">
                            
                            <div class="row text-center">
                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Я — новый клиент</div>
                                    <a href="#step1_1">
                                        <button type="button" class="btn button join-btn" data-toggle="modal"
                                                data-target="#step1_1" data-dismiss="modal">Присоедениться к сервису
                                        </button>
                                    </a>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Уже использую EasyTV</div>
                                    <a href="#step2_1">
                                        <button type="button" class="btn button join-btn-act join-btn"
                                                data-toggle="modal" data-target="#step2_1" data-dismiss="modal">Продлить
                                            подписку
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-10 step2">
                            <p class="text-center caption">Шаг 2 из 3: Введите личную информацию</p>
                            <?php $form = ActiveForm::begin([
                                'id' => 'register-form',
                            ]) ?>
                            <?php $model = new \app\models\RegisterForm(); ?>
                                <div class="row justify-content-center ">
                                    <div class="col-md-12 col-sm-10">

                                        <p>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-sm-12">
                                                <?= $form->field($model, 'name')->textInput(['width' => '100%', 'class' => 'form-control','placeholder'=>'Фамилия Имя Отчество'])->label(false) ?>
                                                <!--<input style="width: 100%" type="text" class="form-control " required="" placeholder="">-->
                                            </div>
                                        </div>
                                        </p>
                                        <p>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-sm-12">
                                                <?= $form->field($model, 'login')->textInput(['width' => '100%', 'class' => 'form-control','placeholder'=>"Login"])->label(false) ?>
                                                <!--<input type="text" style="width: 100%" class="form-control " required=""
                                                       placeholder="Login">-->
                                            </div>
                                        </div>
                                        </p>
                                        <p>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-sm-12">
                                                <?= $form->field($model, 'email')->textInput(['width' => '100%', 'class' => 'form-control', 'placeholder'=>"email@example.com"])->label(false) ?>
                                                <!--<input type="text" style="width: 100%" class="form-control " required=""
                                                       placeholder="email@example.com">-->
                                            </div>
                                        </div>
                                        </p>

                                        <p>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-sm-12">
                                                <?= $form->field($model, 'phone')->textInput(['width' => '100%', 'class' => 'form-control','style' => 'min-width = 300%;'])->label(false)->widget(
                                                        PhoneInput::className(), [
                                                    'jsOptions' => [
                                                        'onlyCountries' => ['ru', 'ua'],
                                                    ]
                                                ]) ?>
                                            </div>
                                            <!--<div class="col-md-2 col-sm-2">
                                                <select style="border: 1px solid rgba(85, 164, 98, 0.27); height: 33px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.25); width: 110%; border-radius: 4px 0 0 4px; ">
                                                    <option style="width: 30px;">+7</option>
                                                    <option style="width: 30px;">+38</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" style="width: 100%" class="form-control " required=""
                                                       placeholder="(000) 999-99-99">
                                            </div>-->
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            <?php ActiveForm::end() ?>
                        </div>
                        <div class="col-md-12 col-sm-12 further"><a href="#step2_3">
                                <button type="button" class="btn button further-btn back-btn" data-toggle="modal" data-target="#step2_1" data-dismiss="modal" >Назад</button>
                                <button type="button" class="btn button further-btn" data-toggle="modal"
                                        data-target="#step2_3" data-dismiss="modal">Далее</button>
                            </a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal step2_3-->
<div class="modal fade" id="step2_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container" style="height: 80vh; overflow-y: scroll;overflow-x: hidden;">
                    <div class="row justify-content-center">

                        <div class="col-md-11 col-sm-10 prices">
                            
                            <div class="row text-center">
                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Я — новый клиент</div>
                                    <a href="#step1_1">
                                        <button type="button" class="btn button  join-btn" data-toggle="modal"
                                                data-target="#step1_1" data-dismiss="modal">Присоедениться к сервису
                                        </button>
                                    </a>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="text-btn">Уже использую EasyTV</div>
                                    <a href="#step2_1">
                                        <button type="button" class="btn button join-btn-act join-btn"
                                                data-toggle="modal" data-target="#step2_1" data-dismiss="modal">Продлить
                                            подписку
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center step4">

                        <div class="col-md-8 col-sm-10">
                            <p class="text-center caption">Шаг 3 из 3: Подтверждение заказа</p>

                            <div class="row ">
                                <div class="col-md-6 col-sm-12 bord">
                                    <p style="font-weight: bold; font-size: 20px; line-height: 24px; padding-bottom: 15px;">Товар</p>
                                    <p id="checkOne"> Подписка на <label id="countM">1</label> месяц(a/eв) - <label id="price3">0</label> руб</p>
                                    <p style="font-size: 20px !important; margin-top: 15px;"><b>Сумма - <label id="price4"  style="font-size: 22px;color: #55A462;">0</label> руб</b></p>
                                </div>
                                <div class="col-md-6 col-sm-12 bord">
                                    <p style="font-weight: bold; font-size: 20px; line-height: 24px; padding-bottom: 15px;">Личная информация</p>
                                    <p>ФИО, Логин, </p>
                                    <p>Почта, Номер,</p>
                                    <p>Страна, Город, Индекс,</p>
                                    <p>Улица, Дом, Квартира</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 further">
                                <button type="button" class="btn button further-btn back-btn" data-toggle="modal" data-target="#step2_2" data-dismiss="modal" >Назад</button>
                                <button type="button" class="btn button further-btn" onclick="$('#register-form').yiiActiveForm('submitForm');">Перейти к оплате</button>
                            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--Message sent Bussines -->
<div class="modal fade" id="message-send" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"      aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border: none;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="border: none;">
                <h1 style="text-align: center; font-size: 24px; line-height: 26px; padding-bottom: 20px;">Ваша заявка
                    принята. Мы с вами свяжемся в ближайшее время.</h1>
            </div>
        </div>
    </div>
</div>
<!--Message send-->
<div class="modal fade" id="message-send2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"      aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border: none;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="border: none;">
                <h1 style="text-align: center; font-size: 24px; line-height: 26px; padding-bottom: 20px;">Ваше сообщение
                    отправлено.</h1>
            </div>
        </div>
    </div>
</div>
<!--End Modals -->

<script>
    function disenbl(){
                  var elem1 = document.getElementById('country');
        var elem2 = document.getElementById('town');
        var elem3 = document.getElementById('index-t');
        var elem4 = document.getElementById('street');
        var elem5 = document.getElementById('house');
        var elem6 = document.getElementById('apart');

            elem1.setAttribute("readonly",'');
            elem2.setAttribute("readonly",'');
            elem3.setAttribute("readonly",'');
            elem4.setAttribute("readonly",'');
            elem5.setAttribute("readonly",'');
            elem6.setAttribute("readonly",'');
    }

    function enbl(){

        var elem1 = document.getElementById('country');
        var elem2 = document.getElementById('town');
        var elem3 = document.getElementById('index-t');
        var elem4 = document.getElementById('street');
        var elem5 = document.getElementById('house');
        var elem6 = document.getElementById('apart');
        elem1.removeAttribute("readonly");
        elem2.removeAttribute("readonly");
        elem3.removeAttribute("readonly");
        elem4.removeAttribute("readonly");
        elem5.removeAttribute("readonly");
        elem6.removeAttribute("readonly");

    }
</script>

<script>
                    var first=0;
                    var second = 0;
                    function one(a){
                        var a = a;
                        console.log(a);
                        document.getElementById('lab').innerHTML = a;
                        document.getElementById('lab2').innerHTML = a;
                        return first = (+a);
                        var result = +first + +second;
                        
                    }

                    function two(b){
                        var b = b;
                        console.log(b);
                        document.getElementById('lab').innerHTML = b;
                        document.getElementById('lab2').innerHTML = b;

                        return second= (+b);
                        var result = +first + +second;
                    }

                    function sum() {
                        var result = +first + +second;
                        document.getElementById('lab').innerHTML = result;
                        document.getElementById('lab2').innerHTML = result;

                        return result;
                    }

            </script>
<!--Head-->
<div class="header"
     style="height: 680px; background: rgba(15, 18, 49, 0.34) url('img/header/NEWSE.png') top center no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-text text-center" style="margin-top: 145px;">
                    <h1>Ваши любимые фильмы и сериалы в любoй точке мира</h1>
                    <p style="margin-top: 15px;">EasyTV — современный ТВ сервис. Мы предлагаем интерактивное цифровое
                        телевидение, которое работает везде, где есть Интернет</p>
                        <a href="#price">
                            <?php
                            echo Button::widget([
                                'label' => 'Бесплатный просмотр',
                                'options' => ['class' => 'btn join', 'style' => 'margin-top:20px; width: 200px;']
                            ]);
                            ?>
                        </a>
                </div>
                <img src="img/header/Polygon.png" class="wow animated bounce">
            </div>
        </div>
    </div>
</div>
<!--Why we-->

<div id="why-we"><a name="why-we" href="#why-we"></a></div>
<div class="why-we" style="background-color: #F8FAFD;">
    <div class="container ">
        <div class="row">
            <div class="col-12" style="margin-top: 75px;">
                <h1 class="text-center">Почему мы?</h1>
                <p class="text-center" style="width: 80%;padding-top: 20px; margin: 0 auto;">С Easy TV вам не надо
                    платить за каждый просмотренный фильм или программу – оплатив подписку вы можете смотреть
                    неограниченное количество передач в течение оплачиваемого периода.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="content-why-we text-center">
                    <img src="img/why-we/archive.png" alt="ellipse">
                    <h1>Архив программ</h1>
                    <p>Easy TV поддерживает архивацию
                        любимых программ и фильмов для
                        просмотра в удобное для пользователя
                        время. Сервис позволяет сохранять
                        нужные передачи в архиве до 14-ти дней</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="content-why-we text-center">
                    <img src="img/why-we/timezone.png" alt="ellipse">
                    <h1>Выбор часового пояса</h1>
                    <p>Не хотите зависеть от ТВ - программы?
                        Смотите передачи с любого уголка мира
                        в удобное для Вас время - теперь это
                        возможно благодаря EasyTV. Просто
                        выберите часовой пояс и смотрите
                        передачи раньше всех!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="content-why-we text-center">
                    <img src="img/why-we/partner.png" alt="ellipse">
                    <h1>Партнерская программа</h1>
                    <p>Обеспечить себе
                        дополнительный
                        доход - это легко, просто присоединитесь
                        к нашей партнерской программе.
                        Привлекайте клиентов
                        в любой стране
                        мира и получайте вознаграждение.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Presentation-->
<div class="presentation" style="background-color: #F8FAFD;">
    <div class="container" style="padding-top: 60px;padding-bottom: 80px;">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 text-center text-lg-right d-flex justify-content-lg-end justify-content-center" style="align-items: center; margin-top: 10px;">
                <h1 style="font-size: 16px;font-weight: bold; margin:0;">Хотите узнать больше?</h1>
            </div>
            <div class="col-lg-6 col-md-12 col-12 text-center text-lg-left" style="margin-top: 10px;">
                <a href="Easy-TV.pdf" download>
                    <?php
                    echo Button::widget([
                        'label' => 'Скачать презентацию',
                        'options' => ['class' => 'btn btn-outline-seccess more-present text-center', 'style' => 'width: 230px; height: 33px;'],
                    ]);
                    ?>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="content" style="box-shadow: 0 -2px 10px 2px rgba(0,0,0, 0.1); padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="margin-top: 65px; margin-bottom: 65px;">
                <h1>Контент на любой вкус</h1>
            </div>
            <div class="col-12 col-lg-6 channel">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="child">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Развивающие каналы для детей</h1>
                                        <p>Сказки, мультфильмы, развивающие и образовательные
                                            передачи,
                                            познавательные рассказы о природе,
                                            науке и многое
                                            другое - все для
                                            любознательных мальчиков и
                                            девочек всех
                                            возрастов. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="child2">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Развивающие каналы для детей</h1>
                                        <p>Сказки, мультфильмы, развивающие и образовательные
                                            передачи,
                                            познавательные рассказы о природе,
                                            науке и многое
                                            другое - все для
                                            любознательных мальчиков и
                                            девочек всех
                                            возрастов. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="child3">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Развивающие каналы для детей</h1>
                                        <p>Сказки, мультфильмы, развивающие и образовательные
                                            передачи,
                                            познавательные рассказы о природе,
                                            науке и многое
                                            другое - все для
                                            любознательных мальчиков и
                                            девочек всех
                                            возрастов. </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 channel">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="girl">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Разнообразный контент для девушек</h1>
                                        <p>Милых дам порадуют невероятно интересные
                                            каналы о моде,
                                            здоровье, красоте, кулинарии,
                                            взаимоотношениях, семье и
                                            воспитании детей.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="girl2">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Разнообразный контент для девушек</h1>
                                        <p>Милых дам порадуют невероятно интересные
                                            каналы о моде,
                                            здоровье, красоте, кулинарии,
                                            взаимоотношениях, семье и
                                            воспитании детей.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="girl3">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Разнообразный контент для девушек</h1>
                                        <p>Милых дам порадуют невероятно интересные
                                            каналы о моде,
                                            здоровье, красоте, кулинарии,
                                            взаимоотношениях, семье и
                                            воспитании детей.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 channel">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="men">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Каналы для мужчин</h1>
                                        <p>Круг мужских интересов широк:
                                            oхота, рыбалка, туризм,
                                            экстремальные виды
                                            спорта, оружие, автомобили, женщины
                                            и много
                                            других. С EasyTV каждый мужчина найдет для
                                            себя что-то интересное и захватывающее.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="men2">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Каналы для мужчин</h1>
                                        <p>Круг мужских интересов широк:
                                            oхота, рыбалка, туризм,
                                            экстремальные виды
                                            спорта, оружие, автомобили, женщины
                                            и много
                                            других. С EasyTV каждый мужчина найдет для
                                            себя что-то интересное и захватывающее.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="men3">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Каналы для мужчин</h1>
                                        <p>Круг мужских интересов широк:
                                            oхота, рыбалка, туризм,
                                            экстремальные виды
                                            спорта, оружие, автомобили, женщины
                                            и много
                                            других. С EasyTV каждый мужчина найдет для
                                            себя что-то интересное и захватывающее.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 channel">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="serial">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Только лучшие фильмы и сериалы</h1>
                                        <p>Всё для настоящих киноманов: классика и
                                            новинки мирового
                                            кино в лучшем качестве, с безупречным переводом и
                                            удобной
                                            подборкой по жанрам</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="serial2">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Только лучшие фильмы и сериалы</h1>
                                        <p>Всё для настоящих киноманов: классика и
                                            новинки мирового
                                            кино в лучшем качестве, с безупречным переводом и
                                            удобной
                                            подборкой по жанрам</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="serial3">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Только лучшие фильмы и сериалы</h1>
                                        <p>Всё для настоящих киноманов: классика и
                                            новинки мирового
                                            кино в лучшем качестве, с безупречным переводом и
                                            удобной
                                            подборкой по жанрам</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 channel">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="sport">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Лучшие спортивные каналы</h1>
                                        <p>Не пропускаете ни одного футбольного матча или боксёрского
                                            поединка?
                                            Наслаждайтесь спортивными мероприятиями в HD
                                            качестве: футбол, теннис,
                                            хоккей, баскетбол – всё для астоящих
                                            фанатов.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="sport2">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Лучшие спортивные каналы</h1>
                                        <p>Не пропускаете ни одного футбольного матча или боксёрского
                                            поединка?
                                            Наслаждайтесь спортивными мероприятиями в HD
                                            качестве: футбол, теннис,
                                            хоккей, баскетбол – всё для астоящих
                                            фанатов.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="sport3">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Лучшие спортивные каналы</h1>
                                        <p>Не пропускаете ни одного футбольного матча или боксёрского
                                            поединка?
                                            Наслаждайтесь спортивными мероприятиями в HD
                                            качестве: футбол, теннис,
                                            хоккей, баскетбол – всё для астоящих
                                            фанатов.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 channel" style="display: none;">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="music">
                                <div class="text">
                                    <div class="content-text">

                                        <h1>Любимая музыка для любого случая</h1>
                                        <p>Для поклонников самой разнообразной
                                            музыки доступно
                                            67 каналов с композициями всех
                                            направлений и жанров для
                                            любого
                                            настроения и времени суток</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="music2">
                                <div class="text">
                                    <div class="content-text">

                                        <h1>Любимая музыка для любого случая</h1>
                                        <p>Для поклонников самой разнообразной
                                            музыки доступно
                                            67 каналов с композициями всех
                                            направлений и жанров для
                                            любого
                                            настроения и времени суток</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="music3">
                                <div class="text">
                                    <div class="content-text">

                                        <h1>Любимая музыка для любого случая</h1>
                                        <p>Для поклонников самой разнообразной
                                            музыки доступно
                                            67 каналов с композициями всех
                                            направлений и жанров для
                                            любого
                                            настроения и времени суток</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 channel  " style="display: none;">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="xxx">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Каналы для взрослых</h1>
                                        <p>ХХХ каналы для самых искушённых
                                            телезрителей.
                                            Безупречное качество
                                            изображения и звука на экранах Вашего
                                            телевизора в любое время суток</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="xxx2">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Каналы для взрослых</h1>
                                        <p>ХХХ каналы для самых искушённых
                                            телезрителей.
                                            Безупречное качество
                                            изображения и звука на экранах Вашего
                                            телевизора в любое время суток</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="xxx3">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Каналы для взрослых</h1>
                                        <p>ХХХ каналы для самых искушённых
                                            телезрителей.
                                            Безупречное качество
                                            изображения и звука на экранах Вашего
                                            телевизора в любое время суток</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 channel ">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="discovery">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Мир знаний</h1>
                                        <p>Занимательные документальные и научно-популярные фильмы
                                            о природе, технике, истории, географии, астрономии и физике
                                            удовлетворят интересы любознательных зрителей</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="discovery2">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Мир знаний</h1>
                                        <p>Занимательные документальные и научно-популярные фильмы
                                            о природе, технике, истории, географии, астрономии и физике
                                            удовлетворят интересы любознательных зрителей</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="discovery3">
                                <div class="text">
                                    <div class="content-text">
                                        <h1>Мир знаний</h1>
                                        <p>Занимательные документальные и научно-популярные фильмы
                                            о природе, технике, истории, географии, астрономии и физике
                                            удовлетворят интересы любознательных зрителей</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-12 ">
                <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="bussines ">
                                <div class="image-bussines" style="margin-top: 15px; min-height: 380px; display: flex;">
                                    <div class=" content-text" style="width: 100%;">
                                        <div class="text">
                                            <div class="text-in-text">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6"
                                                             style=" display: flex; align-items: flex-end;">
                                                            <div class="cont">
                                                                <h1>Контент для вашего бизнеса</h1>
                                                                <p>У Вас есть ресторан, бар или отель? Готовы предложить
                                                                    решения для вашего бизнеса.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 text-center">
                                                            <div class="back" style="margin: 0 auto 20px auto;">
                                                                <p style="width: 85%; margin: 0 auto;">Отправте заявку
                                                                    на бизнес-сотрудничество и мы сообщим подробности
                                                                    предложения</p>
                                                                <input type="email" name="email-bus"
                                                                       placeholder="email@example.com"
                                                                       style="padding: 8px; margin-top: 10px; margin-bottom: 15px;">
                                                                <br>
                                                                <?php
                                                                echo Button::widget([
                                                                    'label' => 'Отправить',
                                                                    'options' => ['class' => 'btn', 'style' => 'color: #fff;', 'data-toggle' => 'modal', 'data-target' => '#message-send'],
                                                                ]);
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="bussines ">
                                <div class="image-bussines2"
                                     style="margin-top: 15px; min-height: 380px; display: flex;">
                                    <div class=" content-text" style="width: 100%;">
                                        <div class="text">
                                            <div class="text-in-text">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6"
                                                             style=" display: flex; align-items: flex-end;">
                                                            <div class="cont">
                                                                <h1>Контент для вашего бизнеса</h1>
                                                                <p>У Вас есть ресторан, бар или отель? Готовы предложить
                                                                    решения для вашего бизнеса.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 text-center">
                                                            <div class="back" style="margin: 0 auto 20px auto;">
                                                                <p style="width: 85%; margin: 0 auto;">Отправте заявку
                                                                    на бизнес-сотрудничество и мы сообщим подробности
                                                                    предложения</p>
                                                                <input type="email" name="email-bus"
                                                                       placeholder="email@example.com"
                                                                       style="padding: 8px; margin-top: 10px; margin-bottom: 15px;">
                                                                <br>
                                                                <?php
                                                                echo Button::widget([
                                                                    'label' => 'Отправить',
                                                                    'options' => ['class' => 'btn', 'style' => 'color: #fff;', 'data-toggle' => 'modal', 'data-target' => '#message-send'],
                                                                ]);
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="bussines ">
                                <div class="image-bussines3"
                                     style="margin-top: 15px; min-height: 380px; display: flex;">
                                    <div class=" content-text" style="width: 100%;">
                                        <div class="text">
                                            <div class="text-in-text">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6"
                                                             style=" display: flex; align-items: flex-end;">
                                                            <div class="cont">
                                                                <h1>Контент для вашего бизнеса</h1>
                                                                <p>У Вас есть ресторан, бар или отель? Готовы предложить
                                                                    решения для вашего бизнеса.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 text-center">
                                                            <div class="back" style="margin: 0 auto 20px auto;">
                                                                <p style="width: 85%; margin: 0 auto;">Отправте заявку
                                                                    на бизнес-сотрудничество и мы сообщим подробности
                                                                    предложения</p>
                                                                <input type="email" name="email-bus"
                                                                       placeholder="email@example.com"
                                                                       style="padding: 8px; margin-top: 10px; margin-bottom: 15px;">
                                                                <br>
                                                                <?php
                                                                echo Button::widget([
                                                                    'label' => 'Отправить',
                                                                    'options' => ['class' => 'btn', 'style' => 'color: #fff;', 'data-toggle' => 'modal', 'data-target' => '#message-send'],
                                                                ]);
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

<div id="price"><a name="price" href="#price"></a></div>
<div class="container" style="padding-top: 30px;">
    <div class="row justify-content-center">

        <div class="col-12 prices">
            <p class="text-center caption">Цены и условия</p>
        </div>
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-sm-12" style="margin-bottom: 25px;">
                    <div>
                            Более 1000 каналов в отличном качестве. Больше не нужно перебирать 
                            сайты в поисках любимой озвучки сериала и ждать нудную рекламу казино. 
                            Теперь все последние новинки кино всегда с вами.
                        </div>

                    <ul style="margin: 15px 30px;">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-5 col-sm-10">
                                <li>Гарантия на оборудование</li>
                                <li>Не кардшеринг</li>
                                <li>Не нужна спутниковая тарелка</li>
                            </div>
                            <div class="col-md-12 col-lg-7 col-sm-10">
                                <li>Более 1000 каналов в отличном качестве</li>
                                <li>Никаких дополнительных платежей</li>
                                <li>Множество полезных функций</li>
                            </div>
                        </div>
                    </ul>
                    <div class="comment">   Если вас не устроит количество каналов и контента, мы вернем ваши деньги!</div>
                </div>

                <div class="col-md-3 col-sm-10 img-price text-center">
                    <img src="img/images/price.png" class="img-fluid">
                </div>
            </div>
            <div class="row text-center" style="margin-top: 25px;">
                <div class="col-md-6 col-sm-12">
                    <div class="text-btn">Я — новый клиент</div>
                    <button type="button" class="btn button join-btn" data-toggle="modal" data-target="#step1_1" style=" white-space: inherit;">
                        Попробовать бесплатно 2 дня
                    </button>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="text-btn">Уже использую EasyTV</div>
                    <button type="button" class="btn button join-btn" data-toggle="modal" data-target="#step2_1" style=" white-space: inherit;">
                        Продлить подписку
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Present-->
<div id="system"><a name="system" href="#system"></a></div>
<div class="present  d-flex justify-content-center align-items-center" style="margin-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="font-size:30px ;line-height:36px ;color:#fff ;">Получайте месяц в подарок за каждого
                    приглашенного друга,
                    который приобретет подписку от 3-х месяцев</h1>
            </div>
        </div>
    </div>
</div>

<!--Feedback-->

<div class="feedback">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="margin-top: 65px;margin-bottom: 45px;">
                <h1>Отзывы наших клиентов</h1>
            </div>

            <div class="col-lg-4 col-md-6 feed d-flex justify-content-center">
                <div class="feed-content">
                    <img src="img/feedback/left-quote-mark.png">
                    <p style="margin: 15px 0;">Замечательный сервис. Нравится огромный диапазон каналов.
                        Особо хочу отметить разделение контента по интересам - можно легко найти интересную передачу
                        или фильм для просмотра. Лично мне – требовательному киноману – Easy TV понравился.</p>
                    <p class="signature">Алексей Т. , Россия</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 feed d-flex justify-content-center">
                <div class="feed-content">
                    <img src="img/feedback/left-quote-mark.png">
                    <p style="margin: 15px 0;">Спасибо за первоклассное обслуживание. Приставка – просто класс. С ней
                        интереснее ездить в длительные командировки и на отдых.
                        И доставили приставку оперативно, ничего не скажешь. В общем, отлично работаете, ребята, так
                        держать!</p>
                    <p class="signature">Наталия В. , Украина</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 feed d-flex justify-content-center">
                <div class="feed-content">
                    <img src="img/feedback/left-quote-mark.png">
                    <p style="margin: 15px 0;">Как человек, поработавший в сфере телевидения, могу сказать, что Easy TV
                        способно удовлетворить даже самые утонченные вкусы.
                        Я мало видел сервисов, которые предоставляют такой большой спектр контента, и обеспечивают такое
                        качество вещания.</p>
                    <p class="signature">Владимир Д. , Россия</p>
                </div>
            </div>

            <div class="col-12 text-center" style="margin-top: 65px;">
                <h1 style="margin-bottom: 35px;">Партнерская программа</h1>
                <hr style="border-bottom: 2px solid #55A462; width: 30%;margin: 0 auto;">
                <p style="margin: 10px 0 10px 0; font-size: 20px;">Ищем своего партнера в каждой стране</p>
                <hr style="border-bottom: 2px solid #55A462; width: 30%;margin: 0 auto;">
                <p style=" width: 68%; margin:35px auto 65px auto;">Будем рады сотрудничать с Вами по агентской схеме, в
                    рамках которой Вы работаете
                    только над привлечением клиентов и согласовываете условия подключения.
                    Всю работу по регистрации мерчанта в платежных системах, заключение договора,
                    интеграцию и поддержку мы будем осуществлять сами. Вам мы гарантируем часть
                    комиссии в качестве агентского вознаграждения.</p>
            </div>
        </div>
    </div>
</div>

<!--feedback form-->

<div id="help"><a name="help" href="#help"></a></div>
<div class="feedback-form">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="margin-top: 60px;">

                <h1 style="font-size: 20px; line-height: 24px; color: #fff !important; margin-bottom: 30px; padding-left: 35px;">Хотите
                    сотрудничать или задать вопрос?</h1>
            </div>

            <div class="col-md-12 text-center" style="margin: 3px 0;">
                <input id="telNo" name="name" type="text" style="padding: 8px;" placeholder="Имя Фамилия">
            </div>

            
            <div class="col-md-12 text-center" style="margin: 3px 0;">
                <input type="email" name="email" id="name" placeholder="email@example.com" style="padding: 8px;">
            </div>

            <div class="col-md-12 text-center" style="margin: 3px 0;">
                <input type="tel" placeholder="+7-958-756-80-30" minlength="9" maxlength="11" style="padding: 8px;">
            </div>
            <div class="col-md-12 text-center" style="margin: 3px 0;">
                <textarea placeholder="Текст сообщения" style="padding: 8px;" name="textar"></textarea>
            </div>
            <div class="col-12 text-center" style="margin-top: 30px; margin-bottom: 35px; ">
                <?php
                    echo Button::widget([
                            'label' => 'Отправить',
                            'options' => ['class' => 'btn', 'style' => 'color: #fff;', 'data-toggle' => 'modal', 'data-target' => '#message-send2'],
                    ]);
                    ?>
            </div>
        </div>
    </div>
</div>