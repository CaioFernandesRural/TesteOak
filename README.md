# Sistema de Gerenciamento de Produtos

Este é um sistema básico de gerenciamento de produtos desenvolvido em Laravel. Ele permite cadastrar e listar produtos, com um design esteticamente agradável utilizando Bootstrap.

## Funcionalidades

- **Cadastro de Produtos**: Formulário para cadastrar novos produtos com os campos:
  - Nome do produto
  - Descrição do produto
  - Valor do produto
  - Disponível para venda (Sim/Não)

- **Listagem de Produtos**: Tabela listando os produtos cadastrados, ordenados pelo valor do menor para o maior. A listagem inclui um botão para cadastrar novos produtos.

## Tecnologias Utilizadas

- Laravel
- Bootstrap

## Pré-requisitos

- PHP >= 7.3
- Composer
- MySQL

## Instalação

1. Clone o repositório:

    ```sh
    git clone https://github.com/seu-usuario/nome-do-repositorio.git
    cd nome-do-repositorio
    ```

2. Instale as dependências do projeto:

    ```sh
    composer install
    ```

3. Copie o arquivo `.env.example` para `.env`:

    ```sh
    cp .env.example .env
    ```

4. Configure o arquivo `.env` com suas credenciais de banco de dados.

5. Gere a chave da aplicação:

    ```sh
    php artisan key:generate
    ```

6. Execute as migrações para criar as tabelas no banco de dados:

    ```sh
    php artisan migrate
    ```

## Uso

1. Inicie o servidor de desenvolvimento:

    ```sh
    php artisan serve
    ```

2. Acesse a aplicação em `http://localhost:8000`.

3. Navegue até `http://localhost:8000/produtos` para ver a listagem de produtos e cadastrar novos produtos.

## Estrutura do Projeto

- `app/Models/Produto.php`: Modelo de Produto.
- `app/Http/Controllers/ProdutoController.php`: Controlador que gerencia o cadastro e a listagem de produtos.
- `resources/views/produtos/create.blade.php`: View para o formulário de cadastro de produtos.
- `resources/views/produtos/index.blade.php`: View para a listagem de produtos.
- `resources/views/layouts/app.blade.php`: Layout principal com integração do Bootstrap.
