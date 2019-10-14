<?php
namespace frontend\controllers;

//Para acessar os selects, exemplo caminho (url):
// localhost/devell/advanced/frontend/web/index.php?r=builder/all(complemento da função desejada)
//Os resultados não estão com o view da grid pois não deu para tentar e estuda muito, mas os
//dados brutos estão sendo consultados com sucesso !! :D 
//Sei que o proprio CRUD já trata propriamente das maiorias das consultas, contudo ele
//não é capaz de realizar as consultas mais aprofundadas além de não da sua ideologia.

class BuilderController extends \yii\web\controller
{
    // Select das Associações --- TESTE
    public function actionAllassociacao(){
        $query = new \yii\db\Query();
        $results = $query->select('*')->from('{{%associacao}}')->all();
        print '<pre>';
        print_r ($results);
        print '</pre>';
        exit;
    }

    // Select das Associações vinculadas ao Cliente 1º
    public function actionAllcli_asso(){
        $query = new \yii\db\Query();
        $query->select('c.*, a.nome as project')->from('{{%cliente}} c');
        $query->join('inner join', '{{%associacao}} a', 'c.idAssociacao = a.id');
        $results = $query->all();
        print '<pre>';
        print_r ($results);
        print '</pre>';
        exit;
    }

    //Tentativa de utilizar o grid porem sem sucesso até entao

    public function actionAllcli_ass(){
        $query = new \yii\db\Query();
        $query->select('c.*, a.nome as project')->from('{{%cliente}} c');
        $query->join('inner join', '{{%associacao}} a', 'c.idAssociacao = a.id');
        $results = $query->all();
        return $results;
    }

    public function actionGridcli_asso(){
        return $this->render('cli_asso');
    }

    // Select dos Usuarios vinculados ao Cliente 2º
    public function actionAllusu_cli(){
        $query = new \yii\db\Query();
        $query->select('u.*, c.nome as cliente')->from('{{%usuario}} u');
        $query->join('inner join', '{{%cliente}} c', 'u.idCliente = c.id');
        $results = $query->all();
        print '<pre>';
        print_r ($results);
        print '</pre>';
        exit;
    }

    // Select dos CredorDevedor vinculados ao Cliente 3º
    public function actionAllcre_cli(){
        $query = new \yii\db\Query();
        $query->select('d.*, c.nome as cliente')->from('{{%credordevedor}} d');
        $query->join('inner join', '{{%cliente}} c', 'd.idCliente = c.id');
        $results = $query->all();
        print '<pre>';
        print_r ($results);
        print '</pre>';
        exit;
    }

    // Select da table Banco vinculada ao Cliente 4º
    public function actionAllban_cli(){
        $query = new \yii\db\Query();
        $query->select('b.*, c.nome as cliente')->from('{{%banco}} b');
        $query->join('inner join', '{{%cliente}} c', 'b.idCliente = c.id');
        $results = $query->all();
        print '<pre>';
        print_r ($results);
        print '</pre>';
        exit;
    }

    // Select da table Planoconta vinculada ao Cliente 5º
    public function actionAllpla_cli(){
        $query = new \yii\db\Query();
        $query->select('p.*, c.nome as cliente')->from('{{%planoconta}} p');
        $query->join('inner join', '{{%cliente}} c', 'p.idCliente = c.id');
        $results = $query->all();
        print '<pre>';
        print_r ($results);
        print '</pre>';
        exit;
    }

    // Select do auto relacionamento de Plano conta 6º
    public function actionAllpla(){
        $query = new \yii\db\Query();
        $query->select('p.*, p.idPai as Pai')->from('{{%planoconta}} p');
        $query->join('inner join', '{{%planoconta}} c', 'p.idPai = c.id');
        $results = $query->all();
        print '<pre>';
        print_r ($results);
        print '</pre>';
        exit;
    }

    // Select da table lancamento vinculada ao cliente 7º
    public function actionAlllan_cli(){
        $query = new \yii\db\Query();
        $query->select('l.*, c.nome as cliente')->from('{{%lancamento}} l');
        $query->join('inner join', '{{%cliente}} c', 'l.idCliente = c.id');
        $results = $query->all();
        print '<pre>';
        print_r ($results);
        print '</pre>';
        exit;
    }

    // Select da table ResultadoMensal vinculada ao cliente 8º
    public function actionAllres_cli(){
        $query = new \yii\db\Query();
        $query->select('r.*, c.nome as cliente')->from('{{%resultadomensal}} r');
        $query->join('inner join', '{{%cliente}} c', 'r.idCliente = c.id');
        $results = $query->all();
        print '<pre>';
        print_r ($results);
        print '</pre>';
        exit;
    }

    // Select da table ResultadoMensal e todos vinculos entre as tables 9º
    public function actionAllres(){
        $query = new \yii\db\Query();
        $query->select('r.*, c.nome as cliente , a.nome as associacao')->from('{{%resultadomensal}} r');
        $query->join('inner join', '{{%cliente}} c', 'r.idCliente = c.id');
        $query->join('inner join', '{{%associacao}} a', 'c.idAssociacao = a.id');
        $results = $query->all();
        print '<pre>';
        print_r ($results);
        print '</pre>';
        exit;
    }
}