<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
          if ($this->rememberMe)
          {
            $user = $this->getUser();
            $user->generateAuthKey();
            $user->save();
          }
          return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0); //проверка, необходимо ли сохранять данные пользователя в куках на 30 дней
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest){
          return $this->hoHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post() ) && $model->login() ) {
          return $this->goBack();
        }

        $model->password='';
        return $this->render('login', [
          'model'=> $model,
        ]);
    }
}
