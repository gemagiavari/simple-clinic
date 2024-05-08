<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Penerimaanuangpendaftaran;

/**
 * PenerimaanuangpendaftaranSearch represents the model behind the search form of `backend\models\Penerimaanuangpendaftaran`.
 */
class PenerimaanuangpendaftaranSearch extends Penerimaanuangpendaftaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penerimaan', 'id_faktur'], 'integer'],
            [['pembayaran_ke'], 'safe'],
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
        $query = Penerimaanuangpendaftaran::find();

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
            'id_penerimaan' => $this->id_penerimaan,
            'id_faktur' => $this->id_faktur,
        ]);

        $query->andFilterWhere(['like', 'pembayaran_ke', $this->pembayaran_ke]);

        return $dataProvider;
    }
}
