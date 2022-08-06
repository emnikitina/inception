FROM debian:buster

RUN apt-get update

RUN apt-get install wget -y

RUN wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php &&\
	mv adminer-4.8.1.php adminer.php

CMD sleep 15 && cp adminer.php /var/www/html/wordpress/