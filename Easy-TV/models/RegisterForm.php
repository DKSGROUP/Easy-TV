<?php

namespace app\models;

use Yii;
use yii\base\Model;
use borales\extensions\phoneInput\PhoneInputValidator;

/**
 * ContactForm is the model behind the contact form.
 */
class RegisterForm extends Model
{
    public $name;
    public $login;
    public $email;
    public $phone;
    public $address;
    public $price;
    public $box;
    public $months;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'login', 'email', 'phone', 'price', 'months'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['phone', PhoneInputValidator::className()],
        ];
    }
}
