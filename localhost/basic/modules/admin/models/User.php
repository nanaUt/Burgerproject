<?php

namespace app\modules\admin\models;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $auth_key
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required', 'message'=>'Поле не должно быть пустым'],
            [['username'], 'string', 'min'=>5,'max'=>30],
            [['password'], 'string', 'min'=>5,'max'=>40],
            [['auth_key'], 'safe'],
            ['username','unique', 'targetClass' => Users::className(), 'message' => 'Имя пользователя уже занято'], //фильтрация от дублирования логинов
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'password' => 'Пароль',
            'auth_key' => 'Код аутентификации',
        ];
    }
}
