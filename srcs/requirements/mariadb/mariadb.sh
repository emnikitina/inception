chown -R mysql:mysql /var/lib/mysql

service mysql start
#mysql -u root mysql < create_bd.sql

mysql -u root -e "CREATE DATABASE IF NOT EXISTS $DB_NAME DEFAULT CHARACTER SET utf8;"
mysql -u root -e "CREATE USER '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD';"
mysql -u root -e "GRANT ALL PRIVILEGES ON $DB_NAME.* TO $DB_USER@'%'"
mysql -u root -e "FLUSH PRIVILEGES;"

mysqladmin -u root password $ROOT_PASSWORD
service mysql stop

/usr/bin/mysqld_safe