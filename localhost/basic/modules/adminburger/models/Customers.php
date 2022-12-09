<?php

namespace app\modules\adminburger\models;

use Yii;

/**
 * This is the model class for table "customers".
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
        return 'customers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'number'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 100],
            [['adress'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surname' => 'Surname',
            'name' => 'Name',
            'email' => 'Email',
            'number' => 'Number',
            'adress' => 'Adress',
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
