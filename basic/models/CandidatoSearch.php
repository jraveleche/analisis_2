<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Candidato;

/**
 * CandidatoSearch represents the model behind the search form of `app\models\Candidato`.
 */
class CandidatoSearch extends Candidato
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcandidato'], 'integer'],
            [['nombre', 'apellido', 'fechaNac', 'titulo', 'contrasenha', 'nacionalidad', 'correoElectronico', 'sexo'], 'safe'],
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
        $query = Candidato::find();

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
            'idcandidato' => $this->idcandidato,
            'fechaNac' => $this->fechaNac,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'contrasenha', $this->contrasenha])
            ->andFilterWhere(['like', 'nacionalidad', $this->nacionalidad])
            ->andFilterWhere(['like', 'correoElectronico', $this->correoElectronico])
            ->andFilterWhere(['like', 'sexo', $this->sexo]);

        return $dataProvider;
    }
}
