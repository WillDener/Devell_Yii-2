<?php 
use yii\griid\GridView;
use yii\data\ActiveDataProvider;
use yii\models\BuilderController;
use yii\models\Cliente;

$dataProvider => ActiveDataProvider([
    'query' => actionAllcli_ass(),
    //'query' => Cliente::find(),
    ]);
?>
<h2>Cliente</h2>
<?php
    echo GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            'id','name'
            [
                'atribute'=> 'nome'
            ],
            [
                'atribute'=> 'cnpj'
            ],
            [
                'atribute'=> 'idCidade'
            ],
            [
                'atribute'=> 'endereco'
            ],
            [
                'atribute'=> 'complemento'
            ],
            [
                'atribute'=> 'bairro'
            ],
            [
                'atribute'=> 'telefone'
            ],
            [
                'atribute'=> 'email'
            ],
            [
                'atribute'=> 'idAssociacao'
            ],
            [
                'atribute'=> 'project'
            ],

        ]
    ]);

?>