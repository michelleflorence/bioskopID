<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TempatDuduk;

/**
 * TempatDudukSearch represents the model behind the search form of `app\models\TempatDuduk`.
 */
class TempatDudukSearch extends TempatDuduk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tempat_duduk'], 'integer'],
            [['kode'], 'safe'],
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
        $query = TempatDuduk::find();

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
            'id_tempat_duduk' => $this->id_tempat_duduk,
        ]);

        $query->andFilterWhere(['like', 'kode', $this->kode]);

        return $dataProvider;
    }
}
