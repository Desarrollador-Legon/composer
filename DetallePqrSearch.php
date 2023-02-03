<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetallePqr;

/**
 * DetallePqrSearch represents the model behind the search form of `app\models\DetallePqr`.
 */
class DetallePqrSearch extends DetallePqr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_pqr'], 'integer'],
            [['fecha', 'Observacion'], 'safe'],
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
     public function search($params, $pqr_Id = null)
    {
        $query = DetallePqr::find()
                ->where(['id_pqr' =>$pqr_Id]);

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
            'id_pqr' => $this->id_pqr,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'Observacion', $this->Observacion]);

        return $dataProvider;
    }
}
