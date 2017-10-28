# Teste-pratico
Criação de uma aplicação para uma agencia de viagem
## Disposição das pastas neste repositório
* **Font Code** Todo o código fonte da aplicação
* **Prints:** Alguns prints da tela na hora dos testes

## Como rodar a aplicação
**Pré requisitos**: 

* Ter instalado PHP >= 5.6
* Mysql instalado.

1) Faça o Dowload do código fonte
2) Crie um banco chamado `travela`
3) Abra o arquivo .env e entre com as credenciais de banco nos campos
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= travela
DB_USERNAME= root
DB_PASSWORD= root
```
4) Abra o Terminal e navegue até a raiz da aplicação
5) Temos que "migrar" as tabelas para o banco: `php artisan migrate`
6) Caso queira popular o banco use: `hphp artsisan db:seed`
7) Rode para inicializar a aplicação: `php artisan serve` ou use `php -S localhost:9000 -t public/` (se quiser pode mudar a porta)

**Pronto a aplicação pode ser acessada pelo seu navegador :)**

## Justificativas

* Pela simplesidade da aplicação não houve a necessidade de modelar (Desenvolver diagramas de classe, modelo entidade relacionamento, etc.) o sistema antes de implementá-lo.

* Usei o Laravel, por estar mais acostumando, e eu acho que ele é mais simples "rodar" - É só baixar fazer algumas mudanças e pronto

* Mesmo usando o Git/ GitHub não fiz nenhuma gerência de configuração, até porque a aplicação é pequena e só que implementei

* Validações:
  * Name = Requerido e no minimo com 5 caracteres
  * phone = Requerido e possui o seguinte padrão: (dd)9dddd-dddd, onde d= digito (0 a 9) e o numero pode ou iniciar com 9
  * Datas = Tem que existir e possuir formato de data
  * Origem e destino: Requeridos
  * Numero de pessoas: tem que ser maior que zero
* So é possível visualizar a tela de "sucesso" somente se de fato for registrado uma viagem
  
