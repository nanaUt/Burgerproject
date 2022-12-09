<?php
namespace app\models;
use yii\db\ActiveRecord;
class Genre extends ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public static function tableName() //������ ��� ������� �������� ����� ��������������� � ��������
    {
        return 'Genres';
    }
    public function getBooks()
    {
        return $this->hasMany(Book::class, ['genre_id' => 'id']);
    }
}