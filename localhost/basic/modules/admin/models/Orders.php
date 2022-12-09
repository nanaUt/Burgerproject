<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%orders}}".
 *
 * @property int $id
 * @property int $customer_id
 * @property string|null $date
 * @property int|null $sum
 * @property int|null $payment
 *
 * @property Customers $customer
 * @property OrdersProducts[] $ordersProducts
 * @property Payments $payment0
 * @property Products[] $products
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%orders}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id'], 'required'],
            [['customer_id', 'sum', 'payment'], 'integer'],
            [['date'], 'safe'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customers::class, 'targetAttribute' => ['customer_id' => 'id']],
            [['payment'], 'exist', 'skipOnError' => true, 'targetClass' => Payments::class, 'targetAttribute' => ['payment' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор заказа',
            'customer_id' => 'Заказчик',
            'date' => 'Дата',
            'sum' => 'Сумма заказа',
            'payment' => 'Режим оплаты',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customers::class, ['id' => 'customer_id']);
    }

    /**
     * Gets query for [[OrdersProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrdersProducts()
    {
        return $this->hasMany(OrdersProducts::class, ['orders_id' => 'id']);
    }

    /**
     * Gets query for [[Payment0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayment0()
    {
        return $this->hasOne(Payments::class, ['id' => 'payment']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::class, ['id' => 'products_id'])->viaTable('{{%orders_products}}', ['orders_id' => 'id']);
    }
}
