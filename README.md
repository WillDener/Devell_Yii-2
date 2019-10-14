# Devell_Yii-2

Projeto utilizando o framework PHP Yii 2.0 para realização do processo seletivo da DEVELL.

# Indice

- [x] Pré-requisitos
- [x] Configuração do pré requisito
- [x] Configuração Login Yii
- [x] Configurando o BD
- [x] Aplicações do GII
- [x] Corrigir Views
- [x] Queries
- [x] Comentário sobre o Projeto

## Pré-requisitos

Para a realização do projeto foi utilizado aplicações/softwares auxiliares para dinamismo dos serviços necessários ao projeto. Lembrando que esse pré-requisito é alternativo, pois existem outras formas de se fazer funcionar a aplicação.

<ul>
  <li>O software XAMPP que possibilita subir os servidores do APACHE, MYSQL e suporte a dependência do PHP.</li>
  <li>APACHE que permite presta suporte em subir as páginas web permitindo assim que sejam visualizados.</li>
  <li>MYSQL servidor de banco de dados, o seu gerenciador por padrão do XAMPP possui uma página web que permite o seu gerenciamento via Browser.</li>
  <li>A biblioteca padrão do PHP que a própria aplicação do XAMPP necessita, pode ser utilizada para o funcionamento da aplicação.</li>
</ul>

### Configurando o pré-requisitos

1. Após download do template do yii, extrair e mover o diretório para dentro da pasta XAMPP/htdocs.
2. Entrando no diretório da aplicação editar os arquivos em lote (.bat) _init.d_ e _yii_. Na linha onde ele chama a execução do _php.exe_, é necessário passar o caminho do executável do php do XAMPP, então na edição dos arquivos é necessário alterar para o caminho onde está localizado o php.exe do XAMP ( /xampp/php/php.exe ). Após edição é só executar os arquivos.
3. Após execução dos arquivos em lotes o projeto realizara um _build_ do projeto, após o build ele trará alguns novos arquivos que serão necessário realizar alteração, no caso o arquivo responsável por realizar a conexão com o banco de dados com a aplicação, ele se localiza em (_common/config/main-local.php_) dentro da aplicação neste arquivo realizar a alteração dos dados para ficarem de acordo com o BD.

## Configurando login 

O framework yii 2.0 por padrão disponibiliza o método de implementação de login. Para realizá-lo é necessário que já esteja configurado com o banco e sua aplicação ja deve está com os pré requisitos atendidos. 

1. Abrir o terminal estando no diretório da aplicação, utilize a sintaxe ( _yii migrate_ ) ela realizará o migrate das tabelas _user_ e _migration_ para o banco de dados.
2. Após isso, realizar a edição do arquivo localizado em ( _backend/commom/models/user.php_ ) e alterar a function __rules()__ onde o default dele está como __INACTIVE__ altere para __ACTIVE__.

Feito isso a aplicação ja consegue realizar o login apesar de pela versão mais nova haver por padrão a validação por e-mail inserido, como não foi configurado neste projeto logo, após realização do signup apesar de aparecer a mensagem de que um e-mail de validação foi encaminhado, só ir para tela de login e fornecer os dados que ele realiza o login.

## Configurando o BD

Os dados DDL e DML utilizados para o banco de dados deste projeto foi gerado um arquivo script (.sql) contendo as informações, dentro da aplicação localizada ( _devell/BD/devell.sql_ ) arquivo contém toda estrutura do banco de dados do projeto, contendo desda criação das tabelas e suas relações quanto também os dados inseridos para realizações de testes.

Obs.: O script pode ser executado por leitor de script que suporte sql. O arquivo foi gerado pela exportação do banco utilizado.

## Aplicações do GII

Uma característica marcante do framework yii é a praticidade que ela traz, uma delas são a ferramenta Gii ela pode ser acessada em conjunto de outra praticidade que o yii traz que é o acesso das rotas assim basta adicionar o sufixo no link da aplicação ( __?r=__ _{rota a ser acessada}_) ele já faz a busca pela qual rota que foi informada. 
Passando a rota gii a aplicação abre o modulo padrão. Conforme imagem abaixo:

![start-gii](https://user-images.githubusercontent.com/42719251/66755580-a72bf580-ee6e-11e9-82b3-3530616e58b0.png)

Após a configuração e criação do ambiente do BD, a aplicação (após a configuração do main-local ja visto anteriormente) consegue ter acesso as tabelas do BD assim ficando mais fácil em criar os processos de Classes da aplicação. 
Começando com o model que é a criação da classe do objeto, é simplesmente ir no create model ( ele redireciona para a página _create model_) e logo após no primeiro campo ele mostrará as tabelas que você possui no banco e ai você segue fazendo a classe do jeito que for conveniente, só enfatizando que o yii possui diversas opções para a criação do objeto isso permite uma economia de tempo enorme.
A mesma coisa se assemelha o CRUD onde a sua enfaze está sobre o cuidado que se deve prestar nos lugares onde iram as classes. Pois por padrão o gii gera as classes de _search_ e _controller_ dentro de frontend em _/models_ e _/controllers_, eu fiz por esse padrão por questões de caso mude a do model para o backend onde seria o lugar correto, necessitaria de configurar onde deve se armazenar as views, onde o correto é estar em frontend.

## Corrigir Views

Por padrão de cada CRUD criado eles tentam dinamizar ao máximo a aplicação para que tenha menos trabalho a se realizar, entretanto as views as vezes não ficam coerentes, e para isso é necessário a correção da página. Os erros mais comuns que foram corrigidos foram o plural dos titles das páginas e seu rastro de página.

## Queries

Como última etapa do processo foi requisitado buscas dentro do banco de banco. Logo antemão alerto que essa etapa eu modifiquei a forma na qual foi solicitada.

1. Criação de um controller chamada _BuilderController.php_, nesse controller eu chamo a implemento o padrão da busca de query e crio as rotas nas quais as funções realizam uma query no banco. Entretanto só apresenta os dados brutos, faltou da minha parte trabalhar na forma de apresentação desses dados na qual o Yii também possui uma classe que padroniza o _Grid View_, mas não consegui utilizá-lo mas é por motivo de tempo.
2. Para o acesso das queries criadas no sufixo do link ( _?r=builder/all{sufixo das funções}_) para poder acessar e vê-las. 

O yii possui uma maneira bem fácil de se realizar as consultas. Em questão de criar as funções que realizaram a busca a sintaxe em si é diferente do padrão do php eu a considero mais versátil.    

## Comentário sobre o Projeto

Na minha opinião eu achei esse framework incrível e que vale a pena estudar, aprender a utilizar 100% da sua capacidade, pois facilita muitas coisas e são fáceis de se presta modificação. Deixo aqui meu agradecimento a empresa Devell pela oportunidade.
