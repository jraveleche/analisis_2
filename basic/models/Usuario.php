<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $idusuario
 * @property string $nombre
 * @property string $apellido
 * @property string $nickname
 * @property int $empresa_idempresa
 *
 * @property Empresa $empresaIdempresa
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idusuario', 'empresa_idempresa'], 'required'],
            [['idusuario', 'empresa_idempresa'], 'integer'],
            [['nombre', 'apellido', 'nickname'], 'string', 'max' => 45],
            [['idusuario', 'empresa_idempresa'], 'unique', 'targetAttribute' => ['idusuario', 'empresa_idempresa']],
            [['empresa_idempresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['empresa_idempresa' => 'idempresa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idusuario' => 'Idusuario',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'nickname' => 'Nickname',
            'empresa_idempresa' => 'Empresa Idempresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresaIdempresa()
    {
        return $this->hasOne(Empresa::className(), ['idempresa' => 'empresa_idempresa']);
    }
}
