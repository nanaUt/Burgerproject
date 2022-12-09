<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;


class User extends ActiveRecord implements \yii\web\IdentityInterface
{

  public static function tableName() 
  {
    return 'user';
  }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }
        return null;
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($auth_key)
    {
        return $this->auth_key === $auth_key;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
     return Yii::$app->security->validatePassword($password, $this->password);
//      return $this->password === $password;
    }

    public function generateAuthKey()
    {
      $this->auth_key = Yii::$app->security->generateRandomString();
    }
}
