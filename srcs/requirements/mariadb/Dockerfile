FROM debian:buster

#install service
RUN apt update &&\
    apt add mariadb-server -y &&\
    sed -i 's/^bind-address/#&/' /etc/mysql/mariadb.conf.d/50-server.cnf &&\
    rm -rf /var/lib/apt/lists/*;

COPY ./mariadb.sh /
RUN chmod +x mariadb.sh

VOLUME ["/var/lib/mysql"]

EXPOSE 3306

ENTRYPOINT ["bash", "/mariadb.sh"]
