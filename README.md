# Sistema de Gerenciamento de Ordens de Serviço para Oficina

Este é um sistema de gerenciamento de ordens de serviço desenvolvido em Laravel. Ele permite que você registre os clientes e seus respectivos veículos, além de registrar os serviços oferecidos para por fim, gerar uma ordem de serviço com os valores finais e informações do cliente. Além disso, oferece a funcionalidade de gerar um PDF com os detalhes de uma ordem específica.

## Funcionalidades

-   Cadastro de ordens de serviço com informações do cliente, veículo, serviços e valor total.
-   Visualização detalhada de cada ordem de serviço, incluindo os serviços associados.
-   Geração de PDF com os detalhes de uma ordem específica.

## Requisitos

-   PHP >= 8.1
-   Node.js >= 20
-   Laravel >= 8.x
-   Composer
-   MySQL ou outro banco de dados compatível com o Laravel.

## Como Usar

1. Clone o repositório.

    ```bash
     https://github.com/igorsalgado/laravel-ordem-servico.git

    ```

2. Configure o ambiente Laravel.

    - Instale as dependências do projeto executando o comando `composer install`.

    - Copie o arquivo `.env.example` para `.env` e configure-o com as informações do seu
      ambiente, como acesso ao banco de dados.

    - Gere a chave de aplicativo executando `php artisan key:generate`.

3. Execute as migrações do banco de dados.

    - Execute o comando `php artisan migrate` para criar as tabelas necessárias no banco de dados.

4. Inicie o servidor local.

    - Inicie o servidor de desenvolvimento executando `php artisan serve`.

5. Acesse o sistema em seu navegador.
