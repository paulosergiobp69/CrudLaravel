---- estudos laravel 5.3
instalando
# composer create-project --prefer-dist laravel/laravel blog


para iniciar o laravel

C:\code\introducao_laravel\cursolaravel>php artisan serve
Laravel development server started on http://127.0.0.1:8000/

--- help de comandos
C:\code\introducao_laravel\cursolaravel>php artisan
C:\code\introducao_laravel\cursolaravel>php artisan help key:generate

-- criando controller
C:\code\introducao_laravel\cursolaravel>php artisan make:controller ContatoController

-- cria variavel
 @yield('titulo')
 
--- model
C:\code\introducao_laravel\cursolaravel>php artisan make:model Contato -m

--- criar tabelas definidas
C:\code\introducao_laravel\cursolaravel>php artisan migrate


--- alterando estrutura de tabelas: nomes de campos
--- https://blog.especializati.com.br/alterar-tabela-migrations-laravel-sem-perder-dados/
1.1: Apaga todos registros e recria tabela, perde todos os dados
	php artisan migrate:refresh (nao utilizar)
1.2: esqueci de adicionar a coluna
php artisan make:migration add_name_field_table_name --table=users
	
--- excluir tabelas
C:\code\introducao_laravel\cursolaravel>php artisan migrate

--- adicionar registro em tabelas
C:\code\introducao_laravel\cursolaravel>php artisan tinker

--- verifica se tem registros
>>> App\Contato::all();

--- cria objeto
>>> $contato = new App\Contato();

-- insere registro (campo a campo)
>>> $contato->nome = "Paulo";
>>> $contato->tel = "41 988882279";
>>> $contato->email = "paulo@gmail.com";

--- busca registro
>>> $con = App\Contato::find(1);

--- excluir registro
>>> $con->delete();

1. Passos criacao de Crud
1.1 criar tabela
	C:\code\introducao_laravel\cursolaravel>php artisan make:model Curso -m
	define campos no:2020_05_22_130850_create_cursos_table.php
	C:\code\introducao_laravel\cursolaravel>php artisan migrate
	
	--- cria a estrutura de controller
	C:\code\introducao_laravel\cursolaravel>php artisan make:controller Admin\CursoController
	
1.2 Criacao de Rotas para o crud



--- criando seed, popuplando dados em tabelas para testes, no caso usuario
>> C:\code\introducao_laravel\cursolaravel>php artisan make:seed UsuarioSeeder

--- apos configurar na pasta: database\seeds,or arquivos que desejar
--- rodar para todos os arquivos configurados
>> C:\code\introducao_laravel\cursolaravel>php artisan db:seed 

--- rodar apenas para a tabela que desejar, no caso usuarios
>> C:\code\introducao_laravel\cursolaravel>php artisan db:seed --class=


-- sistema de login: o laravel possui a forma automatica onde é criado todas as views e rotas para o login, 
-- mas o laravel utiliza o bootstrap como layout
>> C:\code\introducao_laravel\cursolaravel>php artisan make:auth  # rotas básicas de login e registro do usuario



