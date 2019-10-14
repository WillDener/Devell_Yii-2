# Devell_Yii-2

Projeto utilizando o framework PHP Yii 2.0 para realização do processo seletivo da DEVELL.

# Indice

- [x] Pré-Requisitos
- [x] Configuração do pré requisito
- [x] configuração Login Yii
- [x] Configurando o BD
- [x] Aplicações do GII
- [x] Corrigir Views
- [x] Queries
- [x] Comentário sobre o Projeto

## Pre-requisitos

Para a realização do projeto foi utilizado aplicações/softwares auxiliares para dinamismo dos serviços necessário ao projeto. Lembrando que esse pré requisito é alternativo, pois existe outras formas de se fazer funcionar a aplicação.

<ul>
  <li>O software XAMPP que possibilita subir os servidores do APACHE, MYSQL e suporte a dependencia do PHP.</li>
  <li>APACHE que permite a presta surpote em subir as páginas web permitindo assim que sejam visualizados.
  <li>MYSQL servidor de gerenciamento de banco de dados, o seu gerenciador por padrão do XAMPP possui uma pagina web que permite o seu gerenciamento via browser.</li>
  <li>a biblioteca padrão do PHP que a propria aplicação do XAMPP necessita pode ser utilizada para o funcionamento da aplicação.</li>
</ul>

### Configurando o pré-requisito

1. Após download do template do yii, extrair e mover o diretório para dentro da pasta XAMPP/htdocs.
2. Entrando no diretório da aplicação editar os arquivos em lote (.bat) _init.d_ e _yii_. Na linha onde ele chama a execução do do _php.exe_, é necessário passar o caminho do executavel do php do do XAMPP, então na edição dos arquivos é necessário alterar para o caminho onde está localizado o php.exe do XAMP ( /xampp/php/php.exe ). Após edição é só executar os arquivos.
3. Após execução dos arquivos em lotes o projeto realizara um _build_ para que assim possa funcionar, após o build ele trara alguns novos arquivos que serão necessário realizar alteração, no caso o arquivo responsável por realizar a conexão com o banco de dados com a aplixação, ele se localiza em ( _common/config/main-local.php_ ) dentro da aplicação neste arquivo reliza a alteração dos dados para ficarem de acordo com o BD.

## Configurando login 

O framework yii 2.0 por padrão disponibiliza o método de implementação de login. Para realizar é necessário que esteja já configurado com o banco e sua aplicação ja deve está com os pré requisitos atendidos. 

1. Abrir o terminal estando no diretorio da aplicação, usa a sintaxe ( _yii migrate_ ) ela realizara o migrate das tabelas _user_ e _migration_ para o banco de dados.
2. Após isso realizar a edição do arquivo localizado em ( _backend/commom/models/user.php_ ) e alterar a function __rules()__ onde o default dele está como __INACTIVE__ altere para __ACTIVE__.

Feito isso a aplicação ja consegue realizar o login apesar de pela versão mais nova haver a por padrão a verificação por email inserido, não foi configurado neste projeto logo após realização do signup só ir para tela de login e fornecer os dados que ele realiza o login.

## Configurando o BD

Os dados DDL e DML utilizados para o banco de dados deste projeto foram gerado um arquivo script (.sql) contendo as informações, dentro da aplicação localizada ( _devell/BD/devell.sql_ ) arquivo contém toda estruturas do banco de dados do projeto, cotendo desda criação das tabelas e suas relações quanto também os dados inseridos para realizações de testes.

Obs.: O script pode ser executado por leitor de script que suporte sql. O arquivo foi gerado pela exportação do banco utilizado.

## Aplicações do GII

Uma caracteristica marcante do framework yii é a praticidade que ela traz. uma delas são o Gii ela pode ser acessada em conjunto de outra praticidade que o yii traz que é o acesso das rotas assim basta adicionar o sufixo no link da aplicação ( __?r=__ _{rota a ser acessada}_) ele ja faz a busca pela qual rota que foi informada, essa parte de rota sera mais discutida mais a frente do projeto. 
Passando a rota gii a aplicação abre o modulo padrão.

![start-gii](https://user-images.githubusercontent.com/42719251/66755580-a72bf580-ee6e-11e9-82b3-3530616e58b0.png)

Após a configuração e criação do ambiente do BD, a aplicação (após a configuração do main-local ja visto) consegue ter acesso as tabelas do BD assim ficando muito mais facil em criar os processos de Classes da aplicação. 
Começando com o model que é a criação da classe do objeto, é simplesmente ir no create model e logo após no primeiro campo ele mostrara as tabelas que você possui no banco e ai você segue fazendo a classe do jeito que for conveniente, só enfatizando que o yii possui diversas opções para a criação do objeto isso permite um economia de tempo enorme.
A mesma coisa se assemelha o CRUD onde a sua enfaze e cuidade que se deve prestar são os lugares onde iram as classes. Por padrão o gii gera as classes de _search_ e _controller_ dentro de frontend em _/models_ e _/controllers_, eu fiz por esse padrão por questões de caso mude a o model para o backend onde seria o lugar correto, necessitaria de configurar onde deve se armazenar as views para que fique em frontend.

## Corrindo as Views

Por padrão de cada CRUD criado eles tentam dinamizar ao maximo a aplicação para que tenha menos trabalho a se realizar, entretanto as views as vezes não ficam coerente ao e para isso é necessário a correção da pagina. Os erros comuns que foram corrigidos foi o plural dos titles das paginas e seu rastro de página.

## Queries

Como ultima etapa do processo foi requisitado buscas dentro dos dados do banco. Logo antemão alerto que essa etapa eu modifiquei a forma na qual foi solicitada.

1. Criação de um controller chamada _BuilderController.php_, nesse controller eu chamo a implemento o padrão da busca de query e crio as rotas nas quais as funções realizam uma querie no banco. Entretando só apresetna os dados brutos, faltou da minha parte trabalhar na forma de apresenta esses dados na qual o Yii também possui uma classe que padroniza o _Grid View_, mas não consegui utiliza-lo mas é por motivo de tempo.
2. para o acesso das queries criadas no sufixo do link ( _?r=builder/all{sufixo das funções}_) para poder acessar e ve-las. 

O yii porta uma maneira bem facil de se realizar as consultas. 

## Comentário sobre o Projeto

Na minha opnião eu achei esse framework incrivel e que vale a pena estudar, aprender a utilizar e 100% da capacidade que pode oferecer pois facilita muitas coisas e são faceis de se presta modificação. Deixo aqui meu agradecimento a empresa Devell pela oportunidade.

