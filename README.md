Crud Symfony2.8 + Angular 7
========================

Bem-vindo ao teste de Symfony2.8 com Angular 7.


Angular 7
--------------

  * Listagem de Contatos

  * Adicionar Endereço em um contato
  
Symfony 3.4
--------------

  * Listagem, Exclusão e Edição de Endereços

  * Seleção, Exclusão e Edição de Contatos
  

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
php bin/console doctrine:database:create
``` 
  * Atualiza o banco de dados
```
php bin/console doctrine:schema:update --force
``` 

  * Limpar o cache
```
php bin/console cache:clear
sudo chmod 777 -R var/cache
sudo chmod 777 -R var/logs
sudo chmod 777 -R var/sessions
```

  * Instalar assets
```
php bin/console assets:install
``` 
  * Rode a aplicação na porta 8000
```
php bin/console server:run 127.0.0.1:8000
``` 

Como rodar o Angular?
--------------
  * O Angular 7 está dentro da pasta "front". Entre na pasta e rode:
```
npm install
```
  * Para rodar o front-end digite:
```
npm start
```

  

