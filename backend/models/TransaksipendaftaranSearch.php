<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Transaksipendaftaran;

/**
 * TransaksipendaftaranSearch represents the model behind the search form of `backend\models\Transaksipendaftaran`.
 */
class TransaksipendaftaranSearch extends Transaksipendaftaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_faktur'], 'integer'],
            [['nama_pasien', 'nama_tindakan'], 'safe'],
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
        $query = Transaksipendaftaran::find();

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
            'id_faktur' => $this->id_faktur,
        ]);

        $query->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'nama_tindakan', $this->nama_tindakan]);

        return $dataProvider;
    }
}
