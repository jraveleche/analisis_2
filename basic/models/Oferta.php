<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oferta".
 *
 * @property int $idoferta
 * @property string $titulo
 * @property string $descripcion
 *
 * @property DetalleOferta[] $detalleOfertas
 */
class Oferta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oferta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo'], 'string', 'max' => 100],
            [['descripcion'], 'string', 'max' => 2000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idoferta' => 'Idoferta',
            'titulo' => 'Titulo',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleOfertas()
    {
        return $this->hasMany(DetalleOferta::className(), ['oferta_idoferta' => 'idoferta']);
    }
}
