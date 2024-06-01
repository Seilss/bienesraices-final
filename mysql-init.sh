#!/bin/bash
set -e

# Iniciar MySQL
service mysql start

# Esperar a que MySQL inicie
until mysqladmin ping &>/dev/null; do
  echo -n "."; sleep 1
done

# Configurar MySQL
mysql -e "CREATE USER 'root'@'%' IDENTIFIED BY 'root';"
mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' WITH GRANT OPTION;"
mysql -e "FLUSH PRIVILEGES;"
mysql -e "CREATE DATABASE exampledb;"
