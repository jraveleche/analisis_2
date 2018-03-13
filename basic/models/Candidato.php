<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candidato".
 *
 * @property int $idcandidato
 * @property string $nombre
 * @property string $apellido
 * @property string $fechaNac
 * @property string $titulo
 * @property string $contrasenha
 * @property string $nacionalidad
 * @property string $correoElectronico
 * @property int $sexo
 *
 * @property Postulantes[] $postulantes
 */
class Candidato extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'candidato';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechaNac'], 'safe'],
            [['nombre', 'apellido', 'titulo', 'contrasenha', 'nacionalidad'], 'string', 'max' => 45],
            [['correoElectronico'], 'string', 'max' => 150],
            [['sexo'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcandidato' => 'Idcandidato',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'fechaNac' => 'Fecha Nac',
            'titulo' => 'Titulo',
            'contrasenha' => 'Contrasenha',
            'nacionalidad' => 'Nacionalidad',
            'correoElectronico' => 'Correo Electronico',
            'sexo' => 'Sexo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostulantes()
    {
        return $this->hasMany(Postulantes::className(), ['candidato_idcandidato' => 'idcandidato']);
    }
}
