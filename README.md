# Comandos usados no Projeto #

## Listar Rotas ##

    php artisan route:list

## Criar Rota ##

    php artisan make:controller ExempleController

## LocalHost do PHP ##

    php artisan serve

## Limpar o Cache da View Compiladas ##
    
    php artisan view:clean

## Criação de Models ##
    
    php artisan make:model NomeModel
<!-- Pode ser adicionado o "-m" para poder fazer migração par ao banco de dados -->
## Criar Arquivo de Migração para o Banco de Dados ##

    php artisan migrate

## Criar Artivo de Migração após Model ser criado ##

    php artisan make:migration create_nome_model_table 

## Verificação se a Extensão está habilitada no PHP.ini ##

     php -r "var_dump(extension_loaded( 'nome_extension'));

## Comando para Criar Migrações especiais ##

    php artisan make:migration nome_atualiza_tables
    
## Executa o metodo Down de uma Migração ##

    php artisan migrate:rollback
    or
    php artisan migrate:rollback --step=2  

## Exclui todas as tabelas do banco de dados e recria as Migration ##

    php artisan migrate:fresh



