<?php

namespace app\modules\burgeradmin\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property int $id
 * @property int|null $payment
 * @property string|null $payments
 *
 * @property Orders[] $orders
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment'], 'integer'],
            [['payments'], 'string', 'max' => 145],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'payment' => 'Payment',
            'payments' => 'Payments',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::class, ['payment' => 'id']);
    }
}
