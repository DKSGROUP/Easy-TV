<?php
try {
// Получение экземпляра модели для работы с аккаунтом
$amo = Yii::$app->amocrm->getClient();
$account = $amo->account;

// или прямо
$account = Yii::$app->amocrm->account;

// Вывод информации об аккаунте
print_r($account->apiCurrent());

// Получение экземпляра модели для работы с контактами
$contact = $amo->contact;

// Заполнение полей модели
$contact['name'] = 'ФИО';
$contact['request_id'] = '123456789';
$contact['date_create'] = '-2 DAYS';
$contact['responsible_user_id'] = $amo->fields['ResponsibleUserId'];
$contact['company_name'] = 'ООО Тестовая компания';
$contact['tags'] = ['тест1', 'тест2'];
$contact->addCustomField(448, [
['+79261112233', 'WORK'],
]);

// Добавление нового контакта и получение его ID
print_r($contact->apiAdd());

} catch (\AmoCRM\Exception $e) {
printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
}