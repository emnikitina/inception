FROM debian:buster

RUN apt-get update -y &&\
	apt-get install wget -y

RUN mkdir -p /var/www/html/
RUN wget "http://www.adminer.org/latest.php" -O /var/www/html/adminer.php

CMD ["bash"]
