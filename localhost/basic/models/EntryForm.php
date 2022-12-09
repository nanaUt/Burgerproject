<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $age;
    public $dateofvisit;
    public $favoritecuisine;
    public $recommendation;
    public $review;
    public $temp;

    public function rules()
    {
        return [
            [['name', 'email', 'age', 'dateofvisit', 'favoritecuisine', 'recommendation', 'temp', 'review'], 'required'], 
            ['email', 'email'],
            ['name', 'string', 'length' => [5,30]],
            [['review'], 'trim'],
            ['age', 'integer', 'min'=>18, 'max'=>100],
            ['temp', 'integer', 'min'=>1, 'max'=>5]
            

];
    }
}
?>