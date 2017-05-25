<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ExcerciseCrud;

/**
 * ExcerciseSearch represents the model behind the search form of `app\models\ExcerciseCrud`.
 */
class ExcerciseSearch extends ExcerciseCrud
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['question', 'answer_a', 'answer_b', 'answer_c', 'answer_d', 'correct_answer', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = ExcerciseCrud::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'question', $this->question])
            ->andFilterWhere(['like', 'answer_a', $this->answer_a])
            ->andFilterWhere(['like', 'answer_b', $this->answer_b])
            ->andFilterWhere(['like', 'answer_c', $this->answer_c])
            ->andFilterWhere(['like', 'answer_d', $this->answer_d])
            ->andFilterWhere(['like', 'correct_answer', $this->correct_answer]);

        return $dataProvider;
    }
}
