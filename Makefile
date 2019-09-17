# bd-conf:
# 	@echo "exubaca"

# Copia os arquivos ocultos no .git-ignore
start:
	@cp .env.example .env
	@make bd-conf
	@php artisan key:generate

# Atualiza o sistema
atualizar-maquina:
	sudo apt-get update && sudo apt-get -y upgrade && sudo apt-get -y dist-upgrade 

# Prepara o ambiente do desenvolvedor
ambiente-dev: atualizar-maquina
	sudo apt-get install php7.2-cli libapache2-mod-php7.2 php7.2-mysql php7.2-curl php-memcached php7.2-dev php7.2-sqlite3 php7.2-mbstring php7.2-gd php7.2-json
	sudo apt-get install composer

# Prepara o ambiente do servidor(SÓ PARA O BANCO)
ambiente-server: atualizar-maquina
	sudo apt-get install mysql-server
	sudo mysql_secure_installation
	sudo apt-get -y install apache2

# Configuração do DB
BD:
	@mysql -u root -p --execute="drop database if exists ComuniQ; create database ComuniQ; drop user if exists master; CREATE USER 'master' IDENTIFIED BY 'origin'; GRANT ALL PRIVILEGES ON ComuniQ . * TO master;"
	php artisan migrate:refresh --seed

# Iniciar o servidor 
start-serve: start
	php artisan serve
