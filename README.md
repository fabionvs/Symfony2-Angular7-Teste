Crud Symfony2.8 + Angular 7
========================

Bem-vindo ao teste de Symfony2.8 com Angular 7.

Symfony
--------------

  * Symfony3.4 instalado via composer 

  * JMSSerializeBundle + NelmoCorsBundle + FosUserBundle

  * Entities e Controllers de Contatos e Enderecos

Angular 7
--------------

  * Listagem de Contatos

  * Adicionar Endereço em um contato
  
Symfony 3.4
--------------

  * Listagem, Exclusão e Edição de Endereços

  * Visualização, Exclusão e Edição de Contatos
  

Como rodar o Symfony?
--------------

  * Baixe o repositório.

  * Instale as vendors do Symfony com o comando:
```
composer install
```
  * Altere as configurações do banco no arquivo parameters.yml
```
parameters:
    database_driver: pdo_pgsql
    database_host: 127.0.0.1
    database_port: null
    database_name: teste
    database_user: postgres
    database_password: 123
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: null
    mailer_password: null
    secret: ThisTokenIsNotSoSecretChangeIt
```
  * Crie o banco de dados
```
php app/console doctrine:database:create
``` 
  * Atualiza o banco de dados
```
php app/console doctrine:schema:update --force
``` 
  * Rode a aplicação na porta 8000
```
php app/console server:run 127.0.0.1:8000
``` 

Como rodar o Angular?
--------------
  * O Angular7 está dentro da pasta "font". Entre na pasta e rode:
```
npm install
```
  * Para rodar o front-end digite:
```
npm start
```

  

