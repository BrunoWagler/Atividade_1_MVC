# Instruções para Executar o Projeto

Este projeto utiliza o **Laravel** como framework PHP e o **Tailwind CSS** para estilização. Abaixo estão as etapas para configurar e rodar o projeto localmente.

## Pré-requisitos

Certifique-se de ter os seguintes softwares instalados na sua máquina:

- **PHP** (versão 8.0 ou superior)
- **Composer** (gerenciador de dependências do PHP)
- **Node.js** (versão 14 ou superior)
- **NPM** (gerenciador de pacotes do Node.js)

Se não tiver essas ferramentas instaladas, consulte a documentação oficial para instalação:

- [Instalar PHP](https://www.php.net/manual/pt_BR/install.php)
- [Instalar Composer](https://getcomposer.org/doc/00-intro.md)
- [Instalar Node.js](https://nodejs.org/)

## 1. Clonar o Repositório

Se você ainda não clonou o repositório, faça isso com o seguinte comando:

```bash
git clone https://github.com/BrunoWagler/Atividade_1_MVC.git
Entre na pasta do projeto:

bash
Copiar
cd nome-do-repositorio

2. Instalar as Dependências do Laravel
O primeiro passo é instalar as dependências do Laravel utilizando o Composer:

bash
Copiar
composer install
Isso instalará todas as dependências necessárias para o Laravel funcionar corretamente.

3. Configurar o Ambiente
O Laravel utiliza um arquivo .env para armazenar variáveis de ambiente. Copie o arquivo .env.example para um novo arquivo .env:

bash
Copiar
cp .env.example .env
Abra o arquivo .env e configure as credenciais do banco de dados:

env
Copiar
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha

4. Gerar a Chave de Aplicação
Laravel requer uma chave de aplicação única para funcionar. Para gerar a chave, execute o comando:

bash
Copiar
php artisan key:generate
Isso atualizará o arquivo .env com a chave de aplicação.

5. Rodar as Migrações do Banco de Dados
Se o projeto utilizar banco de dados e tiver migrações configuradas, rode o seguinte comando para criar as tabelas:

bash
Copiar
php artisan migrate
6. Instalar as Dependências do Tailwind CSS

6.1. Instalar as Dependências com NPM
Instale as dependências do Tailwind CSS e outras necessárias para a compilação:

bash
Copiar
npm install -D tailwindcss postcss autoprefixer

6.2. Inicializar o Tailwind CSS
Agora, inicialize a configuração do Tailwind CSS com o comando:

bash
Copiar
npx tailwindcss init
Isso criará um arquivo chamado tailwind.config.js.

6.3. Criar o Arquivo CSS
Crie o arquivo resources/css/app.css (se ainda não existir) e adicione as diretivas do Tailwind:

css
Copiar
@tailwind base;
@tailwind components;
@tailwind utilities;
6.4. Configurar o PostCSS
Crie o arquivo postcss.config.js na raiz do projeto com a seguinte configuração:

javascript
Copiar
module.exports = {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
}
6.5. Configurar o Webpack
Se você estiver usando o Laravel Mix (gerenciador de ativos do Laravel), abra o arquivo webpack.mix.js e adicione a seguinte configuração:

javascript
Copiar
let mix = require('laravel-mix');

mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);

7. Compilar o CSS com o Tailwind
Agora que o Tailwind está configurado, compile o CSS usando o comando:

bash
Copiar
npm run dev
Se você deseja compilar o CSS para produção, utilize:

bash
Copiar
npm run prod
Isso criará o arquivo CSS final em public/css/app.css.

8. Iniciar o Servidor Local
Agora, tudo está pronto para rodar o servidor de desenvolvimento do Laravel. Execute o seguinte comando:

bash
Copiar
php artisan serve
O servidor estará disponível em http://localhost:8000.

9. Acessar a Aplicação
Abra o navegador e vá até o endereço http://localhost:8000 para ver a aplicação em execução. O CSS do Tailwind deve ser carregado corretamente, aplicando as estilizações no layout da sua aplicação.

Comandos Importantes
Rodar o servidor Laravel: php artisan serve

Rodar as migrações do banco de dados: php artisan migrate

Instalar as dependências do Laravel: composer install

Instalar as dependências do Tailwind: npm install

Compilar o CSS com Tailwind: npm run dev ou npm run prod

Contribuindo
