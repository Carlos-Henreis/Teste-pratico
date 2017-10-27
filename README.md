# Teste-pratico
Criação de uma aplicação para uma agencia de viagem
## Disposição das pastas neste repositório
* **Projeto**: Contém a modelagem da aplicação
  * Diagrama de Classes
  * Modelo do banco de dados
    * Modelo entidade Relacionamento
    * Modelo Lógico
* **Font Code** Todo o código fonte da aplicação

## Como rodar a aplicação
**Pré requisitos**: 
*Ter instalado PHP >= 5.6
* Mysql instalado.

1) Faça o Dowload do código fonte
2) Na raiz do projeto renomeie o `.env.example` para `.env`
3) Crie um banco chamado `travela`
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
