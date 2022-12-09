<?php
namespace app\models;
use yii\db\ActiveRecord;

class AuthorForm extends ActiveRecord{
  public static function tableName(){
    return 'Authors';
  }

    public function rules()
    {
      return [
        [['name', 'surname'], 'required', 'message'=>'���� �� ������ ���� ������'],
        ['id','safe'],
        [['name', 'surname'],'trim'], //�������� ������ ������� � ������ � ����� ������
      ];
    }

}