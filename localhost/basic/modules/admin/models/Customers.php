<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%customers}}".
 *
 * @property int $id
 * @property string|null $surname
 * @property string|null $name
 * @property string|null $email
 * @property string|null $number
 * @property string|null $adress
 *
 * @property Orders[] $orders
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%customers}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'number', 'adress'], 'required'],
            [['surname', 'name', 'number'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 100],
            [['adress'], 'string', 'max' => 255],
            [['email'], 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Индикатор заказчика',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'email' => 'E-mail',
            'number' => 'Номер телефона',
            'adress' => 'Адрес',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::class, ['customer_id' => 'id']);
    }
}
