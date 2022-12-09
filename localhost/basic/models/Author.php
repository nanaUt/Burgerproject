<?php

namespace app\models;
use yii\db\ActiveRecord;
class Author extends ActiveRecord
{
const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public static function tableName() //задаем имя таблицы связывая класс непосредственно с таблицей
    {
        return 'Authors';
    }
    public function getBooks()
    {
        return $this->hasMany(Book::class, ['author_id' => 'id']);
    }
}


?>