<?php

namespace kouosl\calender\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\calender\models\Calender;

/**
 * CalenderSearch represents the model behind the search form of `vendor\kouosl\calender\models\Calender`.
 */
class CalenderSearch extends Calender
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['starting_date', 'finishing_date', 'title', 'content', 'access_modifier'], 'safe'],
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
        $query = Calender::find();

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
            'id' => $this->id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'starting_date', $this->starting_date])
            ->andFilterWhere(['like', 'finishing_date', $this->finishing_date])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'access_modifier', $this->access_modifier]);

        return $dataProvider;
    }
}
