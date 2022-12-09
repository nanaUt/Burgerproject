<?php
namespace app\models;
use yii\db\ActiveRecord;

class Book extends ActiveRecord
{
    public static function tableName() //������ ��� ������� �������� ����� ��������������� � ��������
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