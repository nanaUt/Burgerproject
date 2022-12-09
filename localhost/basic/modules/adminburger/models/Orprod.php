<?php

namespace app\modules\adminburger\models;

use Yii;

/**
 * This is the model class for table "orders_products".
 *
 * @property int $orders_id
 * @property int $products_id
 * @property int|null $quanity
 *
 * @property Orders $orders
 */
class Orprod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders_products';
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
            [['orders_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::class, 'targetAttribute' => ['orders_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'orders_id' => 'Orders ID',
            'products_id' => 'Products ID',
            'quanity' => 'Quanity',
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
}
