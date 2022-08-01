FROM debian:buster

#install service
RUN apt update &&\
	apt install mariadb-server -y &&\
	sed -i 's/^bind-address/#&/' /etc/mysql/mariadb.conf.d/50-server.cnf

ARG ROOT_PASSWORD DB_NAME DB_USER DB_PASSWORD
# COPY mariadb.sh /
# RUN chmod +x mariadb.sh

RUN service mysql start && mysql -u root -e "CREATE DATABASE IF NOT EXISTS $DB_NAME DEFAULT CHARACTER SET utf8; CREATE USER $DB_USER@'%' IDENTIFIED BY '$DB_PASSWORD'; \
    GRANT ALL PRIVILEGES ON $DB_NAME.* TO $DB_USER@'%'; FLUSH PRIVILEGES;" && mysqladmin -u root password $ROOT_PASSWORD


VOLUME ["/var/lib/mysql"]

EXPOSE 3306

CMD ["mysqld"]
# ENTRYPOINT ["bash", "/mariadb.sh"]
