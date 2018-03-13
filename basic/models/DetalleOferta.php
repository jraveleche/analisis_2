<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalleOferta".
 *
 * @property int $puestosVacantes
 * @property string $tiempoContratacion
 * @property string $nivelExperiencia
 * @property string $genero
 * @property int $edad
 * @property string $salarioMinimo
 * @property string $salarioMaximo
 * @property int $vehiculo
 * @property string $pais
 * @property int $oferta_idoferta
 * @property string $idDetalleOferta
 * @property int $empresa_idempresa
 *
 * @property Postulantes[] $postulantes
 * @property Empresa $empresaIdempresa
 * @property Oferta $ofertaIdoferta
 */
class DetalleOferta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalleOferta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['puestosVacantes', 'edad', 'oferta_idoferta', 'empresa_idempresa'], 'integer'],
            [['salarioMinimo', 'salarioMaximo'], 'number'],
            [['oferta_idoferta', 'idDetalleOferta', 'empresa_idempresa'], 'required'],
            [['tiempoContratacion', 'nivelExperiencia', 'genero', 'pais', 'idDetalleOferta'], 'string', 'max' => 45],
            [['vehiculo'], 'string', 'max' => 1],
            [['idDetalleOferta', 'empresa_idempresa'], 'unique', 'targetAttribute' => ['idDetalleOferta', 'empresa_idempresa']],
            [['empresa_idempresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['empresa_idempresa' => 'idempresa']],
            [['oferta_idoferta'], 'exist', 'skipOnError' => true, 'targetClass' => Oferta::className(), 'targetAttribute' => ['oferta_idoferta' => 'idoferta']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'puestosVacantes' => 'Puestos Vacantes',
            'tiempoContratacion' => 'Tiempo Contratacion',
            'nivelExperiencia' => 'Nivel Experiencia',
            'genero' => 'Genero',
            'edad' => 'Edad',
            'salarioMinimo' => 'Salario Minimo',
            'salarioMaximo' => 'Salario Maximo',
            'vehiculo' => 'Vehiculo',
            'pais' => 'Pais',
            'oferta_idoferta' => 'Oferta Idoferta',
            'idDetalleOferta' => 'Id Detalle Oferta',
            'empresa_idempresa' => 'Empresa Idempresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostulantes()
    {
        return $this->hasMany(Postulantes::className(), ['detalleOferta_idDetalleOferta' => 'idDetalleOferta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresaIdempresa()
    {
        return $this->hasOne(Empresa::className(), ['idempresa' => 'empresa_idempresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOfertaIdoferta()
    {
        return $this->hasOne(Oferta::className(), ['idoferta' => 'oferta_idoferta']);
    }
}
