FROM debian:buster

#install service
RUN apt-get update -y &&\
	apt-get -y install nginx openssl

#setting ssl certificate
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/private/ssl_odomenic.key \
    -out /etc/ssl/certs/ssl_odomenic.crt \
    -subj "/C=RU/ST=Moscow/L=Moscow/O=school21/OU=school21/CN=odomenic.42.fr/"

RUN mkdir -p /run/nginx
RUN mkdir -p /var/www/site/
COPY ./nginx.conf /etc/nginx/conf.d/default.conf
COPY index.html /
RUN cp index.html /var/www/site/
RUN chmod 777 /var/www/site/index.html


CMD ["nginx", "-g", "daemon off;"]
