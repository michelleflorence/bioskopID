<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PemesananFilm;

/**
 * PemesananFilmSearch represents the model behind the search form of `app\models\PemesananFilm`.
 */
class PemesananFilmSearch extends PemesananFilm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pemesanan', 'id_film', 'id_jadwal', 'id_ruangan', 'id_tempat_duduk'], 'integer'],
            [['nama_pelanggan'], 'safe'],
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
        $query = PemesananFilm::find();

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
            'id_pemesanan' => $this->id_pemesanan,
            'id_film' => $this->id_film,
            'id_jadwal' => $this->id_jadwal,
            'id_ruangan' => $this->id_ruangan,
            'id_tempat_duduk' => $this->id_tempat_duduk,
        ]);

        $query->andFilterWhere(['like', 'nama_pelanggan', $this->nama_pelanggan]);

        return $dataProvider;
    }
}
