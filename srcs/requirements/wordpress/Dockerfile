FROM debian:buster

#instal services
RUN apt-get update -y &&\
    apt-get install -y php7-fpm php7-mbstring php7-common php7-iconv php7-json php7-gd php7-curl php7-xml php7-pdo php7-pdo_mysql mariadb-client &&\
    rm -rf /var/lib/apt/lists/*

#setting wordpress
RUN wget http://wordpress.org/latest.tar.gz
RUN tar -C /var/www/ -xzvf latest.tar.gz
RUN rm latest.tar.gz
COPY ./wp-config.php /var/www/wordpress/
RUN chmod -R 777 /var/www/wordpress
RUN chmod -R 777 /var/www


#to copy
COPY ./start_wp.sh /
RUN chmod +x start_wp.sh

#what path set to volume ??
VOLUME [ "??" ]


#to start
EXPOSE 9000
ENTRYPOINT sh start_wp.sh
