FROM debian:buster

#instal services
RUN apt-get update -y &&\
    apt-get install -y php7.3 php-mysql php-fpm php-pdo php-gd php-cli php-mbstring php-xml mariadb-client && \
    rm -rf /var/lib/apt/lists/*

RUN apt-get update -y && \
    apt-get install -y wget && \
    wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp && \
    apt remove -y wget && \
    rm -rf /var/lib/apt/lists/*

RUN wp core download --path=/usr/src/wordpress --allow-root 
COPY www.conf /etc/php/7.3/fpm/pool.d/www.conf
RUN chmod 777 /etc/php/7.3/fpm/pool.d/www.conf


#to copy
COPY ./start_wp.sh /
# COPY wp-config.php /var/www/wordpress/
RUN chmod +x start_wp.sh /etc/php/7.3/fpm/pool.d/www.conf

VOLUME ["/var/www/"]

#to start
EXPOSE 9000
ENTRYPOINT ["bash", "start_wp.sh"]
