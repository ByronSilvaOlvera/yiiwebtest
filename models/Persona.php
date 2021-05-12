<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Persona".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $email
 * @property string $identificacion
 * @property string $fechanacio
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Persona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'direccion', 'email', 'identificacion', 'fechanacio'], 'required'],
            [['fechanacio'], 'safe'],
            [['nombre', 'apellido'], 'string', 'max' => 100],
            [['direccion', 'email'], 'string', 'max' => 150],
            [['identificacion'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'             => 'ID',
            'nombre'         => 'Nombre',
            'apellido'       => 'Apellido',
            'direccion'      => 'Direccion',
            'email'          => 'Email',
            'identificacion' => 'Identificacion',
            'fechanacio'     => 'Fecha nacimiento',
        ];
    }
}
