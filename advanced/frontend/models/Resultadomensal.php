<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%resultadomensal}}".
 *
 * @property int $id
 * @property int $ano
 * @property int $mes
 * @property double $valor
 * @property int $idCategoriaResultado
 * @property int $idCliente
 *
 * @property Categoriaresultado $categoriaResultado
 * @property Cliente $cliente
 */
class Resultadomensal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%resultadomensal}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ano', 'mes', 'valor', 'idCliente'], 'required'],
            [['ano', 'mes', 'idCategoriaResultado', 'idCliente'], 'integer'],
            [['valor'], 'number'],
            [['idCategoriaResultado'], 'exist', 'skipOnError' => true, 'targetClass' => Categoriaresultado::className(), 'targetAttribute' => ['idCategoriaResultado' => 'id']],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idCliente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ano' => 'Ano',
            'mes' => 'Mes',
            'valor' => 'Valor',
            'idCategoriaResultado' => 'Id Categoria Resultado',
            'idCliente' => 'Id Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoriaResultado()
    {
        return $this->hasOne(Categoriaresultado::className(), ['id' => 'idCategoriaResultado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'idCliente']);
    }
}
