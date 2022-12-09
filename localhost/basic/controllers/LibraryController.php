<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Author;
use app\models\Genre;
use app\models\Book;
use app\models\AuthorForm;

class LibraryController extends Controller
{
    public function actionAuthor()
    {
        $query = Author::find();
        $pagination = new Pagination([ //задаются границы возможного количества выводимых строк на страницу
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $authors = $query->orderBy('id') //сорт по id
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('author', [
            'authors' => $authors,
            'pagination' => $pagination,
        ]);
    }

    public function actionGenre()
    {
        $query = Genre::find();
        $pagination = new Pagination([ //задаются границы возможного количества выводимых строк на страницу
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $genres = $query->orderBy('id') //сорт по id
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('genre', [
            'genres' => $genres,
            'pagination' => $pagination,
        ]);
    }

    public function actionBook()
    {
        $query = Book::find();
        $pagination = new Pagination([ //задаются границы возможного количества выводимых строк на страницу
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $books = $query->orderBy('id') //сорт по id
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('book', [
            'books' => $books,
            'pagination' => $pagination,
        ]);
    }

    public function actionZapros1()
    {
        $query = Book::find();
        $pagination = new Pagination([ //задаются границы возможного количества выводимых строк на страницу
            'defaultPageSize' => 10,
           'totalCount' => $query->count(),
        ]);
        $zapros1 = $query//->orderBy('written') //сорт по году написания
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->where(['between','written',1900,2000 ])
            ->all();
        return $this->render('zapros1', [
            'zapros1' => $zapros1,
            'pagination' => $pagination,
        ]);
    }

    public function actionZapros2()
    {
        $query = Book::find();
        $pagination = new Pagination([ //задаются границы возможного количества выводимых строк на страницу
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $zapros2 = $query->orderBy('id') //сорт по id
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->select('count(*)')
            //->groupby(['author_id']) //группировка по автору
            ->all();
        return $this->render('zapros2', [
            'zapros2' => $zapros2,
            'pagination' => $pagination,
        ]);
    }

    public function actionZapros3()
    {
     $model = new Book();
      if($model->load(Yii::$app->request->post()) ){
        $query = Book::find()->where(['like','title',$model->ftitle]); //вывод данных на основе введенного слова в форму
      }else{
          Yii::$app->session->setFlash('error','Не найдено!'); 
        $query = Book::find();
      }

      $pagination = new Pagination([ 'defaultPageSize' => 5, 
                                     'totalCount' => $query->count(), //счётчик для виджета пагинатора для перемещения по страницам
                                  ]);

      $zapros3 = $query->orderBy('id') ->offset($pagination->offset) //отвечает за начало выводимых данных
                                      ->limit($pagination->limit) // отвечает за количество выводимых от начала данных
                                      ->all();

      return $this->render('zapros3', ['zapros3' => $zapros3,'model'=>$model, 'pagination' => $pagination,]);
    }

    public function actionAuthorsave() //сохранение автора
    {
         $model = new AuthorForm();

         if($model->load(Yii::$app->request->post()) ){
           if($model->save() ){
             Yii::$app->session->setFlash('success','Успешно сохранено!');
           }else {
             Yii::$app->session->setFlash('error','Ошибка :(');
           }
         }
         return $this->render('authorsave', ['model' => $model]);
     }

     public function actionAuthordelete() //удаление автора по id
     {
          $model = new AuthorForm();

          if($model->load(Yii::$app->request->post()) ){
            $query = Author::findOne($model);
            if($query->delete() ){
              Yii::$app->session->setFlash('success','Успешно сохранено!');
            }else {
              Yii::$app->session->setFlash('error','Ошибка :(');
            }
          }
          return $this->render('authordelete', ['model' => $model]);
      }
}

