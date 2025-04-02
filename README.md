1. Inicializar um repositório Git e Criar o Projeto Laravel
bash
Copiar
# Inicializando o repositório Git
git init

# Criando um novo projeto Laravel
composer create-project --prefer-dist laravel/laravel nome-do-projeto

# Entrar no diretório do projeto
cd nome-do-projeto

# Adicionar os arquivos ao Git
git add .

# Realizar o primeiro commit
git commit -m "Inicializar projeto Laravel"
2. Configurar o Ambiente e Variáveis do Laravel
bash
Copiar
# Copiar o arquivo de exemplo do .env
cp .env.example .env

# Gerar a chave de aplicação do Laravel
php artisan key:generate

# Realizar commit das configurações do .env
git add .env
git commit -m "Configurar arquivo .env e gerar chave de aplicação"
3. Configurar o Banco de Dados (no .env)
bash
Copiar
# Abrir o arquivo .env e configurar o banco de dados
# (não é um comando, basta editar o arquivo .env manualmente)
# Por exemplo, configurar:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=nome_do_banco
# DB_USERNAME=usuario
# DB_PASSWORD=senha

# Realizar commit após as configurações do banco
git add .env
git commit -m "Configurar conexão com o banco de dados"
4. Realizar Migrações do Banco de Dados
bash
Copiar
# Rodar as migrações para criar as tabelas
php artisan migrate

# Realizar commit (caso necessário) das migrações ou outras mudanças
git add .
git commit -m "Rodar migrações do banco de dados"
5. Iniciar o Servidor de Desenvolvimento
bash
Copiar
# Rodar o servidor Laravel localmente
php artisan serve

# Realizar commit se houver qualquer alteração de configuração
git add .
git commit -m "Iniciar servidor Laravel
