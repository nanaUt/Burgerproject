<?php

namespace app\modules\burgeradmin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\burgeradmin\models\Orprod;

/**
 * OrprodSearch represents the model behind the search form of `app\modules\burgeradmin\models\Orprod`.
 */
class OrprodSearch extends Orprod
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orders_id', 'products_id', 'quanity'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Orprod::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'orders_id' => $this->orders_id,
            'products_id' => $this->products_id,
            'quanity' => $this->quanity,
        ]);

        return $dataProvider;
    }
}