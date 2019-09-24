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
	sudo apt install php-xml php-mbstring

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

# Configura todos os gits do colaboradores do projeto
git-filipe:
	git config --global user.name "filipeandrev"
	git config --global user.email "filipe.andrev7@gmail.com"
	@git config --global user.name
	@git config --global user.email

git-morgana:
	git config --global user.name "k0rgana"
	git config --global user.email "anagrom1999@gmail.com"
	@git config --global user.name
	@git config --global user.email

git-leonardo:
	git config --global user.name "leonardolfp"
	git config --global user.email "leonardolfp15@gmail.com"
	@git config --global user.name
	@git config --global user.email

git-guilherme:
	git config --global user.name "GuilhermeH6"
	git config --global user.email "guilhermeholanda870@gmail.com"
	@git config --global user.name
	@git config --global user.email

git-jhonny:
	git config --global user.name "JonissonGomes"
	git config --global user.email "joni_gomes@hotmail.com"
	@git config --global user.name
	@git config --global user.email

git-alisson:
	git config --global user.name "AlissonThyago"
	git config --global user.email "alissonthiagoamorim@gmail.com"
	@git config --global user.name
	@git config --global user.email

git-perola:
	git config --global user.name "perolasanja"
	git config --global user.email "peroladiniz2013@gmail.com"
	@git config --global user.name
	@git config --global user.email

git-juciele:
	git config --global user.name "jucielefernandes"
	git config --global user.email "juciele.bol@gmail.com"
	@git config --global user.name
	@git config --global user.email

git-izidorio:
	git config --global user.name "lipeh777"
	git config --global user.email "fizidorio7@gmail.com"
	@git config --global user.name
	@git config --global user.email

git-adely:
	git config --global user.name "adelyAlexandr"
	git config --global user.email "adely09alexandra@gmail.com"
	@git config --global user.name
	@git config --global user.email

