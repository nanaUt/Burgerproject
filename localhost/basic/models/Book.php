<?php
namespace app\models;
use yii\db\ActiveRecord;

class Book extends ActiveRecord
{
    public static function tableName() //задаем имя таблицы связывая класс непосредственно с таблицей
    {
        return 'Books';
    }

    public $ftitle;

    public function getAuthor()
    {
        return $this->hasOne(Author::class, ['id' => 'author_id']);
    }

    public function getGenre()
    {
        return $this->hasOne(Genre::class, ['id' => 'genre_id']);
    }

    public function rules(){
      return[
        ['ftitle','required']
      ];
    }
}