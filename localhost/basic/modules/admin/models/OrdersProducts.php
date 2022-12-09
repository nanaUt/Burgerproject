<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%orders_products}}".
 *
 * @property int $orders_id
 * @property int $products_id
 * @property int|null $quanity
 *
 * @property Orders $orders
 * @property Products $products
 */
class OrdersProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%orders_products}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orders_id', 'products_id'], 'required'],
            [['orders_id', 'products_id', 'quanity'], 'integer'],
            [['orders_id', 'products_id'], 'unique', 'targetAttribute' => ['orders_id', 'products_id']],
            [['products_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['products_id' => 'id']],
            [['orders_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::class, 'targetAttribute' => ['orders_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orders_id' => 'ID заказчика',
            'products_id' => 'Позиция меню',
            'quanity' => 'Количество',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasOne(Orders::class, ['id' => 'orders_id']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasOne(Products::class, ['id' => 'products_id']);
    }
}
